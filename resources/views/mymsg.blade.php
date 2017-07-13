@extends('layouts.appsearch')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            @if (Auth::guest())
            <input type="button" disabled="disabled" value="系统推荐">            
            @else
            <a href="{{ route('home') }}">
                <input type="submit" name="submit" value="系统推荐">
            </a>
            @endif
            <input type="button" name="btn" disabled="disabled" value="我的消息">
        </div>
    </div>
</div>   
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            Now we are in message page ! <br> 
            <!-- this is an example of how to show db data in view -->
            @if (Auth::check())
                this account = {{ $thisAuth->email }} <br>
                user name = {{ $thisAuth->name }}
            @else
                please login
            @endif
        </div>
    </div>
</div>
@endsection
