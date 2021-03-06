@extends('components.user.layout.header')
@section('section-hero')
<div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
    <div>
    <h1>Dashboard</h1>
    </div>
</div>
<div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
    <img src="{{ asset('assets') }}/img/dashboard.svg" class="img-fluid" alt="">
</div>
@endsection
@section('content-user')
<section id="login">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <div class="d-flex justify-content-between"> 
                            <a class="nav-item nav-link active" id="nav-aspirasi-tab" data-toggle="tab" href="#nav-aspirasi" role="tab" aria-controls="nav-home" aria-selected="true">Aduan</a>
                        </div>
                        <!-- <a class="nav-item nav-link" id="nav-aduan-tab" data-toggle="tab" href="#nav-aduan" role="tab" aria-controls="nav-contact" aria-selected="false">Aduan</a> -->
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!-- <div class="tab-pane fade show active" id="nav-aspirasi" role="tabpanel" aria-labelledby="nav-aspirasi-tab">
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-semua-aspirasi-tab" data-toggle="pill" href="#v-pills-semua-aspirasi" role="tab" aria-controls="v-pills-semua-aspirasi" aria-selected="true">Semua</a>
                                <a class="nav-link" id="v-pills-belum-verifikasi-aspirasi-tab" data-toggle="pill" href="#v-pills-belum-verifikasi-aspirasi" role="tab" aria-controls="v-pills-belum-verifikasi-aspirasi" aria-selected="false">Belum Di Verifikasi</a>
                                <a class="nav-link" id="v-pills-proses-aspirasi-tab" data-toggle="pill" href="#v-pills-proses-aspirasi" role="tab" aria-controls="v-pills-proses-aspirasi" aria-selected="false">Proses</a>
                                <a class="nav-link" id="v-pills-selesai-aspirasi-tab" data-toggle="pill" href="#v-pills-selesai-aspirasi" role="tab" aria-controls="v-pills-selesai-aspirasi" aria-selected="false">Selesai</a>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-semua-aspirasi" role="tabpanel" aria-labelledby="v-pills-semua-aspirasi-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-belum-verifikasi-aspirasi" role="tabpanel" aria-labelledby="v-pills-belum-verifikasi-aspirasi-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-proses-aspirasi" role="tabpanel" aria-labelledby="v-pills-proses-aspirasi-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-selesai-aspirasi" role="tabpanel" aria-labelledby="v-pills-selesai-aspirasi-tab">...</div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade show active" id="nav-aduan" role="tabpanel" aria-labelledby="nav-aduan-tab">
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link" id="v-pills-cari-aduan-tab" data-toggle="pill" href="#v-pills-cari-aduan" role="tab" aria-controls="v-pills-cari-aduan">Cari 
                                <a class="nav-link active" id="v-pills-semua-aduan-tab" data-toggle="pill" href="#v-pills-semua-aduan" role="tab" aria-controls="v-pills-semua-aduan" aria-selected="true">Semua <span class="badge badge-success">{{$jml_pengaduan}}</span></a>
                                <a class="nav-link" id="v-pills-belum-verifikasi-aduan-tab" data-toggle="pill" href="#v-pills-belum-verifikasi-aduan" role="tab" aria-controls="v-pills-belum-verifikasi-aduan" aria-selected="false">Belum Di Verifikasi <span class="badge badge-success">{{$jml_belum}}</span></a>
                                <a class="nav-link" id="v-pills-proses-aduan-tab" data-toggle="pill" href="#v-pills-proses-aduan" role="tab" aria-controls="v-pills-proses-aduan" aria-selected="false">Proses <span class="badge badge-success">{{$jml_proses}}</span></a>
                                <a class="nav-link" id="v-pills-selesai-aduan-tab" data-toggle="pill" href="#v-pills-selesai-aduan" role="tab" aria-controls="v-pills-selesai-aduan" aria-selected="false">Selesai <span class="badge badge-success">{{$jml_selesai}}</span></a>
                                <a class="nav-link" id="v-pills-tolak-aduan-tab" data-toggle="pill" href="#v-pills-tolak-aduan" role="tab" aria-controls="v-pills-tolak-aduan" aria-selected="false">Ditolak <span class="badge badge-success">{{$jml_ditolak}}</span></a>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade" id="v-pills-cari-aduan" role="tabpanel" aria-labelledby="v-pills-cari-aduan-tab">
                                    <form method="POST" id="formCari">
                                        <div class="input-group">
                                          <input type="text" name="q" id="cari-aduan" class="form-control" placeholder="Cari Aduan (ex : P0035)">
                                          <button type="submit" class="btn btn-success">Cari</button>
                                        </div>
                                    </form>
                                    <div id="result" class="mt-3"></div>
                                </div>
                                <div class="tab-pane fade show active" id="v-pills-semua-aduan" role="tabpanel" aria-labelledby="v-pills-semua-aduan-tab">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('user.buat_aduan') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Buat Aduan!</a>
                                    </div>
                                    @if ($message = Session::get('save'))
                                        <div class="mt-3 alert alert-success" id="pesan-sukses" role="alert">
                                            <i class="fa fa-check-circle"></i> {{ $message }}
                                        </div>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-danger" id="pesan-gagal" role="alert">
                                            <i class="fa fa-close"></i> {{ $message }}
                                        </div>
                                    @endif
                                    @include('components.user.aduan.semua')
                                </div>
                                <div class="tab-pane fade" id="v-pills-belum-verifikasi-aduan" role="tabpanel" aria-labelledby="v-pills-belum-verifikasi-aduan-tab">
                                    @include('components.user.aduan.belum-verifikasi')
                                </div>
                                <div class="tab-pane fade" id="v-pills-proses-aduan" role="tabpanel" aria-labelledby="v-pills-proses-aduan-tab">
                                    @include('components.user.aduan.sedang-diproses')
                                </div>
                                <div class="tab-pane fade" id="v-pills-selesai-aduan" role="tabpanel" aria-labelledby="v-pills-selesai-aduan-tab">
                                    @include('components.user.aduan.selesai')
                                </div>
                                <div class="tab-pane fade" id="v-pills-tolak-aduan" role="tabpanel" aria-labelledby="v-pills-tolak-aduan-tab">
                                    @include('components.user.aduan.ditolak')
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('nav-user')
<li class=""><a href="#"><i class="fa fa-user"></i> Selamat Datang, {{ Auth::guard('masyarakat')->user()->nama_lengkap }}</a></li>
<li class=""><a href="{{ route('profile_masyarakat', Auth::guard('masyarakat')->user()->id) }}"><i class="fa fa-edit"></i> Edit Profile</a></li>
<li class=""><a href="#" data-toggle="modal" data-target="#confLogout"><i class="fa fa-sign-out"></i> Logout</a></li>
@endsection
@push('javascript')
    <script>
        $('.table-aduan-user').DataTable({
            'ordering': false,
            'search': true,
            'iDisplayLength': 3
        });
        setTimeout(function (){
            $('#pesan-sukses').fadeTo(300, 0).slideUp(300, function(){
                $(this).remove();
            });
        }, 3000);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#formCari').submit(function(e){
            let searchAduan = $('#cari-aduan').val();
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route("cari_aduan") }}',
                data: {searchAduan:searchAduan},
                // beforeSend:function(){
                //     // $('#result').append(data);
                //     $('#result').html('<img src="{{ asset("assets/img/ajax-loader.gif") }}">Loading...');
                // },
                success:function($data){
                    $('#result').html($data);
                }
            });
        });

        // $('body').on('keyup', '#cari-aduan', function(){
        //     // alert($(this).val());
        //     var searchAduan = $(this).val();

        //     $.ajax({
        //         method: 'POST',
        //         url: '{{ route("cari_aduan") }}',
        //         dataType: 'json',
        //         data:{
        //             searchAduan:searchAduan,
        //         },
        //         success:function(res){
        //             let resultAduan = '';
        //             $('#result').html('');
        //             $.each(res, function(index, value){
        //                 resultAduan = '<div class="card"><div class="card-body"><h5 class"card-text">Kode Aduan : '+value.id_pengaduan+'</h5></div></div>';
        //                 $('#result').append(resultAduan);
        //             });
        //         }
        //     });
        // });
            // $('#cari-aduan').on('keyup', function(){
            //     var _q = $(this).val();
            //     $.ajax({
            //         url:'{{ route("cari_aduan") }}',
            //         type:'POST',
            //         data:{
            //             q:_q
            //         },
            //         dataType:'json',
            //         beforeSend:function(){
            //             $('#result').html('<img src="{{ asset("assets/img/ajax-loader.gif") }}">Loading...');
            //         },
            //         success:function(res){
            //             let _html = '';
            //             $.each(res.data, function(index, data){
            //                 _html += `<div class="card">'+
            //                                 '<div class="card-header">Hasil Pencarian</div>
            //                                 <div class="card-body">
            //                                     <h5 class="card-text">Kode Aduan : P0001</h5>
            //                                     <h5 class="card-text">Tanggal Aduan : '+data.tgl_pengaduan+'</h5>
            //                                 </div>
            //                                 <div class="card-footer"><a href="" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Aduan</a></div>'
            //                             </div>`;
            //             });
            //             $('#result').append(_html);
            //         }
            //     });
            // });
    </script>
@endpush