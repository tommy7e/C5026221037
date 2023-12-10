@extends('Pweb Materi.master2')
@section('judulhalaman', 'Edit Snack')


@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Snack</h3>

	<a href="/snack"> Kembali </a>

	<br><br>

	@foreach($snack as $s)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" class="form-control" id="kodebarang" name="kodebarang" value="{{ $s->kodesnack }}">
        <div class="form-group row">
            <label for="merk" class="col-sm-1 col-form-label">Merk Snack</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="merk" name="merk" value="{{ $s->merksnack }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-1 col-form-label">Stock Snack</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="stock" name="stock" value="{{ $s->stocksnack }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-1 col-form-label">Tersedia</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="tersedia" name="tersedia" value="{{ $s->tersedia }}" required="required">
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
