@extends('layouts.test')

@section('content')
    <?php
    $fb = Session::get('facebookId');
    ?>
    <iframe width="100%" height="100%" frameborder="0" src="https://ilyaskuzu.typeform.com/to/DdIrN5?id={{$fb}}" ></iframe><!-- facebook id si gelecek -->
    @endsection