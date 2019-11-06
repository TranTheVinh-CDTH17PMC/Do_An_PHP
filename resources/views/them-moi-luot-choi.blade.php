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
                                        <label for="nguoi_choi_id">ID Người Chơi</label>
                                        <input type="text" class="form-control" id="nguoi_choi_id" name="nguoi_choi_id" placeholder="Ten Linh Vuc">
                                        <label for="so_cau">Số Câu</label>
                                        <input type="text" class="form-control" id="so_cau" name="so_cau" placeholder="Ten Linh Vuc">
                                        <label for="diem">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" placeholder="Ten Linh Vuc">
                                        <label for="ngay_gio">Ngày Giờ</label>
                                        <input type="datetime" class="form-control" id="ngay_gio" name="ngay_gio" placeholder="Ten Linh Vuc">
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm Lượt Chơi</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection