<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];
    // protected $fillable = [
    //     'name',
    //     'slug',
    //     'parent_id',
    //     'type',
    //     'status',
    //     'created_at',
    //     'updated_at',
    // ];
    // public function parent()
    // {
    //     return $this->belongsTo(Address::class, 'parent_id');
    // }
    // public function children()
    // {
    //     return $this->hasMany(Address::class, 'parent_id');
    // }
    // public function posts()
    // {
    //     return $this->hasMany(Post::class, 'address_id');
    // }
    // public function typeProjects()
    // {
    //     return $this->hasMany(TypeProject::class, 'address_id');
    // }
}
