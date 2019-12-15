<?php

use Illuminate\Database\Seeder;

class ThemCauHoiAmNhacPhim extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
        	['noi_dung'=>'Ai là nhạc sĩ Việt Nam đầu tiên viết opera với tác phẩm “Cô sao” và sau đó là “Người tạc tượng”?','linh_vuc_id'=>3,'phuong_an_a'=>'Đỗ Nhuận','phuong_an_b'=>'Hoàng Vân','phuong_an_c'=>'Trần Hoàn','phuong_an_d'=>'Trọng Đài','dap_an'=>'1'],
            ['noi_dung'=>'The ASEAN WAY-ca khúc chính thức của ASEAN là sáng tác của nhạc sĩ người nước nào?','linh_vuc_id'=>3,'phuong_an_a'=>'Thái Lan','phuong_an_b'=>'Việt Nam','phuong_an_c'=>'Singapore','phuong_an_d'=>'Malaysia','dap_an'=>'1'],
            ['noi_dung'=>'“Mùa con ong đi lấy mật, mùa con voi xuống sông hút nước, mùa em đi phát rẫy làm nương, anh vào rừng đặt bẫy cài chông” là những câu hát nói về tháng nào?','linh_vuc_id'=>3,'phuong_an_a'=>'Tháng Giêng','phuong_an_b'=>'Tháng hai','phuong_an_c'=>'Tháng ba','phuong_an_d'=>'Tháng tư','dap_an'=>'3'],
            ['noi_dung'=>'Bộ phim “The Social Network” về mạng xã hội nào đã đạt giải Quả cầu vàng 2011?','linh_vuc_id'=>3,'phuong_an_a'=>'Facebook','phuong_an_b'=>'Twitter','phuong_an_c'=>'Yahoo Plus','phuong_an_d'=>'Opera','dap_an'=>'1'],
            ['noi_dung'=>'Lã Thanh Huyền đã tham gia bộ phim nào sau đây?','linh_vuc_id'=>3,'phuong_an_a'=>'Nhà có nhiều cửa sổ','phuong_an_b'=>'Đẹp từng centimet','phuong_an_c'=>'Blog nàng dâu','phuong_an_d'=>'Ngôi nhà hạnh phúc','dap_an'=>'3'],
            ['noi_dung'=>'Tác phẩm điện ảnh "Thập diện mai phục" là của đạo diễn nào?','linh_vuc_id'=>3,'phuong_an_a'=>'. Lý An','phuong_an_b'=>'Dương Khiết','phuong_an_c'=>'Trương Nghệ Mưu','phuong_an_d'=>'Ngô Vũ Sâm','dap_an'=>'3'],
            ['noi_dung'=>'Nam ca sĩ nào đạt giải thưởng Ca sĩ của năm tại Lễ trao giải Làn Sóng Xanh 2010?','linh_vuc_id'=>3,'phuong_an_a'=>'Đàm Vĩnh Hưng','phuong_an_b'=>'Lam Trường','phuong_an_c'=>'Đan Trường','phuong_an_d'=>'Minh Quân','dap_an'=>'1'],
            ['noi_dung'=>'NSND  .... là giảng viên thanh nhạc đầu tiên của Nhạc viện Hà Nội, là nghệ sĩ hát opera đầu tiên của Việt Nam và là người vào vai chính của vở opera đầu tiên được dàn dựng và công diễn ở Nhà hát Lớn Hà Nội. ','linh_vuc_id'=>3,'phuong_an_a'=>'Quý Dương','phuong_an_b'=>'Trần Tiến','phuong_an_c'=>'Trung Kiên','phuong_an_d'=>'Quang Thọ','dap_an'=>'1'],
            ['noi_dung'=>'Trong nhạc phẩm "Hoa sữa" nhạc sĩ Hồng Đăng còn nhắc tới loại cây nào khác?','linh_vuc_id'=>3,'phuong_an_a'=>'Bàng','phuong_an_b'=>'Phượng','phuong_an_c'=>'Phi lao','phuong_an_d'=>'Quất','dap_an'=>'3'],
            ['noi_dung'=>'Ai đã lên ngôi Thần tượng âm nhạc Việt Nam 2010?','linh_vuc_id'=>3,'phuong_an_a'=>'Trần Lân Nhã','phuong_an_b'=>'Trần Nguyễn Uyên Linh','phuong_an_c'=>'Văn Mai Hương','phuong_an_d'=>'Lều Phương Anh','dap_an'=>'2'],
            ['noi_dung'=>'Ca sĩ nào đạt giải thưởng của Hội đồng nghệ thuật trong cuộc thi “Sao Mai-Điểm hẹn” 2010?','linh_vuc_id'=>3,'phuong_an_a'=>'Minh Chuyên','phuong_an_b'=>'Mỹ Như','phuong_an_c'=>'Lương Viết Quang','phuong_an_d'=>'Đinh Mạnh Ninh','dap_an'=>'1'],
            ['noi_dung'=>'Giải thưởng Emmy là giải thưởng cao quý của thể loại giải trí nào?','linh_vuc_id'=>3,'phuong_an_a'=>'Truyền hình','phuong_an_b'=>'Điện ảnh','phuong_an_c'=>'Âm nhạc','phuong_an_d'=>'Thể thao','dap_an'=>'1'],
            ['noi_dung'=>'Bộ phim “The social Network” đạt giải gì tại lễ trao giải Quả cầu vàng lần thứ 68?','linh_vuc_id'=>3,'phuong_an_a'=>'Phim điện ảnh tâm lý/chính kịch hay nhất','phuong_an_b'=>'Phim điện ảnh hài/ca nhạc hay nhất','phuong_an_c'=>'Phim truyền hình tâm lý/chính kịch hay nhất','phuong_an_d'=>'Phim truyền hình hài/ca nhạc hay nhất','dap_an'=>'1'],
            ['noi_dung'=>'Bộ phim "W"của đạo diễn Oliver Stone viết về ai?','linh_vuc_id'=>3,'phuong_an_a'=>'Geroge Walker Bush','phuong_an_b'=>'Winston Churchil','phuong_an_c'=>'William Shakespear','phuong_an_d'=>'Walt Disney','dap_an'=>'1'],
            ['noi_dung'=>': “Vội vã trở về, vội vã ra đi …” là những dòng trăn trở của nhạc sĩ Phú Quang trong bài hát Hà Nội ngày trở về. Trong ca khúc này, nhạc sĩ Phú Quang đã so sánh nỗi nhớ với dòng sông nào?','linh_vuc_id'=>3,'phuong_an_a'=>'Sông Cửu Long','phuong_an_b'=>'Sông Lô','phuong_an_c'=>'Sông Hồng','phuong_an_d'=>'Sông Mã','dap_an'=>'3']
        ]);
    }
}
