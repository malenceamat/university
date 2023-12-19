<header class="header navbar navbar-expand-lg position-absolute navbar-sticky navbar-stuck">
    <div class="container px-3">
        <a href="/" class="navbar-brand pe-3">
            <img src={{asset("assets/img/svg/inverse.svg")}} width="47" alt="digital.mai.ru"
                 style="background-color: black;border-radius: 10px">
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Меню</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#start" class="nav-link" data-scroll>О цифровой кафедре</a>
                    </li>
                    <li class="nav-item">
                        <a href="#forwhom" class="nav-link" data-scroll>Для кого</a>
                    </li>
                    <li class="nav-item">
                        <a href="#programs" class="nav-link" data-scroll>Программы</a>
                    </li>
                    <li class="nav-item">
                        <a href="#stages" class="nav-link" data-scroll>Этапы обучения</a>
                    </li>
                    <li class="nav-item">
                        <a href="#partners" class="nav-link" data-scroll>Партнёры</a>
                    </li>
                </ul>
            </div>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @foreach($banner as $data)
            <a href="{{$data['urlsecondbutton']}}" class="btn btn-primary fs-sm rounded d-none d-lg-inline-flex"
               target="_blank" rel="noopener">
                &nbsp;{{$data['secondbutton']}}
            </a>
        @endforeach
    </div>
</header>
