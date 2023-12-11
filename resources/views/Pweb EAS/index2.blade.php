@extends('Pweb Materi.master2')
@section('judulhalaman', 'Data Pegawai')


@section('konten')

    <label for="kategori">	<h3>Pilih Kategori</h3></label>

    <br>


        <form action="/kategori/view" method="get">
            <div class="form-group">
            <select id="kategori" name="nama" class="form-control">
                @foreach($kategori as $k)
                    <option value={{$k->ID}}>{{$k->Nama}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group row">
                <div class="offset-sm-1 col-sm-11 pull-right">
                    <input type="submit" value="Kirim" class="btn btn-primary">
                </div>
            </div>
        </form>

@endsection
