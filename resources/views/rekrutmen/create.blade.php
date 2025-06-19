<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Event Rekrutmen | Sisfo Werving Satsiber TNI</title>
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

</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{ route('dashboard') }}" class="b-brand text-primary">
                    <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item">
                        <a href="{{ route('dashboard') }}" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Data Master</label>
                        <i class="ti ti-dashboard"></i>
                    </li>
                    <li class="pc-item active">
                        <a href="{{ route('rekrutmen-event.index') }}" class="pc-link"> {{-- LINK KE DAFTAR EVENT REKRUTMEN --}}
                            <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
                            <span class="pc-mtext">Rekrutmen</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="#" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-report-analytics"></i></span>
                            <span class="pc-mtext">Werving</span>
                        </a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Report</label>
                        <i class="ti ti-news"></i>
                    </li>
                    <li class="pc-item">
                        <a href="#" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-file"></i></span>
                            <span class="pc-mtext">Perorangan</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="#" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-file-horizontal"></i></span>
                            <span class="pc-mtext">Rekapitulasi</span>
                        </a>
                    </li>

                    {{-- Contoh: Menu khusus Superadmin --}}
                    @if (Auth::check() && Auth::user()->role === 'superadmin')
                        <li class="pc-item pc-caption">
                            <label>Pengaturan Superadmin</label>
                            <i class="ti ti-settings"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ route('superadmin.settings') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-crown"></i></span>
                                <span class="pc-mtext">Pengaturan Sistem</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <header class="pc-header">
        <div class="header-wrapper">
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none">
                        <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                        </a>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image"
                                class="user-avtar">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex mb-1">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image"
                                            class="user-avtar wid-35">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                                        <span>Role {{ Str::ucfirst(Auth::user()->role) }}</span>
                                    </div>
                                    <form method="POST" action="{{ route('logout') }}" class="inline-block">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="pc-head-link bg-transparent"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="ti ti-power text-danger"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="drp-t1" data-bs-toggle="tab"
                                        data-bs-target="#drp-tab-1" type="button" role="tab"
                                        aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i>
                                        Profile</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="mysrpTabContent">
                                <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel"
                                    aria-labelledby="drp-t1" tabindex="0">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                        <i class="ti ti-edit-circle"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="ti ti-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Rekrutmen</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('rekrutmen-event.index') }}">Rekrutmen</a></li> 
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Tambah Rekrutmen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>Form Input Tambah Event Rekrutmen </h5>
                        </div>
                        <form method="POST" action="{{ route('rekrutmen-event.store') }}"> {{-- ACTION KE CONTROLLER STORE --}}
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label class="form-label" for="nama_rekrutmen">Nama Rekrutmen</label>
                                    <input type="text" class="form-control @error('nama_rekrutmen') is-invalid @enderror"
                                           id="nama_rekrutmen" name="nama_rekrutmen" value="{{ old('nama_rekrutmen') }}"
                                           placeholder="Masukkan Nama Rekrutmen" required>
                                    @error('nama_rekrutmen')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="tanggal_rekrutmen">Tanggal Rekrutmen</label>
                                    <input type="date" class="form-control @error('tanggal_rekrutmen') is-invalid @enderror"
                                           id="tanggal_rekrutmen" name="tanggal_rekrutmen" value="{{ old('tanggal_rekrutmen') }}"
                                           required>
                                    @error('tanggal_rekrutmen')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="lokasi_rekrutmen">Lokasi Rekrutmen</label>
                                    <input type="text" class="form-control @error('lokasi_rekrutmen') is-invalid @enderror"
                                           id="lokasi_rekrutmen" name="lokasi_rekrutmen" value="{{ old('lokasi_rekrutmen') }}"
                                           placeholder="Masukkan Lokasi Rekrutmen" required>
                                    @error('lokasi_rekrutmen')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button type="reset" class="btn btn-light">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col-sm my-1">
                    <p class="m-0">Copyright © <a href="#">Satsiber TNI 2025</a></p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>
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
            preset_change("preset-1");</script>
        <script>
            font_change("Public-Sans");
        </script>
    </body>
    </html>