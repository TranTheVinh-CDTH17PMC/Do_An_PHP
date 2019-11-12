 @extends('mater')
 @section('main-content')
@if (session('status'))
        <script>alert('Thêm câu hỏi thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách lĩnh vực</h4>
                                <a href="{{ route('ds_linhvuc.ds_linhvuc.xl-them-moi-linh-vuc') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm mới</button></a>
                                <a href="{{ route('ds_linhvuc.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên lĩnh vực</th>
                                            <th>Sửa | Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($linhvuc as $linhvuc)
                                        <tr>
                                           
                                            <td>{{ $linhvuc->id }}</td>
                                            <td>{{ $linhvuc->ten_linh_vuc }}</td>
                                            <td>    
                                               
                                                     
                                               
                                                    
                                                    <a href="{{ route('ds_linhvuc.ds_linhvuc.xulisua',$linhvuc->id)}}">
                                                    <i class="btn btn-danger waves-effect waves-light" >Update</i></a> 
                                                    

                                                    <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>
                                                    <form method="POST" action="{{route('ds_linhvuc.xoa',$linhvuc->id)}}"  onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" onclick="return confirm('Bạn có chắc là muốn xóa dữ liệu ?');">Delete</button>
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
  