 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách lượt chơi</h4>
                                <a href="{{ route('ds_luotchoi.ds_luotchoi.xl-them-moi-luot-choi') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm lượt chơi</button></a>
                                

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
                                                <a href="{{ route('ds_luotchoi.ds_luotchoi.cs-them-moi-luot-choi',$luotchoi->id) }}">
                                                    <button class="btn btn-purple waves-effect waves-light" type="button"><i class=" mdi mdi-pencil-outline"></i></button>
                                                </a>
                                                <button class="btn btn-danger waves-effect waves-light" type="button"><i class="mdi mdi-close"></i></button>
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
  