<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
    'adminEmail' => env('ADMIN_EMAIL'),
    'robotEmail' => env('ROBOT_EMAIL'),
    'availableLocales'=>[
        'en-US'=>'English (US)',
        'ru-RU'=>'Русский (РФ)',
        'uk-UA'=>'Українська (Україна)',
        'es' => 'Español',
        'vi' => 'Tiếng Việt',
        'zh-CN' => '简体中文',
        'pl-PL' => 'Polski (PL)',
    ],
];
