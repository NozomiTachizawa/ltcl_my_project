@extends('layouts.app')

@section('content')
<div class="top" style="padding-top:250px; padding-bottom:300px; margin-top:0px">
    <p style="text-align:center; font-size:20px; color:gray; letter-spacing: 0.1em">\ みんなのなんでもレビューサイト /</p>
    <h1 style="text-align:center; font-size:100px; color:#474a4d">Reviewer</h1>
</div>
<div class="introduction" style="margin:50px 200px 50px">
    <h1 style="text-align:center; margin-bottom:100px; color:#474a4d">introduction</h1>
    <div style="margin:50px">
        <div style="margin-bottom:70px">
            <h2 style="border-bottom:solid 3px #84b9cb; margin-bottom:30px">みんなの商品レビューを見てみよう</h2>
            <p style="font-size:20px; letter-spacing: 0.05em">さまざまなカテゴリの商品レビューを見て、お買い物の参考にしましょう</p>
            <div style="text-align:right; font-size:20px"><a href="/index"><i class="fas fa-caret-right"></i>投稿一覧へ</a></div>
        </div>
        <div style="margin-bottom:200px">
            <h2 style="border-bottom:solid 3px #84b9cb; margin-bottom:30px">あなたの率直なレビューを投稿しよう</h2>
            <p style="font-size:20px; letter-spacing: 0.05em">あなたが購入した商品のレビューを投稿して、率直な感想をシェアしてみましょう</p>
            <div style="text-align:right; font-size:20px"><a href="/reviews/create"><i class="fas fa-caret-right"></i>新規投稿作成へ</a></div>
        </div>
    </div>
</div>
@endsection
