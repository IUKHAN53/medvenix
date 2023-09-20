<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_video',
        'about_video',
        'youtube_link',
        'linkedin_link',
        'twitter_link',
        'privacy_link',
        'tos_link',
        'cookie_policy_link',
        'eula_link',
    ];

  public function getHomeVideoAttribute($value)
  {
    return $value ? asset('storage/' . $value) : null;
  }

  public function getAboutVideoAttribute($value)
  {
    return $value ? asset('storage/' . $value) : null;
  }
}
