@extends('layouts.apphomepage')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('homepage') }}">
                <input type="button" name="mynote" value="购物笔记">            
            </a>
            <a href="{{ route('myfollow') }}">
                <input type="button" name="myfollow" value="我的关注">
            </a>
            <input type="button" disabled="disabled" name="myQA" value="我的问答">
        </div>
    </div>
</div>
<br>
<div class="container">
    我的提问：xxxxx
    <hr>
    我的回答：xxxxx
    <hr>
    我的收藏：xxxxx
    <hr>
</div>
@endsection
