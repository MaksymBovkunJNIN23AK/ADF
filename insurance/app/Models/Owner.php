<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'phone', 'email', 'address'];
    public function cars()
{
    return $this->hasMany(Car::class);
}
}
