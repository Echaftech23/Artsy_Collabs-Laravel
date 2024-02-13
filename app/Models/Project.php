<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'status', 'image', 'budget'
    ];

    protected $attributes = [
        'status' => 0,
    ];

    const  STATUS_RADIO = [
        '0' => 'pending',
        '1' => 'In Progress',
        '2' => 'Completed',
    ];


    public function partners()
    {
        return $this->belongsToMany(Partner::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
