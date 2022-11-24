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
            $table->integer('magic')->default(random_int(0, 14));
            $table->integer('strength')->default(random_int(0, 14));
            $table->integer('agility')->default(random_int(0, 14));
            $table->integer('inteligence')->default(random_int(0, 14));
            $table->integer('pv')->default(random_int(20, 50));
            $table->foreignIdFor(\App\Models\User::class, 'user_id')
            ->nullable()
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
