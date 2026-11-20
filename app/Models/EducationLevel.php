<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EducationLevel extends Model
{
  protected $fillable =[
        'name',
        'code',
        'description',
        'is_active'
    ];
    public function casts(): array
    {
        return['is_active' => 'boolean'];
    }
    public function users(): hasMany
    {
        return $this->hasMany(User::class);
    }
}
