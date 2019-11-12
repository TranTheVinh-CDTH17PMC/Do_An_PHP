 @extends('mater')
 @section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách Cấu Hình</h4>
                                <a href="{{ route('ds_cauhinhapp.danh-sach') }}"><button type="button" class="btn btn-info">Trở về</button></a>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Cơ hội sai</th>
                                            <th>Thời gian trả lời(giây)</th>
                                            <th>Restore</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($cauhinhapp as $cauhinhapp)
                                        <tr>
                                           
                                            <td>{{ $cauhinhapp->id }}</td>
                                            <td>{{ $cauhinhapp->co_hoi_sai }}</td>
                                            <td>{{ $cauhinhapp->thoi_gian_tra_loi }}</td>

                                            <td>    
                                                <script language="javascript">
                                                function check_register()
                                                // kiem tra cac textbox
                                                </script>
                                                    <form method="POST" action="{{route('ds_cauhinhapp.luulai',$cauhinhapp->id)}}" onsubmit="return check_register();">
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

  