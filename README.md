# プログラム課題

プログラム課題のPHPを使って作られた提出物（登録システム）

## 前提条件

プログラムを実行するためにインストールする必要があるもの。

- [PHP](https://www.php.net/downloads.php) - 7.3.x (このバージョン以上) 
- [Composer](https://getcomposer.org/download/) - 1.9.x (このバージョン以上)
- [XAMPP](https://www.apachefriends.org/index.html)

## 設置

### データベース

```sql
CREATE DATABASE registration;
```

これは、使用するデータベースを作成するためのものです。

```sql
CREATE TABLE users (
id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
name TINYTEXT NOT NULL,
email TINYTEXT NOT NULL
);
```

これは、データを保存するテーブルを作成するためのものです。

### PHPMailer

最初に、プロジェクトディレクトリからターミナルを開きます。

```composer
composer require phpmailer/phpmailer
```

このコードを実行して、登録後にメールの送信を処理するPHPMailerをインストールします。

### 実行説明

まずはxamppディレクトリのhtdocsフォルダーにリポジトリーをクローンします。

次に、xampp-controlを開き、「Apache」と「MySQL」を起動します。

その後、同じディレクトリでターミナルを開いて、PHPMailerをインストールします。
```composer
composer require phpmailer/phpmailer
```
ブラウザを開き、`localhost/registrationtest/view`にアクセスすると、Webサイトが表示されます。

以上