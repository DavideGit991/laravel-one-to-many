<?php

use Illuminate\Database\Seeder;
use App\Typology;
use App\Task;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Typology::class,10)
            ->create()
            ->each(function($type){
                $tasks=Task::inRandomOrder()
                            ->limit(rand(1,5))->get();
            $type->tasks()->attach($tasks);
            });
    }
}
