<?php namespace Matija\Notes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMatijaNotesNotes extends Migration
{
    public function up()
    {
        Schema::create('matija_notes_notes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->boolean('is_done')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('matija_notes_notes');
    }
}
