@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; margin-top:50px; margin-bottom:50px; color:#474a4d">投稿編集</h1>
    <div style="margin:50px 400px 100px; padding-top:50px">
        <form action="/reviews/{{ $review->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="category" style="padding-bottom:30px">
                <h4>カテゴリー</h4>
                <select name="review[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $review->category->id }}">{{ $review->category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="title" style="padding-bottom:30px">
                <h4>商品名</h4>
                <input type="text" name="review[title]" placeholder="レビューしたい商品の名前" value="{{ $review->title }}" style="width:500px"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div class="price" style="padding-bottom:30px">
                <h4>購入価格</h4>
                <input type="int" name="review[price]" placeholder="あなたが購入した価格" value="{{ $review->price }}"/>円
                <p class="price__error" style="color:red">{{ $errors->first('review.price') }}</p>
            </div>
            <div class="place" style="padding-bottom:30px">
                <h4>購入場所</h4>
                <input type="text" name="review[place]" placeholder="あなたが購入した店名・サイト名" value="{{ $review->place }}"/>
                <p class="place__error" style="color:red">{{ $errors->first('review.place') }}</p>
            </div>
            <div class="brand" style="padding-bottom:30px">
                <h4>ブランド・製造企業名</h4>
                <input type="text" name="review[brand]" placeholder="商品のブランドまたは製造企業名" value="{{ $review->brand }}"/>
                <p class="brand__error" style="color:red">{{ $errors->first('review.brand') }}</p>
            </div>
            <div id="star" style="padding-bottom:30px">
                <h4>星評価</h4>
                <star-rating @rating-selected="setRating" v-model="rating" :rating="this.score"></star-rating>
                <input type="hidden" name="review[star]" :value="this.rating"/>
                <p class="star__error" style="color:red">{{ $errors->first('review.star') }}</p>
            </div>
            <div class="body" style="padding-bottom:30px">
                <h4>レビュー本文</h4>
                <textarea name="review[body]" placeholder="あなたの率直なレビューを教えてください！" style="width:100%; height:200px">{{ $review->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <div class="button" style="display: flex; justify-content: center">
                <input type="submit" value="保存"/>
            </div>
        </form>
    </div>
    <div class="back" style="text-align:center; margin-bottom:100px">[ <a href="/index">戻る</a> ]</div>
 @endsection