<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sisfo Werving Satsiber TNI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

    <style>
        body {
            background-image: url('{{ asset('assets/images/bg-login.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf <div class="card my-5">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center mb-4">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                                    style="width: 60px; height: auto; margin-bottom: 10px;">
                                <h3 class="mb-0"><b>Login Sisfo Werving Satsiber TNI</b></h3>
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Alamat Email" required autofocus autocomplete="username">
                                @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex mt-1 justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="remember_me"
                                        name="remember">
                                    <label class="form-check-label text-muted"
                                        for="remember_me">{{ __('Tetap Login') }}</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="text-secondary f-w-400" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="auth-footer row">
                    <div class="col my-1 text-white">
                        <p class="m-0">Copyright © <a href="#" class="text-white">Satsiber TNI 2025</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change("preset-1");
    </script>
    <script>
        font_change("Public-Sans");
    </script>

</body>
</html>