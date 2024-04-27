<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// 2章2-7 モデルファクトリの利用
use App\Models\Author;
// 2章2-8 論理削除・物理削除
use \App\Models\Person;
// 2章2-9 UUID
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AuthorsTableSeeder::class); ↓ファクトリの利用で削除
        // 2章2-7 モデルファクトリの利用
        Author::factory(10)->create();

        // 2章2-8 論理削除・物理削除
        Person::factory(10)->create();

        // 2章2-9 UUID
        Product::factory(10)->create();
    }
}
