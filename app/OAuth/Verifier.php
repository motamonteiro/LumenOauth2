<?php
/**
 * Created by PhpStorm.
 * User: motamonteiro
 * Date: 30/07/15
 * Time: 00:57
 */

namespace App\OAuth;


class Verifier
{

    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        $authManager = app()['auth'];

        if (app()["auth"]->once($credentials)) {
            return $authManager->user()->id;
        }

        return false;
    }
}