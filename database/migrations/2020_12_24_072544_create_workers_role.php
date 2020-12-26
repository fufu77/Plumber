<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateWorkersRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Role::create([
            'name' => 'maintenance worker',
            'display_name' =>'維護人員',
            'description'  =>'擁有維修工作管理頁面的權限'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \App\Role::where('name','maintenance worker')->delete();
    }
}
