@extends('Front.Index')

@section('Title')
KPUM Fasilkom Unej
@endsection

@section('Main')
@foreach ($Data as $dt)
<form action="" method="post">
    @php
        $Data2 = $Data2->where('id_pemilihan', $dt->id);
    @endphp
    <section id="#" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Pemilihan {{ $dt->keterangan }}</h2>
                <p></p>
            </div>
            <div class="row">
                @foreach ($Data2 as $dt2)
                <div class="col-xl col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <a href=""><img src="{{ asset('Kandidat/'.$dt2->gambar) }}" alt="" width="100%"></a>
                        <center>
                            <h4>{{ $dt2->ketua }}</h4>
                            <h4>{{ $dt2->wakil_ketua }}</h4>
                        </center>
                        <center>
                            <input class="form-check-input" type="radio" name="kandidat" value="{{ $dt2->no_urut }}">
                        </center>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <center>
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text mt-4" id="inputGroup-sizing-lg">NIM</span>
                            </div>
                            <input type="text" class="form-control mt-4" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary mt-2"><b>Vote !</b></button>
                    </center>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
</form>
@endforeach
@endsection