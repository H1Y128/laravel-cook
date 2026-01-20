<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritionist | レシピ検索</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    @livewireStyles
    <style>
        body {
            background-color: #f8f9fa;
        }

        /* サイドバーをPCで固定し、中身だけスクロールさせる設定 */
        @media (min-width: 768px) {
            .sidebar-sticky {
                position: sticky;
                top: 1rem;
                /* 上部からの位置 */
                height: calc(100vh - 2rem);
                /* 画面の高さに合わせる */
                overflow-y: auto;
                /* はみ出た場合にスクロールを出す */
                padding-right: 10px;
            }

            /* スクロールバーのデザインをスッキリさせる（任意） */
            .sidebar-sticky::-webkit-scrollbar {
                width: 5px;
            }

            .sidebar-sticky::-webkit-scrollbar-thumb {
                background: #dee2e6;
                border-radius: 10px;
            }
        }

        .ingredient-card {
            transition: all 0.2s;
        }

        .ingredient-card:hover {
            transform: translateY(-3px);
        }

        /* フローティングバーが表示されている時、最下部に十分な余白を作る */
        body {
            /* スマホの時だけ、バーの高さ分（約90px）の余白を下に確保する */
            padding-bottom: 100px;
        }

        /* PC（768px以上）ではバーが出ないので余白を消す */
        @media (min-width: 768px) {
            body {
                padding-bottom: 0;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-white border-bottom mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-egg-fried me-2"></i>Nutritionist
            </a>
        </div>
    </nav>

    <div class="container py-2">
        <livewire:ingredient-list />
    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>