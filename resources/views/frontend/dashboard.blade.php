@extends('layouts.user.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Hi, {{ auth()->user()->name }}
                    </h4>
                    <hr>
                </div>
                <div class="card-body">
                    @if (auth()->user()->kandidat_id == null)
                        @if (date('Y-m-d') == $vote_date)
                            @if (strtotime(date('H:i')) > strtotime($vote_open) && strtotime(date('H:i')) < strtotime($vote_closed))
                            <style>
    .paragraph {
        margin: 5px 0; /* Atur jarak atas dan bawah antara paragraf */
    }
</style>

<p class="paragraph"><b>Teknis Penggunaan Hak Suara</b></p>
<p class="paragraph">1. Setiap pemilih memiliki satu suara untuk memilih satu kandidat pasangan ketua dan wakil ketua OSIS.</p>
<p class="paragraph">2. Pemilih tidak boleh memberikan lebih dari satu suara.</p>
<p class="paragraph">3. Suara pemilih bersifat rahasia.</p>
<p class="paragraph">4. Jika ada masalah atau pertanyaan selama proses pemilihan, pemilih dapat menghubungi panitia pemilihan atau pengawas pemilihan.</p> </br>



                                 <a href="{{ route('voting') }}" class="btn btn-primary">Voting Sekarang</a>
                            @else
                                <p>Pilkosis Telah Ditutup Pada Jam {{ $vote_closed }}.</p>
                            @endif
                        @elseif(strtotime(date('Y-m-d')) < strtotime($vote_date))
                            <p>Pilkosis Akan Dilaksanakan Pada Tanggal {{ $vote_date }}</p>
                        @elseif(strtotime(date('Y-m-d')) > strtotime($vote_date))
                            <p>Pilkosis Telah Dilaksanakan Pada Tanggal {{ $vote_date }}</p>
                        @endif
                    @else
                        <p>Terimakasih, Kamu Telah Mengirimkan Suaramu!. Sliahkan <b>Logout</b></p> <br>
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="btn btn-primary" href="#"  href="{{ route('logout')  }}" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                            </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
