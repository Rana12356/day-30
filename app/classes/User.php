<?php


namespace App\classes;


class User
{
    public function getAllUsers ()
    {
        return [
            0 => [
                'id' => 1,
                'email' => 'admin@admin.com',
                'password' => '123'
            ],
            1 => [
                'id' => 2,
                'email' => 'teacher@admin.com',
                'password' => '123'
            ],
            2 => [
                'id' => 3,
                'email' => 'rana@admin.com',
                'password' => '123'
            ]
        ];
    }
}