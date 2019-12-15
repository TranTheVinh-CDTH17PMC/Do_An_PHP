<?php

use Illuminate\Database\Seeder;

class ThemCauHoiTheThao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cau_hoi')->insert([
         	['noi_dung'=>'Giải Grand Slam đầu tiên trong năm là giải nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Austrlia mở rộng','phuong_an_b'=>'Wimbledon','phuong_an_c'=>'Roland Garos','phuong_an_d'=>'Mỹ mở rộng','dap_an'=>'1'],
            ['noi_dung'=>'Cùng với Hà Nội T&T (vô địch V-League 2010), CLB nào của Việt Nam tham dự AFC Cup 2011?','linh_vuc_id'=>1,'phuong_an_a'=>'Sông Lam Nghệ An','phuong_an_b'=>'SHB Đà Nẵng','phuong_an_c'=>'Hoàng Anh Gia Lai','phuong_an_d'=>'Becamex Bình Dương','dap_an'=>'1'],
            ['noi_dung'=>'AFC Asian Cup 2011 được tổ chức tại quốc gia nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Qatar','phuong_an_b'=>'Hàn Quốc','phuong_an_c'=>'Nhật Bản','phuong_an_d'=>'Iraq','dap_an'=>'1'],
            ['noi_dung'=>'Đội nào lên ngôi vô địch AFC Asian Cup 2011 tổ chức tại Qatar?','linh_vuc_id'=>1,'phuong_an_a'=>'Nhật Bản','phuong_an_b'=>'Austrlia','phuong_an_c'=>'Hàn Quốc','phuong_an_d'=>'Uzbekistan','dap_an'=>'1'],
            ['noi_dung'=>'Việt Nam lần đầu tiên vô địch AFF Cup là vào năm nào?','linh_vuc_id'=>1,'phuong_an_a'=>'2004','phuong_an_b'=>'2006','phuong_an_c'=>'2008','phuong_an_d'=>'2010','dap_an'=>'1'],
            ['noi_dung'=>'CLB nào vô địch FIFA Club World Cup 2010 tổ chức tại Qatar?','linh_vuc_id'=>1,'phuong_an_a'=>'Inter Milan','phuong_an_b'=>'Real Madrid','phuong_an_c'=>'Bayern Munich','phuong_an_d'=>'Manchester United','dap_an'=>'1'],
            ['noi_dung'=>'Vận động viên đứng đầu danh sách 100 vận động viên Việt Nam tiêu biểu của năm 2010 là vận động viên Vũ Thị Hương của môn thể thao nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Điền kinh','phuong_an_b'=>'Cờ vua','phuong_an_c'=>'Karatedo','phuong_an_d'=>'Cầu lông','dap_an'=>'1'],
            ['noi_dung'=>'Giải đua xe đạp vòng quanh nước Pháp năm 2001 có mấy chặng đua?','linh_vuc_id'=>1,'phuong_an_a'=>'16','phuong_an_b'=>'21','phuong_an_c'=>'26','phuong_an_d'=>'31','dap_an'=>'1'],
            ['noi_dung'=>'Vận động viên nào sau đây giành được huy chương vàng tại ASIAD 16 (tổ chức tại Quảng Châu-Trung Quốc 2010)','linh_vuc_id'=>1,'phuong_an_a'=>'Lê Bích Phương','phuong_an_b'=>' Trương Thanh Hằng','phuong_an_c'=>'Vũ Thị Hương','phuong_an_d'=>'Lê Quang Liêm','dap_an'=>'1'],
            ['noi_dung'=>'Đội tuyển bóng đá nào xếp thứ ba tại World Cup 2010?','linh_vuc_id'=>1,'phuong_an_a'=>'Tây Ban Nha','phuong_an_b'=>'Hà Lan','phuong_an_c'=>'Đức','phuong_an_d'=>'Tây Ban Nha','dap_an'=>'3'],
            ['noi_dung'=>'Trong môn quần vợt thì một năm có bao nhiêu giải Grand Slam được tổ chức?','linh_vuc_id'=>1,'phuong_an_a'=>'3','phuong_an_b'=>'4','phuong_an_c'=>'5','phuong_an_d'=>'6','dap_an'=>'B'],
            ['noi_dung'=>'Tại thể vận hội Olympic trẻ lần 1-2010 tại Singapore, thể thao Việt Nam giành được 4 huy chương, trong đó vận động viên nào giành được huy chương vàng duy nhất?','linh_vuc_id'=>1,'phuong_an_a'=>'Thạch Kim Tuấn (cử tạ)','phuong_an_b'=>'Nguyễn Thanh Thảo (Taekwondo)','phuong_an_c'=>'Nguyễn Quốc Cương (Taekwondo)','phuong_an_d'=>'Vũ Thị Trang (cầu lồng)','dap_an'=>'1'],
            ['noi_dung'=>'Nước nào là nước chủ nhà tại Copa America 2011?','linh_vuc_id'=>1,'phuong_an_a'=>'Argentina','phuong_an_b'=>'Boliviar','phuong_an_c'=>'Venezuela','phuong_an_d'=>'Paraguay','dap_an'=>'1']

         ]);
    }
}
