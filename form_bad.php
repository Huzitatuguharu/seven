<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>入力フォーム</title>
</head>

<body>
  <section class="palent_contact_form">
    <h1>
      <p id="mail_icon" class="material-icons">
        email
      </p>
      <p id="palent_contact_title">お問い合わせ
      </p>
    </h1>
    <form class="contact_form">
      <div class="item">
        <label class="label" name="name">名前</label>
        <input id="name" type="text" value="広島藤雄" placeholder="広島藤雄">

      </div>
      <div class="item">
        <label class="label" name="name">ふりがな</label>
        <input id="name" type="text" value="ひろしまふじお" placeholder="ひろしまふじお">

      </div>
      <div class="item">
        <label class="label">メールアドレス</label>
        <input id="e-mail" type="email" name="email" value="huzioyaken@example.com" placeholder="huzioyaken@example.com">
      </div>

      <div class="item">
        <p class="label">お問い合わせ項目</p>
        <div class="radio_group">

          <label class="my-radio">
            <input type="radio" name="source" checked>
            <span class="radio-mark"></span>
            <p id="source1">
              ご注文</p>
          </label>
          <label class="my-radio">
            <input type="radio" name="source">
            <span class="radio-mark"></span>
            <p id="source2">
              会員登録
            </p>
          </label>
          <label class="my-radio">
            <input type="radio" name="source">
            <span class="radio-mark"></span>
            <p id="source3">
              その他
            </p>
          </label>
        </div>
      </div>
      <div class="item">
        <label class="label">お問い合わせ内容</label>
        <textarea rows="4" id="message" placeholder="できるだけ詳しくご記入ください。" name="comment">できるだけ詳しくご記入ください。</textarea>
      </div>
      <div class="item,btnarea" id="btnarea">
        <button type="submit" class="btn" id="send">送信する</button>
      </div>
    </form>
  </section>

  <section class="memo">
    <a href="note.php">メモする</a>
  </section>

  <!-- deyjs -->
  <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
  <script>
    dayjs().format()
  </script>

  </script>
</body>

</html>
