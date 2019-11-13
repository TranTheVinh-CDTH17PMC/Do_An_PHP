 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm Lượt Chơi</h4>

                                <form action="{{ route('ds_luotchoi.ds_luotchoi.xl-them-moi-luot-choi') }}" method="POST">
                                   
                                	@csrf
                                    <div class="form-group">
                                       <div class="form-group mb-3">
                                                <label for="nguoi_choi_id">Người Chơi ID</label>
                                                <select class="form-control" id="nguoi_choi_id" name="nguoi_choi_id">
                                                    @foreach($nguoichoi as $nguoichoi)
                                                        <option value="{{$nguoichoi->id}}">
                                                          {{$nguoichoi->ten_dang_nhap}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <label for="so_cau">Số Câu</label>
                                        <input type="text" class="form-control" id="so_cau" name="so_cau" placeholder="Ten Linh Vuc">
                                        <label for="diem">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" placeholder="Ten Linh Vuc">
                                        <label for="ngay_gio">Ngày Giờ</label>
                                        <input type="datetime-local" class="form-control" id="ngay_gio" name="ngay_gio" placeholder="Ten Linh Vuc">
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm Lượt Chơi</button>
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