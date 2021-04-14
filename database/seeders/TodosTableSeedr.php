<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'あああa',
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'あ',
        ];
        DB::table('todos')->insert($param);
    }
}
