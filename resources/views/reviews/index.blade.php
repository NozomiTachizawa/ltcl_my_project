@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; margin-top:50px; margin-bottom:50px">投稿一覧</h1>
    <div style="text-align:center">[ <a href="/reviews/create">新規投稿作成</a> ]</div>
    <div class='reviews' id="star">
        @foreach ($reviews as $review)
            <div class='review' style="border-top:dotted gray; margin:50px 200px 50px; padding-top:50px">
                <div style="padding-left:50px; padding-right:50px">
                    <h2 class='title'>
                        <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
                    </h2>
                    <p class='category'>
                        <a href="/categories/{{ $review->category->id }}">＃{{ $review->category->name }}</a>
                    </p>
                    <p>
                    　  <star-rating :rating="{{ $review->star }}" :read-only="true"></star-rating>
                    </p>
                    <p class='user_name'>
                        <small>👤{{ $review->user->name }}</small>
                    </p>
                    <div class='contents'>
                        <p class='price'>購入価格：¥{{ $review->price }}</p>
                        <p class='place'>購入場所：{{ $review->place }}</p>
                        <p class='brand'>ブランド・製造会社名：{{ $review->brand }}</p>
                        <p class='datetime'>{{ $review->updated_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        <div class='d-flex justify-content-center'>
            {{ $reviews->links() }}
        </div>
    </div>
 @endsection