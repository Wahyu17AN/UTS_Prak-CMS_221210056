<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- SweetAlert CSS -->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/public/css/styles.css') }}"rel="stylesheet"/>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @if(! is_null ($navbar))
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{ $navbar->url }}" target="_blank">
                        <span class="Logo"></span>
                        <span class="fw-bolder text-primary">
                            <img class="profile-img" src="/images/navbar/{{ $navbar->image }}" width="45px" alt="..." />{{ $navbar->title_logo}}</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route ('home_public') }}">{{ $navbar->title_1 }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route ('profile_public') }}">{{ $navbar->title_2 }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route ('project_public') }}">{{ $navbar->title_3 }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route ('contact_public') }}">{{ $navbar->title_4 }}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @else
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="https://www.mercubuana-yogya.ac.id">
                        <span class="Logo"></span>
                        <span class="fw-bolder text-primary">
                            <img class="profile-img" src="{{ asset('assets/public/assets/cropped-Logomakr_9Tuac7-1-300x300.png.svg') }} " width="45px" alt="..." />UMBY</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route ('home_public') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route ('profile_public') }}">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route ('project_public') }}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route ('contact_public') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @endif
        @yield('content')
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    @if(! is_null ($title_footer))
                    <div class="col-auto"><div class="small m-0">{{ $title_footer->title }}</div></div>
                    @else
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    @endif
                    <div class="col-auto">
                        @foreach($footers as $ft)
                            <a class="small" href="{{ $ft->url }}" target="_blank">{{ $ft->name }}</a><span class="mx-1">&middot;</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/public/js/scripts.js') }}"></script>
        <!-- SweetAlert JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
