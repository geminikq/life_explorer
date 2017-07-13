@extends('layouts.app')

@section('searchbar')
<div class="container">
    <div class="row">
    <form method="POST" action="{{ route('search') }}">
        {{ csrf_field() }}    
        <div class="col-md-8">
            <div id="custom-search-input">
                <div class="input-group">
                    @if (Auth::guest())
                    <input id="SearchBar" name="searchContent" type="text" class="form-control input-md" placeholder="搜索某个行业百科" />
                    @else
                    <input id="SearchBar" name="searchContent" type="text" class="form-control input-md" placeholder="搜索某个行业/品牌/产品或行业百科" />
                    @endif
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-md" type="submit">                        
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        @if (Auth::guest())
        <div class="col-md-4">
            <a href="{{ route('register') }}">注册</a>/<a href="{{ route('login') }}">登陆</a>之后搜索更多行业/品牌/产品内容
        </div>
        @else
        <div class="col-md-4">
            <div id="custom-search-type">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="options" id="btn1" value="sector"> 行业
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="options" id="btn2" value="brand"> 品牌
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="options" id="btn3" value="product"> 产品
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="options" id="btn4" value="QandA"> 百科
                    </label>
                </div>        
            </div>
        </div>
        @endif
        </form>        
    </div>
</div>
@endsection
