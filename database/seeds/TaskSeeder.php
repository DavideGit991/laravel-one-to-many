<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class,20)
        ->make()
        ->each(function ($task){
            $emp  = Employee::inRandomOrder()->first();
            $task -> employee()->associate($emp);
            $task->save();
        });
    }
}

// class FornitureSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         factory(Forniture::class, 50) 
//             -> make()
//             -> each(function($forn) {
//             // dd($forn);
//             $wood = Wood::inRandomOrder() -> first();
//             // dd($wood -> name);
//             // $forn -> wood_id = $wood -> id;
//             $forn -> wood() -> associate($wood);
//             $forn -> save();
//         });
//     }
// }