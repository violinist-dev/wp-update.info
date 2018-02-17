# 古いWordPressをアップデートしようキャンペーン

https://wp-update.info/

## 構成
WordPressのサイトなので当然WordPressだけど今回は一人で作る前提なので一切の遠慮なく使いたいものを使っている。

- Bedrock https://github.com/roots/bedrock
- Sage https://github.com/roots/sage
- Laravel Mix https://github.com/JeffreyWay/laravel-mix
- Forge https://forge.laravel.com/
- AWS

GitHubへのpushで→Forge→AWSへデプロイ。

## テーマ
一般的なテーマとは違うSage 9なので分かりにくいけど現状見る場所は数ヶ所。

`web/app/themes/wp-update/`以下から
- `app/controllers/front-page.php` と `resources/views/front-page.blade.php`
- `app/controllers/author.php` と `resources/views/author.blade.php`
- `resources/views/partials/about.blade.php`

Controllerと言っても独特な仕様なので`users()`の返り値がビューに`$users`として渡されるとだけ覚えればいい。

## ローカル開発
WordPressとテーマで2回`composer install`が必要。

```bash
git clone https://github.com/kawax/wp-update.info.git
cd wp-update.info
composer install
```

ローカルサーバーはHomestead  
https://readouble.com/laravel/5.5/ja/homestead.html

### テーマ

```bash
cd web/app/themes/wp-update/
composer install
yarn install
```

`yarn prod` でビルド。

## LICENSE
MIT
