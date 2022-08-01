@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; margin-top:50px; margin-bottom:50px; color:#474a4d">投稿詳細</h1>
    <div style="margin:50px 250px 100px; padding-top:50px">
        <div class='review'>
            <h2 class='title'>{{ $review->title }}</h2>
            <p class='category'>
                <a href="/categories/{{ $review->category->id }}">＃{{ $review->category->name }}</a>
            </p>
            <p id="star">
            　  <star-rating :rating="{{ $review->star }}" :read-only="true"></star-rating>
            </p>
            <p class='user_name'>
                <small>👤{{ $review->user->name }}</small>
            </p>
            <div class='contents'>
                <p class='price'>購入価格：¥{{ $review->price }}</p>
                <p class='place'>購入場所：{{ $review->place }}</p>
                <p class='brand'>ブランド・製造会社名：{{ $review->brand }}</p>
                <p class='body' style="white-space: pre-wrap">{{ $review->body }}</p>
                <p class='datetime'>{{ $review->updated_at }}</p>
            </div>
        </div>
        <div style="display: flex; justify-content: right">
            <div style="padding-right:15px">
                @if ($review->is_liked_by_auth_user())
                    <a href="{{ route('review.unlike', ['id' => $review->id]) }}" class="btn btn-success btn-sm">参考になった！ <span class="badge">{{ $review->likes->count() }}</span></a>
                @else
                    <a href="{{ route('review.like', ['id' => $review->id]) }}" class="btn btn-secondary btn-sm">参考になった！ <span class="badge">{{ $review->likes->count() }}</span></a>
                @endif
            </div>
            @if (Auth::user()->id == $review->user_id)
            <p class="edit" style="padding-right:15px"><a href="/reviews/{{ $review->id }}/edit"><i class="fas fa-pen"></i></a></p>
            <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" style="background:rgba(255, 255, 255, 0.10); border:none; color:gray"><i class="fas fa-trash-alt"></i></button>
            </form>
            @endif
        </div>
    </div>
    <div class='footer' style="text-align:center">
        [ <a href="/index">戻る</a> ]
    </div>
 @endsection