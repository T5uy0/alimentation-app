<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['name', 'calories', 'proteins', 'carbohydrate', 'lipids','user_id'];

    public function consumptions()
    {
        return $this->hasMany(Consumption::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAvailableTo($query, $userId)
    {
        return $query->whereNull('user_id')->orWhere('user_id', $userId);
    }
}
