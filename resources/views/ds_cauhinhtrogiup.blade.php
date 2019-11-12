 @extends('mater')
 @section('main-content')
@if (session('status'))
        <script>alert('Thêm cấu hình thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách cấu hình trợ giúp</h4>
                                <a href="{{ route('ds_cauhinhtrogiup.ds_cauhinhtrogiup.xl-them-moi-cau-hinh-tro-giup') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm mới</button></a>
                                <a href="{{ route('ds_cauhinhtrogiup.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Loại trợ giúp</th>
                                            <th>Thứ tự </th>
                                            <th>Credit</th>
                                            <th>Sửa | Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($cauhinhtrogiup as $cauhinhtrogiup)
                                        <tr>
                                           
                                            <td>{{ $cauhinhtrogiup->id }}</td>
                                            <td>{{ $cauhinhtrogiup->loai_tro_giup }}</td>
                                            <td>{{ $cauhinhtrogiup->thu_tu }}</td>
                                            <td>{{ $cauhinhtrogiup->credit }}</td>
                                            <td>    
                                               
                                                     
                                               
                                            
                                                    <a href="{{ route('ds_cauhinhtrogiup.ds_cauhinhtrogiup.cs-them-moi-cau-hinh-tro-giup',$cauhinhtrogiup->id) }}">
                                                      <button class="btn btn-purple waves-effect waves-light" type="button"><i class=" mdi mdi-pencil-outline"></i></button></a> 
                                                    
                                                     <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>
                                                    <form method="POST" action="{{route('ds_cauhinhtrogiup.xoa',$cauhinhtrogiup->id)}}"  onsubmit="return check_register();">
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
  