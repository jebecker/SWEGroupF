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

    protected $guarded = ['app_id','submitted','date_submitted', 'created_at', 'updated_at'];




}
