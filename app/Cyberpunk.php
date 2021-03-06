<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cyberpunk extends Model {

	protected $fillable = ['name', 'email', 'deree_student_id'];

	public function courses()
	{
		return $this->belongsToMany('App\Course');
	}
}
