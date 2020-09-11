# sym_practice

symfony安裝：
https://dotblogs.com.tw/hochile/2020/03/18/092753
https://chenuin.blogspot.com/2019/02/symfonysetup.html


MAC版:
進入mysql，及查看版本
/Applications/MAMP/Library/bin/mysql -uroot -p
Select version();


window版:


執行：./bin/console server:run

套件
composer require symfony/web-server-bundle --dev ^4.4.2
composer require annotations
composer require sec-checker 
composer install
composer require template
composer require profiler —dev //網頁下面會顯示你的狀態
composer require debug



dd($this) //會顯示$this在程式碼裡面的資料(行數之類的)
php bin/console server:dump//用来收集并标准输出 dumped 数据
