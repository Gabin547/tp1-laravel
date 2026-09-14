<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
Schema::create('produit',function(Blueprint$table){
	// Types de champs : https://laravel.com/docs/5.7/migrations#creating-columns
$table->increments('idPdt');
$table->string('libellePdt',15);
$table->integer('prixPdt');
$table->integer('stockPdt');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
