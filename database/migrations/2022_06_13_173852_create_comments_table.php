<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->mediumText('content');
            $table->timestamps();

            //$table->unsignedBigInteger('post_id');
            //$table->foreign('post_id')->references('id')->on('posts'); //la clée étrangère "post_id" qui fait référence à "id" qui se trouve dans la table "posts"
            $table->foreignId('post_id')->constrained();//Plus simple que le précédent commenté
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
