<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Aug 2018 20:00:30 +0300.
 */

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Authenticatable
{

    use Notifiable;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'users';
        $this->guarded = ['id'];
        $this->dates = ['created_at', 'updated_at'];
        $this->hidden = [
            'password',
            'remember_token'
        ];
        $this->fillable = [
            'name',
            'email',
            'password',
            'remember_token'
        ];
    }

    public const VALIDATION_RULES = [];
}
