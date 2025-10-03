<?php

namespace Modules\ContactManager\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\ContactManager\Database\Factories\ContactFactory;

class Contact extends Model
{
    use HasFactory, CrudTrait;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'email', 'image'];

    // protected static function newFactory(): ContactFactory
    // {
    //     // return ContactFactory::new();
    // }
}
