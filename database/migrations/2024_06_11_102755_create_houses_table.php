<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     * Create TABLE ‘houses’ (
        ‘id’ Unsigned BIGINT NOT NULL AUTO_INCREMENT,
        ‘address’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
        ‘city’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
        ‘state’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
        ‘square_meters’ UNSIGNED SMALLINT NOT NULL, // positivo numero intero not null
        ‘rooms_number’ UNSIGNET TINYINT NOT NULL,
        ‘description’ TEXT NULL, // non obbligatorio potrebbe non esserci
        ‘price’ DECIMAL(10,2) NOT NULL,
        ‘is_available’ TINIYNT NOT NULL DEFAULT(1) // true è(1),non c’è boolean in mysql quindi TINTINT
        Vediamo questi nella tabella in php admin:
        ‘created_at’ TIMESTAMP NULL,  à creati per seguire ultimo inserimento
        ‘updated_at’ TIMESTAMP NULL,  à creati per seguire ultimo aggiornamento
        ‘PRIMARY KEY(‘id’)
       );
     * 
     */
    public function up(): void {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->unsignedSmallInteger('square_meters');
            $table->unsignedTinyInteger('rooms_number');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('houses');
    }
};
