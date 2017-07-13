@extends('layouts.apphomepage')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <input type="button" disabled="disabled" value="购物笔记">            
            <a href="{{ route('myfollow') }}">
                <input type="button" name="myfollow" value="我的关注">
            </a>
            <a href="{{ route('home') }}">
                <input type="button" name="myQA" value="我的问答">
            </a>
        </div>
    </div>
</div>
<br>
<div class="container">
    今天 （ {{ date('Y-m-d') }} ）<a href="{{ url('/mypage/shoppingnote/0') }}">新建购物笔记>></a>
    <hr>
    @foreach ($notes as $note)
        {{ $note->bought_at }}: 购买了 xxxxx 渠道：{{ $note->product_channel_id }} 我的评价：{{ $note->rate_no }} 
        <a href="{{ url('/mypage/shoppingnote/'.$note->id) }}">修改笔记</a>
        <hr>
    @endforeach
</div>
@endsection
