<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビューサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>新規投稿作成</h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class="category">
                <h2>カテゴリー</h2>
                <select name="review[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>商品名</h2>
                <input type="text" name="review[title]" placeholder="レビューしたい商品の名前" value="{{ old('review.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div class="price">
                <h2>購入価格</h2>
                <input type="int" name="review[price]" placeholder="あなたが購入した価格" value="{{ old('review.price') }}"/>円
                <p class="price__error" style="color:red">{{ $errors->first('review.price') }}</p>
            </div>
            <div class="place">
                <h2>購入場所</h2>
                <input type="text" name="review[place]" placeholder="あなたが購入した店名・サイト名" value="{{ old('review.place') }}"/>
                <p class="place__error" style="color:red">{{ $errors->first('review.place') }}</p>
            </div>
            <div class="brand">
                <h2>ブランド・製造企業名</h2>
                <input type="text" name="review[brand]" placeholder="商品のブランドまたは製造企業名" value="{{ old('review.brand') }}"/>
                <p class="brand__error" style="color:red">{{ $errors->first('review.brand') }}</p>
            </div>
            <div class="body">
                <h2>レビュー本文</h2>
                <textarea name="review[body]" placeholder="あなたの率直なレビューを教えてください！">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="back">[ <a href="/">戻る</a> ]</div>
    </body>
</html>