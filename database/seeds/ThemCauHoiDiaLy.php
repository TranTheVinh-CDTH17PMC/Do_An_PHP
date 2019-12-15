<?php

use Illuminate\Database\Seeder;

class ThemCauHoiDiaLy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
        	
            ['noi_dung'=>'Sông Bến Hải và sông Thạch Hãn nằm ở tỉnh nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Quảng Bình','phuong_an_b'=>'Quảng Ninh','phuong_an_c'=>'Quảng Trị','phuong_an_d'=>'Quảng Ngãi','dap_an'=>'3'],
            ['noi_dung'=>'Trong các cây cầu sau, cầu nào là cầu xoay?','linh_vuc_id'=>4,'phuong_an_a'=>'Cầu Thanh Trì','phuong_an_b'=>'Cầu Thị Nại','phuong_an_c'=>'Cầu Sông Hàn','phuong_an_d'=>'Cầu Cần Thơ','dap_an'=>'3'],
            ['noi_dung'=>'Bùi Hữu Nghĩa, một trong bốn rồng vàng của vùng Đồng Nai xưa (tức là toàn Nam Bộ ngày nay) là tài năng ở lĩnh vực nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Hoa','phuong_an_b'=>'Phú','phuong_an_c'=>'Đàn','phuong_an_d'=>'Thi','dap_an'=>'4'],
            ['noi_dung'=>'Nước nào ở khu vực Đông Nam Á không có địa giới với bất kỳ nước khác?','linh_vuc_id'=>4,'phuong_an_a'=>'Philippines','phuong_an_b'=>'Malaysia','phuong_an_c'=>'Lào','phuong_an_d'=>'Thái Lan','dap_an'=>'1'],
            ['noi_dung'=>'Thung lũng nổi tiếng ở Mỹ với ngành công nghệ thông tin được đặt tên theo nguyên tố nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Sắt','phuong_an_b'=>'Silic','phuong_an_c'=>'Asen','phuong_an_d'=>'Uran','dap_an'=>'2'],
            ['noi_dung'=>'Tổ chức thương mại thế giới có trụ sở đặt tại quốc gia nào ?','linh_vuc_id'=>4,'phuong_an_a'=>'Bỉ','phuong_an_b'=>'Thụy Sỹ','phuong_an_c'=>'Hà Lan','phuong_an_d'=>'Đức','dap_an'=>'2'],
            ['noi_dung'=>'Eo biển nào sau đây là nơi phân cách giữa châu Âu và châu Phi?','linh_vuc_id'=>4,'phuong_an_a'=>'Bosphorus','phuong_an_b'=>'Bering','phuong_an_c'=>'Gibraltar','phuong_an_d'=>'Malacca','dap_an'=>'3'],
            ['noi_dung'=>'Thành phố nào của Nhật Bản bị tàn phá nặng nề nhất sau thảm hoạ động đất và sóng thần ngày 11/3/2011?','linh_vuc_id'=>4,'phuong_an_a'=>'Sendai','phuong_an_b'=>'Chiba','phuong_an_c'=>'Kobe','phuong_an_d'=>'Hiroshima','dap_an'=>'1'],
            ['noi_dung'=>'Địa danh nào còn thiếu trong câu ca dao : ....có núi Vọng Phu/Có đầm Thị Nại có cù lao Xanh"?','linh_vuc_id'=>4,'phuong_an_a'=>'. Phú Yên','phuong_an_b'=>'Khánh Hoà','phuong_an_c'=>'Long An','phuong_an_d'=>'Bình Định','dap_an'=>'4'],
            ['noi_dung'=>'Bối cảnh của câu chuyện tỉnh Romeo và Juliet là thành phố nào của nước Ý?','linh_vuc_id'=>4,'phuong_an_a'=>'. Venice','phuong_an_b'=>'Milan','phuong_an_c'=>'Rome','phuong_an_d'=>'Verona','dap_an'=>'4'],
            ['noi_dung'=>'Ngân hàng trung ương châu Âu (ECB) có trụ sở đặt tại thành phố nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Brussel','phuong_an_b'=>'Frankurt','phuong_an_c'=>'Paris','phuong_an_d'=>'Geneva','dap_an'=>'2'],
            ['noi_dung'=>'Địa danh "Cần Giuộc" trong bài "Văn Tế nghĩa Sĩ Cần Giuộc" hiện nay nằm ở tỉnh nào ?','linh_vuc_id'=>4,'phuong_an_a'=>'Long An','phuong_an_b'=>'Tiền Giang','phuong_an_c'=>'An Giang ','phuong_an_d'=>'Cần Thơ','dap_an'=>'2'],
            ['noi_dung'=>'Bộ phận đất nổi, nhỏ hơn lục địa, xung quanh có biển và đại dương bao quanh gọi là gì ?','linh_vuc_id'=>4,'phuong_an_a'=>'Đảo','phuong_an_b'=>'Quần đảo','phuong_an_c'=>'Hải đảo','phuong_an_d'=>'Quốc đảo','dap_an'=>'3'],
            ['noi_dung'=>'Cầu Phú Mỹ-cây cầu đẹp và hiện đại nhất thành phố Hồ Chí Minh có hình dáng của chữ cái nào?','linh_vuc_id'=>4,'phuong_an_a'=>'T','phuong_an_b'=>'H','phuong_an_c'=>'L','phuong_an_d'=>'M','dap_an'=>'4'],
            ['noi_dung'=>'Các trung tâm công nghiệp lớn như Tokyo, Kyoto, Yokohama, Nagoia, Osaka nằm trên hòn đảo nào có diện tích rộng nhất, dân số đông nhất và kinh tế phát triển nhất trong quần đảo Nhật Bản?','linh_vuc_id'=>4,'phuong_an_a'=>'Hokkaido','phuong_an_b'=>'Honsu','phuong_an_c'=>'Shikoku','phuong_an_d'=>'Kyusyu','dap_an'=>'2'],
            
            ['noi_dung'=>'Quốc gia nào sau đây có chung đường biên giới cả trên đất liên và trên biển với Việt Nam?','linh_vuc_id'=>4,'phuong_an_a'=>'Thái Lan','phuong_an_b'=>'Lào','phuong_an_c'=>'Trung Quốc','phuong_an_d'=>'Indonesia','dap_an'=>'3'],
            ['noi_dung'=>'Trụ sở của Ban thư ký ASEAN được đặt tại quốc gia nào sau đây?','linh_vuc_id'=>4,'phuong_an_a'=>'Thái Lan','phuong_an_b'=>'Singapore','phuong_an_c'=>'Malaysia','phuong_an_d'=>'Indonesia','dap_an'=>'4'],
            ['noi_dung'=>'Vịnh nào sau đây không nằm trong CLB các vịnh biển đẹp nhất thế giới (World Bay)?','linh_vuc_id'=>4,'phuong_an_a'=>'Vịnh Nha Trang (Khánh Hoà)','phuong_an_b'=>'Vịnh Lăng Cô (Thừa Thiên Huế)','phuong_an_c'=>'Vịnh Xuân Đài (Phú Yên)','phuong_an_d'=>'Vịnh Hạ Long (Quảng Ninh)','dap_an'=>'3'],
            ['noi_dung'=>'Một hòn đảo của tỉnh Quảng Ngãi nơi được mệnh danh là "Vương quốc hành tỏi". Đó là đảo nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Đảo Lý Sơn','phuong_an_b'=>'Đảo Cồn Cỏ','phuong_an_c'=>'Đảo Thổ Chu','phuong_an_d'=>'Đảo Phú Quốc','dap_an'=>'1'],
            ['noi_dung'=>'Châu lục nào tiếp giáp với cả Đại Tây Dương và Ấn Độ Dương?','linh_vuc_id'=>4,'phuong_an_a'=>'Châu Á','phuong_an_b'=>'Châu Phi','phuong_an_c'=>'Châu Âu','phuong_an_d'=>'Châu Mỹ ','dap_an'=>'2']
        ]);
    }
}
