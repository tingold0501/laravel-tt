<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'name',
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
