@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;
function getAnswersOpennesAndConscientiousness($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//opennes - açıklık
			$singleAnswer_1 = $singleData['answers']['opinionscale_58880010'];
			$singleAnswer_2 = $singleData['answers']['opinionscale_58880075'];
			$singleAnswer_3 = $singleData['answers']['opinionscale_58880094'];
			$singleAnswer_4 = $singleData['answers']['opinionscale_58880096'];
			$singleAnswer_5 = $singleData['answers']['opinionscale_58880098'];

			//conscientiousness - sorumluluk
			$singleAnswer_6 = $singleData['answers']['opinionscale_58880099'];
			$singleAnswer_7 = $singleData['answers']['opinionscale_58880100'];
			$singleAnswer_8 = $singleData['answers']['opinionscale_58880102'];
			$singleAnswer_9 = $singleData['answers']['opinionscale_58880125'];
			$singleAnswer_10 = $singleData['answers']['opinionscale_58880126'];
			$singleAnswer_11 = $singleData['answers']['opinionscale_58880809'];
			$singleAnswer_12 = $singleData['answers']['opinionscale_58880812'];
			$singleAnswer_13 = $singleData['answers']['opinionscale_58880818'];

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

					if ($singleAnswer_12 == 5) {
						$singleAnswer_12 = 1;
					} else if ($singleAnswer_12 == 4) {
						$singleAnswer_12 = 2;
					} else if ($singleAnswer_12 == 2) {
						$singleAnswer_12 = 4;
					} else if ($singleAnswer_12 == 1) {
						$singleAnswer_12 = 5;
					}

					if ($singleAnswer_13 == 5) {
						$singleAnswer_13 = 1;
					} else if ($singleAnswer_13 == 4) {
						$singleAnswer_13 = 2;
					} else if ($singleAnswer_13 == 2) {
						$singleAnswer_13 = 4;
					} else if ($singleAnswer_13 == 1) {
						$singleAnswer_13 = 5;
					}
					$answerTotalForConscientiousness = $singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8 +
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13;
					$conscientiousness = $answerTotalForConscientiousness / 8;
					//echo $conscientiousness . "<br>";

					if ($opennes > $conscientiousness) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">BARNEY STINSON</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img922/9164/OID9mR.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Legendary!!! Kendinden emin ve yaratıcı kişiliğinle ortamlara renk katıyorsun. İnsanları etkileme kabiliyetin ve cesur esprilerinle sen tam bir Barney'sin!!</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">SHELDON</h2>
            <img  class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/3203/WqaJKc.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Bazinga!!! Çalışkanlığın ve disiplininle sen aynı Sheldon'sın. Titiz ve tebdirli oluşun senin başarının kaynağı!!</p>

            </div>


        </div>

    </div>

DELIMETER;
					}

					//echo "opennes: " . $opennes . "<br>";
					//echo "conscientiousness: " . $conscientiousness . "<br><br>";

				}

			}
		}
	}

}

$time = Carbon::now()->subMinutes(2)->timestamp;

$api = "https://api.typeform.com/v1/form/yimdi7?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersOpennesAndConscientiousness($fb, $api);

// echo "<b> Opennes And Conscientiousness </b><br>";
// getAnswersOpennesAndConscientiousness(1428246347214816, 'https://api.typeform.com/v1/form/yimdi7?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');
?>

@endsection