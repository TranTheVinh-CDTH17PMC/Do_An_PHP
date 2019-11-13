@extends('mater')
@section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" >Danh sách chi tiết lượt chơi</h4>
                                <a href="{{ route('ds_chitietluotchoi.ds_chitietluotchoi.them-moi-chi-tiet-choi') }}"><button class="btn btn-primary waves-effect waves-light" type="button" >Thêm mới</button></a>
                                <a href="{{ route('ds_chitietluotchoi.danh-sach-xoa') }}"><button class="btn btn-primary waves-effect waves-light" type="button" > Thùng rác</button></a>

                                <table id="basic-datatable" class="table dt-responsive nowrap" >
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Lượt chơi id</th>
                                            <th>Câu hỏi</th>
                                            <th>Phương án</th>
                                            <th>Điểm</th>
                                            <th>Sửa | Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                         @foreach($chitietluotchoi as $chitietluotchoi)
                                         <?php 
                                            $cauhoi=DB::table('cau_hoi')->where('id',$chitietluotchoi->cau_hoi_id)->get();
                                         ?>
                                        <tr>
                                           
                                            <td>{{ $chitietluotchoi->id }}</td>
                                            <td>{{ $chitietluotchoi->luot_choi_id }}</td>
                                            <td>{{ $cauhoi[0]->noi_dung }}</td>
                                            <td>{{ $cauhoi[0]->dap_an }}</td>
                                            <td>{{ $chitietluotchoi->diem }}</td>
                                            <td>    
                                               
                                                     
                                               
                                                    
                                                    <a href="{{route('ds_chitietluotchoi.ds_chitietluotchoi.chinh-sua-chi-tiet-luot-choi',$chitietluotchoi->id)}}" >
                                                        <i class="btn btn-purple waves-effect waves-light" >
                                                            <i class="mdi mdi-grease-pencil"></i>
                                                        </i>
                                                    </a> 
                                                    
                                                    <form onsubmit=" return (xacnhan())" method="POST" action="{{route('ds_chitietluotchoi.xoa',$chitietluotchoi->id)}}">
                                                        {{ method_field('DELETE') }}
                                                        {{csrf_field()}}
                                                       
                                                        <button type="submit" id="submit_xoa" class="btn btn-danger waves-effect waves-light" >
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