@extends('mater')
@section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" style="font-size: 3em;text-align: center;">Danh sách chi tiết lượt chơi</h4>
                                <a href="{{ route('ds_chitietluotchoi.ds_chitietluotchoi.them-moi-chi-tiet-choi') }}"><button class="btn btn-primary waves-effect waves-light" type="button" style="background: #082756;">Thêm mới</button></a>
                                <a href="{{ route('ds_chitietluotchoi.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button" style="background: #1e3832;margin-left: 80%;"> <i class="icon-trash" style="font-size: 3em;"></i></button></a>

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
                                               
                                                     
                                               
                                                    
                                                    <a href="{{route('ds_chitietluotchoi.ds_chitietluotchoi.chinh-sua-chi-tiet-luot-choi',$chitietluotchoi->id)}}" >
                                                        <i class="btn btn-danger waves-effect waves-light" style="background-color: tomato;" >
                                                            <i class="mdi mdi-grease-pencil"></i>
                                                        </i>
                                                    </a> 
                                                    
                                                    <form onsubmit=" return (xacnhan())" method="POST" action="{{route('ds_chitietluotchoi.xoa',$chitietluotchoi->id)}}">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                        <button type="submit" id="submit_xoa" class="btn btn-primary waves-effect waves-light" style="background: #082756;" >
                                                            <i class="mdi mdi-trash-can-outline"></i>
                                                        </button>
                                                    </form>
                                                    <script >
                                                        function xacnhan(){
                                                            if(confirm("Bạn đã sẵn sàng vứt chưa?")==false){
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