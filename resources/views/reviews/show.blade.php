<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビューサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿詳細</h1>
            <div class='review'>
                <h2 class='title'>{{ $review->title }}</h2>
                <dev class='contents'>
                    <p class='price'>購入価格：¥{{ $review->price }}</p>
                    <p class='place'>購入場所：{{ $review->place }}</p>
                    <p class='brand'>ブランド・製造会社名：{{ $review->brand }}</p>
                    <p class='body'>{{ $review->body }}</p>
                </dev>
            </div>
            <p class="edit">[ <a href="/reviews/{{ $review->id }}/edit">編集</a> ]</p>
            <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        <div class='footer'>
            [ <a href="/">戻る</a> ]
        </div>
    </body>
</html>