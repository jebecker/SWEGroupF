<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    //The database table that this model uses
    protected $table = 'section';

    //Turn off increments because our table users a custom primary key.
    public $incrementing = false;

    //Guard timestamps. All else fillable.
    protected $guarded = ['created_at', 'updated_at'];
}
