@extends('Pweb Materi.master2')
@section('judulhalaman', 'Data Pegawai')


@section('konten')

    <label for="kategori">	<h3>Pilih Kategori</h3></label>

    <br>

    <table class="table table-striped table-hover">
        <tr>
        <form action="/kategori/view" method="get">
            <select id="kategori" name="nama" class="form-group">
                @foreach($kategori as $k)
                    <option value={{$k->ID}}>{{$k->Nama}}</option>
                @endforeach
            </select>
            <div class="form-group row">
                <div class="offset-sm-1 col-sm-11 pull-right">
                    <input type="submit" value="Kirim" class="btn btn-primary">
                </div>
            </div>
        </form>
        </tr>
    </table>
@endsection
