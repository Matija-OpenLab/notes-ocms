<?php namespace Matija\Notes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMatijaNotesNotes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('matija_notes_notes');
    }
    
    public function down()
    {
        Schema::create('matija_notes_notes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->boolean('is_complete');
        });
    }
}
