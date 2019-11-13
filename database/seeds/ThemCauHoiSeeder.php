<?php

use Illuminate\Database\Seeder;

class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
        	['noi_dung'=>'Giải Grand Slam đầu tiên trong năm là giải nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Austrlia mở rộng','phuong_an_b'=>'Wimbledon','phuong_an_c'=>'Roland Garos','phuong_an_d'=>'Mỹ mở rộng','dap_an'=>'A'],
        	]);
    }
}
