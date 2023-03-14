<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title', 100)->after('id')->nullable();
            $table->string('slug', 100)->after('title');
            $table->text('content')->after('slug');
            $table->boolean('draft')->default(false);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->dropColumn('title', 100);
            $table->dropColumn('slug', 100);
            $table->dropColumn('content');
            $table->dropColumn('draft');
            });
    }
};
