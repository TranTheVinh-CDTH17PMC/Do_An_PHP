@extends('mater')
  @if (session('success'))
    <script>alert('Yêu cầu đã được giải quyết')</script>
 @endif
 @section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                  <h4 class="header-title" style="font-size: 3em;text-align: center;">Danh sách chi tiết lượt chơi đã xóa tạm thời</h4>

                                <table id="basic-datatable" class="table dt-responsive nowrap" style="font-size: 2em;text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Lượt chơi id</th>
                                            <th>Câu hỏi id</th>
                                            <th>Phương án</th>
                                            <th>Điểm</th>
                                            <th>Sửa | Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         @foreach($chitietluotchoi as $chitietluotchoi)
                                        <tr>
                                           
                                            <td>{{ $chitietluotchoi->id }}</td>
                                            <td>{{ $chitietluotchoi->luot_choi_id }}</td>
                                            <td>{{ $chitietluotchoi->cau_hoi_id }}</td>
                                            <td>{{ $chitietluotchoi->phuong_an }}</td>
                                            <td>{{ $chitietluotchoi->diem }}</td>
                                            <td>    
                                               
                                                     
                                               
                                                    
                                                    <form method="POST" action="{{route('ds_chitietluotchoi.khoi-phuc',$chitietluotchoi->id)}}">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" style="background-color: tomato;"> <i class="fas fa-reply"></i> </button>
                                                    </form>
                                                    
                                                    
                                                    <form onsubmit="return(xacnhan())" method="POST" action="{{route('ds_chitietluotchoi.xoaluon',$chitietluotchoi->id)}}">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" style="background: #715679">
                                                            <i class="fas fa-gavel"></i>
                                                        </button>
                                                    </form>
                                                        <script >
                                                        function xacnhan(){
                                                            if(confirm("Bạn sẽ không thể khôi phục nó?")==false){
                                                               return false;
                                                            }
                                                            return true;

                                                        }
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