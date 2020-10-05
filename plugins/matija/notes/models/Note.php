<?php namespace Matija\Notes\Models;

use Model;

/**
 * Model
 */
class Note extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'matija_notes_notes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
