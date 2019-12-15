 @extends('mater')
 @section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách Lượt chơi </h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID Người Chơi</th>
                                            <th>Số Câu</th>
                                            <th>Điểm</th>
                                            <th>Ngày giờ</th>  
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
                                                <script language="javascript">
                                                function check_register()
                                                // kiem tra cac textbox
                                                </script>
                                                    <form method="POST" action="{{route('ds_luotchoi.luulai',$luotchoi->id)}}" onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                        
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Restore</button>
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
  