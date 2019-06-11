### WordPress デバッグモード

public/cms/wp-config.php#L84

> * この値を true にすると、開発中に注意 (notice) を表示します。
> * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。

```php
define('WP_DEBUG', true);
```

### IP直指定の設定

public/cms/wp-config.php#L85

スマホで確認する際にIP直指定する場合

```php
define('WP_HOME','http://***.***.**.**/');
define('WP_SITEURL','http://***.***.**.**/cms/');
```
