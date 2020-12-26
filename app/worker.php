<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

/**
 * App\Worker
 *
 * @property int $id
 * @property string $id_card_number
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $address
 * @property string $occupation
 * @property string $phone
 * @property array $state
 * @property array $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|worker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|worker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|worker query()
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereIdCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|worker whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class worker extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $fillable = [
        'id_card_number',
        'name',
        'email',
        'password',
        'address',
        'occupation',
        'phone',
        'state',
        'rate',
    ];

    protected $casts = [
        'state' => 'json',
        'rate'  => 'json',
    ];

}
