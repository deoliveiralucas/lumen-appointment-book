<?php

use Illuminate\Database\Seeder;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LumenDiary\Entities\Phone::class, 80)->create();
    }
}
