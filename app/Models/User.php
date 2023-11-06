<?php

declare(strict_types=1);

namespace App\Models;

use BadMethodCallException;
use Database\Factories\UserFactory;
use DateTime;
use Illuminate\Contracts\Auth\Authenticatable;
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
class User extends Model implements Authenticatable
{
    use HasFactory;

    protected $keyType = 'string';

    public function getAuthIdentifierName(): string
    {
        return 'id';
    }

    public function getAuthIdentifier(): string
    {
        return $this->id;
    }

    public function getAuthPassword(): string
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        throw new BadMethodCallException('Method not implemented!');
    }

    public function setRememberToken($value)
    {
        throw new BadMethodCallException('Method not implemented!');
    }

    public function getRememberTokenName()
    {
        throw new BadMethodCallException('Method not implemented!');
    }
}
