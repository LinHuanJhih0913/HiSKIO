## Q1：
```text
您正在爬樓梯，樓梯具有 n 層階梯，
您可以一次爬 1 層階梯，或是一次爬 2 層階梯，
請問 n 層階梯有多少種方法可以登頂？
請使用 PHP 寫出解決方案。
```

### install and execute
```bash
git clone https://github.com/LinHuanJhih0913/HiSKIO.git
cd HiSKIO/q1/
php index.php
```

---

## Q2：
```text
請您使用 Laravel 設計出一個文章系統 API，
使用者可以新增、顯示、更新、刪除文章，
並且依照 RESTful 架構與設計規範進行實作。
```

### install and execute
```bash
git clone https://github.com/LinHuanJhih0913/HiSKIO.git
cd HiSKIO/q2/
composer install
cp .env.example .env
php artisan key:generate
php artisan mysql:create
php artisan migrate
php artisan serve
```

---

## Q3：
```text
小明任職於一家電商的新創公司，銷售的商品會上架於 Pchome, Yahoo, Ruten, Shopee 等拍賣平台，
小明的任務是當一個產品發佈(publish)的時候，能夠馬上通知所有平台產品已經發佈，
當平台收到通知後就會回傳「Pchome 已收到商品發佈通知」字樣，Yahoo, Ruten, Shopee 以此類推，
並且可以隨時增加、減少任一個通路的通知，比如拿掉 Yahoo，新增 Shopee 的通路，
請您設計出一個可以隨時增加、減少需求的程式碼架構，幫助小明達到此功能！

執行檔案部分內容：
...
...
// attach shopee
// detach yahoo
$product->publish();

執行結果：

Pchome 已收到商品發佈通知
Ruten 已收到商品發佈通知
Shopee 已收到商品發佈通知
```

### install and execute
```bash
git clone https://github.com/LinHuanJhih0913/HiSKIO.git
cd HiSKIO/q3/
composer install
php index.php
```
