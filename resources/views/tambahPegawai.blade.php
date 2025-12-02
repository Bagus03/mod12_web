<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f1f1f1; }
        .navbar-custom { background-color: #212529 !important; height: 60px; }
        .navbar-brand-custom { color: white; font-size: 1.25rem; font-weight: 600; }
        .card-custom { max-width: 600px; margin: 60px auto; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .btn-batal { background-color: #6c757d; color: white; }
        .btn-simpan { background-color: #0d6efd; color: white; }
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
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Posisi / Jabatan</label>
                        <select name="posisi" class="form-select" required>
                            <option disabled selected>Pilih Posisi</option>
                            <option value="manager">Manager</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="staff">Staff Administrasi</option>
                            <option value="developer">Web Developer</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Gaji (IDR)</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="gaji" class="form-control" required>
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

</body>

</html>
