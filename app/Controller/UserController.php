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

namespace App\Controller;

use App\Service\SubService\UserAuth;
use App\Service\UserService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Swagger\Annotation as SA;
use Hyperf\Swagger\Request\SwaggerRequest;

#[SA\HyperfServer('http')]
class UserController extends Controller
{
    #[Inject]
    protected UserService $userService;

    #[SA\Post('/user/info', '用户信息')]
    public function info(SwaggerRequest $request)
    {
        //        $user_id = UserAuth::instance()->getUserId();
//        $result = $this->userService->info(1);
        return $this->response->success("12313");
    }
}
