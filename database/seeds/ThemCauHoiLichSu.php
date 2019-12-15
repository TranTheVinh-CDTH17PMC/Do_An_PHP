<?php

use Illuminate\Database\Seeder;

class ThemCauHoiLichSu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
        	['noi_dung'=>'Đại Ngu là quốc hiệu của triều đại nào?','linh_vuc_id'=>2,'phuong_an_a'=>'Triều Ngô','phuong_an_b'=>'Triều Hồ','phuong_an_c'=>'Các chúa Nguyễn','phuong_an_d'=>'Nhà Tây Sơn','dap_an'=>'2'],
            ['noi_dung'=>'Các vua Hùng đặt quốc hiệu nước ta là gì?','linh_vuc_id'=>2,'phuong_an_a'=>'Văn Lang','phuong_an_b'=>'Âu Lạc','phuong_an_c'=>'Vạn Xuân','phuong_an_d'=>'Đại Việt','dap_an'=>'1'],
            ['noi_dung'=>'An Dương Vương đặt quốc hiệu nước ta là gì?','linh_vuc_id'=>2,'phuong_an_a'=>'Âu Lạc','phuong_an_b'=>'Vạn Xuân','phuong_an_c'=>'Đại Cồ Việt','phuong_an_d'=>'Đại Việt','dap_an'=>'1'],
            ['noi_dung'=>'Năm 1010, Lý Thái Tổ đã cho xây dựng điện nào ở trung tâm hoàng thành Thăng Long?','linh_vuc_id'=>2,'phuong_an_a'=>'Điện Kính Thiên','phuong_an_b'=>'Điện Càn Nguyên','phuong_an_c'=>'Điện Càn Chánh','phuong_an_d'=>'Điện Càn Thành','dap_an'=>'2'],
            ['noi_dung'=>'Thành cổ Sơn Tây do vị vua nào xây dựng nên vào năm 1822?','linh_vuc_id'=>2,'phuong_an_a'=>'Gia Long','phuong_an_b'=>'Minh Mạng','phuong_an_c'=>'Thiệu Trị','phuong_an_d'=>'Tự Đức','dap_an'=>'2'],
            ['noi_dung'=>'Chùa nào được Lý Nam Đế cho xây sau khi lên ngôi hoàng đế năm 544 ?','linh_vuc_id'=>2,'phuong_an_a'=>'Chùa Trấn Quốc','phuong_an_b'=>'Chùa Một Cột','phuong_an_c'=>'Chùa Tây Phương','phuong_an_d'=>'Chùa Tứ Pháp','dap_an'=>'1'],
            ['noi_dung'=>'Vạn Thắng Vương là ai ?','linh_vuc_id'=>2,'phuong_an_a'=>'Đinh Bộ Lĩnh','phuong_an_b'=>'Lê Hoàn','phuong_an_c'=>'Lê Lợi','phuong_an_d'=>'Nguyễn Huệ','dap_an'=>'1'],
            ['noi_dung'=>'Sau khi chiến thắng quân Nam Hán vào năm 938, Ngô Quyền đã đóng đô ở đâu?','linh_vuc_id'=>2,'phuong_an_a'=>'Hoa Lư','phuong_an_b'=>'Đại La','phuong_an_c'=>'Cổ Loa','phuong_an_d'=>'Phú Xuân','dap_an'=>'3'],
            ['noi_dung'=>'Từ “nhị thánh” trong câu “ Đây là nơi chiến địa buổi Trùng Hưng nhị thánh bắt Ô Mã” (Bạch Đằng giang phú ) gồm những người nào ?','linh_vuc_id'=>2,'phuong_an_a'=>'Ngô Quyền và Trần Hưng Đạo.','phuong_an_b'=>'Ngô Quyền và Trần Thái Tông.','phuong_an_c'=>'Ngô Quyền và Trần Nhân Tông.','phuong_an_d'=>'Trần Thánh Tông và Trần Nhân Tông.','dap_an'=>'4'],
            ['noi_dung'=>'Hổ Quyền dưới thời nhà Nguyễn là một đấu trường của những cuộc tử chiến giữa hổ và loài động vật nào?','linh_vuc_id'=>2,'phuong_an_a'=>'Bò tót','phuong_an_b'=>'Báo','phuong_an_c'=>'Voi','phuong_an_d'=>'Chó','dap_an'=>'3'],
            ['noi_dung'=>'Vị tướng nào dưới thời Hai Bà Trưng là ông tổ của lò vật Mai Động?','linh_vuc_id'=>2,'phuong_an_a'=>'Ông Đông Bảng','phuong_an_b'=>'Ông Đồng','phuong_an_c'=>'Tam Trinh','phuong_an_d'=>'Đào Kỳ','dap_an'=>'3'],
            ['noi_dung'=>'Tập “Dư địa chí” được Nguyễn Trãi soạn dưới triều vua nào?','linh_vuc_id'=>2,'phuong_an_a'=>'Lê Thái Tổ','phuong_an_b'=>'Lê Thái Tông','phuong_an_c'=>'Lê Thánh Tông','phuong_an_d'=>'Lê Hiến Tông','dap_an'=>'2']
        ]);
    }
}
