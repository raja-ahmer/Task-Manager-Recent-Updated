<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'task';
    protected $primaryKey = 'taskId';

    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'categoryId', 'categoryId');
    }
    public function getUser()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}
