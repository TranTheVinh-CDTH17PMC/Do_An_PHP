 @extends('mater')
 @section('main-content')
@if (session('status'))
        <script>alert('Thêm cấu hình điểm thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách cấu hình</h4>
                                <a href="{{ route('ds_cauhinhdiem.ds_cauhinhdiem.xl-them-moi-cau-hinh-diem') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm mới</button></a>
                                <a href="{{ route('ds_cauhinhdiem.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Thứ tự </th>
                                            <th>Điểm</th>
                                            <th>Sửa | Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($cauhinhdiem as $cauhinhdiem)
                                        <tr>
                                           
                                            <td>{{ $cauhinhdiem->id }}</td>
                                            <td>{{ $cauhinhdiem->thu_tu }}</td>
                                            <td>{{ $cauhinhdiem->diem }}</td>
                                            <td>    
                                               
                                                     
                                               
                                            
                                                    <a href="{{ route('ds_cauhinhdiem.ds_cauhinhdiem.cs-them-moi-cau-hinh-diem',$cauhinhdiem->id) }}">
                                                      <button class="btn btn-purple waves-effect waves-light" type="button"><i class=" mdi mdi-pencil-outline"></i></button></a> 
                                                    
                                                     <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>
                                                    <form method="POST" action="{{route('ds_cauhinhdiem.xoa',$cauhinhdiem->id)}}"  onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                       <button type="submit" id="submit_xoa" class="btn btn-danger waves-effect waves-light" onclick="return confirm('Bạn có chắclà muốn xóa dữ liệu ?');" ><i class="mdi mdi-trash-can-outline"></i>
                                                        </button>
                                                       </form>
                                               
                                            </td>
                                           
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
 @endsection
  