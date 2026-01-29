# 【DartSass】Gulp環境（スマホファースト）

## 環境
- Gulpが使える環境が前提（4系）
- Nodeはバージョン14以降

## 使い方
1. ダウンロードしたフォルダを開く
2. ターミナルを開き、`npm i` とコマンドを入力
3. `node_modules` と `package-lock.json` が生成されるのを確認する
4. `npx gulp` とコマンドを入力すると監視タスク（Watch）が起動します

## 仕様
### Sass / CSS設計 (FLOCSSベース)
- **記述場所**: `src/sass` フォルダ内で行う
- **設計思想**: FLOCSS (Foundation, Layout, Object) に準拠
  - `global`: 変数、mixin、関数など（_setting.scss, _function.scss）
  - `base`: リセットCSS、基本スタイル
  - `module`: 外部ライブラリのオーバーライド（Swiper, CF7など）
  - `object`:
    - `component`: 再利用可能な小さなパーツ（ボタンなど）
    - `project`: ページ固有の塊、セクションなど
    - `layout`: ヘッダー、フッター、メインエリアなどの大枠
- **出力**: コンパイルされたCSSは `css/styles.css` に出力されます。
  - ※ルート直下の `style.css` はWordPressテーマ認識用のメタデータファイルです（スタイルは記述しません）。

### 画像管理
- **格納場所**: `src/images` フォルダ
- **処理**: 自動的に圧縮され、ルート直下の `images` フォルダに出力されます。

### JavaScript
- **記述場所**: `js` フォルダ
- **処理**: 圧縮等の処理は行わず、そのまま読み込まれます。

### WordPressテーマ構成
- 本環境はWordPressオリジナルテーマ開発用です。
- 主なテンプレートファイル: `index.php`, `front-page.php`, `header.php`, `footer.php`, `functions.php`

## 開発時のヘルパー / ルール
- **スマホファースト**: 基本スタイルはSP向けに書き、PC向けはメディアクエリで上書きする仕様です。
- **単位**: 原則 `rem` を使用してください。
  - `rem()` 関数が用意されています（例: `font-size: rem(16);`）。
- **フォントサイズ**: ルートフォントを `vw` で設定しているため、SP/Tablet環境では画面幅に応じて可変します（rem使用時）。
- **メディアクエリ**: `mq('md')` 等のmixinを使用してください（`src/sass/global/_setting.scss` 参照）。

## ディレクトリ構成
```text
root/
├── css/             # コンパイル後のCSS (styles.css)
├── images/          # 圧縮後の画像
├── js/              # JavaScriptファイル
├── src/             # 開発用ソースディレクトリ
│   ├── images/      # 元画像
│   └── sass/        # Sassファイル (FLOCSS構成)
├── style.css        # WPテーマ定義ファイル
├── gulpfile.js      # タスク設定
└── package.json     # 依存パッケージ管理