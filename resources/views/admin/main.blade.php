<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Full Width | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href={{asset("../src/assets/img/favicon.ico")}}/>
    <link href={{asset("../layouts/vertical-dark-menu/css/light/loader.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/dark/loader.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("../layouts/vertical-dark-menu/loader.js")}}></script>

    <link href={{asset("https://fonts.googleapis.com/css?family=Nunito:400,600,700")}} rel="stylesheet">
    <link href={{asset("../src/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/light/plugins.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/dark/plugins.css")}} rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/light/elements/alert.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/dark/elements/alert.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/filepond.min.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/FilePondPluginImagePreview.min.css")}}>

    <link href={{asset("../src/assets/css/light/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../src/plugins/css/light/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css" />

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../src/plugins/css/dark/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("https://code.jquery.com/jquery-3.5.1.min.js")}}></script>
    <script src={{asset("https://code.jquery.com/jquery-3.6.0.min.js")}}></script>
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/light/editors/quill/quill.snow.css")}}>

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/dark/editors/quill/quill.snow.css")}}>
    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js")}}></script>

</head>
<body class="layout-boxed">
@include('admin.navbar')
<div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>






@include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">

                        @if ($errors->any())

                            <div class="alert alert-danger mt-1 mb-1">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <br>

                        <div class="widget-header"></div>

                        <div class="widget-content widget-content-area">








                            @yield('editcards')
                            @yield('allcards')





                            @yield('cards')

















                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
</script>
<script src={{asset("../src/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("../src/plugins/src/mousetrap/mousetrap.min.js")}}></script>
<script src={{asset("../layouts/vertical-dark-menu/app.js")}}></script>



<script src={{asset("../src/assets/js/scrollspyNav.js")}}></script>
<script src={{asset("../src/plugins/src/editors/quill/quill.js")}}></script>
<script> quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline']
                ]
            },
            placeholder: 'Введите текст',
            theme: 'snow'
        });
        $(document).ready(function(){
            $("#save").on("submit", function () {
                let value = $('.ql-editor').html();
                $(this).append("<textarea name='more' style='display:none'>"+value+"</textarea>");
            });
        });
</script>

<script>
        $(document).ready(function(){
            let count = 1;
            dynamic_field(count);
            function dynamic_field(number)
            {
                html = '<tr>';
                html += '<td><input type="text" name="text[]" class="form-control" /></td>';
                if(number >= 1)
                {
                    html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td>';
                    $('tbody').append(html);
                }

            }
            $(document).on('click', '#add', function(){
                count++;
                dynamic_field(count);
            });
            $(document).on('click', '.remove', function(){
                count--;
                $(this).closest("tr").remove();
            });
            $('#dynamic_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:'{{ route("admin.insert") }}',
                    method:'post',
                    data:$(this).serialize(),
                    dataType:'json',
                    beforeSend:function(){
                        $('#save').attr('disabled','disabled');
                    },
                    success:function(data)
                    {
                        if(data.error)
                        {
                            var error_html = '';
                            for(var count = 0; count < data.error.length; count++)
                            {
                                error_html += '<p>'+data.error[count]+'</p>';
                            }
                            $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                        }
                        else
                        {
                            dynamic_field(1);
                            $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                        }
                        $('#save').attr('disabled', false);
                    }
                })
            });

        });



    </script>
</body>
</html>
