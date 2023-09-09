<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'designation',
    'image',
    'linkedin_url',
    'quote',
  ];

  public function getImageAttribute($value)
  {
    return asset('images/' . $value);
  }

}
