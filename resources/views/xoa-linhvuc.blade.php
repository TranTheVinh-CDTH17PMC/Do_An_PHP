 @extends('mater')
 @section('main-content')
<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Sửa Tên Lĩnh Vực</h4>
                                <form action="{{ route('ds_linhvuc.ds_linhvuc.cs-them-moi-linh-vuc',$linhvuc->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="ten_linh_vuc">Tên Lĩnh Vực</label>
                                        <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" placeholder="Ten Linh Vuc" value="{{$linhvuc->ten_linh_vuc}}">
                                       
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu Lĩnh Vực</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection

 