<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa;">

    <!-- Header -->
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <span class="navbar-brand">PT. Rangga</span>
        </div>
    </nav>

    <div class="container">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-3 text-end">
            <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h4 class="m-0">Daftar Karyawan</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Gaji</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($pegawai->count() == 0)
                        <tr>
                            <td colspan="4" class="text-center">No data available.</td>
                        </tr>
                        @else
                        @foreach($pegawai as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->posisi }}</td>
                            <td>Rp {{ number_format($p->gaji, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>