 @extends('mater')
 @section('main-content')
@if (session('status'))
        <script>alert('Thêm câu hỏi thành công!')</script>
@endif
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách gói credit</h4>
                                <a href="{{ route('ds_goicredit.ds_goicredit.xl-them-moi-goi-credit') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thêm mới</button></a>
                                <a href="{{ route('ds_linhvuc.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button">Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên gói </th>
                                            <th>Credit </th>
                                            <th>Số tiền </th>
                                            <th>Sửa | Xóa</th>
                                            
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
                                               
                                                     
                                               
                                                    
                                                    <a href="{{ route('ds_linhvuc.ds_linhvuc.xulisua',$linhvuc->id)}}">
                                                    <i class="btn btn-danger waves-effect waves-light" >Update</i></a> 
                                                    
                                                    <form method="POST" action="{{route('ds_linhvuc.xoa',$linhvuc->id)}}">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Delete</button>
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
  