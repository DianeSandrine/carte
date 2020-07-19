<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('matricule')->primary();
            $table->bigInteger('filiere_id')->unsigned();
            $table->bigInteger('cycleniveau_id')->unsigned();
            $table->bigInteger('anneeacademique_id')->unsigned();
            $table->string('nationalite_code');
            $table->bigInteger('repondant_contact');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('photo');
            $table->integer('telephone');

            $table->foreign('filiere_id')
            ->references('id')
            ->on('filieres')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('cycleniveau_id')
            ->references('id')
            ->on('cycleniveaus')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('anneeacademique_id')
            ->references('id')
            ->on('anneeacademiques')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('nationalite_code')
            ->references('code')
            ->on('nationalites')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('repondant_contact')
            ->references('contact')
            ->on('repondants')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
