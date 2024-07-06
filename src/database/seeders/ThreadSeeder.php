<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Thread;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            [
                'author_id' => 'N001',
                'thread_title' => '今日の日記',
                'thread_text' => '今日は●●をしました。楽しかったです。'
            ],
            [
                'author_id' => 'N002',
                'thread_title' => 'My Diary',
                'thread_text' => 'This is my first diary. I glad to read the thread. Thank you',
            ],
            [
                'author_id' => 'N003',
                'thread_title' => 'Help me',
                'thread_text' => 'My dog names "John" was dissapeared yesterday.'
            ],
            [
                'author_id' => 'P001',
                'thread_title' => 'Do you wanna be free?',
                'thread_text' => 'When you read the thread till the end, I guarantee that you can be strong'
            ],
        ];

        foreach($params as $param){
            Thread::insert($param);
        }
    }
}
