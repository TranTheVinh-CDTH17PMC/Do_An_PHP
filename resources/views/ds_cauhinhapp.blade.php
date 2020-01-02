 @extends('mater')
 @section('main-content')
@if (session('status'))
        <script>alert('Thêm cấu hình thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách cấu hình</h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Cơ hội sai </th>
                                            <th>Thời gian trả lời (giây) </th>
                                            <th>Cập Nhật</th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($cauhinhapp as $cauhinhapp)
                                        <tr>
                                           
                                            <td>{{ $cauhinhapp->id }}</td>
                                            <td>{{ $cauhinhapp->co_hoi_sai }}</td>
                                            <td>{{ $cauhinhapp->thoi_gian_tra_loi }}</td>
                                            <td>    
                                               
                                                     
                                               
                                            
                                                    <a href="{{ route('ds_cauhinhapp.ds_cauhinhapp.cs-them-moi-cau-hinh-app',$cauhinhapp->id) }}">
                                                      <button class="btn btn-purple waves-effect waves-light" type="button"><i class=" mdi mdi-pencil-outline"></i></button></a> 
                                                    
                                                     <script language="javascript">
                                                    function check_register()
                                                    // kiem tra cac textbox
                                                     </script>                                               
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
  