<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Service\Dao;

use App\Constants\ErrorCode;
use App\Exception\BusinessException;
use App\Model\User;
use Han\Utils\Service;

class UserDao extends Service
{
    public function first(int $id, bool $throws = false): ?User
    {
        $model = User::findFromCache($id);
        if (! $model && $throws) {
            throw new BusinessException(ErrorCode::USER_NOT_EXIST);
        }
        return $model;
    }

    public function firstOrCreate(string $openid): ?User
    {
        $user = $this->firstByOpenId($openid);
        if (! $user) {
            $user = new User();
            $user->openid = $openid;
            $user->save();
        }
        return $user;
    }

    public function firstByOpenId(string $open_id): ?User
    {
        return User::query()->where('open_id', $open_id)->first();
    }
}
