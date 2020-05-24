@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left">
    <div>
        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <div class="pb-3">
                            <div class="image mr-3  float-left">
                                
                                @if (Auth::user()->jenis_kelamin == 'Perempuan' && Auth::user()->image == null)
                                    <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/woman.png')}}" alt=""  />
                                @elseif(Auth::user()->jenis_kelamin == 'Laki-Laki' && Auth::user()->image == null)
                                    <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/man.png')}}" alt=""  />
                                @elseif(Auth::user()->image != null)
                                    <img width="10%" height="10%"  class="user_avatar" src="{{url('images/user',Auth::user()->image)}}" alt="" />
                                @endif
                              
                            </div>
                            <div>
                                <h6 class="p-t-10">{{ Auth::user()->nama_lengkap }}</h6>
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                    </div>
                </div>

              <div class="row">
                  <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                      <li>
                          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"><i class="icon icon-home2"></i>Home</a>
                      </li>
                  </ul>
              </div>

            </div>
        </header>

        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
           <div class="tab-content" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   <div class="row">
                       <div class="col-md-12">
                        
                           <div class="row">
                               
                           </div>

                           @php
                               
                               



                           @endphp  
                           <div class="row my-3">
                               <!-- bar charts group -->
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           <h6>Penerimaan Peserta Didik Baru SMKN2 Kec.Guguak <small>Sessions</small></h6>
                                       </div>
                                       
                                       <div class="card my-3 no-b">
                                        <div class="card-header white m-3">
                                            <h6>Data Penerimaan Peserta Didik Baru</h6>
                                             SMKN 2 Kec.Guguak
                                        </div>
                                        
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset ('paper/assets/img/p8.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><i style="color:red;">Penting!!</i></h5>
                                                <p class="card-text">Scan code QR untuk memperoleh kode pendaftaran.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Terima Kasih</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body" >
                                          
                                            <table style="width:100%;" id="example2" class="table table-bordered table-hover data-tables"
                                            data-options='{
                                                 "scrollY": true,
                                                 "scrollX": true
                                             }'>
                                         <thead>
                                         <tr>
                                             <th align="center" colspan="4" style="background-color:#85C1E9; color:white;">Data Siswa SMKN 2 Kec.Guguak</th>
                                         </tr>
                                         
                                         <tr>
                                             
                                             <th>No</th>
                                             <th>kode</th>
                                             <th>Nama</th>
                                             <th>Action</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                           
                                               @foreach ($tampilkan_data as $item)
                                                   
                                                        
                                             <tr>
                                                 <td>{{$item->id}}</td>
                                                 <td>{!! DNS2D::getBarcodeHTML($item->kode, 'QRCODE' ,3,3) !!}</td>
                                                 <td>{{$item->nama_lengkap}}</td>
                                                 <td align="center"> 
                                                    
                                                    <a href="/siswa/data/{{$item->id}}/delete" class="button delete-confirm">
                                                        <i class="icon-close2 text-danger-o text-danger"></i>
                                                    </a>
                                                    {{-- {!! DNS2D::getBarcodeHTML('$item->kode', 'QRCODE') !!} --}}
                                                    <button class="btn btn-light" data-toggle="modal" data-mynp="{{$item->nama_panggilan}}" 
                                                        data-mynl="{{$item->nama_lengkap}}" data-mystatus="{{$item->status}}" 
                                                        data-jk="{{$item->jenis_kelamin}}" data-agama="{{$item->agama}}"
                                                        data-ayah="{{$item->ayah}}" data-pa="{{$item->pendidikan_ayah}}"  data-pka="{{$item->pekerjaan_ayah}}"  
                                                        data-ibu="{{$item->ibu}}" data-pi="{{$item->pendidikan_ibu}}"  data-pki="{{$item->pekerjaan_ibu}}"
                                                        data-wali="{{$item->wali}}" data-pw="{{$item->pendidikan_wali}}"  data-pkw="{{$item->pekerjaan_wali}}" 
                                                        data-pilihan1="{{$item->pilihan1}}" data-pilihan2="{{$item->pilihan2}}" data-rata="{{$item->rata}}" 
                                                        data-target="#detail" style="color:lightseagreen;">Detail</button>
                                                </td>
    
                                                  
                                                 
                                                 
                                           
                                             </tr>
                                             @endforeach 
                                         </tbody>
                                         <tfoot>
                                         <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                         </tr>
                                         </tfoot>
                                            
                                     </table>
                                           
                                        </div>
                                    </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
              
           </div>
       </div>
        </div>

    </div>
</div>
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
          </div>
          <div class="modal-body">
            <div class="panel panel-primary">
               
                <div class="panel-body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line" align="center">

                                    <h4>Data Diri</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="nl" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    
                                    <input readonly type="text" id="np" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="jk" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="agama" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line" align="center">
                                   <h5>Rata-Rata UN</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line" align="center">
                                    
                                    <h5>Jurusan Pilihan 1</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line" align="center">
                                   <h5>Jurusan Pilihan 2</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="rata" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    
                                    <input readonly type="text" id="pilihan1" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="pilihan2" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line" align="center">

                                    <h4>Data Orang Tua</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line" align="center">

                                   <h5>Ayah</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line" align="center">

                                   <h5>Ibu</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">

                                    <input readonly type="text" id="ayah" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    
                                    <input readonly type="text" id="ibu" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="pa" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="pi" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    
                                    <input readonly type="text" id="pka" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="pki" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line" align="center">

                                <h5>Wali</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="wali" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    
                                    <input readonly type="text" id="pw" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input readonly type="text" id="pkw" class="form-control" />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
              </div>
          </div>
        </div>
      
    </div>
  </div>
@endsection