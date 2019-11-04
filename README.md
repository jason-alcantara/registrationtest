# プログラム課題

プログラム課題のPHPを使って作られた提出物（登録システム）

## 前提条件

プログラムを実行するためにインストールする必要があるもの。

- PHP - 7.3.x (このバージョン以上)
- Composer - 1.9.x (このバージョン以上)
- XAMPP

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

## 技術説明

This program is for 