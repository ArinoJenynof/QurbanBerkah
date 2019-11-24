<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
	protected $fillable = [
		"nama", "deskripsi", "harga"
	];

	protected $attributes = [
		"terbeli" => false
	];
	
	public function gambarhewan()
	{
		return $this->hasMany("App\GambarHewan");
	}
}
