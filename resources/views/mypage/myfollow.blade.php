@extends('layouts.apphomepage')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('homepage') }}">
                <input type="button" name="mynote" value="购物笔记">            
            </a>
            <input type="button" disabled="disabled" name="myfollow" value="我的关注">
            <a href="{{ route('myQA') }}">
                <input type="button" name="myQA" value="我的问答">
            </a>
        </div>
    </div>
</div>
<br>
<div class="container">
    我关注的行业：行业xxx <input type="button" name="" value="取消关注"> ......... 
    <hr>
    我关注的品牌：品牌xxx <input type="button" name="" value="取消关注"> ......... 
    <hr>
    我关注的产品：产品xxx <input type="button" name="" value="取消关注"> ......... 
    <hr>
    我关注的好友：好友xxx <input type="button" name="" value="取消关注"> ......... 
    <hr>
    我关注的问题：问题xxx <input type="button" name="" value="取消关注"> ......... 
    <hr>    
</div>
@endsection
