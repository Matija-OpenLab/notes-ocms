<?php
use Matija\Notes\Models\Note;

Route::group(['prefix' => 'api/v1/notes'], function(){
  Route::get('/', function(){
    $notes = Note::all();
    return $notes;
  });
  Route::post('/create', function(){
    $title = request()->input('title');
    $content = request()->input('content');
    $note = new Note();
    $note->title = $title;
    $note->content = $content;
    $note->save();
  });
  Route::post('/remove', function(){
    $id = request()->input('id');
    $note = Note::findOrFail($id);
    $note->delete();
  });
  Route::put('/complete', function(){
    $id = request()->input('id');
    $note = Note::findOrFail($id);
    $note->is_done = true;
    $note->save();
  });
});