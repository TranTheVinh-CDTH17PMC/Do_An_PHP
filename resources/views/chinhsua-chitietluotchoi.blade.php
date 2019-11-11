chinhsua-chitietluotchoi.blade.php @extends('mater')
 @section('main-content')
<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Sửa Chi tiết câu hỏi</h4>
                                <form action="{{ route('ds_chitietluotchoi.ds_chitietluotchoi.chinh-sua-chi-tiet-luot-choi',$chitietluotchoi->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">

                                        <label for="linh_vuc_id">Lượt chơi id</label>
                                        <input type="text" class="form-control" id="luot_choi_id" name="luot_choi_id" placeholder="" value="{{$chitietluotchoi->luot_choi_id}}">

                                        <label for="phuong_an_a">Câu hỏi id</label>
                                        <input type="text" class="form-control" id="cau_hoi_id" name="cau_hoi_id" placeholder="Ten Linh Vuc" value="{{$chitietluotchoi->cau_hoi_id}}">

                                        <label for="phuong_an_c">Phương án  </label>
                                        <input type="text" class="form-control" id="phuong_an" name="phuong_an" placeholder="Ten Linh Vuc" value="{{$chitietluotchoi->phuong_an }}">

                                        <label for="phuong_an_d">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" placeholder="Ten Linh Vuc" value="{{$chitietluotchoi->diem}}">
                                                                        
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu Câu Hỏi</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection

 