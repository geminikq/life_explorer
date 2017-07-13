@extends('layouts.app')

@section('homepage')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img src="{{ asset('mypicicon.png') }}" alt="" />
        </div>
        <div class="col-md-3">
            用户名:   {{ Auth::user()->name }}  <br>
            账号:     {{ Auth::user()->email }} <br>
        </div>
        <div class="col-md-3">
            性别:     {{ Auth::user()->sex }} <br>
            年龄: <br>
            职业: <br>
            <a href=" {{ route('home') }} ">修改我的资料>></a>
        </div>
        <div class="col-md-4">
            等级：<br>
            积分：<br>
            勋章：<br>
            金币：<br>
            <a href="">查看详细规则>></a>
        </div>
    </div>
</div>    
@endsection
