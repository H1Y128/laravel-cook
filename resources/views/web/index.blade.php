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
          @foreach ($major_categories as $major_category)
            <a href="#category-{{ $major_category->id }}" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
              {{ $major_category->name }}
            </a>
            @foreach ($categories as $category)
              @if ($category->major_category_id === $major_category->id)
              <div class="collapse" id="category-{{ $major_category->id }}">
                <div class="list-group ms-3">
                  <a href="{{ route('ingredients.index', ['category_id' => $category->id]) }}" class="list-group-item list-group-item-action border-0">{{ $category->name }}</a>
                </div>
              </div>
              @endif
            @endforeach
          @endforeach
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
            @if (is_null($ingredients))
              <p>該当する食材がありません。</p>
            @else
              @foreach ($ingredients as $ingredient)
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/' . $ingredient->name . '.jpg') }}" class="card-img-top" alt="{{ $ingredient->name }}の画像">
                <div class="card-body">
                  <p class="card-text">{{ $ingredient->name }}</p>
                </div>
              </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>