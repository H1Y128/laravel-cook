<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nutritionist</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1>Nutritionist</h1>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <h2>食材</h2>
        <ul class="list-group">
          <a href="#category-vegetable" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            野菜
          </a>
          <div class="collapse" id="category-vegetable">
            <div class="list-group ms-3">
              <a href="#" class="list-group-item list-group-item-action border-0">果菜</a>
              <a href="#" class="list-group-item list-group-item-action border-0">根菜</a>
              <a href="#" class="list-group-item list-group-item-action border-0">葉物</a>
              <a href="#" class="list-group-item list-group-item-action border-0">その他</a>
            </div>
          </div>
          <a href="#category-fruit" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            果実
          </a>
          <div class="collapse" id="category-fruit">
            <div class="list-group ms-3">
              <a href="#" class="list-group-item list-group-item-action border-0">柑橘類</a>
              <a href="#" class="list-group-item list-group-item-action border-0">ベリー類</a>
              <a href="#" class="list-group-item list-group-item-action border-0">熱帯果実</a>
              <a href="#" class="list-group-item list-group-item-action border-0">その他</a>
            </div>
          </div>
          <a href="#category-beans" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            豆類
          </a>
          <a href="#category-mushroom" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            きのこ類
          </a>
          <a href="#category-seaweed" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            海藻類
          </a>
          <a href="#category-meat" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            肉類
          </a>
          <div class="collapse" id="category-meat">
            <div class="list-group ms-3">
              <a href="#" class="list-group-item list-group-item-action border-0">豚肉</a>
              <a href="#" class="list-group-item list-group-item-action border-0">牛肉</a>
              <a href="#" class="list-group-item list-group-item-action border-0">鶏肉</a>
              <a href="#" class="list-group-item list-group-item-action border-0">その他</a>
            </div>
          </div>
          <a href="#category-seafood" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            魚介類
          </a>
          <div class="collapse" id="category-seafood">
            <div class="list-group ms-3">
              <a href="#" class="list-group-item list-group-item-action border-0">魚</a>
              <a href="#" class="list-group-item list-group-item-action border-0">貝</a>
              <a href="#" class="list-group-item list-group-item-action border-0">甲殻</a>
            </div>
          </div>
          <a href="#category-egg" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            卵類
          </a>
          <a href="#category-grains" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            穀物類
          </a>
          <div class="collapse" id="category-grains">
            <div class="list-group ms-3">
              <a href="#" class="list-group-item list-group-item-action border-0">米</a>
              <a href="#" class="list-group-item list-group-item-action border-0">麦</a>
              <a href="#" class="list-group-item list-group-item-action border-0">その他</a>
            </div>
          </div>
          <a href="#category-dairy" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            乳類
          </a>
          <a href="#category-seasoning" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
            調味料
          </a>
          <div class="collapse" id="category-seasoning">
            <div class="list-group ms-3">
              <a href="#" class="list-group-item list-group-item-action border-0">油</a>
              <a href="#" class="list-group-item list-group-item-action border-0">香辛料</a>
              <a href="#" class="list-group-item list-group-item-action border-0">その他</a>
            </div>
          </div>
        </ul>

        <h2>料理</h2>
        <ul class="list-group">
          <li class="list-group-item">和食</li>
          <li class="list-group-item">洋食</li>
          <li class="list-group-item">中華</li>
          <li class="list-group-item">イタリアン</li>
        </ul>
      </div>

      <div class="col-10">
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