@extends("layouts.app", ["title" => "List Siswa"])

@section("content")
<div class="container">
    <h1>List Siswa</h1>
    <a href="/student/add" class="btn btn-primary my-2">Tambah Siswa</a>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>NISN</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->gender == 0 ? "Laki-laki" : "Perempuan" }}</td>
                        <td>{{ $student->nisn }}</td>
                        <td>{{ $student->no_telepon }}</td>
                        <td>
                            <a class="btn btn-warning text-white d-inline-block" href="/student/edit/{{$student->id}}">Edit</a>
                            <form action="/student/delete/{{$student->id}}" method="POST" class="d-inline-block">
                                @method("DELETE")
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td>
                    @endforeach
                @if($students->isEmpty())
                <tr>
                    <td colspan="6" class="text-center py-4">Data kosong!</td>
                </tr>
                @endif
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop