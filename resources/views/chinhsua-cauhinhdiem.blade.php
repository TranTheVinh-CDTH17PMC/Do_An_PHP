 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Cập Nhật Cấu Hình Điểm</h4>

                                <form action="{{ route('ds_cauhinhdiem.ds_cauhinhdiem.cs-them-moi-cau-hinh-diem',$cauhinhdiem->id) }}" method="POST">
                                   
                                    @csrf
                                    <div class="form-group">
                                        <label for="thu_tu">Thứ tự</label>
                                        <input type="text" class="form-control" id="thu_tu" name="thu_tu" value="{{$cauhinhdiem->thu_tu}}">
                                        <label for="diem">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" value="{{$cauhinhdiem->diem}}">
                                        
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Cấu Hình</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection