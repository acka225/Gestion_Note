<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('matiere');
            $table->string('type');
            $table->date('date');
            $table->decimal('valeur', 5, 2);
            $table->unsignedBigInteger('student_id'); // Clé étrangère vers la table students
            $table->unsignedBigInteger('created_by')->nullable(); // Clé étrangère vers la table users
            $table->timestamps();

            // Vérification de l'existence des tables référencées avant d'ajouter les relations
            if (Schema::hasTable('students')) {
                $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            }

            if (Schema::hasTable('users')) {
                $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
