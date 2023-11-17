@extends('Pweb Materi.master')
@section('judulhalaman', 'Kontak')
@section('judul')
<div class="jumbotron"> Ini Halaman Kontak</div>>

@endsection

@section('konten')
<table class="table table-hover">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        @for ($i=0;$i<5;$i++)
            <tr>
                <td>first-{{$i+2}}</td>
                <td>last</td>
                <td>email</td>
            </tr>
        @endfor
    </tbody>
</table>
@endsection
