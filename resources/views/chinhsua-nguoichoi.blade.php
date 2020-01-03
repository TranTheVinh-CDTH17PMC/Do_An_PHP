 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm Người Chơi</h4>

                                <form action="{{ route('ds_nguoichoi.ds_nguoichoi.cs-them-moi-nguoi-choi',$nguoichoi->id) }}" method="POST" enctype="multipart/form-data">
                                   
                                	@csrf
                                    <div class="form-group">
                                        <label for="ten_dang_nhap">Tên Đăng Nhập</label>
                                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="{{$nguoichoi->ten_dang_nhap}}">
                                        <label for="mat_khau">Mật Khẩu</label>
                                        <input type="text" class="form-control" id="mat_khau" name="mat_khau" value="{{$nguoichoi->mat_khau}}">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{$nguoichoi->email}}">
                                        <label for="hinh_dai_dien">Hình đại diện</label>
                                        <input type="file" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien">
                                         <label for="diem_cao_nhat">Điểm cao nhất</label>
                                        <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat" value="{{$nguoichoi->diem_cao_nhat}}">
                                         <label for="credit">Credit</label>
                                        <input type="text" class="form-control" id="credit" name="credit" value="{{$nguoichoi->credit}}">
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Người Chơi</button>
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