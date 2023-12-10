@extends('Pweb Materi.master2')
 @section('judulhalaman', 'Beli Snack')

 @section('konten')
 <h3>Keranjang Snack</h3>

 <a class="btn btn-danger mb-md-3" href="/snack">Kembali</a>
 <div class="container">
 <form action="/snack/store" method="post">
 {{ csrf_field() }}
 <div class="form-group row">
 <label for="kodebarang" class="control-label col-sm-1">Kode Snack</label>
 <div class="col-sm-3">
 <input type="text" class="form-control" id="kodebarang" name="kodebarang">
 </div>
 </div>
 <div class="form-group row">
 <label for="merk" class="col-form-label col-sm-1">Merk Snack</label>
 <div class="col-sm-3">
 <input type="text" class="form-control" id="merk" name="merk">
 </div>
 </div>
 <div class="form-group row">
 <label for="stock" class="col-form-label col-sm-1">Stock Snack</label>
 <div class="col-sm-3">
 <input type="text" class="form-control" id="stock" name="stock">
 </div>
 </div>
 <div class="form-group row">
<label for="tersedia" class="col-form-label col-sm-1">Tersedia</label>
<div class="col-sm-3">
<input type="text" class="form-control" id="tersedia" name="tersedia">
</div>
</div>
</div>
 <input type="submit" value="Simpan Data" class="btn btn-primary">
 </form>

 @endsection
