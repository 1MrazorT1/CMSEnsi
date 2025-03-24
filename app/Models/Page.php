<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
   
    use HasFactory;

    // Allow these fields to be mass assignable
    protected $fillable = ['title', 'slug', 'content'];
}
