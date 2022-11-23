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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();    
            $table->softDeletes();
            $table->string('name');
            $table->string('description');
            $table->integer('people');
            $table->foreignIdFor(\App\Models\User::class, 'user_id')
            ->constrained()
            ->onUpdate('RESTRICT')
            ->onDelete('RESTRICT');
         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
};
