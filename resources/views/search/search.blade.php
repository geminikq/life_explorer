@extends('layouts.appsearch')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            search content = {{ $_POST['searchContent'] }} <br>
            search option = 
            @if (isset($_POST['options'])) 
                {{ $_POST['options'] }}
            @else
                nth is selected! default option = QandA
            @endif            
        </div>
    </div>
</div>
@endsection
