# Plumber
高等軟體工程 小組作業 水電工


### 環境安裝
* 下載 xampp
* 下載 composer
* 利用 composer去下載 Laravel的Framework([安裝教學](https://laravel.tw/docs/4.2))

### 修改環境
* 找到檔案 \xampp\apache\conf\httpd.conf
```java
#Virtual hosts
Include conf/extra/httpd-vhosts.conf
#將上面這行的註解拿掉
```
* 找到檔案 xampp\apache\conf\extra\httpd-vhosts.conf
```java
##<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "C:/xampp/htdocs/Plumber/public"
    ##ServerName dummy-host.example.com
    ##ServerAlias www.dummy-host.example.com
    ##ErrorLog "logs/dummy-host.example.com-error.log"
    ##CustomLog "logs/dummy-host.example.com-access.log" common
##</VirtualHost>
#把Document更改成index.php存放的位置
```
* 若遇到報錯情況的話可能是composer下載的版本問題以及套件未安裝完成，Plumber資料夾檔案路徑下打指令
```
composer install有點類似於npm i的存在
composer install
composer update
```
會自動下載相對應版本的framework

* > 接著將.env.example複製並重新命名為.env
  >
  > 在Plumber資料夾路徑下指令php artisan key:generate
  >
  > 就會自動將加密的密鑰加到你複製的.env當中
  >
  > 若要自行測試的話需要修改Plumber底下的.env

* 匯入初始資料庫
```
php artisan migrate
php artisan session:table
```

```java
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=57575
DB_DATABASE=plumber
DB_USERNAME=root
DB_PASSWORD=greynia1130
```

將這邊改成自己的資料庫的設定檔自行進行測試，host,port,database等等自行設置


### 測試
利用 artisan 的指令進行測試(下php artisan serve指令可以啟動server)或者直接再xampp啟動測試


### 建資料庫表(版控，也可自行定義資料庫)
> database底下的migration下可進行定義
>
> 需下指令php artisan make:migraton XXX(名稱)
>
> 然後再下指令php artisan migrate去建置資料庫

### 主要會使用的結構
> resources底下的views裡面是主要頁面
>
> routes底下的web.php是做route的設定，可以設定顯示的頁面
>
> tests底下是放置一些單元測試等等
>
> Http底下的Controller是做動作控制等等，controller@(controller中的function)這樣的形態可以在route裡面做使用，詳情參見route/web.php

### Selenium test
```
composer require --dev laravel/dusk
php artisan dusk:install
php artisan dusk:make XXX(可建立Selenium測試案例)
php artisan dusk指令可跑測試
記得將原先的exampletest檔案刪除(在tests/Browser裡面)
```
