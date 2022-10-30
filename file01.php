<?php

use Interfaces\UserActivityInterface;

class UserActivity implements UserActivityInterface
{

    public function getUserActivity(int $id)
    {
        $model = UserActivity::get($id);

        return $model;
    }

    // From the interface
    public function setUserActivity(int $id, array $activity)
    {
        $model = UserActivity::set($id, $activity);

        return $model;
    }

    // From the interface
    public function deleteUserActivity()
    {
        //...
    }

    // From the interface
    public function updateUserActivity(int $id, array $activity)
    {
        $model = UserActivity::update($id, $activity);

        return $model;
    }

}
