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
        'email' => [
            'required' => 'The email field is required.',
            'string' => 'The email must be a string.',
            'max' => 'The email may not be greater than :max characters.',
            'regex' => 'Email format is invalid',
            'not_regex' => 'Email format is invalid',
        ],
        'current_password' => [
            'required' => 'You must enter your old password.',
        ],
        'new_password' => [
            'required' => 'You must enter a new password.',
            'min' => 'Password must have at least :min characters.',
        ],
        'confirm_password' => [
            'required' => 'You must re-enter the new password you just entered.',
            'min' => 'Password must have at least :min characters.',
            'same' => 'Passwords do not match',
        ],
    ],
];
