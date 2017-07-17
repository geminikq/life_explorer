@extends('layouts.appsearch')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            行业名字 -- 行业 <br> 推荐指数: 85 
        </div>
        <div class="col-md-4">
            1234人关注 <br> <a href="">加关注</a> 
        </div>
        <div class="col-md-4">
            属于xxxx行业 <br>            
            <a href=" {{ url('/search/QandApage/1') }} ">进入行业百科>></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            品牌xxxx  
        </div>
        <div class="col-md-3">
            推荐指数: 85
        </div>
        <div class="col-md-3">
            1234人关注  
        </div>
        <div class="col-md-3">            
            <a href="">进入该品牌页面>></a>
        </div>        
    </div>
</div>
@endsection
