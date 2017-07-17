@extends('layouts.appsearch')

@section('content')
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($error == 1)
                搜索内容不能为空！！！<br>
                你可以搜索如下内容balabala.....
            @else
                @foreach ($indexs as $index)
                    @if ( $index['type'] == 'sector')
                        {{ $index['name'] }} -- 
                        属于类别: {{ $index['attr'] }} -- 
                        推荐指数: {{ $index['score'] }} --
                        关注人数: {{ $index['follower'] }} -- 
                        <a href=" {{ url('/search/sectorpage/'.$index['id']) }} ">查看行业信息</a>
                        <a href=" {{ url('/search/QandApage/1') }} ">进入行业百科</a>
                    @elseif ( $index['type'] == 'brand' )
                        <a href=" {{ url('/search/brandpage/'.$index['id']) }} ">详细内容</a>
                    @elseif ( $index['type'] == 'product' )
                        <a href=" {{ url('/search/productpage/'.$index['id']) }} ">详细内容</a>
                    @elseif ( $index['type'] == 'QandA' )
                        问题: {{ $index['name'] }} <br>
                        作者: {{ $index['author'] }} -- 
                        <a href=" {{ url('/search/QandApage/'.$index['id']) }} ">详细内容</a>
                    @endif                    
                    <hr>
                @endforeach
            @endif           
        </div>
    </div>
</div>
@endsection
