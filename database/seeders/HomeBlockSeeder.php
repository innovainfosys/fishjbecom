<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_blocks')->insert([
           'title' => 'মাছের তালিকা',
            'slug' => Str::slug('মাছের তালিকা'),
        ]);
        DB::table('home_blocks')->insert([
            'title' => 'সামুদ্রিক মাছের তালিকা',
            'slug' => Str::slug('সামুদ্রিক মাছের তালিকা'),
        ]);
        DB::table('home_blocks')->insert([
            'title' => 'মিঠা পানির মাছের তালিকা',
            'slug' => Str::slug('মিঠা পানির মাছের তালিকা'),
        ]);
    }
}
