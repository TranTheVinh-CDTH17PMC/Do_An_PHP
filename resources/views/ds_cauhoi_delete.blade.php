 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách câu hỏi</h4>
                                <a href="{{ route('ds_cauhoi.ds_cauhoi.xl-them-moi-cau-hoi') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm câu hỏi</button></a>
                                

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
                                                <script language="javascript">
                                                function check_register()
                                                // kiem tra cac textbox
                                                </script>
                                                    <form method="POST" action="{{route('ds_cauhoi.luulai',$cauhoi->id)}}" onsubmit="return check_register();">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                        
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" onclick="return confirm('Bạn có muốn Restore không ?');">Restore</button>
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
  