@extends('Front.Index')

@include('Function')

@section('Title')
    Data Pemilih
@endsection

@section('Main')
<section id="infografis" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Data Pemilih</h2>
            <p></p>
        </div>
        <table class="table table-striped table-hover">
            <thead class="table table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">WhatsApp</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $Num = 1;
                @endphp
                @foreach ($Data as $dt)
                <tr>
                    <th scope="row">{{ $Num++ }}</th>
                    <td>{{ $dt->nim }}</td>
                    <td>{{ $dt->nama }}</td>
                    <td>{{ $dt->program_studi }}</td>
                    <td>{{ Sensor($dt->no_wa) }}</td>
                    <td>{{ $dt->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection