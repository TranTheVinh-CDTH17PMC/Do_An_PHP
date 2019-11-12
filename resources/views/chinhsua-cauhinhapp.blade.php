 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Cập Nhật Cấu Hình</h4>

                                <form action="{{ route('ds_cauhinhapp.ds_cauhinhapp.cs-them-moi-cau-hinh-app',$cauhinhapp->id) }}" method="POST">
                                   
                                    @csrf
                                    <div class="form-group">
                                        <label for="co_hoi_sai">Cơ hội sai</label>
                                        <input type="text" class="form-control" id="co_hoi_sai" name="co_hoi_sai" value="{{$cauhinhapp->co_hoi_sai}}">
                                        <label for="thoi_gian_tra_loi">Thời gian trả lời (giây)</label>
                                        <input type="text" class="form-control" id="thoi_gian_tra_loi" name="thoi_gian_tra_loi" value="{{$cauhinhapp->thoi_gian_tra_loi}}">
                                        
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Gói Credit</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection