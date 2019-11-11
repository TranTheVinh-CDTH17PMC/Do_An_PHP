@extends('mater')
@section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách chi tiết lượt chơi đã xóa tạm</h4>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
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
                                                       
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Khôi phục</button>
                                                    </form>
                                                    
                                                    <form method="POST" action="{{route('ds_chitietluotchoi.xoa',$chitietluotchoi->id)}}">
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