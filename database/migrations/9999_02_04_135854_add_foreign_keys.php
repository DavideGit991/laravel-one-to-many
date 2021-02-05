<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::table('task_typology',function (Blueprint $table)
        {
           $table -> foreign('task_id','t_t-task')
           ->references('id')
           ->on('tasks'); 

           $table -> foreign('typology_id','t_t-tipology')
           ->references('id')
           ->on('typologies'); 
        });

        Schema::table('tasks',function (Blueprint $table)
        {
           $table -> foreign('employee_id','task-emp')
           ->references('id')
           ->on('employees'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks',function (Blueprint $table)
        {
           $table -> dropForeign('task-emp');
        });

        Schema::table('task_typology',function (Blueprint $table)
        {
            $table -> dropForeign('t_t-tipology'); 
            $table -> dropForeign('t_t-task');
            
        });
    }
}
