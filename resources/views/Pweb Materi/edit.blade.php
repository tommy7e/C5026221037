@extends('Pweb Materi.master2')
@section('judulhalaman', 'Edit Pegawai')


@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali </a>

	<br><br>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" class="form-control" id="id" name="id" value="{{ $p->pegawai_id }}">
        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-11">
                <textarea name="alamat" class="form-control" id=alamat required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-1 col-sm-11 pull-right">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
	@endforeach
@endsection
