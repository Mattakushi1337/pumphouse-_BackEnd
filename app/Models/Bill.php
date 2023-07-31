<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['resident_id', 'period_id', 'amount_rub'];

    // Отношение "belongsTo" к модели Resident
    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}