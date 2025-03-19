<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $table = 'drugs';
    protected $primariKey = 'id';
    protected $fillable = [
        'clasification_id',
        'image',
        'name',
        'description',
        'price',
    ];

    public function casts(){
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function clasification(){
        return $this->belongsTo(Clasification::class);
    }
}
