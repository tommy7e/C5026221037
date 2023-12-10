@extends('Pweb Materi.master2')
 @section('judulhalaman', 'Data Snack')

 @section('konten')
    <h3>Snack</h3>

    <a href="/snack/beli" class="btn btn-primary mb-3"> BELI </a>

    <br/>
    <p>Cari Data Snack :</p>
	<form action="/snack/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Snack .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info mt-2">
	</form>
    <br/>

    <table class="table table-striped table-hover">
    <tr>
    <th>Kode Snack</th>
    <th>Merk Snack</th>
    <th>Stock Snack</th>
    <th>Tersedia</th>
    <th>Opsi</th>
    </tr>
    @foreach ($snack as $s)
    <tr>
    <td>{{ $s->kodesnack }}</td>
    <td>{{ $s->merksnack }}</td>
    <td>{{ $s->stocksnack }}</td>
    <td>{{ $s->tersedia }}</td>
    <td>
        <a href="/snack/view/{{ $s->kodesnack }}" class="btn btn-success">View</a>
        |
        <a href="/snack/edit/{{ $s->kodesnack }}" class="btn btn-warning">Edit</a>
        |
        <a href="/snack/hapus/{{ $s->kodesnack }}" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
    @endforeach
    </table>

    {{ $snack->links() }}
 @endsection
