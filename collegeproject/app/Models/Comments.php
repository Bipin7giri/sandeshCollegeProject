<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table ="college_details";
    protected $fillable=['comment'];

    public function collegeDetails(){
        return $this->belongsTo(CollegeDetails::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
