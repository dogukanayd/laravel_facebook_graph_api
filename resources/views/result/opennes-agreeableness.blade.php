@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersOpennesAndAgreeableness($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//opennes - açıklık
			$singleAnswer_1 = $singleData['answers']['opinionscale_eln5ePyzy2oh']; //normal
			$singleAnswer_2 = $singleData['answers']['opinionscale_oOv9OYRJxGaA']; //normal
			$singleAnswer_3 = $singleData['answers']['opinionscale_qC46SLGffUdk']; //normal
			$singleAnswer_4 = $singleData['answers']['opinionscale_NT8vRmjXfPMK']; //normal
			$singleAnswer_5 = $singleData['answers']['opinionscale_fyUKDlOQ9mYy']; //normal

			//agreeableness - uyumluluk
			$singleAnswer_6 = $singleData['answers']['opinionscale_tgbwiRqxQV8F']; //normal
			$singleAnswer_7 = $singleData['answers']['opinionscale_Mql2P3fIoLZ7']; //normal
			$singleAnswer_8 = $singleData['answers']['opinionscale_NV4dtp18aLzJ']; //normal
			$singleAnswer_9 = $singleData['answers']['opinionscale_Fvj0wubjjYO1']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_AfRNvUtcKeiu']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_sFMMvH9SpWKY']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_tbhvKqxosxf3']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_ajip6SQPUwEz']; //normal

			foreach ($hidden as $facebookId) {

				if ($facebookId == $id) {

					$answerTotalForOpennes =
						$singleAnswer_1 +
						$singleAnswer_2 +
						$singleAnswer_3 +
						$singleAnswer_4 +
						$singleAnswer_5;

					$opennes = $answerTotalForOpennes / 5;
					//echo $opennes . '<br><br>';

					$answerTotalForAgreeableness = $singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8 +
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13;
					$agreeableness = $answerTotalForAgreeableness / 8;

					if ($opennes > $agreeableness) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">RIHANNA</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img922/1376/kM8chN.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Sansasyonelsin aynı zamanda çekici. Ne yapsan yakışıyor. Yine de çok kilo alma sen ;)</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">BEYONCE</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/2361/iSba6d.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Çevrenle çok uyumlu ve sadık birisin. Sevdiğin insalar için herşeyi yaparsın.</p>

            </div>


        </div>

    </div>

DELIMETER;
					}

				}

			}
		}
	}

}

$time = Carbon::now()->subMinutes(2)->timestamp;

$api = "https://api.typeform.com/v1/form/ycyvsi?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersOpennesAndAgreeableness($fb, $api);

?>

@endsection

