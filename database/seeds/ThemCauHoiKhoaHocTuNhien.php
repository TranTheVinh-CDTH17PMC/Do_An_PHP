<?php

use Illuminate\Database\Seeder;

class ThemCauHoiKhoaHocTuNhien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
        	 ['noi_dung'=>'Trong các hàm số lượng giác cơ bản, hàm số nào là hàm số chẵn?','linh_vuc_id'=>8,'phuong_an_a'=>'y=sinx','phuong_an_b'=>'y=cosx','phuong_an_c'=>'y-cotgx','phuong_an_d'=>'y=tgx','dap_an'=>'2'],
            ['noi_dung'=>'Tập hợp các số thực được ký hiệu bằng chữ cái nào?','linh_vuc_id'=>8,'phuong_an_a'=>'N (Số tự nhiên)','phuong_an_b'=>'Z (Số nguyên)','phuong_an_c'=>' Q (Số hữu tỷ)','phuong_an_d'=>'R (Số thực)','dap_an'=>'4'],
            ['noi_dung'=>'Khí nào chiếm 80% thành phần không khí?','linh_vuc_id'=>8,'phuong_an_a'=>'N2','phuong_an_b'=>'O2','phuong_an_c'=>'H2','phuong_an_d'=>'Cl2','dap_an'=>'1'],
            ['noi_dung'=>'Vận tốc của sóng âm truyền trong môi trường nào lớn nhất?','linh_vuc_id'=>8,'phuong_an_a'=>'Chân không','phuong_an_b'=>'Chất khí ','phuong_an_c'=>'Chất rắn','phuong_an_d'=>'Chất lỏng','dap_an'=>'3'],
            ['noi_dung'=>'Côn trùng (sâu bọ) là lớp động vật thuộc ngành động vật nào?','linh_vuc_id'=>8,'phuong_an_a'=>'Động vật nguyên sinh','phuong_an_b'=>'Ruột khoang','phuong_an_c'=>'Thân mềm','phuong_an_d'=>'Chân khớp','dap_an'=>'4'],
            ['noi_dung'=>'Công thức hoá học của Oxi già là gì ? ','linh_vuc_id'=>8,'phuong_an_a'=>'O2','phuong_an_b'=>'O3','phuong_an_c'=>'H2O','phuong_an_d'=>'H2O2','dap_an'=>'4'],
            ['noi_dung'=>'Khí độc Sarin có chứa thành phần nguyên tố Halogen nào?','linh_vuc_id'=>8,'phuong_an_a'=>'Flo','phuong_an_b'=>'Clo','phuong_an_c'=>'Brom','phuong_an_d'=>'Iot','dap_an'=>'1'],
            ['noi_dung'=>'Đơn phân của protein là :','linh_vuc_id'=>8,'phuong_an_a'=>'Glucose','phuong_an_b'=>'Axit amin','phuong_an_c'=>'Axit béo','phuong_an_d'=>'Nuclêotit','dap_an'=>'2'],
            ['noi_dung'=>'Ure là loại phân nào?','linh_vuc_id'=>8,'phuong_an_a'=>'Phân đạm','phuong_an_b'=>'Phân lân','phuong_an_c'=>'Phân kali','phuong_an_d'=>'Phân NPK ','dap_an'=>'1']
        ]);
    }
}
