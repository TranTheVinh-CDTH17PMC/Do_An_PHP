 @extends('mater')
 @section('main-content')
@if (session('status'))
        <javascript>alert('Xin chào các bạn')</javascript>
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
                                            <th>Phương án</th>
                                            <th>Sua | Xoa</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($cauhoi as $cauhoi)
                                        <tr>
                                           
                                            <td>{{ $cauhoi->id }}</td>
                                            <td>{{ $cauhoi->noi_dung }}</td>
                                            <td>{{ $cauhoi->linh_vuc_id }}</td>
                                            <td>{{ $cauhoi->phuong_an_a }}</td>
                                            <td>{{ $cauhoi->phuong_an_b }}</td>
                                            <td>{{ $cauhoi->phuong_an_c }}</td>
                                            <td>{{ $cauhoi->phuong_an_d }}</td>
                                            <td>{{ $cauhoi->dap_an }}</td>
                                            <td>
                                                <a href="{{ route('ds_cauhoi.xulisua',$cauhoi->id)}}">
                                                    <i class="btn btn-danger waves-effect waves-light" >
                                                        Update
                                                    </i></a> 
                                                    
                                                    <form method="POST" action="{{route('ds_cauhoi.xoa',$cauhoi->id)}}">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Delete</button>         
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
 @endsection
  