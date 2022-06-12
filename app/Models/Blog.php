<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function scopeCari($query)
    {
        if(request('cari'))
        {
            return $query->where('judul', 'like', '%' . request('cari') . '%');
        }
    }
}