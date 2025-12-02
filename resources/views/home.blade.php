<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa;">

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
                            <th style="width: 180px" class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($pegawai->count() == 0)
                        <tr>
                            <td colspan="5" class="text-center">No data available.</td>
                        </tr>
                        @else
                        @foreach($pegawai as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->posisi }}</td>
                            <td>Rp {{ number_format($p->gaji, 0, ',', '.') }}</td>

                            <td class="text-center">
                                <a href="{{ route('pegawai.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('pegawai.delete', $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
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
