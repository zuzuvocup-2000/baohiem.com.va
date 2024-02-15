<?php
return [
    'custom' => [
        'username' => [
            'required' => 'The username field is required.',
            'string' => 'The username must be a string.',
            'max' => 'The username may not be greater than :max characters.',
            'regex' => 'The username must only contain letters and numbers.',
        ],
        'password' => [
            'required' => 'The password field is required.',
            'string' => 'The password must be a string.',
            'min' => 'The password must be at least :min characters.',
        ],
    ],
];
