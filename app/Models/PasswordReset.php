<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Aug 2018 20:00:30 +0300.
 */

namespace App\Models;

use Esensi\Model\Model;

/**
 * Class PasswordReset
 * 
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 */
class PasswordReset extends Model
{

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'password_resets';
        $this->guarded = ['id'];
        $this->dates = ['created_at', 'updated_at'];
        $this->incrementing = false;
        $this->hidden = [
            'token'
        ];
        $this->fillable = [
            'email',
            'token'
        ];
        $this->timestamps = false;

    }

    public const VALIDATION_RULES = [];
}
