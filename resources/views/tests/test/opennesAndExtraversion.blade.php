@extends('layouts.test')
@section('content')


    <?php
if (Session::get('facebookId')) {
	$fb = Session::get('facebookId');
	$asd = '<iframe width="100%" height="100%" frameborder="0" src="https://senkimsin.typeform.com/to/huM5Hr?id=' . $fb . '" ></iframe>';
	echo $asd;
} else {
	header('Location:http://oceanprojectwithfaceboksdk.dev/');

}

?>
@endsection


