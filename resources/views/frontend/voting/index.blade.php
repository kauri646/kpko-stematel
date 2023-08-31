<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $app_name }}</title>
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/main/app.css" />
    <link rel="shortcut icon" href="{{ asset('mazer') }}/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer') }}/assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/extensions/sweetalert2/sweetalert2.min.css" />
</head>

<body>
<div id="app">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <h2 class="mb-4">Silahkan Pilih Kandidat Pilihanmu</h2>
<div style="display: flex; justify-content: center; align-items: center;">
    <img class="img-fluid" style="width: 23%; height: 20%; margin-right: 17px;"
        src="https://media.licdn.com/dms/image/D5603AQHTd19tZWNTaw/profile-displayphoto-shrink_800_800/0/1689779123544?e=2147483647&v=beta&t=J_QYSzDsKAvg289x5nlTW7xxyPJWdUGNE1FMkT51J_Y"
        alt="Paslon 1">
    <img class="img-fluid" style="width: 23%; height: 20%; margin-right: px;"
        src="https://media.licdn.com/dms/image/D5603AQHTd19tZWNTaw/profile-displayphoto-shrink_800_800/0/1689779123544?e=2147483647&v=beta&t=J_QYSzDsKAvg289x5nlTW7xxyPJWdUGNE1FMkT51J_Y"
        alt="Paslon 2">
</div>

                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            @foreach ($data['kandidat'] as $kandidat)
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $kandidat->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-secondary btn-block mb-3" data-bs-toggle="modal"
                                                data-bs-target="#default"
                                                data-visi="{{ $kandidat->visi }}"
                                                data-misi="{{ $kandidat->misi }}">Lihat Visi & Misi</button>
                                            <button type="button" onclick="konfirmasi(`{{ route('voting.store',$kandidat->id) }}`)"
                                                class="btn btn-primary btn-block">Pilih</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                </div>
            </div>
        </div>
       </div>

    </div>

       {{-- Modal --}}
    <!--Basic Modal -->
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
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tutup</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('mazer') }}/assets/js/bootstrap.js"></script>
<script src="{{ asset('mazer') }}/assets/js/app.js"></script>
<script src="{{ asset('mazer') }}/assets/extensions/jquery/jquery.min.js"></script>
<script src="{{ asset('mazer') }}/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script>
        function konfirmasi(url) {
            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Memilih Pasangan Ini",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                confirmButtonText: "Ya, Pilih !",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
    </script>
    <script>
        $('#default').on('show.bs.modal', function(e) {
        var visi = $(e.relatedTarget).data('visi');
        var misi = $(e.relatedTarget).data('misi');
        $('#visi').text(visi);
        $('#misi').text(misi);
        });
    </script>
</html>
