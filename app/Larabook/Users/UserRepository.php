<?php


namespace Larabook\Users;


class UserRepository
{
    /*
     * persist a user
     */
    public function save(User $user){

        return $user->save();
    }

}