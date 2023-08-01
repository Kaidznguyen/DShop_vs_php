<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class figure extends Model
{
    use HasFactory;
    protected $table='figure';
    public function category()
    {
        return $this->belongsTo(figure_category::class);
    }
    public function brand()
    {
        return $this->belongsTo(brand::class);
    }
}