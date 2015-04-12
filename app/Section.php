<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

	//The database table that this model uses
    protected $table = 'sections';

    //Turn off increments because our table users a custom primary key.
    public $incrementing  = false;

    //This table needs no guarded or hidden attributes. Done.

}
