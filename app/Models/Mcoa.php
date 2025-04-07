<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcoa extends Model
{
   use HasFactory;

   protected $table = 'mcoa';
   protected $guarded = [];

   public function children()
   {
      return $this->hasMany(Mcoa::class, 'parent_id', 'id');
   }

   public function tree()
   {
      return $this->children()->with('tree');
   }
}
