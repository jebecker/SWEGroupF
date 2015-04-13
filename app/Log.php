<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'ip_address', 'action'];




}
