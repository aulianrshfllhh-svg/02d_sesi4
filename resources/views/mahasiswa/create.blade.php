<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Input Data Mahasiswa Baru</h4>
                </div>
                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">NIM</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-id-card"></i></span>
                                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Kelas</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Contoh: SI-KIP" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Mata Kuliah</label>
                                <input type="text" name="matakuliah" class="form-control" placeholder="Nama MK" required>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-primary px-4">Simpan Data <i class="fas fa-save ms-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>