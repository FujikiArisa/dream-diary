# Laravel-Composer-Template

## Startup
1. Docker Composeの起動
~~~sh
$ docker compose up -d
~~~

2. composerのインストール
~~~sh
$ docker compose exec web /usr/bin/composer install
~~~

3. laravelのセットアップ
~~~sh
$ docker compose exec web cp -rip .env.example .env
$ docker compose exec web php artisan key:generate
~~~

* M（Model）の作り方
~~~sh
$ docker compose exec web php artisan make:model モデル名
$ docker compose exec web php artisan make:model Diary
~~~

* V（View）の作り方
~~~sh
# $ docker compose exec web php artisan make:view HTML名
$ docker compose exec web php artisan make:view user/login
$ docker compose exec web php artisan make:view user/register
$ docker compose exec web php artisan make:view pages/top
$ docker compose exec web php artisan make:view pages/create
$ docker compose exec web php artisan make:view pages/calendar
$ docker compose exec web php artisan make:view pages/mypage
$ docker compose exec web php artisan make:view pages/search
$ docker compose exec web php artisan make:view pages/edit

~~~

* C（Controller）の作り方
~~~sh
# $ docker compose exec web php artisan make:controller コントローラ名
$ docker compose exec web php artisan make:controller User/LoginController      #ログイン
$ docker compose exec web php artisan make:controller User/RegisterController   #新規登録
$ docker compose exec web php artisan make:controller TopController             #トップ
$ docker compose exec web php artisan make:controller CreateController          #夢日記の追加
$ docker compose exec web php artisan make:controller CalendarController        #カレンダ
$ docker compose exec web php artisan make:controller MypageController          #マイページ
$ docker compose exec web php artisan make:controller SearchController          #検索
$ docker compose exec web php artisan make:controller EditController            #編集
$ docker compose exec web php artisan make:controller DeleteController          #編集


~~~

---
* テーブルの作り方
~~~sh
$ docker compose exec web php artisan make:migration 操作_テーブル名
$ docker compose exec web php artisan make:migration create_users
$ docker compose exec web php artisan make:migration create_diaries


$ docker compose exec web php artisan migrate
$ docker compose exec web php artisan migrate:status
$ docker compose exec web php artisan migrate:rollback
~~~

~~~sh
$ docker compose exec web php artisan make:request リクエストクラス名
$ docker compose exec web php artisan make:request Diary/CreateRequest      #夢日記
$ docker compose exec web php artisan make:request Diary/UpdateRequest
$ docker compose exec web php artisan make:request Diary/DeleteRequest

$ docker compose exec web php artisan make:request User/CreateRequest       #ユーザー
$ docker compose exec web php artisan make:request User/UpdateRequest
$ docker compose exec web php artisan make:request User/DeleteRequest

~~~

docker compose exec web php artisan make:seed UserSeeder
docker compose exec web php artisan db:seed --class UserSeeder

docker compose exec web php artisan make:seed DiarySeeder
docker compose exec web php artisan db:seed --class DiarySeeder