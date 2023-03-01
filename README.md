# Laravel と Next.js の接続

- client ディレクトリでフロントエンドのコードを書いたら`yarn build`する
- `yarn dev`をすれば今まで通りに開発サーバーを建てられる

## Laravel の public ディレクトリにビルド

1.  `cp api/public/index.php client/public/index.php `
    `cp api/public/.htaccess client/public/.htaccess`
1.  ```
     "scripts": {
           "dev": "next dev",
           "build": "next build && next export -o ../api/public",
           "start": "next start",
           "lint": "next lint"
     }
    ```
1.  client ディレクトリでビルドコマンドを実行
    `yarn build`

###### [参考サイト](https://www.webopixel.net/php/1724.html)
