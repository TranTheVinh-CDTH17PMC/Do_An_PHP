 @extends('mater')
 @section('main-content')

 @if (session('themmoi'))
        <script>alert('Thêm người chơi thành công!')</script>
@endif
@if (session('chinhsua'))
        <script>alert('Sửa người chơi thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách người chơi</h4>
                                 <a href="{{ route('ds_nguoichoi.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Email</th>
                                            <th>Hình đại diện</th>
                                            <th>Điểm cao nhất</th>
                                            <th>Credit</th>
                                            <th>ID Mạng Xã Hội</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($nguoichoi as $nguoichoi)
                                        <tr>
                                           
                                            <td>{{ $nguoichoi->id }}</td>
                                            <td>{{ $nguoichoi->ten_dang_nhap }}</td>
                                            
                                            <td>{{ $nguoichoi->email}}</td>
                                            <td><img src="{{asset('img/'.$nguoichoi->hinh_dai_dien) }}" width="80px" height="80px"></td>
                                            <td>{{ $nguoichoi->diem_cao_nhat }}</td>
                                            <td>{{ $nguoichoi->credit }}</td>
                                             <td>{{ $nguoichoi->MXH_ID }}</td>
                                            <td>
                                            
                                                    <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>
                                                    <form method="POST" action="{{route('ds_nguoichoi.xoa',$nguoichoi->id)}}"  onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                       <button class="btn btn-danger waves-effect waves-light" type="submit" ><i class="mdi mdi-trash-can-outline"  onclick="return confirm('Bạn có chắc là muốn xóa dữ liệu ?');"></i></button>
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
  