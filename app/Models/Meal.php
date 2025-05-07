<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['name', 'calories', 'proteins', 'carbohydrate', 'lipids'];

    public function consumptions()
    {
        return $this->hasMany(Consumption::class);
    }

}
