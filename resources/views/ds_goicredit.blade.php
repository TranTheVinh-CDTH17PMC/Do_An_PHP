 @extends('mater')
 @section('main-content')
@if (session('status'))
        <script>alert('Thêm câu hỏi thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách gói credit</h4>
                                <a href="{{ route('ds_goicredit.ds_goicredit.xl-them-moi-goi-credit') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm mới</button></a>
                                <a href="{{ route('ds_goicredit.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên gói </th>
                                            <th>Credit </th>
                                            <th>Số tiền </th>
                                            <th>Sửa | Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($goiCredits as $goiCredits)
                                        <tr>
                                           
                                            <td>{{ $goiCredits->id }}</td>
                                            <td>{{ $goiCredits->ten_goi }}</td>
                                            <td>{{ $goiCredits->credit }}</td>
                                            <td>{{ $goiCredits->so_tien }}</td>
                                            <td>    
                                               
                                                     
                                               
                                            
                                                    <a href="{{ route('ds_goicredit.ds_goicredit.cs-them-moi-goi-credit',$goiCredits->id) }}">
                                                      <button class="btn btn-purple waves-effect waves-light" type="button"><i class=" mdi mdi-pencil-outline"></i></button></a> 
                                                    
                                                     <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>
                                                    <form method="POST" action="{{route('ds_goicredit.xoa',$goiCredits->id)}}"  onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                       <button class="btn btn-danger waves-effect waves-light" type="submit" ><i class="mdi mdi-close"  onclick="return confirm('Bạn có chắc là muốn xóa dữ liệu ?');"></i></button></form>
                                               
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
  