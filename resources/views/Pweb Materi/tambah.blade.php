@extends('Pweb Materi.master2')
@section('judulhalaman', 'Tambah Pegawai')


@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Pegawai</h3>

	<a href="/pegawai"> Kembali </a>

    <br><br>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-11">
                <textarea name="alamat" class="form-control" id=alamat></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-1 col-sm-11 pull-right">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
