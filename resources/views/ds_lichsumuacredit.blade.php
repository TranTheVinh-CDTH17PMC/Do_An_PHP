@extends('mater')
@section('main-content')

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" >Lịch sử mua credit</h4>
                                

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Người chơi </th>
                                            <th>Gói credit </th>
                                            <th>Credit</th>
                                            <th>Số tiền</th>
    
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                         
                                           @foreach($lsmua as $lsmua)
                                         <?php 
                                            $nguoichoi=DB::table('nguoi_choi')->where('id',$lsmua->nguoi_choi_id)->get();
                                            $goicredit=DB::table('goi_credit')->where('id',$lsmua->goi_credit_id)->get();
                                         ?>
                                        <tr>
                                           
                                            <td>{{ $lsmua->id }}</td>
                                            <td>{{ $nguoichoi[0]->ten_dang_nhap }}</td>
                                            <td>{{ $goicredit[0]->ten_goi }}</td>
                                            <td>{{ $lsmua->credit }}</td>
                                            <td>{{ $lsmua->so_tien }}</td>
                                           
                                        </tr>
                                         @endforeach       
                                              
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
@endsection