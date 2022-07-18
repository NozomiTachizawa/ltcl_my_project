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
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <h2 class='title'>{{ $review->title }}</h2>
                    <p class='price'>購入価格：¥{{ $review->price }}</p>
                    <p class='place'>購入場所：{{ $review->place }}</p>
                    <p class='brand'>ブランド・製造会社名：{{ $review->brand }}</p>
                    <p class='body'>{{ $review->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
    </body>
</html>