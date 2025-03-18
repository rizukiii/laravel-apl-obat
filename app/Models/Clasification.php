<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasification extends Model
{
    use HasFactory;

    protected $table = 'clasifications';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'name',
        'description',
    ];

    public function casts(){
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function drug(){
        return $this->hasMany(Drug::class);
    }

}
