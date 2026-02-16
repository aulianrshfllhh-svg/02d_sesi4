<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #444;
        }
        .navbar-custom {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        .card { border: none; border-radius: 15px; overflow: hidden; }
        .card-header { background: #764ba2 !important; color: white; font-weight: bold; padding: 20px; }
        .btn-action { border-radius: 8px; padding: 5px 15px; }
    </style>
</head>
<body>

<nav class="navbar navbar-dark navbar-custom mb-5">
    <div class="container">
        <span class="navbar-brand mb-0 h1"><i class="fas fa-user-graduate me-2"></i> Sistem Manajemen Mahasiswa</span>
    </div>
</nav>

<div class="container">
    <h2 class="text-white mb-4"><i class="fas fa-list me-2"></i> Daftar Mahasiswa</h2>
    
    <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fas fa-table me-2"></i> Data Mahasiswa</span>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> Tambah Mahasiswa
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="px-4"># NIM</th>
                            <th><i class="fas fa-user me-1"></i> NAMA</th>
                            <th><i class="fas fa-door-open me-1"></i> KELAS</th>
                            <th><i class="fas fa-book me-1"></i> MATAKULIAH</th>
                            <th class="text-center"><i class="fas fa-cog me-1"></i> AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswas as $mhs)
                        <tr>
                            <td class="px-4 fw-bold">{{ $mhs->nim }}</td>
                            <td>{{ $mhs->nama }}</td>
                            <td><span class="badge bg-primary bg-opacity-10 text-primary px-3">{{ $mhs->kelas }}</span></td>
                            <td>{{ $mhs->matakuliah }}</td>
                            <td class="text-center">
                                <div class="btn-group gap-1">
                                    <a href="{{ route('mahasiswa.edit', $mhs->nim) }}" class="btn btn-warning btn-sm btn-action text-white">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <form action="{{ route('mahasiswa.destroy', $mhs->nim) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-action" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white text-center py-3">
            <small class="text-muted">Total Mahasiswa: <strong>{{ $mahasiswas->count() }}</strong></small>
        </div>
    </div>
</div>

</body>
</html>