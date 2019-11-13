 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Cập Nhật Lượt Chơi</h4>

                                <form action="{{ route('ds_luotchoi.ds_luotchoi.cs-them-moi-luot-choi',$luotchoi->id) }}" method="POST">
                                   
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
                                        <input type="text" class="form-control" id="so_cau" name="so_cau" value="{{$luotchoi->so_cau}}">
                                        <label for="diem">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" value="{{$luotchoi->diem}}">
                                        <label for="ngay_gio">Ngày Giờ</label>
                                        <input type="text" class="form-control" id="ngay_gio" name="ngay_gio" value="{{$luotchoi->ngay_gio}}">
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Lượt Chơi</button>
                                    </form>
                                @if(session('error'))
                                <div style="display: flex;">
                                 @php
                                     echo"<p style='color: #ff3600;font-style:bold; margin-top: 2em; font-size:15px; '>Vui lòng không bỏ trống</p>";
                                 @endphp
                                 <i style='color: #ff3600;font-style:bold; margin-top: 25px; font-size:20px; padding-left: 0.2em;' class="mdi mdi-emoticon-dead"></i>
                                </div>
                                @endif
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection