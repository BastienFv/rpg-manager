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
        Schema::create('recruts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('accepted_at')->nullable();
            $table->softDeletes();
            $table->boolean('accepted')->default(0);
            $table->foreignIdFor(\App\Models\Group::class, 'group_id')
            ->constrained()
            ->onUpdate('RESTRICT')
            ->onDelete('RESTRICT');
            $table->foreignIdFor(\App\Models\Character::class, 'character_id')
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
        Schema::dropIfExists('recruts');
    }
};
