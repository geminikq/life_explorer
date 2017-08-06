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
                    <div class="row">
                        <div class="col-md-4">
                            <font size=5> {{ $index['name'] }} </font> 
                            <font size=2> {{ $index['attr'] }} </font> 
                        </div>
                        <div class="col-md-4">
                            推荐指数: <font size=5> {{ $index['score'] }} </font> --
                            关注人数: <font size=5> {{ $index['follower'] }} </font> 
                        </div>
                        <div class="col-md-4">
                            <a href=" {{ url('/search/sectorpage/'.$index['id']) }} ">查看行业信息>></a> <br>
                            <a href=" {{ url('/search/QandApage/'.$index['id']) }} ">进入行业百科>></a>
                        </div>
                    </div>
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
                我要添加 <font size=5>{{ $content }}</font> 作为新的 
                <font size=5>
                @if ( $option == 'sector' )
                    行业
                @elseif ( $option == 'brand' )
                    品牌
                @elseif ( $option == 'product' )
                    产品
                @endif
                </font>
            @endif           
        </div>
    </div>
</div>
@endsection
