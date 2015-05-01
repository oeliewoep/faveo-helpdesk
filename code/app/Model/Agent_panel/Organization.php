<?php namespace App\Model\Agent_panel;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

	/* define the table name */
	protected $table = 'organization';

	/* Define the fillable fields */
	protected $fillable = ['id','name','phone','website','address','internal_notes'];

}
