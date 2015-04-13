<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'application';

    // Columns that can NOT be mass-assigned.

    protected $guarded = ['app_id','created_at', 'updated_at'];

    //need to rename the primary key since it is not called 'id'
    protected $primaryKey = 'app_id';




}
