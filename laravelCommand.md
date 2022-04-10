# 開発中によく使うコマンド

factory 作成

```
dc exec app php artisan make:factory Fruit
```

シーダー作成

```
dc exec app php artisan make:seeder PhotoTableSeeder
```

model+migration 作成

```
dc exec app php artisan make:model Book --migration
```

テーブルに行追加

```
dc exec app php artisan make:migration add_flags_and_roles_to_users_table --table=users
```

controller 作成

```
dc exec app php artisan make:controller admin/HomeAdminController
```

マイグレーション

```
dc exec app php artisan migrate
```

シード付き再生成

```
dc exec app php artisan migrate:fresh --seed
```

シーダー実行(単発)

```
dc exec app php artisan db:seed --class=NERLabelSeeder
```
