<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {                                
        Schema::create('books', function(Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->string('title', 100);
            $table->string('author', 50);
            $table->text('description');            
            $table->boolean('status')->default(0);
            $table->timestamps(); // Add timestamps
        });
        
        // import data from sql file backup
        DB::unprepared(file_get_contents('App/../Application/MariaDB/ravenclaw.sql'));
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
