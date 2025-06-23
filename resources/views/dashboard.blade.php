<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Sisfo Werving Satsiber TNI</title>
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
                    <li class="pc-item">
                        <a href="{{ route('rekrutmen-event.index') }}" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-users"></i></span>
                            <span class="pc-mtext">Rekrutmen</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('werving.index') }}" class="pc-link">
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
                            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
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
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="pc-head-link bg-transparent"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="ti ti-power"></i>
                                            <span>Logout</span>
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
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-primary">Total Werving</h6>
                            <h2 class="mb-3 text-primary">{{ $totalWervingCount ?? 0 }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-warning">Werving Berjalan</h6>
                            <h2 class="mb-3 text-warning">{{ $wervingBerjalanCount ?? 0 }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-success">Werving Selesai</h6>
                            <h2 class="mb-3 text-success">{{ $wervingSelesaiCount ?? 0 }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-12">
                    <h5 class="mb-3">Werving Berjalan</h5>
                    <div class="row">
                        @forelse ($wervingBerjalanEvents as $event)
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ $event->nama_rekrutmen }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <a href="#" class="btn w-100 btn-sm btn-warning mb-2">Laporan Perorangan</a>
                                        <a href="#" class="btn w-100 btn-sm btn-primary">Laporan Rekapitulasi</a>
                                    </div>
                                    <div class="card-footer">
                                        <p>
                                            <i class="ti ti-calendar-time"></i> {{ \Carbon\Carbon::parse($event->tanggal_rekrutmen)->translatedFormat('d F Y') }} <br>
                                            <i class="ti ti-location"></i> {{ $event->lokasi_rekrutmen }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center text-muted">Tidak ada event Werving yang sedang berjalan.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="col-md-12 col-xl-12">
                    <h5 class="mb-3">Data Werving Keseluruhan</h5>
                    <div class="card tbl-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>NAMA REKRUTMEN</th>
                                            <th>TANGGAL REKRUTMEN</th>
                                            <th>LOKASI REKRUTMEN</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($allWervingEvents as $event) {{-- LOOP DATA EVENT REKRUTMEN DI SINI --}}
                                            <tr>
                                                <td><a href="{{ route('rekrutmen-event.show', $event->id) }}" class="text-muted">{{ $loop->iteration }}</a></td>
                                                <td>{{ $event->nama_rekrutmen }}</td>
                                                <td>{{ \Carbon\Carbon::parse($event->tanggal_rekrutmen)->translatedFormat('d F Y') }}</td>
                                                <td>{{ $event->lokasi_rekrutmen }}</td>
                                                <td>
                                                    @if($event->status == 'berjalan')
                                                        <span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Berjalan</span>
                                                    @else
                                                        <span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Selesai</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data werving keseluruhan.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            {{-- Jika Anda menambahkan pagination di controller untuk $allWervingEvents, tampilkan di sini --}}
                            {{-- <div class="mt-4">
                                {{ $allWervingEvents->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col-sm my-1">
                    <p class="m-0">Copyright © <a href="#" class="text-white">Satsiber TNI 2025</a></p>
                </div>
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
        font_change("Public-Sans");</script>

</body>
</html>