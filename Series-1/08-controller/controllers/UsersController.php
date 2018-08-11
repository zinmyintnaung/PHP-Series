<?php

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', [
            'users' => $users
        ]);
    }

    public function store()
    {
                
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);
        
        return redirect('/PHP-Series/Series-1/08-controller/index.php/users');
        //header('Location: /PHP-Series/Series-1/08-controller/index.php/users');
    }
}