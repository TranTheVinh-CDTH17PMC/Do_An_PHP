 @extends('mater')
 @section('main-content')
@if (session('themmoi'))
        <script>alert('Thêm câu hỏi thành công!')</script>
@endif
@if (session('chinhsua'))
        <script>alert('Sửa câu hỏi thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách câu hỏi</h4>
                                <a href="{{ route('ds_cauhoi.ds_cauhoi.xl-them-moi-cau-hoi') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm câu hỏi</button></a>
                                
                                <a href="{{ route('ds_cauhoi.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nội dung</th>
                                            <th>Lĩnh Vực ID</th>
                                            <th>Phương án A</th>
                                            <th>Phương án B</th>
                                            <th>Phương án C</th>
                                            <th>Phương án D</th>
                                            <th>Đáp án</th>
                                            <th>Sửa | Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($cauhoi as $cauhoi)
                                         <?php 
                                            $linhvuc=DB::table('linh_vuc')->where('id',$cauhoi->linh_vuc_id)->get();
                                         ?>
                                        <tr>
                                           
                                            <td>{{ $cauhoi->id }}</td>
                                            <td>{{ $cauhoi->noi_dung }}</td>
                                            <td>{{ $linhvuc[0]->ten_linh_vuc}}</td>
                                            <td>{{ $cauhoi->phuong_an_a }}</td>
                                            <td>{{ $cauhoi->phuong_an_b }}</td>
                                            <td>{{ $cauhoi->phuong_an_c }}</td>
                                            <td>{{ $cauhoi->phuong_an_d }}</td>
                                            <td>{{ $cauhoi->dap_an }}</td>
                                            <td>
                                                 <a href="{{ route('ds_cauhoi.xulisua',$cauhoi->id)}}">
                                                    <button class="btn btn-purple waves-effect waves-light" type="button"><i class=" mdi mdi-pencil-outline"></i></button></a>
                                                    
                                                    <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>
                                                    <form method="POST" action="{{route('ds_cauhoi.xoa',$cauhoi->id)}}"  onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                    <button class="btn btn-danger waves-effect waves-light" type="submit" onclick="return confirm('Bạn có chắc là muốn xóa dữ liệu ?');" ><i class="mdi mdi-trash-can-outline" ></i></button>
                                                </form>

                                                   
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
 @endsection
  