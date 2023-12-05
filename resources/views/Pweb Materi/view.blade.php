@extends('Pweb Materi.master2')
@section('judulhalaman', 'View Pegawai')


@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Pegawai</h3>

    <a href="/pegawai"> Kembali </a>

    <br><br>

    @foreach ($pegawai as $p)

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
                        Nama: {{$p->pegawai_nama}} <br>
                        Jabatan: {{$p->pegawai_jabatan}} <br>
                        Umur: {{$p->pegawai_umur}} <br>
                        Alamat: {{$p->pegawai_alamat}} <br>
                    </h3>
                    <div class="d-flex justify-content-center">
                        <a href="/pegawai" class="btn btn-primary ">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
