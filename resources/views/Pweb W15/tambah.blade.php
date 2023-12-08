@extends('Pweb Materi.master2')
@section('judulhalaman', 'Tambah Mahasiswa')


@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Mahasiswa</h3>

	<a href="/nilaikuliah"> Kembali </a>

    <br><br>

    <form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-1 col-form-label">NRP</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilaiangka" class="col-sm-1 col-form-label">Nilai Angka</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nilaiangka" name="nilaiangka">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-sm-1 col-form-label">SKS</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-1 col-sm-11 pull-right">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
