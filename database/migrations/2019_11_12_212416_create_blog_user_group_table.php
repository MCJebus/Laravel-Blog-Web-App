<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogUserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_user_group', function (Blueprint $table) {
            $table->primary(['blog_user_id', 'group_id']);
            $table->unsignedBigInteger('blog_user_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->foreign('blog_user_id')->references('id')->
                on('blog_users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('group_id')->references('id')->
                on('groups')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_user_group');
    }
}
