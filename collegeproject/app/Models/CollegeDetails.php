<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeDetails extends Model
{
    use HasFactory;
    protected $table ="college_details";
    protected $fillable=['college_name','address','seats_bca','seats_bba','seats_bbm','seats_bim','description','images'];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
