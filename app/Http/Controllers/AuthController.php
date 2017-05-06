<?php

namespace App\Http\Controllers;

use Socialite;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  /**
     * 重定向用户到 qq 认证页。
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('qq')->redirect();
    }

    /**
     * 从 qq 得到用户信息
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('qq')->user();

        // $user->token;
    }
}
