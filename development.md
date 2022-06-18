# ガチ初回

```
mkdir backend
make create-project
make install-recommend-packages
```

これも

```php
declare(strict_types=1);
```

# ローカル最初

※Windows は標準で make コマンド無いので、別途インストールまたは WSL 側でコマンド叩いて実行してください。

```
make init
```

## よく使うコマンド集

データベースクリア

```
make fresh
```

テスト

```
make test
```

Larastan による静的解析

```
make stan
```

それ以降

```
make up
```

npm install

```
make npm-install
```

ide-helper

```
make ide-helper
```

Mysql 直打ち

```
make sql
```

## リンク

ローカルホスト  
http://127.0.0.1:2649/

PHPMyAdmin  
http://127.0.0.1:2650/

メール  
http://127.0.0.1:2651/

## 参考

https://hisa-web.net/archives/502

## 環境構築

```
make init
```

で出てくる

```
dc exec app php artisan passport:client --personal
```

の id をバックエンド.env の NEXT_APP_CLIENT にコピー  
の pass をフロントエンドの.env の

```
LARAVEL_PASSPORT_CLIENT_ID=
LARAVEL_PASSPORT_CLIENT_SECRET=
```

に入れる
