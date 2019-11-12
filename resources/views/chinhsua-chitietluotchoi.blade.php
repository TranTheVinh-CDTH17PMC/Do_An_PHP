@extends('mater')
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
                                        <label for="linh_vuc_id"> Bạn có thể chọn lượt chơi id khác</label>
                                        <select id="single" class="form-control" onchange="displayVals()" >
                                        @foreach($luotchoi as $luotchoi)

                                        <option value="{{$luotchoi->id}}">{{$luotchoi->id}}</option> 
                                 
                                        @endforeach
                                         </select> 
                                          <!--Khi người dùng chọn trong thẻ select sẽ xử lý thay đổi ô lĩnh vực -->
                                             <script  >    
                                                function displayVals() {
                                                 var luot_choi_id = document.getElementById("luot_choi_id");
                                                   var chonlinhvuc = document.getElementById("single");
                                                  luot_choi_id.value=chonlinhvuc.value;

                                                }
                                            </script>


                                        <label for="phuong_an_a">Câu hỏi id</label>
                                        <input type="text" class="form-control" id="cau_hoi_id" name="cau_hoi_id" placeholder="Câu hỏi id" value="{{$chitietluotchoi->cau_hoi_id}}">

                                        <label for="linh_vuc_id"> Bạn có thể chọn câu hỏi id khác</label>
                                        <select id="single2" class="form-control" onchange="displayVals()" >
                                        @foreach($cauhoi as $cauhoi)

                                        <option value="{{$cauhoi->id}}">{{$cauhoi->id}}</option> 
                                 
                                        @endforeach
                                         </select> 
                                          <!--Khi người dùng chọn trong thẻ select sẽ xử lý thay đổi ô lĩnh vực -->
                                             <script  >    
                                                function displayVals() {
                                                 var cau_hoi_id = document.getElementById("cau_hoi_id");
                                                   var chonlinhvuc = document.getElementById("single2");
                                                  cau_hoi_id.value=chonlinhvuc.value;

                                                }
                                            </script>

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

 