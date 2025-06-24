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
                            <span class="pc-micon"><i class="ti ti-users"></i></span>
                            <span class="pc-mtext">Rekrutmen</span>
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
                        <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        </a>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                            aria-expanded="false">
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

        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title d-flex align-items-center justify-content-between">
                            <h5 class="m-b-10">Daftar Personel</h5>
                            <button class="btn btn-primary btn-sm" id="togglePendaftaran" class="togglePendaftaran"
                                onclick="togglePersonel()">
                                {{-- Tombol untuk toggle form pendaftaran --}}
                                {{-- LINK KE FORM TAMBAH EVENT REKRUTMEN --}}
                                + tambah Personel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <h4 class="mb-3">📋 Daftar Pendaftar</h4>

            <input type="text" id="searchInput" class="form-control mb-3" placeholder="Cari Nama Pendaftar...">

            <div class="table-responsive" id="tablePersonel">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th onclick="sortTable(0)">No ⬍</th>
                            <th onclick="sortTable(1)">Nama ⬍</th>
                            <th onclick="sortTable(2)">Email ⬍</th>
                            <th onclick="sortTable(3)">No HP ⬍</th>
                            <th onclick="sortTable(4)">TTL ⬍</th>
                            <th onclick="sortTable(5)">Agama ⬍</th>
                            <th onclick="sortTable(6)">Jenis Kelamin ⬍</th>
                            <th onclick="sortTable(7)">Alamat KTP ⬍</th>
                            <th onclick="sortTable(8)">Prodi ⬍</th>
                            <th onclick="sortTable(9)">Asal Panda ⬍</th>
                            <th onclick="sortTable(10)">No TK Panda ⬍</th>
                            <th onclick="sortTable(11)">No TK Pusat ⬍</th>
                            <th onclick="sortTable(12)">IMEI ⬍</th>
                            <th onclick="sortTable(13)">Merk HP ⬍</th>
                            <th onclick="sortTable(14)">Status ⬍</th>
                            <th onclick="sortTable(15)">Tgl Daftar ⬍</th>
                        </tr>
                    </thead>
                    <tbody id="personel">
                        @php
                            // dd($personel);
                        @endphp
                        @isset($personel)

                            @foreach ($personel as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->nomor_hp }}</td>
                                    <td>{{ $item->tempat_lahir ?? '-' }},
                                        {{ \Carbon\Carbon::parse($item->ttl)->format('d M Y') }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->alamat_ktp }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>{{ $item->asal_panda }}</td>
                                    <td>{{ $item->nomor_tk_panda }}</td>
                                    <td>{{ $item->nomor_tk_pusat }}</td>
                                    <td>{{ $item->nomor_imei }}</td>
                                    <td>{{ $item->merk_hp }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                                </tr>
                            @endforeach
                        @endisset

                    </tbody>
                </table>
            </div>

            <div>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Livewire.on('pendaftarSaved', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Data Berhasil Disimpan!',
                                text: 'Data pendaftar sudah masuk ke database.',
                                showConfirmButton: false,
                                timer: 2000 // Notifikasi otomatis hilang setelah 2 detik
                            });
                        });
                    });
                </script>


                {{-- Form ini akan muncul ketika tombol "Tambah Personel" ditekan --}}
                <form id="formPendaftaran" class="hidden" action="{{ route('personel.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Nama Lengkap -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Agama -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>

                            @error('agama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- TTL -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="ttl">
                            @error('ttl')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir">
                            @error('tempat_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Alamat KTP -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Alamat KTP</label>
                            <textarea class="form-control" name="alamat_ktp"></textarea>
                            @error('alamat_ktp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nomor HP -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" name="nomor_hp">
                            @error('nomor_hp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Prodi -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Program Studi</label>
                            <input type="text" class="form-control" name="prodi">
                            @error('prodi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Asal Panda -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Asal Panda</label>
                            <input type="text" class="form-control" name="asal_panda">
                            @error('asal_panda')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nomor TK Panda -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor TK Panda</label>
                            <input type="text" class="form-control" name="nomor_tk_panda">
                            @error('nomor_tk_panda')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nomor TK Pusat -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor TK Pusat</label>
                            <input type="text" class="form-control" name="nomor_tk_pusat">
                            @error('nomor_tk_pusat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nomor IMEI -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor IMEI</label>
                            <input type="text" class="form-control" name="nomor_imei">
                            @error('nomor_imei')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Merk HP -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Merk HP</label>
                            <input type="text" class="form-control" name="merk_hp">
                            @error('merk_hp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <input type="text" class="form-control" name="status">
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label>Upload Gambar/Video</label>
                        <div class="mb-2 d-flex align-items-start gap-2" id="file-inputs">
                            <div class="file-input">
                                <input type="file" name="media_files[]" class="form-control"
                                    accept="image/*,video/*">
                            </div>
                            {{-- END REVISI --}}
                        </div>

                        <!-- Tombol untuk menambah input file -->
                        <button type="button" id="add-file" class="btn btn-primary btn-sm form-label">Tambah
                            File</button>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>

            <script>
                const formPendaftaran = document.getElementById('formPendaftaran');
                const tablePersonel = document.getElementById('tablePersonel');
                const buttonPendaftaran = document.getElementById('togglePendaftaran');

                function togglePersonel() {
                    const isHidden = formPendaftaran.classList.contains('hidden');
                    if (isHidden) {
                        formPendaftaran.classList.remove('hidden');
                        tablePersonel.classList.add('hidden');
                    } else {
                        formPendaftaran.classList.add('hidden');
                        tablePersonel.classList.remove('hidden');
                    };
                }
            </script>

            <script>
                // Tangkap tombol tambah input file
                document.getElementById('add-file').addEventListener('click', function() {
                    // Ambil container yang berisi input file
                    var container = document.getElementById('file-inputs');

                    // Buat elemen div baru untuk membungkus input file
                    var div = document.createElement('div');
                    div.className = "file-input";
                    div.classList.add('mb-2', 'd-flex', 'align-items-start', 'gap-2');

                    // Buat label dan input file baru
                    // var label = document.createElement('label');
                    // label.innerText = "Pilih Gambar/Video:";
                    var input = document.createElement('input');
                    input.className = "form-control";
                    input.type = "file";
                    input.name = "media_files[]";
                    input.accept = "image/*,video/*";

                    // Buat tombol hapus untuk input file
                    var removeButton = document.createElement('button');
                    removeButton.type = "button";
                    removeButton.innerText = "Hapus";
                    removeButton.className = "remove-file";
                    removeButton.classList.add('btn', 'btn-warning', 'btn-sm');
                    // Tambahkan event listener: saat tombol diklik, hapus div induknya
                    removeButton.addEventListener('click', function() {
                        this.parentElement.remove();
                    });

                    // Tambahkan label ke dalam div
                    div.appendChild(input);
                    div.appendChild(removeButton);

                    // Tambahkan div baru ke container
                    container.appendChild(div);
                });
            </script>


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

    <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/data-basic-init.js') }}"></script>
    {{-- Anda mungkin perlu mengaktifkan script ini jika Anda memiliki fitur Chart/Dashboard di halaman ini --}}
    {{-- <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script> --}}

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

    <script>
        // Pencarian Nama Pendaftar
        document.getElementById("searchInput").addEventListener("keyup", function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("#personel tr");

            rows.forEach(row => {
                let name = row.cells[1].textContent.toLowerCase();
                row.style.display = name.includes(filter) ? "" : "none";
            });
        });

        // Pengurutan Kolom
        function sortTable(colIndex) {
            let table = document.getElementById("#personel");
            let rows = Array.from(table.rows);
            let sortedRows = rows.sort((a, b) =>
                a.cells[colIndex].textContent.localeCompare(b.cells[colIndex].textContent)
            );
            table.innerHTML = "";
            sortedRows.forEach(row => table.appendChild(row));
        }
    </script>
    <style>
        .hidden {
            display: none
        }
    </style>
</body>

</html>
