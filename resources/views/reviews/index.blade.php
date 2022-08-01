@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; margin-top:50px; margin-bottom:50px; color:#474a4d">投稿一覧</h1>
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
                    <div>
                        @if ($review->is_liked_by_auth_user())
                            <a href="{{ route('review.unlike', ['id' => $review->id]) }}" class="btn btn-success btn-sm">参考になった！ <span class="badge">{{ $review->likes->count() }}</span></a>
                        @else
                            <a href="{{ route('review.like', ['id' => $review->id]) }}" class="btn btn-secondary btn-sm">参考になった！ <span class="badge">{{ $review->likes->count() }}</span></a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        <div class='d-flex justify-content-center' style="margin-bottom:100px">
            {{ $reviews->links() }}
        </div>
    </div>
 @endsection