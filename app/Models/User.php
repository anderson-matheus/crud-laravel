<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class User extends Model
{
    protected $fillable = [
      'name',
      'lastname',
      'username',
      'email'
    ];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('d/m/Y H:i:s');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('d/m/Y H:i:s');
    }
}
