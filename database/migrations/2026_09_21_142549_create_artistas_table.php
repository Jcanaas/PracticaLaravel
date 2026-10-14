<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $fillable = [];

    protected $casts = [
        'actiu' => 'boolean',
    ];


    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('artistes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('pais');
            $table->text('bio')->nullable();
            $table->string('imatge_url')->nullable();
            $table->boolean('actiu')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artistes');
    }
};
/*id
nom
pais
bio
imatge_url
actiu
timestamps
*/
