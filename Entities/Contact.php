<?php

namespace Modules\Contact\Entities;

use Modules\Contact\Database\factories\ContactFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'message',
    ];

    protected static function newFactory()
    {
        return ContactFactory::new ();
    }
}
