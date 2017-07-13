@extends('layouts.appsearch')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <input type="button" name="btn" disabled="disabled" value="系统推荐">
            @if (Auth::guest())
            <input type="button" disabled="disabled" value="未登录，没有消息">            
            @else
            <a href="{{ route('mymsg') }}">
                <input type="button" name="submit" value="我的消息">
            </a>
            @endif
        </div>
    </div>
</div>    
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-8">
            <!-- this is an example of how to show db data in view -->
            @foreach ($recs as $rec)
                消息类型 {{ $rec['recMsgType'] }} icon -- 
                {{ $rec['recMsgContent'] }} --
                {{ $rec['recReason'] }} <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
