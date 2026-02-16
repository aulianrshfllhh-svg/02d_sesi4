<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Tambah Data Mata Kuliah</h5>
                    </div>
                    <div class="card-body">
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('matakuliah.store') }}" method="POST">
                            @csrf <div class="mb-3">
                                <label class="form-label fw-bold">Kode Mata Kuliah</label>
                                <input type="text" name="kode_mk" class="form-control" placeholder="Masukkan Kode MK (contoh: MK001)" value="{{ old('kode_mk') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Mata Kuliah</label>
                                <input type="text" name="nama_mk" class="form-control" placeholder="Masukkan Nama Mata Kuliah" value="{{ old('nama_mk') }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">SKS (1-6)</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Jumlah SKS" value="{{ old('sks') }}">
                                    <small class="text-muted">Sesuai tugas akhir: rentang 1-6[cite: 129].</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Semester</label>
                                    <input type="number" name="semester" class="form-control" placeholder="Semester" value="{{ old('semester') }}">
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-success px-4">SIMPAN</button>
                                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary px-4">KEMBALI</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>