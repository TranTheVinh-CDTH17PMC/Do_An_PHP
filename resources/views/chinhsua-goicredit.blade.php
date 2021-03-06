 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Cập Nhật Gói Credit</h4>

                                <form action="{{ route('ds_goicredit.ds_goicredit.cs-them-moi-goi-credit',$goiCredits->id) }}" method="POST">
                                   
                                    @csrf
                                    <div class="form-group">
                                        <label for="ten_goi">Tên gói Credit</label>
                                        <input type="text" class="form-control" id="ten_goi" name="ten_goi" value="{{$goiCredits->ten_goi}}">
                                        <label for="credit">Credit</label>
                                        <input type="text" class="form-control" id="credit" name="credit" value="{{$goiCredits->credit}}">
                                        <label for="so_tien">Số tiền</label>
                                        <input type="text" class="form-control" id="so_tien" name="so_tien" value="{{$goiCredits->so_tien}}">
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Gói Credit</button>
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