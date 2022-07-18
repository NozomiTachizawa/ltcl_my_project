<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビューサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿編集</h1>
        <form action="/reviews/{{ $review->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>商品名</h2>
                <input type="text" name="review[title]" value="{{ $review->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div class="price">
                <h2>購入価格</h2>
                <input type="int" name="review[price]" value="{{ $review->price }}"/>円
                <p class="price__error" style="color:red">{{ $errors->first('review.price') }}</p>
            </div>
            <div class="place">
                <h2>購入場所</h2>
                <input type="text" name="review[place]" value="{{ $review->place }}"/>
                <p class="place__error" style="color:red">{{ $errors->first('review.place') }}</p>
            </div>
            <div class="brand">
                <h2>ブランド・製造企業名</h2>
                <input type="text" name="review[brand]" value="{{ $review->brand }}"/>
                <p class="brand__error" style="color:red">{{ $errors->first('review.brand') }}</p>
            </div>
            <div class="body">
                <h2>レビュー本文</h2>
                <textarea name="review[body]">{{ $review->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[ <a href="/">戻る</a> ]</div>
    </body>
</html>