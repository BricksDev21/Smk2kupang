<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Guru;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $primaryKey = 'status_id';
    protected $fillable = [
		'status_name'
	];
  
  public function guru()
  {
    return $this->hasMany(Guru::class,'status_id');
  }
}
