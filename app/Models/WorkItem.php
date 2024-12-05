<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkItem extends Model
{
    use HasFactory;

    protected $table = 'work_items';
    protected $fillable = ['title'];

    public function tasks(): HasMany
    {
        return $this->hasMany(task::class)->chaperone();
    }
}
