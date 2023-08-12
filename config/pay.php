<?php

return [
    'alipay' => [
        'app_id'         => env('ALIPAY_APP_ID'),
        'ali_public_key' => env('ALIPAY_PUBLIC_KEY'),
        'private_key'    => env('ALIPAY_PRIVATE_KEY'),
        'mode' => 'dev', // optional,设置此参数，将进入沙箱模式
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
         // 添加以下代码
         'http' => [
            'timeout' => 5.0,
            'connect_timeout' => 5.0
        ]
    ],

    'wechat' => [
        'app_id'      => env('WECHAT_PAY_APP_ID'),
        'mch_id'      => env('WECHAT_PAY_MCH_ID'),
        'key'         => env('WECHAT_PAY_KEY'),
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
