<?php
$users = [
    [
        "username" => "johndoe",
        "password" => "johndoe123",
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "role" => "user"
    ],
    [
        "username" => "janedoe",
        "password" => "janedoe123",
        "name" => "Jane Doe",
        "email" => "janedoe@example.com",
        "role" => "admin"
    ],

];

$authorization_levels = 
[
    "user" => [
    "access_profile" => true,
    "edit_profile" => true,
    "access_admin_panel" => false,
    ],

    "admin" => [
    "access_profile" => true,
    "edit_profile" => true,
    "access_admin_panel" => true,
    "manage_users" => true,
    ],

];