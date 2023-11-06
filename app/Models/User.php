<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\UserFactory;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $email
 * @property string $password
 * @property DateTime $created_at
 * @property DateTime $updated_at
 *
 * @method static UserFactory factory($count = null, $state = [])
 *
 * @see \App\Factories\Models\UserFactory
 */
class User extends Model
{
    use HasFactory;

    protected $keyType = 'string';
}
