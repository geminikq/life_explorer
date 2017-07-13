@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row col-md-4">
        <form method="POST" action="{{ route('createnote') }}">
            {{ csrf_field() }} 

            购买日期：  <input type="text" name="bought_at" value="{{ $note->bought_at }}">  <a href="">修改</a> 
            <hr>
            购买产品：
            <input type="text" name="product_name" value=""> 
            <a href="">选择一个产品</a> 
            <br>
            质量：<input type="checkbox" name="">好 <input type="checkbox" name="">差 <br>
            <a href="">追加评论>></a>
            <hr>
            购买渠道：  
            <input type="text" name="product_channel" value="{{ $note->product_channel_id }}"> 
            <a href="">选择一个渠道</a> <br>
            服务：<input type="checkbox" name="">好 <input type="checkbox" name="">差 <br>
            <a href="">追加评论>></a>
            <hr>

            <input type="hidden" name="id" value="{{ $noteid }}">
            <a href="{{ route('homepage') }}">
                <input type="button" value="取消" name="cancel">
            </a>
            <input type="submit" value="确认并返回" name="confirm">
        </form>
    </div>
</div>
@endsection
