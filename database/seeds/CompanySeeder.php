<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            ['name'=>'Google','address' => '1600','phone' => '800830','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Facebook','address' => '1860','phone' => '801800','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Netflix','address' => '1680','phone' => '800830','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Amazon','address' => '1700','phone' => '800802','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],];
        foreach ($companies as $company)
        {
            DB::table('companies')->insert($company);

        }
    }
}
