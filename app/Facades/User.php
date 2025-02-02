<?php

namespace App\Facades;

use App\Services\User\UserService;
use Illuminate\Support\Facades\Facade;


/**
 * @method static \App\Http\Resources\User\CurrentUserResource store(\App\Data\User\RegisterData $data)
 * @method static \Illuminate\Http\JsonResponse login(\App\Data\User\LoginData $data)
 * @method static \App\Models\User update(\App\Data\User\UpdateUserData $data)
 * @method static \App\Models\User updateAvatar(\Illuminate\Http\UploadedFile $avatar)
 * @method static \Illuminate\Database\Eloquent\Collection posts(\App\Models\User $user)
 * @method static \Illuminate\Database\Eloquent\Collection currentUserPosts()
 *
 * @see UserService;
 */

class User extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return UserService::class;
    }
}
