<?php

use Illuminate\Database\Seeder;

class ThemCauHoiVanHoaSuKien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
        	['noi_dung'=>'Sự kiện giờ Trái Đất, sáng kiến của WWF được tổ chức lần đầu tiên vào năm 2007 tại thành phố nào?','linh_vuc_id'=>7,'phuong_an_a'=>'Sydney','phuong_an_b'=>'Tokyo','phuong_an_c'=>'Bắc Kinh','phuong_an_d'=>'Singapore','dap_an'=>'1'],
            ['noi_dung'=>'Phú Yên-tỉnh đăng cai Năm du lịch quốc gia 2011 ở khu vực nào?','linh_vuc_id'=>7,'phuong_an_a'=>'Nam Trung Bộ','phuong_an_b'=>'Tây Nguyên','phuong_an_c'=>'Đông Bắc Bộ','phuong_an_d'=>'Tây Nam Bộ','dap_an'=>'1'],
            ['noi_dung'=>'Lễ Hội Gióng chính thức được nhận bằng Di sản văn hoá thế giới vào năm nào?','linh_vuc_id'=>7,'phuong_an_a'=>'2008','phuong_an_b'=>'2009','phuong_an_c'=>'2010','phuong_an_d'=>'2011','dap_an'=>'C'],
            ['noi_dung'=>'Việt Nam đã đăng cai cuộc thi sắc đẹp nào trong năm 2010?','linh_vuc_id'=>7,'phuong_an_a'=>'Hoa hậu thế giới','phuong_an_b'=>'Hoa hậu Trái Đất','phuong_an_c'=>'Hoa hậu hoàn vũ','phuong_an_d'=>'Hoa hậu quốc tế','dap_an'=>'1'],
            ['noi_dung'=>'Loài hoa nào được chọn là Quốc hoa của Việt Nam?','linh_vuc_id'=>7,'phuong_an_a'=>'Hoa sen','phuong_an_b'=>'Hoa mai','phuong_an_c'=>'Hoa đào','phuong_an_d'=>'Hoa hồng','dap_an'=>'1'],
            ['noi_dung'=>'Bánh pía là đặc sản có nguồn gốc từ tỉnh nào?','linh_vuc_id'=>7,'phuong_an_a'=>'Bến Tre','phuong_an_b'=>'Sóc Trăng','phuong_an_c'=>'Bạc Liêu','phuong_an_d'=>'Hậu Giang','dap_an'=>'2']
        ]);
    }
}
