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

    public function partners()
    {
        return $this->belongsTo(Partner::class, 'partner_project');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}
