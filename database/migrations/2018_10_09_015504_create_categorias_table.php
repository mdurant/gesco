<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description', 200);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        DB::table('categorias')->insert([
            ['name' => 'Metales', 'description' =>'Descripción de familia de metales', 'created_at' => new \DateTime()],
            ['name' => 'Maderas', 'description' =>'Descripción de familia de Maderas','created_at' => new \DateTime()],
            ['name' => 'Lácteos', 'description' =>'Descripción de familia de Lácteos','created_at' => new \DateTime()],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
