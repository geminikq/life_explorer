@extends('layouts.appsearch')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($error == 1)
                搜索内容不能为空！！！<br>
                你可以搜索如下内容balabala.....
            @else
                @foreach ($indexs as $index)
                    {{ $index['name'] }} -- {{ $index['type'] }} -- 推荐指数: {{ $index['score'] }}
                    <form method="POST" action="{{ route('sectorpage') }}">
                        {{ csrf_field() }} 
                        <input type="hidden" name="searchid" value="{{ $index['id'] }}">
                        <input type="submit" name="searchbtn" value="详细内容">
                    </form>                    
                    不同的类别点击进入不同的页面，行业进入sectorpage，品牌进入brandpage，产品进入productpage，百科进入QandApage）
                    <br>
                @endforeach
            @endif           
        </div>
    </div>
</div>
@endsection
