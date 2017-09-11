@extends('layouts.index')

@section('content')

@foreach($tests as $test)
<div class="col-md-4 col-sm-6 item">
<?php
$testId = $test->id;
?>
    <a href="/test/{{$testId}}">
    	<img style=" height: 200px; width: 360px;"  class="img-responsive" src="{{$test->image_link}}">
    </a>

    <h3 class="name">{{$test->question_title }}</h3>
    <p class="description">{{$test->question_short_desc}}</p>

</div>
@endforeach


@endsection