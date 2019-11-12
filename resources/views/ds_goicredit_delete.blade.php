 @extends('mater')
 @section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách Gói Credit</h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên lĩnh vực</th>
                                            <th>Restore</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($goiCredits as $goiCredits)
                                        <tr>
                                           
                                            <td>{{ $goiCredits->id }}</td>
                                            <td>{{ $goiCredits->ten_goi }}</td>
                                            <td>{{ $goiCredits->credit }}</td>
                                            <td>{{ $goiCredits->so_tien }}</td>

                                            <td>    
                                                <script language="javascript">
                                                function check_register()
                                                // kiem tra cac textbox
                                                </script>
                                                    <form method="POST" action="{{route('ds_goicredit.luulai',$goiCredits->id)}}" onsubmit="return check_register();">
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
  