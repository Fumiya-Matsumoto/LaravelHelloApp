# LaravelHelloApp
## 要件定義
### 機能要件
* 画面
  * Todoのタイトルとステータスそれぞれのテーブルヘッダーにソート機能のUIを作成すること
  * Todoをカテゴリ別（未対応、処理中、処理済み、完了）に検索できるセレクトボックスを作成する
  * Todoのタイトルをキーワード検索できる入力フォームを作成すること
* 機能
  * Todoのタイトルとステータスが昇順と降順にソートできること
  * Todoをカテゴリ別に検索できること
  * Todoのタイトルをキーワードで検索できること
  * ３つの要素を複合的に検索できること
### 非機能要件
* ユーザビリティ
  * 利用者が想定する流れに沿った機能とすること
  * ユーザーが必要な操作をイメージしやすい画面構成とすること
  * 操作の説明、メニュー等には、利用者が正しく理解できる用語を使うこと
  * 基本的な用語、デザインには一貫性を持たせること
  * エラーが発生した際には、ユーザが何をすべきかをメッセージを表示すること
* 拡張性
  * 最新版のGoogle Chromeで正常に動作すること
* 性能
  * リクエストに対し3秒以内にレスポンスを返す
  * 利用者にストレスを感じさせないレスポンス
*  信頼性
  * アプリケーション特有の脅威、脆弱性について対策すること              
