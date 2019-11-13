 @extends('mater')
 @section('main-content')
 @if (session('themmoi'))
        <script>alert('Thêm lượt chơi thành công!')</script>
@endif
@if (session('chinhsua'))
        <script>alert('Sửa lượt chơi thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách lượt chơi</h4>
                                <a href="{{ route('ds_luotchoi.ds_luotchoi.xl-them-moi-luot-choi') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm lượt chơi</button></a>
                                 <a href="{{ route('ds_luotchoi.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID Người Chơi</th>
                                            <th>Số Câu</th>
                                            <th>Điểm</th>
                                            <th>Ngày giờ</th>
                                            <th>Sửa | Xóa</th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($luotchoi as $luotchoi)
                                        <tr>
                                           
                                            <td>{{ $luotchoi->id }}</td>
                                            <td>{{ $luotchoi->nguoi_choi_id }}</td>
                                            <td>{{ $luotchoi->so_cau }}</td>
                                            <td>{{ $luotchoi->diem }}</td>
                                            <td>{{ $luotchoi->ngay_gio }}</td>
                                           
                                            <td>
                                                <a href="{{ route('ds_luotchoi.xulisua',$luotchoi->id)}}">
                                                    <button class="btn btn-purple waves-effect waves-light" type="button"><i class=" mdi mdi-pencil-outline"></i></button></a>
                                                    
                                                    <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>
                                                    <form method="POST" action="{{route('ds_luotchoi.xoa',$luotchoi->id)}}"  onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                    <button class="btn btn-danger waves-effect waves-light" type="submit" ><i class="mdi mdi-trash-can-outline"  onclick="return confirm('Bạn có chắc là muốn xóa dữ liệu ?');"></i></button>
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
  