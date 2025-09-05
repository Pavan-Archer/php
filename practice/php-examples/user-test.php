<?php

class user{
public $name;
 public $email;
}

class UserRepository {
    public function save(User $user) {
        echo "Saving user: {$user->name}\n";
}
}

$user = new User();
$user->name = "Pavan";
$user->email = "pavan@gmail.com";

$repo = new UserRepository();
$repo->save($user);