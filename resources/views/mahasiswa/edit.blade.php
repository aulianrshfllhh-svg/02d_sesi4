<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .card { border-radius: 15px; border: none; }
        .card-header { background: #764ba2 !important; color: white; border-radius: 15px 15px 0 0 !important; }
    </style>
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header py-3 text-center">
                    <h5 class="mb-0"><i class="fas fa-edit me-2"></i> Edit Data Mahasiswa</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
                        @csrf
                        @method('PUT') <div class="mb-3">
                            <label class="form-label fw-bold">NIM</label>
                            <input type="text" name="nim" class="form-control bg-light" value="{{ $mahasiswa->nim }}" readonly>
                            <small class="text-muted">* NIM tidak dapat diubah karena merupakan kunci utama.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Mata Kuliah</label>
                            <input type="text" name="matakuliah" class="form-control" value="{{ $mahasiswa->matakuliah }}" required>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary px-4">
                                <i class="fas fa-arrow-left me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-warning px-4 text-white">
                                <i class="fas fa-save me-1"></i> Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>