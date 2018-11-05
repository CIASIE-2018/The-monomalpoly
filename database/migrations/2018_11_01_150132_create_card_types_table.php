<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCardTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');            
        });

       DB::table('card_types')
            ->insert(
                array(
                    array(
                        'id' => 0,
                        'name' => 'Braquage',
                        'description' => 'Le joueur qui pioche cette carte peut voler un serveur à un autre'
                    ),
                    array(
                        'id' => 0,
                        'name' => 'Mauvaise transaction',
                        'description' => 'Le joueur qui pioche cette carte  devra un certain nombre de bitcoins à la banque'
                    ),
                    array(
                        'id' => 0,
                        'name' => 'To Narnia!',
                        'description' => 'Le joueur qui pioche cette carte  va en prison'
                    ),
                    array(
                        'id' => 0,
                        'name' => 'Innondation',
                        'description' => 'Le joueur qui pioche cette carte perd tous ses serveurs'
                    )
                )
                
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_types');
    }
}
