<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['GET', 'POST'],

    'allowed_origins' => ['https://getschiffy.com', 'https://nft.getschiffy.com', 'https://marketplace.getschiffy.com'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['content-type', 'accept', 'x-custom-header', 'Access-Control-Allow-Origin'],

    'exposed_headers' => ['x-custom-response-header'],

    'max_age' => 0,

    'supports_credentials' => false,

];