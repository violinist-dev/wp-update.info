# 古いWordPressをアップデートしようキャンペーン

https://wordpress-update.info/

## テーマ
https://github.com/roots/sage

一般的なテーマとは違うSage 9なので分かりにくいけど現状見る場所は数ヶ所。

`web/app/themes/wp-update/`以下から
- `app/controllers/front-page.php` と `resources/views/front-page.blade.php`
- `app/controllers/author.php` と `resources/views/author.blade.php`
- `resources/views/partials/about.blade.php`

Controllerと言っても独特な仕様なので`users()`の返り値がビューに`$users`として渡されるとだけ覚えればいい。

## ローカル開発
WordPressとテーマで2回`composer install`が必要。

```bash
git clone https://github.com/kawax/wordpress-update.info.git
cd wordpress-update.info
composer install
cd web/app/themes/wp-update/
composer install
```

## LICENSE
MIT
