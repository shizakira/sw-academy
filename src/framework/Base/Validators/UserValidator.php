<?php

namespace Framework\Validators;

use Framework\Validators\Validator;

class UserValidator extends Validator
{
    protected static array $messages = [
        'id' => 'ID должен начинаться с 1',
        'name' => 'Имя должно содержать только буквы и быть длиной от 3 до 30 символов',
        'email' => 'Email должен быть действительным адресом электронной почты',
        'password' => 'Пароль должен содержать минимум 8 символов, включая одну цифру, одну заглавную и одну строчную букву'
    ];

    protected static array $rules = [
        'id' => '^[1-9]+[0-9]*$',
        'name' => '/^[a-zA-Zа-яА-ЯёЁ\s]{3,30}$/u',
        'email' => '/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/',
        'password' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'
    ];
}
