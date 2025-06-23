<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Laporan Perorangan | Sisfo Werving Satsiber TNI</title>
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
        /* Sembunyikan semua langkah form secara default */
        .form-step {
            display: none;
        }

        /* Tampilkan langkah pertama secara default */
        .form-step.active {
            display: block;
        }

        /* Styles for progress indicator */
        .progress-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 0 20px;
        }

        .progress-step {
            flex-grow: 1;
            text-align: center;
            padding: 10px;
            border-bottom: 2px solid #ccc;
            color: #ccc;
            font-weight: bold;
            cursor: pointer;
        }

        .progress-step.active {
            border-color: #007bff;
            color: #007bff;
        }

        .progress-step.completed {
            border-color: #28a745;
            color: #28a745;
        }

        .progress-step:not(:last-child) {
            margin-right: 10px;
        }
    </style>
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
                            <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
                            <span class="pc-mtext">Event Rekrutmen</span>
                        </a>
                    </li>
                    <li class="pc-item active">
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
                    <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i class="ti ti-menu-2"></i></a></li>
                    <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i class="ti ti-menu-2"></i></a></li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none"><a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"></a></li>
                </ul>
            </div>
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"></a></li>
                    <li class="dropdown pc-h-item header-user-profile"><a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar"><span>{{ Auth::user()->name }}</span></a><div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown"><div class="dropdown-header"><div class="d-flex mb-1"><div class="flex-shrink-0"><img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar wid-35"></div><div class="flex-grow-1 ms-3"><h6 class="mb-1">{{ Auth::user()->name }}</h6><span>Role {{ Str::ucfirst(Auth::user()->role) }}</span></div><form method="POST" action="{{ route('logout') }}">@csrf<a href="{{ route('logout') }}" class="pc-head-link bg-transparent" onclick="event.preventDefault(); this.closest('form').submit();"><i class="ti ti-power"></i><span>Logout</span></a></form></div></div><ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist"><li class="nav-item" role="presentation"><button class="nav-link active" id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1" type="button" role="tab" aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i> Profile</button></li></ul><div class="tab-content" id="mysrpTabContent"><div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0"><a href="{{ route('profile.edit') }}" class="dropdown-item"><i class="ti ti-edit-circle"></i><span>Edit Profile</span></a><form method="POST" action="{{ route('logout') }}">@csrf<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();"><i class="ti ti-power"></i><span>Logout</span></a></form></div></div></div></li></ul></div>
        </div>
    </header>
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Laporan Perorangan</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('werving.index') }}">Werving</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Tambah Laporan Perorangan</a></li>
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
                            <h5>Form Input Laporan Perorangan
                                @isset($casis) {{-- Tampilkan nama Casis jika ada (dari parameter URL) --}}
                                    untuk Casis: <b>{{ $casis->nama_lengkap }} ({{ $casis->nomor_pendaftaran }})</b>
                                @else {{-- Tampilkan 'Baru' jika tidak ada Casis ID di URL --}}
                                    Baru
                                @endisset
                            </h5>
                        </div>
                        {{-- Action form akan berbeda tergantung apakah $casis ada atau tidak --}}
                        <form id="multi-step-form" method="POST" action="{{ route('werving.store_laporan', $casis->id ?? null) }}" enctype="multipart/form-data">
                            @csrf
                            {{-- Input tersembunyi untuk casis_id, hanya ada jika $casis tersedia --}}
                            @isset($casis)
                            <input type="hidden" name="casis_id" value="{{ $casis->id }}">
                            @endisset

                            <div class="progress-indicator" id="progress-indicator">
                                <div class="progress-step active" data-step="1"><i class="ti ti-file-text"></i></div>
                                <div class="progress-step" data-step="2"><i class="ti ti-chart-infographic"></i></div>
                                <div class="progress-step" data-step="3"><i class="ti ti-report-analytics"></i></div>
                                <div class="progress-step" data-step="4"><i class="ti ti-alert-triangle"></i></div>
                                <div class="progress-step" data-step="5"><i class="ti ti-note"></i></div>
                                <div class="progress-step" data-step="6"><i class="ti ti-file-code"></i></div>
                            </div>

                            <div class="form-step active" id="step-1">
                                <div class="card-body">
                                    <h5>I. Biodata Casis</h5>
                                    @if (!isset($casis)) {{-- Hanya tampilkan dropdown jika Casis belum dipilih (akses dari tombol global) --}}
                                    <div class="form-group mb-3">
                                        <label for="casis_id_dropdown" class="form-label">Pilih Casis</label>
                                        <select class="form-control @error('casis_id') is-invalid @enderror" id="casis_id_dropdown" name="casis_id" required>
                                            <option value="">-- Pilih Casis --</option>
                                            @foreach ($allCasis as $c)
                                                <option value="{{ $c->id }}" {{ old('casis_id') == $c->id ? 'selected' : '' }}>
                                                    {{ $c->nama_lengkap }} ({{ $c->nomor_pendaftaran }})
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('casis_id') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                    </div>
                                    @endif

                                    @if ($errors->any()) {{-- Menampilkan error validasi Laravel --}}
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap_display"
                                            placeholder="Nama Lengkap Casis" value="{{ $casis->nama_lengkap ?? '' }}" disabled> {{-- Teks ini diambil dari Casis jika ada, jika tidak kosong --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                                                    name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('tempat_lahir') }}" required>
                                                @error('tempat_lahir') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                                                    name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                                @error('tanggal_lahir') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="prodi">Prodi</label>
                                                <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi"
                                                    placeholder="Masukkan Prodi" value="{{ old('prodi') }}" required>
                                                @error('prodi') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="asal_panda">Asal Panda</label>
                                                <input type="text" class="form-control @error('asal_panda') is-invalid @enderror" id="asal_panda"
                                                    name="asal_panda" placeholder="Masukkan Asal Panda" value="{{ old('asal_panda') }}" required>
                                                @error('asal_panda') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="nomor_tk_panda">Nomor TK. Panda</label>
                                                <input type="text" class="form-control @error('nomor_tk_panda') is-invalid @enderror" id="nomor_tk_panda"
                                                    name="nomor_tk_panda" placeholder="Masukkan Nomor TK Panda" value="{{ old('nomor_tk_panda') }}" required>
                                                @error('nomor_tk_panda') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="nomor_tk_pusat">Nomor TK. Pusat</label>
                                                <input type="text" class="form-control @error('nomor_tk_pusat') is-invalid @enderror" id="nomor_tk_pusat"
                                                    name="nomor_tk_pusat" placeholder="Masukkan Nomor TK Pusat" value="{{ old('nomor_tk_pusat') }}" required>
                                                @error('nomor_tk_pusat') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="agama">Agama</label>
                                                <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama" required>
                                                    <option value="">- Pilih.. -</option>
                                                    <option value="islam" {{ old('agama') == 'islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="kristen" {{ old('agama') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                                    <option value="katolik" {{ old('agama') == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                                    <option value="hindu" {{ old('agama') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="budha" {{ old('agama') == 'budha' ? 'selected' : '' }}>Budha</option>
                                                    <option value="konghucu" {{ old('agama') == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                                                </select>
                                                @error('agama') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" required>
                                                    <option value="">- Pilih Jenis Kelamin -</option>
                                                    <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="status_perkawinan_biodata">Status Perkawinan</label>
                                        <select class="form-select @error('status_perkawinan') is-invalid @enderror" id="status_perkawinan_biodata" name="status_perkawinan" required>
                                            <option value="">- Status -</option>
                                            <option value="kawin" {{ old('status_perkawinan') == 'kawin' ? 'selected' : '' }}>Kawin</option>
                                            <option value="belum-kawin" {{ old('status_perkawinan') == 'belum-kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                        </select>
                                        @error('status_perkawinan') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="alamat_ktp">Alamat Sesuai KTP</label>
                                        <textarea class="form-control @error('alamat_ktp') is-invalid @enderror" id="alamat_ktp" name="alamat_ktp" rows="3"
                                            placeholder="Masukkan Alamat Sesuai KTP" required>{{ old('alamat_ktp') }}</textarea>
                                        @error('alamat_ktp') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="nomor_hp">Nomor HP</label>
                                                <input type="number" class="form-control @error('nomor_hp') is-invalid @enderror" id="nomor_hp" name="nomor_hp"
                                                    placeholder="Masukkan Nomor HP Aktif" value="{{ old('nomor_hp') }}" required>
                                                @error('nomor_hp') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="merk_hp">Merk/Seri HP</label>
                                                <input type="text" class="form-control @error('merk_hp') is-invalid @enderror" id="merk_hp" name="merk_hp"
                                                    placeholder="Masukkan Merk HP" value="{{ old('merk_hp') }}" required>
                                                @error('merk_hp') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Nomor IMEI</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="imei1">IMEI 1</label>
                                                <input type="number" class="form-control @error('imei1') is-invalid @enderror" id="imei1" name="imei1"
                                                    placeholder="Masukkan Nomor IMEI" value="{{ old('imei1') }}" required>
                                                @error('imei1') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="imei2">IMEI 2</label>
                                                <input type="number" class="form-control @error('imei2') is-invalid @enderror" id="imei2" name="imei2"
                                                    placeholder="Masukkan Nomor IMEI" value="{{ old('imei2') }}" required>
                                                @error('imei2') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="button" class="btn btn-primary next-step">Selanjutnya</button>
                                </div>
                            </div>

                            <div class="form-step" id="step-2">
                                <div class="card-body">
                                    <h5>II. Alamat Akun Media Sosial Casis</h5>
                                    @error('social_media_type.*') <div class="text-danger mt-1">Jenis akun media sosial wajib diisi.</div> @enderror
                                    @error('social_media_link.*') <div class="text-danger mt-1">Link/username media sosial wajib diisi.</div> @enderror

                                    <div id="social-media-container">
                                        <div class="row social-media-item mb-3">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <select class="form-select social-media-type" name="social_media_type[0]" required>
                                                        <option value="">- Pilih Jenis Akun -</option>
                                                        <option value="email" {{ old('social_media_type.0') == 'email' ? 'selected' : '' }}>Email</option>
                                                        <option value="instagram" {{ old('social_media_type.0') == 'instagram' ? 'selected' : '' }}>Instagram</option>
                                                        <option value="tiktok" {{ old('social_media_type.0') == 'tiktok' ? 'selected' : '' }}>Tiktok</option>
                                                        <option value="facebook" {{ old('social_media_type.0') == 'facebook' ? 'selected' : '' }}>Facebook</option>
                                                        <option value="youtube" {{ old('social_media_type.0') == 'youtube' ? 'selected' : '' }}>Youtube</option>
                                                        <option value="twitter" {{ old('social_media_type.0') == 'twitter' ? 'selected' : '' }}>Twitter</option>
                                                        <option value="linkedin" {{ old('social_media_type.0') == 'linkedin' ? 'selected' : '' }}>LinkedIn</option>
                                                        <option value="other" {{ old('social_media_type.0') == 'other' ? 'selected' : '' }}>Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control social-media-link"
                                                        name="social_media_link[0]" placeholder="Masukkan username / link akun" value="{{ old('social_media_link.0') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1 d-flex align-items-center">
                                                <button type="button" class="btn btn-danger btn-sm remove-social-media" style="display: none;">
                                                    <i class="ti ti-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm mt-3" id="add-social-media">
                                        <i class="ti ti-plus"></i> Tambah Akun Media Sosial
                                    </button>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary prev-step">Kembali</button>
                                    <button type="button" class="btn btn-primary next-step">Selanjutnya</button>
                                </div>
                            </div>

                            <div class="form-step" id="step-3">
                                <div class="card-body">
                                    <h5>III. Hasil Profiling Media Sosial yang ditemukan</h5>
                                    @error('profiling_media_sosial_type.*') <div class="text-danger mt-1">Jenis Media Sosial hasil profiling wajib diisi.</div> @enderror
                                    @error('hasil_screenshot.*') <div class="text-danger mt-1">Hasil Screenshot wajib diisi.</div> @enderror
                                    @error('keterangan_profiling.*') <div class="text-danger mt-1">Keterangan hasil profiling wajib diisi.</div> @enderror

                                    <div id="profiling-media-container">
                                        <div class="row profiling-media-item mb-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="profiling_media_sosial_type_0">Media Sosial</label>
                                                    <select class="form-select profiling-media-type" id="profiling_media_sosial_type_0" name="profiling_media_sosial_type[0]" required>
                                                        <option value="">- Pilih Jenis Akun -</option>
                                                        <option value="email">Email</option>
                                                        <option value="instagram">Instagram</option>
                                                        <option value="tiktok">Tiktok</option>
                                                        <option value="facebook">Facebook</option>
                                                        <option value="youtube">Youtube</option>
                                                        <option value="twitter">Twitter</option>
                                                        <option value="linkedin">LinkedIn</option>
                                                        <option value="other">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="form-label" for="hasil_screenshot_0">Hasil Screenshot</label>
                                                    <input type="file" class="form-control profiling-hasil-screenshot" id="hasil_screenshot_0" name="hasil_screenshot[0]" accept="image/*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-1 d-flex align-items-center">
                                                <button type="button" class="btn btn-danger btn-sm remove-profiling-media" style="display: none;">
                                                    <i class="ti ti-minus"></i>
                                                </button>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="keterangan_profiling_0">Keterangan</label>
                                                    <textarea class="form-control profiling-keterangan" id="keterangan_profiling_0" name="keterangan_profiling[0]" rows="3" required>{{ old('keterangan_profiling.0') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm mt-3" id="add-profiling-media">
                                        <i class="ti ti-plus"></i> Tambah Hasil Profiling
                                    </button>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary prev-step">Kembali</button>
                                    <button type="button" class="btn btn-primary next-step">Selanjutnya</button>
                                </div>
                            </div>

                            <div class="form-step" id="step-4">
                                <div class="card-body">
                                    <h5>IV. Data Pendidikan</h5>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan_terakhir"
                                            name="pendidikan_terakhir" placeholder="Contoh: SMA/SMK, S1, S2" value="{{ old('pendidikan_terakhir') }}" required>
                                        @error('pendidikan_terakhir') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="nama_institusi">Nama Institusi</label>
                                        <input type="text" class="form-control @error('nama_institusi') is-invalid @enderror" id="nama_institusi"
                                            name="nama_institusi" placeholder="Contoh: Universitas Indonesia" value="{{ old('nama_institusi') }}" required>
                                        @error('nama_institusi') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary prev-step">Kembali</button>
                                    <button type="button" class="btn btn-primary next-step">Selanjutnya</button>
                                </div>
                            </div>

                            <div class="form-step" id="step-5">
                                <div class="card-body">
                                    <h5>V. Catatan Tambahan</h5>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="catatan">Catatan</label>
                                        <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="5"
                                            placeholder="Masukkan catatan atau keterangan tambahan (opsional)">{{ old('catatan') }}</textarea>
                                        @error('catatan') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary prev-step">Kembali</button>
                                    <button type="button" class="btn btn-primary next-step">Selanjutnya</button>
                                </div>
                            </div>

                            <div class="form-step" id="step-6">
                                <div class="card-body">
                                    <h5>VI. Selesai - Review Data</h5>
                                    <p>Mohon periksa kembali data yang telah Anda masukkan.</p>
                                    <div id="review-data"></div>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary prev-step">Kembali</button>
                                    <button type="submit" class="btn btn-success">Kirim Laporan</button>
                                </div>
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

    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

    <script>
        layout_change('light');
        change_box_container('false');
        layout_rtl_change('false');
        preset_change("preset-1");
        font_change("Public-Sans");

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('multi-step-form');
            const formSteps = form.querySelectorAll('.form-step');
            const progressSteps = document.querySelectorAll('.progress-step');
            let currentStep = 0;

            // Ambil elemen dropdown dan display nama Casis
            const casisIdDropdown = document.getElementById('casis_id_dropdown');
            const namaLengkapDisplay = document.getElementById('nama_lengkap');

            // Fungsi untuk memperbarui nama Casis di tampilan Step 1
            function updateCasisDisplayName() {
                if (casisIdDropdown) {
                    const selectedOption = casisIdDropdown.options[casisIdDropdown.selectedIndex];
                    if (selectedOption && selectedOption.value) {
                        namaLengkapDisplay.value = selectedOption.text.split('(')[0].trim();
                    } else {
                        namaLengkapDisplay.value = '';
                    }
                }
            }

            // Tambahkan event listener jika dropdown ada
            if (casisIdDropdown) {
                casisIdDropdown.addEventListener('change', updateCasisDisplayName);
                // Panggil sekali saat DOMContentLoaded untuk menginisialisasi nilai jika form dimuat dengan old value
                updateCasisDisplayName();
            }

            function showStep(stepIndex) {
                formSteps.forEach((step, index) => {
                    step.classList.remove('active');
                    if (index < stepIndex) {
                        step.classList.add('completed');
                    } else {
                        step.classList.remove('completed');
                    }
                });

                formSteps[stepIndex].classList.add('active');

                progressSteps.forEach((pStep, index) => {
                    pStep.classList.remove('active', 'completed');
                    if (index === stepIndex) {
                        pStep.classList.add('active');
                    } else if (index < stepIndex) {
                        pStep.classList.add('completed');
                    }
                });

                if (stepIndex === formSteps.length - 1) {
                    reviewFormData();
                }
            }

            function validateStep(stepIndex) {
                const currentFormStep = formSteps[stepIndex];
                const inputs = currentFormStep.querySelectorAll('[required]');
                let isValid = true;

                // Validasi dropdown Casis jika ada dan diperlukan di Step 1
                if (stepIndex === 0 && casisIdDropdown && casisIdDropdown.hasAttribute('required')) {
                    if (!casisIdDropdown.value) {
                        isValid = false;
                        casisIdDropdown.classList.add('is-invalid');
                    } else {
                        casisIdDropdown.classList.remove('is-invalid');
                    }
                }

                inputs.forEach(input => {
                    if (input.type === 'file') {
                        // Untuk input file, ini bisa jadi tricky saat edit.
                        // Untuk mode create, pastikan file dipilih jika required.
                        // Jika dalam mode edit, bisa jadi file lama sudah ada.
                        // Untuk kesederhanaan, hanya cek jika ada file baru di-upload.
                        if (!input.files.length) { // Jika tidak ada file yang dipilih
                            // Asumsi bahwa jika input file required, harus ada file baru
                            // Jika ini form edit dan ada file lama, logikanya akan lebih kompleks
                            isValid = false;
                            input.classList.add('is-invalid');
                        } else {
                            input.classList.remove('is-invalid');
                        }
                    } else if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('is-invalid');
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                return isValid;
            }

            function nextStep() {
                if (validateStep(currentStep)) {
                    if (currentStep < formSteps.length - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                } else {
                    alert('Harap lengkapi semua bidang yang wajib diisi sebelum melanjutkan.');
                }
            }

            function prevStep() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            }

            function reviewFormData() {
                const reviewDiv = document.getElementById('review-data');
                let html = '<h6>Ringkasan Data:</h6>';
                const fieldsToReview = [
                    { id: 'nama_lengkap', label: 'Nama Lengkap Casis', step: 1 },
                    { id: 'tempat_lahir', label: 'Tempat Lahir', step: 1 },
                    { id: 'tanggal_lahir', label: 'Tanggal Lahir', step: 1 },
                    { id: 'prodi', label: 'Prodi', step: 1 },
                    { id: 'asal_panda', label: 'Asal Panda', step: 1 },
                    { id: 'nomor_tk_panda', label: 'Nomor TK. Panda', step: 1 },
                    { id: 'nomor_tk_pusat', label: 'Nomor TK. Pusat', step: 1 },
                    { id: 'agama', label: 'Agama', step: 1 },
                    { id: 'jenis_kelamin', label: 'Jenis Kelamin', step: 1 },
                    { id: 'status_perkawinan_biodata', label: 'Status Perkawinan', step: 1 }, // ID dari select
                    { id: 'alamat_ktp', label: 'Alamat Sesuai KTP', step: 1 },
                    { id: 'nomor_hp', label: 'Nomor HP', step: 1 },
                    { id: 'merk_hp', label: 'Merk/Seri HP', step: 1 },
                    { id: 'imei1', label: 'IMEI 1', step: 1 },
                    { id: 'imei2', label: 'IMEI 2', step: 1 },
                    { id: 'pendidikan_terakhir', label: 'Pendidikan Terakhir', step: 4 },
                    { id: 'nama_institusi', label: 'Nama Institusi', step: 4 },
                    { id: 'catatan', label: 'Catatan Tambahan', step: 5 },
                ];

                fieldsToReview.forEach(field => {
                    const inputElement = document.getElementById(field.id);
                    if (inputElement) {
                        let value = inputElement.value;
                        if (inputElement.tagName === 'SELECT' && inputElement.options[inputElement.selectedIndex]) {
                            value = inputElement.options[inputElement.selectedIndex].text;
                        }
                        html += `<p><strong>${field.label}:</strong> ${value || '-'}</p>`;
                    }
                });

                // For dynamic social media fields (Step 2)
                const socialMediaItems = form.querySelectorAll('#social-media-container .social-media-item');
                if (socialMediaItems.length > 0) {
                    html += `<h6>Data Akun Media Sosial:</h6>`;
                    socialMediaItems.forEach((item) => {
                        const typeInput = item.querySelector('select[name^="social_media_type"]');
                        const linkInput = item.querySelector('input[name^="social_media_link"]');
                        if (typeInput && linkInput && typeInput.value && linkInput.value) {
                            html += `<p><strong>Jenis:</strong> ${typeInput.options[typeInput.selectedIndex].text}, <strong>Link/Username:</strong> ${linkInput.value}</p>`;
                        }
                    });
                }
                
                // For dynamic profiling media results (Step 3)
                const profilingMediaItems = form.querySelectorAll('#profiling-media-container .profiling-media-item');
                if (profilingMediaItems.length > 0) {
                    html += `<h6>Data Hasil Profiling Media Sosial:</h6>`;
                    profilingMediaItems.forEach((item) => {
                        const typeInput = item.querySelector('select[name^="profiling_media_sosial_type"]');
                        const screenshotInput = item.querySelector('input[name^="hasil_screenshot"]');
                        const keteranganInput = item.querySelector('textarea[name^="keterangan_profiling"]');

                        if (typeInput && keteranganInput && typeInput.value && keteranganInput.value) {
                            let screenshotName = '';
                            if (screenshotInput && screenshotInput.files.length > 0) {
                                screenshotName = screenshotInput.files[0].name;
                            }
                            
                            html += `<p><strong>Platform:</strong> ${typeInput.options[typeInput.selectedIndex].text}`;
                            if (screenshotName) {
                                html += `, <strong>Screenshot:</strong> ${screenshotName}`;
                            }
                            html += `, <strong>Keterangan:</strong> ${keteranganInput.value}</p>`;
                        }
                    });
                }

                reviewDiv.innerHTML = html;
            }


            // Event Listeners for navigation buttons
            form.querySelectorAll('.next-step').forEach(button => {
                button.addEventListener('click', nextStep);
            });

            form.querySelectorAll('.prev-step').forEach(button => {
                button.addEventListener('click', prevStep);
            });

            // Event Listeners for progress indicator clicks
            progressSteps.forEach((pStep, index) => {
                pStep.addEventListener('click', () => {
                    // Allow clicking on previous/completed steps to go back
                    if (index <= currentStep) { // Only allow going back to completed or current steps
                        currentStep = index;
                        showStep(currentStep);
                    }
                });
            });


            // --- Dynamic Form Fields for Social Media (Step 2) ---
            const socialMediaContainer = document.getElementById('social-media-container');
            const addSocialMediaBtn = document.getElementById('add-social-media');

            // Function to add a new social media input block
            function addSocialMediaField() {
                const newSocialMediaItem = document.createElement('div');
                newSocialMediaItem.classList.add('row', 'social-media-item', 'mb-3');
                const fieldIndex = socialMediaContainer.querySelectorAll('.social-media-item').length; // Get current count for unique name
                newSocialMediaItem.innerHTML = `
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <select class="form-select social-media-type" name="social_media_type[${fieldIndex}]" required>
                                <option value="">- Pilih Jenis Akun -</option>
                                <option value="email">Email</option>
                                <option value="instagram">Instagram</option>
                                <option value="tiktok">Tiktok</option>
                                <option value="facebook">Facebook</option>
                                <option value="youtube">Youtube</option>
                                <option value="twitter">Twitter</option>
                                <option value="linkedin">LinkedIn</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="form-group">
                            <input type="text" class="form-control social-media-link" name="social_media_link[${fieldIndex}]"
                                placeholder="Masukkan username / link akun" required>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 d-flex align-items-center">
                        <button type="button" class="btn btn-danger btn-sm remove-social-media">
                            <i class="ti ti-minus"></i>
                        </button>
                    </div>
                `;
                socialMediaContainer.appendChild(newSocialMediaItem);
                updateRemoveSocialMediaButtonsVisibility(); // Update button visibility after adding
            }

            // Function to remove a social media input block
            function removeSocialMediaField(event) {
                if (event.target.classList.contains('remove-social-media') || event.target.closest('.remove-social-media')) {
                    const itemToRemove = event.target.closest('.social-media-item');
                    if (itemToRemove) {
                        itemToRemove.remove();
                        updateRemoveSocialMediaButtonsVisibility(); // Update button visibility after removing
                    }
                }
            }

            // Function to update the visibility of remove buttons
            function updateRemoveSocialMediaButtonsVisibility() {
                const allSocialMediaItems = socialMediaContainer.querySelectorAll('.social-media-item');
                allSocialMediaItems.forEach(item => {
                    item.querySelector('.remove-social-media').style.display = 'none';
                });

                if (allSocialMediaItems.length > 1) {
                    allSocialMediaItems.forEach(item => {
                        item.querySelector('.remove-social-media').style.display = 'block';
                    });
                }
            }

            // Event listener for "Tambah Akun Media Sosial" button
            addSocialMediaBtn.addEventListener('click', addSocialMediaField);

            // Event listener for removing social media fields (delegated event)
            socialMediaContainer.addEventListener('click', removeSocialMediaField);

            // Initial call to set correct button visibility
            updateRemoveSocialMediaButtonsVisibility();


            // --- Dynamic Form Fields for Profiling Media (Step 3) ---
            const profilingMediaContainer = document.getElementById('profiling-media-container');
            const addProfilingMediaBtn = document.getElementById('add-profiling-media');

            function addProfilingMediaField() {
                const newProfilingMediaItem = document.createElement('div');
                newProfilingMediaItem.classList.add('row', 'profiling-media-item', 'mb-3');
                const fieldIndex = profilingMediaContainer.querySelectorAll('.profiling-media-item').length;
                newProfilingMediaItem.innerHTML = `
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="profiling_media_sosial_type_${fieldIndex}">Media Sosial</label>
                            <select class="form-select profiling-media-type" id="profiling_media_sosial_type_${fieldIndex}" name="profiling_media_sosial_type[${fieldIndex}]" required>
                                <option value="">- Pilih Jenis Akun -</option>
                                <option value="email">Email</option>
                                <option value="instagram">Instagram</option>
                                <option value="tiktok">Tiktok</option>
                                <option value="facebook">Facebook</option>
                                <option value="youtube">Youtube</option>
                                <option value="twitter">Twitter</option>
                                <option value="linkedin">LinkedIn</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label class="form-label" for="hasil_screenshot_${fieldIndex}">Hasil Screenshot</label>
                            <input type="file" class="form-control profiling-hasil-screenshot" id="hasil_screenshot_${fieldIndex}" name="hasil_screenshot[${fieldIndex}]" accept="image/*" required>
                        </div>
                    </div>
                    <div class="col-md-1 d-flex align-items-center">
                        <button type="button" class="btn btn-danger btn-sm remove-profiling-media">
                            <i class="ti ti-minus"></i>
                        </button>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="form-label" for="keterangan_profiling_${fieldIndex}">Keterangan</label>
                            <textarea class="form-control profiling-keterangan" id="keterangan_profiling_${fieldIndex}" name="keterangan_profiling[${fieldIndex}]" rows="3" required></textarea>
                        </div>
                    </div>
                `;
                profilingMediaContainer.appendChild(newProfilingMediaItem);
                updateRemoveProfilingMediaButtonsVisibility();
            }

            function removeProfilingMediaField(event) {
                if (event.target.classList.contains('remove-profiling-media') || event.target.closest('.remove-profiling-media')) {
                    const itemToRemove = event.target.closest('.profiling-media-item');
                    if (itemToRemove) {
                        itemToRemove.remove();
                        updateRemoveProfilingMediaButtonsVisibility();
                    }
                }
            }

            function updateRemoveProfilingMediaButtonsVisibility() {
                const allProfilingMediaItems = profilingMediaContainer.querySelectorAll('.profiling-media-item');
                allProfilingMediaItems.forEach(item => {
                    item.querySelector('.remove-profiling-media').style.display = 'none';
                });

                if (allProfilingMediaItems.length > 1) {
                    allProfilingMediaItems.forEach(item => {
                        item.querySelector('.remove-profiling-media').style.display = 'block';
                    });
                }
            }

            addProfilingMediaBtn.addEventListener('click', addProfilingMediaField);
            profilingMediaContainer.addEventListener('click', removeProfilingMediaField);
            updateRemoveProfilingMediaButtonsVisibility();


            // Pastikan step pertama terlihat saat halaman dimuat
            showStep(currentStep);
        });
    </script>

</body>

</html>