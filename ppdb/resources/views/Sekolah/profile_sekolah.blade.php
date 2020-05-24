@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        <i class="icon icon-note-important"></i>
                        Profile Sekolah <span class="s-14"> <a class="btn btn-outline-primary btn-xs"
                                                            href="#"
                                                            target="_blank"> SMKN 2 Kec.Guguak</a> </span>
                    </h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-7">
                    <!-- Basic Validation -->
                    <div class="card mb-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>SMKN 2 Kec.Guguak</h6>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                @foreach ($data as $data)
                                    
                              
                                <div class="form-row" align="center">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Kepala Sekolah</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon icon-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->kepsek}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Operator</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon icon-tap_and_play"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->operator}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Akreditasi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon-star"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->akreditasi}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Kurikulum</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon-book-bookmark"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->kurikulum}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        
                                        <div class="input-group">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Waktu</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon-timer"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->waktu}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" align="center">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">NPSN</label>
                                        <input type="text" value="{{ $data->NPSN}}" readonly class="form-control" id="validationCustom03"  required>
                                       
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">Status</label>
                                        <input type="text" value="{{ $data->status}}" readonly class="form-control" id="validationCustom04" required>
                                       
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Bentuk Pendidikan</label>
                                        <input type="text" value="{{ $data->bentuk_pendidikan}}" readonly  class="form-control" id="validationCustom05"  required>
                                        
                                    </div>
                                    <div class="col-md-12 mb-3" align="center">
                                        <label for="validationCustom03">Status Kepemilikan</label>
                                        <input type="text" class="form-control" value="{{ $data->status_kepemilikan}}" readonly id="validationCustom03"  required>
                                       
                                    </div>
                                </div>
                                
                            </form>

                            
                        </div>
                    </div>
                   
                    
                </div>
            <div class="col-md-5" align="center">
               
                <hr>
                <img width="200px" src="{{ url('/images/sekolah/'.$data->image)}}"><br>
                <a href="https://www.google.com/maps/uv?hl=en&pb=!1s0x2fd55229288ae08f%3A0x5e9f21acedf350c8!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMyf7NwbtXCr6WlNf_TLvd47f7EIS7cM3aewu2y%3Dw160-h160-k-no!5sSMKN%202%20GUGUAK%20-%20Google%20Search&imagekey=!1e10!2sAF1QipMagTdDBpp8XO0sirbCxQMmiqOwjGHacDYh6FBz&sa=X&ved=2ahUKEwj3icaJh97oAhURXSsKHTLKAsUQoiowCnoECBkQBg" target="_blank"
                   class="btn btn-xs btn-primary">Gallery</a>
                <hr>
            </div>
            <div class="col-md-7">
                <div class="card no-b my-3 shadow  blue lighten-3 text-white">
                    <div class="card-body">
                       
                         <div class="my-3">
                             <small  >Daftar</small>
                             <h3>Jurusan</h3>
                         </div>
                        <div class="my-3">
                            <h4><b>Teknik Komputer Dan Jaringan(B)</b></h4>
                            <h6><i class="icon icon-check"></i> Layanan Jaringan (VOIP dan IPTV)</h6>
                            <h6><i class="icon icon-check"></i> Sistem Komputer</h6>
                            <h6><i class="icon icon-check"></i> Perakitan Komputer</h6>
                            <h6><i class="icon icon-check"></i> Installasi Software Komputer</h6>
                            <h6><i class="icon icon-check"></i> Administrasi Jaringan Komputer</h6>
                            <h6><i class="icon icon-check"></i> Sistem Digital Dan Analog</h6>
                            <h6><i class="icon icon-check"></i> Keamanan Jaringan Komputer</h6>
                        </div>
                        <div class="my-3">
                            <h4><b>Rekayasa Perangkat Lunak(B)</b></h4>
                            <h6><i class="icon icon-check"></i> Pemrograman Web</h6>
                            <h6><i class="icon icon-check"></i> Untility</h6>
                            <h6><i class="icon icon-check"></i> Pemrograman Dasar (C++,Pascal)</h6>
                            <h6><i class="icon icon-check"></i> Jaringan Dasar</h6>
                            
                        </div>
                        <div class="my-3">
                            <h4><b>Multimedia(B)</b></h4>
                            <h6><i class="icon icon-check"></i> Animasi 2D/3D</h6>
                            <h6><i class="icon icon-check"></i> Photografi</h6>
                            <h6><i class="icon icon-check"></i> Audio Dan Video</h6>
                            <h6><i class="icon icon-check"></i> Desain Grafis</h6>
                            <h6><i class="icon icon-check"></i> Tipografi</h6>
                            
                        </div>
                        <div class="my-3">
                            <h4><b>Otomatisasi Tata Kelola Perkantoran(B)</b></h4>
                            <h6><i class="icon icon-check"></i> Otomatisasi Perkantoran</h6>
                            <h6><i class="icon icon-check"></i> Korespodesi,Kearsipan Dan Simulasi Digital</h6>
                            <h6><i class="icon icon-check"></i> Administrasi Kepegawaian</h6>
                            <h6><i class="icon icon-check"></i> Sarana Prasarana Dan Administrasi Humas</h6>
                            
                            
                        </div>
                        <div class="my-3">
                            <h4 ><b>Akuntansi Keuangan Lembaga(B)</b></h4>
                            <h6><i class="icon icon-check"></i> Perbankan Dasar</h6>
                            <h6><i class="icon icon-check"></i> Etika Profesi</h6>
                            <h6><i class="icon icon-check"></i> Administrasi Umum</h6>
                            <h6><i class="icon icon-check"></i> Ekonomi Bisnis</h6>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card no-b my-3 shadow   indigo lighten-2 text-white">
                    <div class="card-body">
                        
                         <div class="my-3">
                             <small  >Visi & Misi</small>
                             <h3>SEKOLAH</h3>
                         </div>
                        <div class="my-3">
                            <small >Visi</small>
                            <hr>
                            <h6><i class="icon icon-check"></i> Cerdas</h6>
                            <h6><i class="icon icon-check"></i> Terampil</h6>
                            <h6><i class="icon icon-check"></i> Kompetitif</h6>
                            <h6><i class="icon icon-check"></i> Berkarakter</h6>
                            <h6><i class="icon icon-check"></i> Berprestasi</h6>
                            <h6><i class="icon icon-check"></i> Bertakwa</h6>
                        </div>
                        <div class="my-3">
                            <small >Misi</small>
                            <hr>
                            <h6><i class="icon icon-check"></i> Melaksanakam pelayanan pembelajaran yang berkualitas.</h6>
                            <h6><i class="icon icon-check"></i> Melaksanakam pembinaan olahraga berprestasi.</h6>
                            <h6><i class="icon icon-check"></i> Melaksanakam pendidikan karakter melalui program pembiasaan dan terintegrasi.</h6>
                            <h6><i class="icon icon-check"></i> Melaksanakam pelatihan siswa sesuai dengan program keahlian.</h6>
                            <h6><i class="icon icon-check"></i> Melaksanakam kerjasama dengan lembaga sertifikasi internasional sesuai dengan keahlian.</h6>
                            <h6><i class="icon icon-check"></i> Melaksanakam kelas ekstra setiap program keahlian.</h6>
                            <h6><i class="icon icon-check"></i> Meningkatkan kegiatan Shalat berjamaah.</h6>
                            <h6><i class="icon icon-check"></i> Melaksanakam Muhadarah.</h6>
                            <h6><i class="icon icon-check"></i> Melaksanakam kultum.</h6>
                            <h6><i class="icon icon-check"></i> Menanamkan sikap saling mengharagai sesama teman.</h6>
                            <h6><i class="icon icon-check"></i> Menanamkan sikap mudah senyum.</h6>
                            <h6><i class="icon icon-check"></i> Mengembangkan sikap saling mengucap salam.</h6>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>
@endsection