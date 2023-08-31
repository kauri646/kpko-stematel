@extends('layouts.frontend.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 pt-md-5 mb-3 text-center text-md-start">
                <h2 class="text-uppercase">Selamat Datang Di E-KPKO</h2>
                <h4>Pemilihan Ketua & Wakil Ketua OSIS</h4>
                <h4>SMK Telkom Purwokerto Periode 2023/2024</h4>
                <br>
                <a href="{{ route('login') }}" class="btn btn-primary">Mulai Memilih</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('image/clip-voting.gif') }}" alt="" class="w-100">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">
                        Visi Misi
                    </h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Visi :</h6>
                    <p id="visi"></p>
                    <h6>Misi :</h6>
                    <p id="misi"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    $('#default').on('show.bs.modal', function(e) {
        var visi = $(e.relatedTarget).data('visi');
        var misi = $(e.relatedTarget).data('misi');
        $('#visi').text(visi);
        $('#misi').text(misi);
    });
</script>
@endpush
