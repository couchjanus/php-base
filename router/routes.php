<?php

return array(
    //Регистрация
    'user/signup' => 'users/signup', //action Signup в User Controller

    //Вход
    'user/login' => 'users/login',

    //Выход
    'user/logout' => 'users/logout',
    
    'admin/create' => 'admin/create',
    'admin/edit/{id}' => 'admin/edit',
    'admin' => 'admin/index',
    'contact' => 'contact/index',
    //Главаня страница
    'index.php' => 'home/index', //вызываем action Index в home Controller
    '' => 'home/index',  //вызываем action Index в home Controller
    
);
