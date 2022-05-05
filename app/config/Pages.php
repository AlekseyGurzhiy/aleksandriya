<?php

class Pages
{
    public function getActivePages(): array
    {
        return [
            'main' => 'Главная',
            'photo' => 'Фотогалерея',
            'price' => 'Цены',
            'contacts' => 'Контакты',
            'documents' => 'Документы',
            'admin' => 'Админка',
            'auth' => 'Авторизация',
        ];
    }

    public function getTextPages(): array
    {
        return [
            'main' => 'Александрия',
            'photo' => 'Фотогалерея',
            'price' => 'Цены на '.date('Y').' год',
            'contacts' => 'Контакты',
            'documents' => 'Документы',
            'admin' => 'Админка',
            'auth' => 'Авторизация',
        ];
    }

    public function getRolePages(): array
    {
        return [
            'main' => 'guest',
            'photo' => 'guest',
            'price' => 'guest',
            'contacts' => 'guest',
            'documents' => 'guest',
            'admin' => 'admin',
            'auth' => 'system',
        ];
    }

    public function getErrorPages(): array
    {
        return [
            '400' => 'Bad Request',
            '401' => 'Unautorized',
            '404' => 'Not Found',
            '500' => 'Internal Server Error',
        ];
    }
}