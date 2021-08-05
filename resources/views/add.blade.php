@extends("layouts.app", ["title" => "Tambah Siswa"])

@section("content")
<div class="container">
    <h1>Tambah Siswa</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Siswa</h4>
                </div>
                <div class="card-body">
                    <form action="/student/add" method="POST">
                        {{-- Token validasi form laravel --}}
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select">
                                <option disabled selected>Pilih Gender</option>
                                <option value="0">Laki-laki</option>
                                <option value="1">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" maxlength="10" class="form-control" name="nisn">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">No Telepon</label>
                            <input type="text" maxlength="13" class="form-control" name="telepon">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop