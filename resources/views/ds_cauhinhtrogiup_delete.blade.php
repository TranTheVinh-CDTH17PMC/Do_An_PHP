 @extends('mater')
 @section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách Cấu Hình</h4>
                                <a href="{{ route('ds_cauhinhtrogiup.danh-sach') }}"><button type="button" class="btn btn-info">Trở về</button></a>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Loại trợ giúp</th>
                                            <th>Thứ tự</th>
                                            <th>Credit</th>
                                            <th>Restore</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($cauhinhtrogiup as $cauhinhtrogiup)
                                        <tr>
                                           
                                            <td>{{ $cauhinhtrogiup->id }}</td>
                                            <td>{{ $cauhinhtrogiup->loai_tro_giup }}</td>
                                            <td>{{ $cauhinhtrogiup->thu_tu}}</td>
                                            <td>{{ $cauhinhtrogiup->credit}}</td>

                                            <td>    
                                                <script language="javascript">
                                                function check_register()
                                                // kiem tra cac textbox
                                                </script>
                                                <form method="POST" action="{{route('ds_cauhinhtrogiup.luulai',$cauhinhtrogiup->id)}}" onsubmit="return check_register();">
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

  