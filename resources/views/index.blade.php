<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サンプルページ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1>Nutritionist</h1>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h2>食材</h2>
        <ul class="list-group">
          <li class="list-group-item">野菜</li>
          <li class="list-group-item">果物</li>
          <li class="list-group-item">肉</li>
          <li class="list-group-item">魚</li>
          <li class="list-group-item">穀物</li>
        </ul>

        <h2>料理</h2>
        <ul class="list-group">
          <li class="list-group-item">和食</li>
          <li class="list-group-item">洋食</li>
          <li class="list-group-item">中華</li>
          <li class="list-group-item">イタリアン</li>
        </ul>
      </div>

      <div class="col-8">
        <div class="container text-center">
          <div class="row align-items-start">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/玉ねぎ.jpg') }}" class="card-img-top" alt="玉ねぎの画像">
              <div class="card-body">
                <p class="card-text">玉ねぎ</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/にんじん.jpg') }}" class="card-img-top" alt="にんじんの画像">
              <div class="card-body">
                <p class="card-text">にんじん</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/ピーマン.jpg') }}" class="card-img-top" alt="ピーマンの画像" style="height: 175px;">
              <div class="card-body">
                <p class="card-text">ピーマン</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/トウモロコシ.jpg') }}" class="card-img-top" alt="トウモロコシの画像">
              <div class="card-body">
                <p class="card-text">トウモロコシ</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/じゃがいも.jpg') }}" class="card-img-top" alt="じゃがいもの画像">
              <div class="card-body">
                <p class="card-text">じゃがいも</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/牛肉.jpg') }}" class="card-img-top" alt="牛肉の画像">
              <div class="card-body">
                <p class="card-text">牛肉</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/鶏肉.jpg') }}" class="card-img-top" alt="鶏肉の画像">
              <div class="card-body">
                <p class="card-text">鶏肉</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/豚肉.jpg') }}" class="card-img-top" alt="豚肉の画像">
              <div class="card-body">
                <p class="card-text">豚肉</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('images/白米.jpg') }}" class="card-img-top" alt="白米の画像">
              <div class="card-body">
                <p class="card-text">白米</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>