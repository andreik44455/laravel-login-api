<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleAndDescriptionToNewsarticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_articles', function (Blueprint $table) {
            $table->string("title")->after('id');
            $table->text("description")->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_articles', function (Blueprint $table) {
          $table->dropColumn('title');
          $table->dropColumn('description');
        });
    }
}
