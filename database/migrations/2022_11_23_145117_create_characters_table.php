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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('description');
            $table->string('class');
            $table->integer('magic');
            $table->integer('strength');
            $table->integer('agility');
            $table->integer('inteligence');
            $table->integer('pv');
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
        Schema::dropIfExists('characters');
    }
};
