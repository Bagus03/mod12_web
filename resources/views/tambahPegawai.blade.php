<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya tambahan agar lebih mendekati desain gambar */
        body {
            background-color: #f1f1f1;
            /* Latar belakang lebih terang dari f8f9fa */
            padding-top: 0;
        }

        .navbar-custom {
            background-color: #212529 !important;
            /* Warna hitam untuk navbar */
            height: 60px;
            /* Tinggi navbar */
        }

        .navbar-brand-custom {
            color: #ffffff;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .card-custom {
            max-width: 600px;
            /* Batasan lebar card */
            margin: 60px auto;
            /* Pusatkan card di tengah halaman */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 500;
            color: #343a40;
        }

        .input-group-text-custom {
            background-color: #e9ecef;
            border-right: none;
            font-weight: bold;
            padding-right: 8px;
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        /* Override style untuk tombol aksi */
        .btn-batal {
            background-color: #6c757d;
            /* Abu-abu untuk Batal */
            border-color: #6c757d;
            color: white;
            transition: background-color 0.2s;
        }

        .btn-batal:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-simpan {
            background-color: #0d6efd;
            /* Biru untuk Simpan Data */
            border-color: #0d6efd;
            color: white;
            transition: background-color 0.2s;
        }

        .btn-simpan:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark navbar-custom">
        <div class="container-fluid">
            <span class="navbar-brand navbar-brand-custom ms-3">PT. Rangga</span>
        </div>
    </nav>

    <div class="container">

        <div class="card card-custom">
            <div class="card-body p-4">

                <h4 class="card-title mb-4">Tambah Karyawan Baru</h4>

                <form action="{{ route('pegawai.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Ex: Budi Santoso" required>
                    </div>

                    <div class="mb-3">
                        <label for="posisi" class="form-label">Posisi / Jabatan</label>
                        <select id="posisi" name="posisi" class="form-select" required>
                            <option value="" disabled selected>Pilih Posisi</option>
                            <option value="manager">Manager</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="staff">Staff Administrasi</option>
                            <option value="developer">Web Developer</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="gaji" class="form-label">Gaji (IDR)</label>
                        <div class="input-group">
                            <span class="input-group-text input-group-text-custom">Rp</span>

                            <input type="number" id="gaji" name="gaji" class="form-control" placeholder="Ex: 5000000" aria-describedby="gajiHelp" required>
                        </div>
                        <div id="gajiHelp" class="form-text">
                            Masukkan angka saja tanpa titik atau koma.
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('home') }}" class="btn btn-secondary btn-batal">Batal</a>

                        <button type="submit" class="btn btn-primary btn-simpan">Simpan Data</button>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>