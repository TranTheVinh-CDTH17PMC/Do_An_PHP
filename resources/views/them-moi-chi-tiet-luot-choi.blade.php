 @extends('mater')

 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm Chi tiết lượt chơi</h4>

                                <form action="{{ route('ds_chitietluotchoi.ds_chitietluotchoi.xl-them-moi-chi-tiet-luot-choi') }}" method="POST">
                                   
                                	@csrf
                                    <div class="form-group">
                                  

                                        <div class="form-group mb-3">
                                                <label for="luot_choi_id">Lượt Chơi ID</label>
                                                <select class="form-control" id="nguoi_choi_id" name="luot_choi_id">
                                                    @foreach($luotchoi as $luotchoi)
                                                        <option>{{$luotchoi->id}}</option>
                                                    @endforeach
                                                </select>
                                        </div>


                                         <div class="form-group mb-3">
                                                <label for="cau_hoi_id">Câu hỏi ID</label>
                                                <select class="form-control" id="cau_hoi_id" name="cau_hoi_id">
                                                    @foreach($cauhoi as $cauhoi)
                                                        <option>{{$cauhoi->id}}</option>
                                                    @endforeach
                                                </select>
                                        </div>

                                        <label for="phuong_an_c">Phương án  </label>
                                        <input type="text" class="form-control" id="phuong_an" name="phuong_an" placeholder="Phương án>
                                        <label for="phuong_an_d">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" placeholder="Điểm">
                                     
                                    </div>
                                     @if (session('success'))
                                         <script >
                                            alert('Thêm thành công');
                                         </script>
                                         
                                      @endif
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm chi tiết lượt chơi</button>
                                      @if(session('error'))
                                        <div style="display: flex;">
                                            @php
                                              echo"<p style='color: #ff3600;font-style:bold; margin-top: 2em; font-size:15px; '>Vui lòng không bỏ trống</p>";
                                            @endphp
                                              <i style='color: #ff3600;font-style:bold; margin-top: 25px; font-size:20px; padding-left: 0.2em;' class="mdi mdi-emoticon-dead"></i>
                                        </div>
                                                                   
                                                                   
                                     @endif
                                       @if(session('notint'))
                                        <div style="display: flex;">
                                            @php
                                              echo"<p style='color: #ff3600;font-style:bold; margin-top: 2em; font-size:15px; '>Điểm phải số nguyên!</p>";
                                            @endphp
                                              <i style='color: #ff3600;font-style:bold; margin-top: 25px; font-size:20px; padding-left: 0.2em;' class="mdi mdi-emoticon-dead"></i>
                                        </div>
                                                                   
                                                                   
                                     @endif
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection