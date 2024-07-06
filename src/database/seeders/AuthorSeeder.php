<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            [
                'author_id' => 'N001',
                'author_name' => '田中',
                'rank' => 'NORMAL',
            ],
            [
                'author_id' => 'N002',
                'author_name' => 'ELIZ',
                'rank' => 'NORMAL',
            ],
            [
                'author_id' => 'N003',
                'author_name' => 'GODIVA',
                'rank' => 'NORMAL',
            ],
            [
                'author_id' => 'P001',
                'author_name' => 'MARK',
                'rank' => 'PREMIUM',
            ],
        ];

        foreach($params as $param){
            Author::insert($param);
        }
    }
}
