<?php

use Illuminate\Database\Seeder;
use App\Creation;
use App\CategoryCreation;

class CategoryCreationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('category_creation')->truncate();

        factory(Creation::class, 50)
            ->create()
            ->each(function ($creation) {
                DB::table('category_creation')->insert([
                    'category_id' => rand(1, 4),
                    'creation_id' => $creation->id
                ]);
            });
    }
}
