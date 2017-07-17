@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
        	发布在行业: {{ $sector_name }} <br>
        	<form method="POST" action="">
	        	<input type="text" name="question" placeholder="填入你想问的问题">
        		<input type="submit" name="confirm" value="提交">
        	</form>        	
        </div>
    </div>
</div>   
@endsection
