<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [

        'failed' => ':email or :password is incorrect.',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [

        'y' => 'year',
        'm' => 'month',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',

        'ago' => 'ago.',
        'recently' => 'just now.',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [

        'request' => [
            'required' => ':field is required!.',
            'email' => ':field is invalid!.',
            'dns' => ':field is invalid!.',
            'url' => ':field is invalid!.',
            'uuid' => ':field is not a UUID!.',
            'int' => ':field must be a number!.',
            'float' => ':field must be a decimal!.',
            'min' => ':field minimum length: :attribute',
            'max' => ':field maximum length: :attribute',
            'same' => ':field is not the same as :attribute',
            'unique' => ':field already exists!.',
        ],

        'file' => [
            'required' => ':field is required!.',
            'min' => ':field minimum length: :attribute',
            'max' => ':field maximum length: :attribute',
            'mimetypes' => ':field allowed types: :attribute',
            'mimes' => ':field allowed types: :attribute',
            'unsafe' => ':field is suspected to be unsafe!.',
            'corrupt' => ':field was not uploaded correctly!.',
        ],
    ]
];
