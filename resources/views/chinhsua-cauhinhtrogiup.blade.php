 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Cập Nhật Cấu Hình</h4>

                                <form action="{{ route('ds_cauhinhtrogiup.ds_cauhinhtrogiup.cs-them-moi-cau-hinh-tro-giup',$cauhinhtrogiup->id) }}" method="POST">
                                   
                                    @csrf
                                    <div class="form-group">
                                        <label for="loai_tro_giup">Loại Trợ Giúp</label>
                                        <input type="text" class="form-control" id="loai_tro_giup" name="loai_tro_giup" value="{{$cauhinhtrogiup->loai_tro_giup}}">

                                        <label for="thu_tu">Thứ tự</label>
                                        <input type="text" class="form-control" id="thu_tu" name="thu_tu" value="{{$cauhinhtrogiup->thu_tu}}">

                                        <label for="credit">Credit</label>
                                        <input type="text" class="form-control" id="credit" name="credit" value="{{$cauhinhtrogiup->credit}}">
                                        
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Cấu Hình</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection