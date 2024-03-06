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

use App\Service\LoginService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Swagger\Annotation as SA;
use Hyperf\Swagger\Request\SwaggerRequest;

#[SA\HyperfServer('http')]
class LoginController extends Controller
{
    #[Inject]
    protected LoginService $loginService;

    #[SA\Post('/login', '小程序登录')]
    #[SA\RequestBody(new SA\JsonContent([
        new SA\Property('code', '微信授权码', 'string', 'required|string'),
    ]))]
    //    #[SA\Response('200', new SA\JsonContent('#/compoments/schemes/loginSchem'))]
    public function login(SwaggerRequest $request)
    {
        $code = $request->input('code');
        $result = $this->loginService->login($code);
        return $this->response->success($result);
    }
}
