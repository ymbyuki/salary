# Salary - 給与管理システム

103万円の壁と戦うための給与管理アプリケーションです。

## 概要

このアプリケーションは、Laravel 8とJetstreamを使用して構築された給与管理システムです。ユーザーは給与情報を記録し、103万円の年収制限を意識しながら収入を管理できます。

## 必要な環境

- PHP 7.3以上 (PHP 8.0推奨)
- Composer
- Node.js 14以上
- NPM
- MySQL 5.7以上またはMariaDB 10.3以上

## インストール手順

### 1. リポジトリのクローン

```bash
git clone https://github.com/ymbyuki/salary.git
cd salary
```

### 2. Composerの依存関係をインストール

```bash
composer install
```

### 3. Node.jsの依存関係をインストール

```bash
npm install
```

### 4. 環境設定ファイルのセットアップ

```bash
cp .env.example .env
```

`.env`ファイルを編集して、データベース接続情報を設定してください：

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=salary
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. アプリケーションキーの生成

```bash
php artisan key:generate
```

## データベースのセットアップ

### 1. データベースの作成

MySQLまたはMariaDBにログインして、アプリケーション用のデータベースを作成してください：

```sql
CREATE DATABASE salary CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 2. マイグレーションの実行

```bash
php artisan migrate
```

このコマンドにより以下のテーブルが作成されます：
- users (ユーザー情報)
- password_resets (パスワードリセット)
- failed_jobs (失敗したジョブ)
- personal_access_tokens (個人アクセストークン)
- sessions (セッション)
- salaries (給与情報)

### 3. シーダーの実行（オプション）

```bash
php artisan db:seed
```

## アセットのコンパイル

### 開発環境での監視

```bash
npm run watch
```

### 本番用のコンパイル

```bash
npm run production
```

## アプリケーションの起動

### 開発サーバーの起動

```bash
php artisan serve
```

アプリケーションは `http://localhost:8000` でアクセスできます。

### 本番環境での起動

Webサーバー（Apache/Nginx）を設定して、`public`ディレクトリをドキュメントルートに設定してください。

## 主な機能

### 認証機能
- ユーザー登録
- ログイン/ログアウト
- パスワードリセット
- 2要素認証（Laravel Jetstream提供）

### 給与管理機能
- 給与記録の登録
- 給与データの一覧表示
- 給与記録の編集・削除
- 年収の計算と103万円制限の監視

## 使用方法

1. **ユーザー登録**: トップページから「登録する」をクリックしてアカウントを作成
2. **ログイン**: 登録したアカウントでログイン
3. **給与記録**: ダッシュボードから給与情報を入力
4. **データ管理**: 記録した給与データの閲覧・編集・削除が可能

## ディレクトリ構造

```
├── app/                # アプリケーションロジック
│   ├── Http/Controllers/   # コントローラー
│   └── Models/            # モデル
├── config/             # 設定ファイル
├── database/           # データベース関連
│   ├── migrations/        # マイグレーションファイル
│   └── seeders/          # シーダーファイル
├── public/             # 公開ディレクトリ
├── resources/          # リソースファイル
│   ├── views/             # Bladeテンプレート
│   └── css/              # スタイルシート
├── routes/             # ルート定義
└── storage/            # ストレージ
```

## トラブルシューティング

### 権限エラーが発生した場合

```bash
chmod -R 775 storage bootstrap/cache
```

### Composerでエラーが発生した場合

PHPのバージョンを確認し、必要に応じて依存関係を更新してください：

```bash
composer update
```

### データベース接続エラーが発生した場合

1. `.env`ファイルのデータベース設定を確認
2. データベースサーバーが起動していることを確認
3. データベースとユーザーが正しく作成されていることを確認

## 開発者向け情報

### テストの実行

```bash
php artisan test
```

### コードスタイルの確認

```bash
./vendor/bin/phpcs
```

### Laravel Sailを使用した開発（Docker）

```bash
./vendor/bin/sail up
```

## ライセンス

このプロジェクトはMITライセンスの下で公開されています。

## サポート

問題や質問がある場合は、GitHubのIssuesページで報告してください。