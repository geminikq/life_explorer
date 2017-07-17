@extends('layouts.appsearch')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            行业名字 -- 行业 <br> 推荐指数: 85 
        </div>
        <div class="col-md-3">
            1234个问题 <br> 34677个回答
        </div>
        <div class="col-md-3">
            <a href="">我要提问</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            问题a：xxxxxxxxxxxxx？<br>
            推荐的回答：xxxxxxxx...........
        </div>
        <div class="col-md-3">
            问题属性：<br>
            比如参数解读/辨别真伪/使用选型等
        </div>
        <div class="col-md-3">
            1355人关注 <br>
            12个回答 <br>
            <a href="{{ url('/search/questionpage/1') }}">进入问题页面</a>
        </div>
    </div>
</div>
@endsection
