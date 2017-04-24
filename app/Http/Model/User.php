<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'la_user';
    protected $primaryKey = 'id';
    protected $fillable = ['name','age'];
    protected $guarded = [];

    protected function getDateFormat(){
	return time();
    }

    protected function asDateTime($time){
	return $time;
    }
}
