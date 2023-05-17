<?php


namespace App\classes;

use App\classes\User;


class Auth
{
    public $email, $password;

    public $user, $users;

    public function __construct($post = null)
    {
        if ($post)
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }
    }

    public function signIn ()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUsers();

        foreach ($this->users as $user)
        {
            if ($user['email'] == $this->email && $user['password'] == $this->password)
            {
                session_start();
                $_SESSION['id'] = session_id();
                header('Location: action.php?page=home');
            }
        }
        return 'Email or Password is invalid';
    }

    public function signOut ()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?page=sign-in');
    }
}