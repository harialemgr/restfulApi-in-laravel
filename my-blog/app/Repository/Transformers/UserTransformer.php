<?php
namespace App\Repository\Transformers;
class UserTransformer extends Transformer{
    public function transform($user){
        return [
            'fullname' => $user->name,
            'email' => $user->email,
            'api_token' => $user->remember_token,
        ];
    }
}