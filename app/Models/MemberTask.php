<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberTask extends Model
{
    protected $table = "member_task";

    public $timestamps = false;

    protected $fillable = [
        'id_card', 'id_user',
    ];
}
