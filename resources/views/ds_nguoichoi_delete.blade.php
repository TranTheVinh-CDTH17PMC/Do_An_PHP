 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách người chơi</h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                        
                                            <th>Email</th>
                                            <th>Hình đại diện</th>
                                             <th>Credit</th>  
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($nguoichoi as $nguoichoi)
                                        <tr>
                                           
                                            <td>{{ $nguoichoi->id }}</td>
                                            <td>{{ $nguoichoi->ten_dang_nhap }}</td>
                                            
                                            <td>{{ $nguoichoi->email}}</td>
                                            <td><img src="{{asset('img/'.$nguoichoi->hinh_dai_dien) }}" width="80px" height="80px"></td>
                                            <td>{{ $nguoichoi->credit }}</td>
                                           
                                            <td>
                                                <script language="javascript">
                                                function check_register()
                                                // kiem tra cac textbox
                                                </script>
                                                    <form method="POST" action="{{route('ds_nguoichoi.luulai',$nguoichoi->id)}}" onsubmit="return check_register();">
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
  