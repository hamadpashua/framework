<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name','role','password'];
    protected $dates = ['deleted_at'];
    public $timestamps = true;

}
