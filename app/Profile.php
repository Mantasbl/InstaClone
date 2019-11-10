<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() {
        $imagePath = ($this->image) ?  $this->image : 'profile/0Ags1Xpcg0W9DxvsX1Lb1CCiqzGhfG4HUyYrE6GC.png';
        return '/storage/' . $imagePath;
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
    