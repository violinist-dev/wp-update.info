<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table      = 'users';
    public $timestamps = false;
    protected $primaryKey = 'ID';
    const CREATED_AT = 'user_registered';

    public function meta()
    {
        return $this->hasMany(UserMeta::class);
    }

    public function getMeta($meta_key = false)
    {
        $meta_value = '';
        if ($meta_key) {
            $meta_value = $this->meta()->where('meta_key', $meta_key)->pluck('meta_value')->first();

            $meta_value = maybe_unserialize($meta_value);
        }

        return $meta_value;
    }
}
