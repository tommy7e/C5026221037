@extends('Pweb Materi.master2')
@section('judulhalaman', 'View Snack')


@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Snack</h3>

    <a href="/snack"> Kembali </a>

    <br><br>

    @foreach ($snack as $s)

    @endforeach
    <div class="row">
        <div class="col-6">
            <div class="row border m-2 justify-content-center rounded-lg">
                <br>
                Input Photo Here
                <br> <br>
            </div>
        </div>
        <div class="col-6">
            <div class="my-2 d-flex justify-content-center">
                <div>
                    <h3>
                        Kode: {{$s->kodesnack}} <br>
                        Merk: {{$s->merksnack}} <br>
                        Stock: {{$s->stocksnack}} <br>
                        Tersedia: {{$s->tersedia}} <br>
                    </h3>
                    <div class="d-flex justify-content-center">
                        <a href="/snack" class="btn btn-primary ">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
