<!DOCTYPE html>
<html lang="en">
<head>
    <title>Werving | Sisfo Werving Satsiber TNI</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables.bootstrap5.min.css') }}">
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
                            <span class="pc-micon"><i class="ti ti-calendar-event"></i></span> {{-- Icon untuk event --}}
                            <span class="pc-mtext">Event Rekrutmen</span>
                        </a>
                    </li>
                    <li class="pc-item active"> {{-- Menandai menu aktif --}}
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
                        <a href="#" class="pc-link"> {{-- Ubah sesuai route Laporan Perorangan Anda --}}
                            <span class="pc-micon"><i class="ti ti-file"></i></span>
                            <span class="pc-mtext">Perorangan</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="#" class="pc-link"> {{-- Ganti dengan route Rekapitulasi jika sudah ada --}}
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
                                <h5 class="m-b-10">Werving</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Taruna Akmil</h4> {{-- Ini bisa jadi judul event rekrutmen --}}
                        </div>
                        <div class="card-body">
                            {{-- Link ini perlu disesuaikan dengan rute laporan perorangan/rekapitulasi --}}
                            <a href="#" class="btn w-100 btn-sm btn-warning mb-2">Laporan Perorangan</a>
                            <a href="#" class="btn w-100 btn-sm btn-primary">Laporan Rekapitulasi</a>
                        </div>
                        <div class="card-footer">
                            <p>
                                <i class="ti ti-calendar-time"></i> 22 Juni 2024 <br> {{-- Tanggal Event --}}
                                <i class="ti ti-location"></i> Magelang, Jawa Tengah {{-- Lokasi Event --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <h5 class="mb-3">Laporan Perorangan</h5>
                    <div class="card">
                        <div class="card-body">
                            {{-- Pesan Sukses atau Error --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="dt-responsive">
                                <div id="dom-jqry_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dom-jqry_length">
                                                <label>Show
                                                    <select name="dom-jqry_length" aria-controls="dom-jqry"
                                                        class="form-select form-select-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    entries
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="dom-jqry_filter"
                                                class="dataTables_filter d-flex align-items-center justify-content-end gap-2">
                                                <label class="mb-0 me-2" for="searchInput">Search:</label>
                                                <input id="searchInput" type="search"
                                                    class="form-control form-control-sm" placeholder=""
                                                    aria-controls="dom-jqry">
                                                <a href="#" class="btn btn-sm btn-primary"> {{-- Ubah ini jika ada rute tambah laporan perorangan --}}
                                                    + tambah laporan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row dt-row">
                                        <div class="col-sm-12">
                                            <table id="dom-jqry"
                                                class="table table-striped table-bordered nowrap dataTable"
                                                aria-describedby="dom-jqry_info">
                                                <thead>
                                                    <tr>
                                                        <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending">No</th>
                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Nama</th>
                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Jenis Rekrutmen</th>
                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($pesertaWerving as $peserta)
                                                        <tr class="odd">
                                                            <td class="sorting_1">{{ $loop->iteration }}</td>
                                                            <td>{{ $peserta->nama_lengkap }}</td>
                                                            {{-- Asumsi Anda memiliki relasi 'rekrutmenEvent' di model CalonTaruna --}}
                                                            {{-- Jika tidak, Anda perlu menambahkan foreign key rekrutmen_event_id ke tabel calon_taruna --}}
                                                            {{-- dan mendefinisikan relasi belongsTo di model CalonTaruna --}}
                                                            <td>{{ $peserta->rekrutmenEvent->nama_rekrutmen ?? 'N/A' }}</td>
                                                            <td>
                                                                {{-- Link Detail Laporan Perorangan --}}
                                                                <a href="#" class="btn btn-info btn-sm">detail</a> {{-- Ganti dengan route detail laporan perorangan --}}
                                                                {{-- Tambahan aksi seperti Edit Profiling, Edit Forensik --}}
                                                                <a href="#" class="btn btn-warning btn-sm">Edit Profiling</a>
                                                                <a href="#" class="btn btn-dark btn-sm">Edit Forensik</a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center">Tidak ada data peserta werving.</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">No</th>
                                                        <th rowspan="1" colspan="1">Nama</th>
                                                        <th rowspan="1" colspan="1">Jenis Rekrutmen</th>
                                                        <th rowspan="1" colspan="1">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="dom-jqry_info" role="status"
                                                aria-live="polite">Showing {{ $pesertaWerving->firstItem() }} to {{ $pesertaWerving->lastItem() }} of {{ $pesertaWerving->total() }} entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="dom-jqry_paginate">
                                                {{ $pesertaWerving->links('pagination::bootstrap-5') }} {{-- Menggunakan pagination Laravel --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    {{-- <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script> --}}
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/data-basic-init.js') }}"></script> {{-- Asumsi ini menginisialisasi DataTables --}}


    <script>layout_change('light');</script>
    <script>change_box_container('false');</script>
    <script>layout_rtl_change('false');</script>
    <script>preset_change("preset-1");</script>
    <script>font_change("Public-Sans");</script>

</body>
</html>