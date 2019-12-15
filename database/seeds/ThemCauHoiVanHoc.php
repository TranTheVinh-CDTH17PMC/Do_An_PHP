<?php

use Illuminate\Database\Seeder;

class ThemCauHoiVanHoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cau_hoi')->insert([
         	['noi_dung'=>'"Điêu tàn" là tập thơ đầu tiên của nhà thơ nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Anh Thơ','phuong_an_b'=>'Thế Lữ','phuong_an_c'=>'Bích Khê','phuong_an_d'=>'Chế Lan Viên','dap_an'=>'D'],
            ['noi_dung'=>'Điền từ còn thiếu trong câu thành ngữ:’”…. Không cứu được …gần”.','linh_vuc_id'=>5,'phuong_an_a'=>'Lính-Tướng','phuong_an_b'=>'Chồng-Vợ','phuong_an_c'=>'Nước-Lửa','phuong_an_d'=>'Chó-Mèo','dap_an'=>'3'],
            ['noi_dung'=>'Truyện “Vợ chồng A Phủ” trong tập truyện Tây Bắc của nhà văn Tô Hoài viết về người dân tộc nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Vân Kiều','phuong_an_b'=>'Thái','phuong_an_c'=>'H’Mông','phuong_an_d'=>'Tày','dap_an'=>'3'],
            ['noi_dung'=>'Tác phẩm "Thuỷ hử" của Thi Nại Am diễn ra vào triều đại nào của Trung Quốc?','linh_vuc_id'=>5,'phuong_an_a'=>'Triều Tống','phuong_an_b'=>'Triều Nguyên ','phuong_an_c'=>'Triều Minh','phuong_an_d'=>'Triều Thanh ','dap_an'=>'2'],
            ['noi_dung'=>'Truyền kỳ mạn lục, một tác phẩm được đánh giá là " thiên cổ kỳ bút", là "áng văn hay của bậc đại gia", là sáng tác của ai?','linh_vuc_id'=>5,'phuong_an_a'=>'Nguyễn Trãi','phuong_an_b'=>'Nguyễn Bỉnh Khiêm','phuong_an_c'=>'Nguyễn Dữ','phuong_an_d'=>'Nguyễn Du','dap_an'=>'3'],
            ['noi_dung'=>'Nhà thơ Chế Lan Viên (Phan Ngọc Hoan: tên thật) còn có bút danh khác mang tên dòng sông nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Nhật Lệ','phuong_an_b'=>'Thạch Hãn','phuong_an_c'=>'Thu Bồn','phuong_an_d'=>'Bến Hải','dap_an'=>'2'],
            ['noi_dung'=>'Nhà văn nào đại diện cho Việt Nam nhận Giải thưởng văn học Đông Nam Á 2010?','linh_vuc_id'=>5,'phuong_an_a'=>'Nguyễn Nhật Ánh (Cho tôi xin một vé đi tuổi thơ)','phuong_an_b'=>'Cao Duy Sơn (Ngôi nhà xưa bên suối)','phuong_an_c'=>'Nguyễn Thị Ngọc Tư (Cánh đồng bất tận)','phuong_an_d'=>'Trần Văn Tuấn (Rừng thiêng nước trong)','dap_an'=>'1'],
            ['noi_dung'=>'Chuyện kể đêm Noel, Dế mèn trong lò sưởi là những tác phẩm của nhà văn nào sau đây?','linh_vuc_id'=>5,'phuong_an_a'=>'Mark Twain','phuong_an_b'=>'Charles Dicken','phuong_an_c'=>'Adersen','phuong_an_d'=>'Jean de La Fontaine','dap_an'=>'3'],
            ['noi_dung'=>'Có câu tục ngữ"... hết bị đòn, ...còn mất vợ"? ','linh_vuc_id'=>5,'phuong_an_a'=>'Ăn','phuong_an_b'=>'Uống','phuong_an_c'=>'Ở','phuong_an_d'=>'Mặc','dap_an'=>'1'],
            ['noi_dung'=>'Ngọn núi nào được nhắc tới trong bài thơ "Quê mẹ" của Tố Hữu?','linh_vuc_id'=>5,'phuong_an_a'=>'Thiên Thai','phuong_an_b'=>'Ngự Bình','phuong_an_c'=>'Non Nước','phuong_an_d'=>'Hồng Lĩnh','dap_an'=>'1'],
            ['noi_dung'=>'Tác phẩm “Dị hương” của nhà văn Sương Nguyệt Minh đạt giải thưởng của Hội nhà văn Việt Nam năm 2010 thuộc thể loại nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Thơ','phuong_an_b'=>'Tập truyện ngắn','phuong_an_c'=>'Tiểu thuyết','phuong_an_d'=>'Văn học dịch','dap_an'=>'2']
         ]);
    }
}
