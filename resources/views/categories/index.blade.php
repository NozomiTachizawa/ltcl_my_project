<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビューサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿一覧</h1>
        [ <a href="/reviews/create">新規投稿作成</a> ]
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <h2 class='title'>
                        <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
                    </h2>
                    <dev class='contents'>
                        <p class='price'>購入価格：¥{{ $review->price }}</p>
                        <p class='place'>購入場所：{{ $review->place }}</p>
                        <p class='brand'>ブランド・製造会社名：{{ $review->brand }}</p>
                        <a href="/categories/{{ $review->category->id }}">＃{{ $review->category->name }}</a>
                        <p class='body'>{{ $review->body }}</p>
                    </dev>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
    </body>
</html>