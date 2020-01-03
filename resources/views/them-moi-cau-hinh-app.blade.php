 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm Cấu Hình</h4>

                                <form action="{{ route('ds_cauhinhapp.ds_cauhinhapp.xl-them-moi-cau-hinh-app') }}" method="POST">
                                   
                                	@csrf
                                    <div class="form-group">
                                        <label for="co_hoi_sai">Cơ hội sai </label>
                                        <input type="text" class="form-control" id="co_hoi_sai" name="co_hoi_sai" placeholder="Cơ hội sai">

                                        <label for="thoi_gian_tra_loi">Thời gian trả lời </label>
                                        <input type="text" class="form-control" id="thoi_gian_tra_loi" name="thoi_gian_tra_loi" placeholder="Thời gian trả lời">
                                       
                                    </div>
                                  
                                    <button name="submit"  type="submit" class="btn btn-primary waves-effect waves-light">Thêm Cấu Hình</button>
                                </form>
                                @if(session('error'))
                                <div style="display: flex;">
                                 @php
                                     echo"<p style='color: #ff3600;font-style:bold; margin-top: 2em; font-size:15px; '>Vui lòng không bỏ trống</p>";
                                 @endphp
                                 <i style='color: #ff3600;font-style:bold; margin-top: 25px; font-size:20px; padding-left: 0.2em;' class="mdi mdi-emoticon-dead"></i>
                                </div>
                                @endif
                                
                                @if (session('success'))
                                  @php
                                  echo"<script>alert('Thêm thành công')</script>";
                                  @endphp
                              @endif

                              
                           
                                
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection