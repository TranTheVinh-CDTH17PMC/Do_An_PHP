 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm Câu Hỏi</h4>

                                <form action="{{ route('ds_cauhoi.ds_cauhoi.xl-them-moi-cau-hoi') }}" method="POST">
                                   
                                	@csrf
                                    <div class="form-group">
                                        <label for="noi_dung">Nội Dung </label>
                                        <input type="text" class="form-control" id="noi_dung" name="noi_dung" placeholder="Ten Linh Vuc">
                                        <div class="form-group mb-3">
                                                <label for="linh_vuc_id">Lĩnh Vực ID</label>
                                                <select class="form-control" id="linh_vuc_id" name="linh_vuc_id">
                                                    @foreach($linhvuc as $linhvuc)                                                        <option value="{{$linhvuc->id}}">
                                                            {{$linhvuc->ten_linh_vuc}}
                                                        </option>

                                                    @endforeach
                                                </select>
                                        </div>
                                        <label for="phuong_an_a">Phương án A </label>
                                        <input type="text" class="form-control" id="phuong_an_a" name="phuong_an_a" placeholder="Ten Linh Vuc">
                                        <label for="phuong_an_b">Phương án B </label>
                                        <input type="text" class="form-control" id="phuong_an_b" name="phuong_an_b" placeholder="Ten Linh Vuc">
                                        <label for="phuong_an_c">Phương án C </label>
                                        <input type="text" class="form-control" id="phuong_an_c" name="phuong_an_c" placeholder="Ten Linh Vuc">
                                        <label for="phuong_an_d">Phương án D</label>
                                        <input type="text" class="form-control" id="phuong_an_d" name="phuong_an_d" placeholder="Ten Linh Vuc">
                                        <div class="form-group mb-3">
                                                <label for="dap_an-select">Đáp án</label>
                                                <select class="form-control" id="dap_an" name="dap_an">
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                   
                                                </select>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm Câu Hỏi</button>

                                </form>
                                 @if(session('error'))
                                <div style="display: flex;">
                                 @php
                                     echo"<p style='color: #ff3600;font-style:bold; margin-top: 2em; font-size:15px; '>Vui lòng không bỏ trống</p>";
                                 @endphp
                                 <i style='color: #ff3600;font-style:bold; margin-top: 25px; font-size:20px; padding-left: 0.2em;' class="mdi mdi-emoticon-dead"></i>
                                  @endif
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection