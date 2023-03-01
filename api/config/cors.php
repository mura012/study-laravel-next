<?php
return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
 
    'allowed_methods' => ['*'],
    // 許可するリクエストオリジンの設定
    'allowed_origins' => [config('app.frontend_url')], // 変更
 
    'allowed_origins_patterns' => [],
 
    'allowed_headers' => ['*'],
 
    'exposed_headers' => [],
 
    'max_age' => 0,
    // Access-Control-Allow-Credentialsヘッダーを設定する。
    // trueの場合、レスポンスをフロントエンドの JavaScript コードに公開する
    // falsy値を指定すると出力せず、truthyな値を渡せばtrueが出力される
    'supports_credentials' => true, // 変更
];