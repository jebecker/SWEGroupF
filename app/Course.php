<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'course';

    //Primary key is not the default id so set it.
    protected $primaryKey = 'course_id';

}
