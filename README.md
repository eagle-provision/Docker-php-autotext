# docker-laravel-boilerplate
Boilerplate for laravel 7 with docker


## Make docker environment up
```
cd laravel;
docker-compose up;
```

Install necessary PHP libary for docker container;
```
cd laradock;
docker-compose exec workspace /usr/local/bin/composer update;
```

Load initial data
```
cd laradock;
docker-compose exec workspace php artisan db:seed;
```


# Related technical information / 関連技術の役立ち情報 / 相关技术资料

## 日本語(Japanese)
- [Dockerのインストール・設定方法](https://vpshikaku.com/docker%e3%81%ae%e3%82%a4%e3%83%b3%e3%82%b9%e3%83%88%e3%83%bc%e3%83%ab%e3%83%bb%e8%a8%ad%e5%ae%9a%e6%96%b9%e6%b3%95/)

- [Djangoのインストール/設定/開発方法(Django3.x対応)](https://vpshikaku.com/django%e3%81%ae%e3%82%a4%e3%83%b3%e3%82%b9%e3%83%88%e3%83%bc%e3%83%ab-%e8%a8%ad%e5%ae%9a-%e9%96%8b%e7%99%ba%e6%96%b9%e6%b3%95/)

- [PostgreSQLのインストール・設定・使い方](https://vpshikaku.com/postgresql%e3%81%ae%e3%82%a4%e3%83%b3%e3%82%b9%e3%83%88%e3%83%bc%e3%83%ab%e6%96%b9%e6%b3%95cent-os%e7%b3%bb%e3%81%ae%e5%a0%b4%e5%90%88/)

# License / ライセンス / 执照

MIT

# Author / 作者

## Name / 名前 / 全名
Hajime Kurita

## Twitter
- EN: https://twitter.com/hajimekurita
- JP: https://twitter.com/hikarine3

## Weibo
- CN: https://www.weibo.com/hajimekurita

## Corporation page / 会社ページ / 公司页面
- EN: https://1stclass.co.jp/en/
- CN: https://1stclass.co.jp/zh/
- JP: https://1stclass.co.jp/

## Blog
- EN: https://en.sakuhindb.com/pe/Administrator/
- JP: https://sakuhindb.com/pj/6_B4C9CDFDBFCDA4B5A4F3/

## Techincoal web services / 提供してる技術関連Webサービス / Techincoal Web服务
### VPS & Infra comparison / VPS比較 / VPS比较
- EN: https://vpsranking.com/en/
- CN: https://vpsranking.com/zh/
- JP: https://vpshikaku.com/

### Programming Language Comparison / プログラミング言語比較 / 编程语言比较
- EN: https://programminglang.com/en/
- CN: https://programminglang.com/zh/
- JP: https://programminglang.com/ja/

### OSS
- Docker: https://hub.docker.com/u/1stclass/
- Github: https://github.com/hikarine3
- NPM: https://www.npmjs.com/~hikarine3
- Perl: http://search.cpan.org/~hikarine/
- PHP: https://packagist.org/packages/hikarine3/
- Python: https://pypi.org/user/hikarine3/
