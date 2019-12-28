<?php

use Illuminate\Database\Seeder;

class ThemCauHoiYHoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('cau_hoi')->insert([
           	['noi_dung'=>'Vai trò chính của vitamin nào là giúp cho quá trình đông máu diễn ra tốt và hạn chế lượng máu bị mất khi bị thương?','linh_vuc_id'=>6,'phuong_an_a'=>'Vitamin A','phuong_an_b'=>'Vitamin D','phuong_an_c'=>'Vitamin E','phuong_an_d'=>'Vitamin K','dap_an'=>'4'],
           	['noi_dung'=>'Cúm và sởi là những bệnh lây truyền qua đường nào?','linh_vuc_id'=>6,'phuong_an_a'=>'Tiêu hóa','phuong_an_b'=>'Hô hấp','phuong_an_c'=>'Máu','phuong_an_d'=>'Sinh dục','dap_an'=>'2'],
            ['noi_dung'=>'Virus sởi lây truyền qua đường nào?','linh_vuc_id'=>6,'phuong_an_a'=>'Tiêu hóa','phuong_an_b'=>'Hô hấp','phuong_an_c'=>'Máu','phuong_an_d'=>'Sinh dục','dap_an'=>'2'],
            ['noi_dung'=>'Phổi, họng, thanh quản, khí quản, phế quản, phổi là những cơ quan thuộc hệ cơ quan nào trong cơ thể người?','linh_vuc_id'=>6,'phuong_an_a'=>'Hệ tuần hoàn','phuong_an_b'=>'Hệ sinh dục','phuong_an_c'=>'Hệ hô hấp','phuong_an_d'=>'Hệ thần kinh','dap_an'=>'3'],
            ['noi_dung'=>'Loại vitamin nào mà cơ thể con người có thể tự tổng hợp được nhờ ánh sáng Mặt Trời?','linh_vuc_id'=>6,'phuong_an_a'=>'Vitamin A','phuong_an_b'=>'Vitamin D','phuong_an_c'=>'Vitamin E','phuong_an_d'=>'Vitamin K','dap_an'=>'2'],
            ['noi_dung'=>'Paracetamol thuộc nhóm thuốc nào sau đây?','linh_vuc_id'=>6,'phuong_an_a'=>'Thuốc lợi tiểu','phuong_an_b'=>'Thuốc hạ sốt, giảm đau, chống viêm','phuong_an_c'=>'Thuốc điều trị tăng huyết áp','phuong_an_d'=>'Thuốc an thần, bình thân','dap_an'=>'2'],
            ['noi_dung'=>'Từ nào sau đây chỉ tế bào máu?','linh_vuc_id'=>6,'phuong_an_a'=>'Huyết đồ','phuong_an_b'=>'Huyết tương','phuong_an_c'=>'Huyết thanh','phuong_an_d'=>'Huyết cầu','dap_an'=>'4'],
            ['noi_dung'=>'Đâu không phải là một loại tế bào máu?','linh_vuc_id'=>6,'phuong_an_a'=>'Khúc côn cầu','phuong_an_b'=>'Hồng cầu','phuong_an_c'=>'Tiểu cầu','phuong_an_d'=>'Bạch cầu ','dap_an'=>'1'],
            ['noi_dung'=>'Bệnh nào sau đây không phải bệnh truyền nhiễm?','linh_vuc_id'=>6,'phuong_an_a'=>'Sởi','phuong_an_b'=>'Quai bị','phuong_an_c'=>'Đậu mùa','phuong_an_d'=>'Tiểu đường','dap_an'=>'4']

           ]);

    }
}
