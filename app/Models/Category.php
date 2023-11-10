<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasFactory,SoftDeletes,NodeTrait;

    public $table = 'categories';
    public $timestamps = true;

    public $fillable = ['name', 'slug', 'image_url', 'parent_id', 'description', 'status'];
}
