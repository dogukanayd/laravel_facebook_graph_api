@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersOpennesAndExtraversion($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//opennes - açıklık
			$singleAnswer_1 = $singleData['answers']['opinionscale_pun4XwQLXYit'];
			$singleAnswer_2 = $singleData['answers']['opinionscale_kg27YGWgPwDT'];
			$singleAnswer_3 = $singleData['answers']['opinionscale_YNFGiul0Nigq'];
			$singleAnswer_4 = $singleData['answers']['opinionscale_pWjcwu9BN3ZH'];
			$singleAnswer_5 = $singleData['answers']['opinionscale_ZmmiOqbXzb6i'];

			//conscientiousness - sorumluluk
			$singleAnswer_6 = $singleData['answers']['opinionscale_aLh5gV1j9ua7']; //tersi
			$singleAnswer_7 = $singleData['answers']['opinionscale_OnkTFmvMaJdr']; //tersi
			$singleAnswer_8 = $singleData['answers']['opinionscale_VdRkBBzDQHHu']; //tersi
			$singleAnswer_9 = $singleData['answers']['opinionscale_ikiSaqdNIJEV']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_dHg7snw2CpqG']; //tersi
			$singleAnswer_11 = $singleData['answers']['opinionscale_iWNNMkPtttum']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_nNRrcvuen2ev']; //tersi
			$singleAnswer_13 = $singleData['answers']['opinionscale_UgDmCm0eu9hJ']; //tersi

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

					//extraversion
					if ($singleAnswer_6 == 5) {
						$singleAnswer_6 = 1;
					} else if ($singleAnswer_6 == 4) {
						$singleAnswer_6 = 2;
					} else if ($singleAnswer_6 == 2) {
						$singleAnswer_6 = 4;
					} else if ($singleAnswer_6 == 1) {
						$singleAnswer_6 = 5;
					}

					if ($singleAnswer_7 == 5) {
						$singleAnswer_7 = 1;
					} else if ($singleAnswer_7 == 4) {
						$singleAnswer_7 = 2;
					} else if ($singleAnswer_7 == 2) {
						$singleAnswer_7 = 4;
					} else if ($singleAnswer_7 == 1) {
						$singleAnswer_7 = 5;
					}

					if ($singleAnswer_8 == 5) {
						$singleAnswer_8 = 1;
					} else if ($singleAnswer_8 == 4) {
						$singleAnswer_8 = 2;
					} else if ($singleAnswer_8 == 2) {
						$singleAnswer_8 = 4;
					} else if ($singleAnswer_8 == 1) {
						$singleAnswer_8 = 5;
					}

					if ($singleAnswer_10 == 5) {
						$singleAnswer_10 = 1;
					} else if ($singleAnswer_10 == 4) {
						$singleAnswer_10 = 2;
					} else if ($singleAnswer_10 == 2) {
						$singleAnswer_10 = 4;
					} else if ($singleAnswer_10 == 1) {
						$singleAnswer_10 = 5;
					}

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
					$answerTotalForExtraversion =
						$singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8 +
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13;
					$extraversion = $answerTotalForExtraversion / 8;

					if ($opennes > $extraversion) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">BOROMIR</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/9800/WMw050.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Kahraman gibi yaşa kahraman gibi öl sözünün hakkını veriyorsun. Sendeki bu cesurluk olduğu sürece sırtın asla yere gelmez. Bitmek bilmeyen enerjin,kendine has yeteneklerin seni çok özel kılıyor.</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">FARAMIR</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img922/637/bwHIy3.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Kılıçlar Çekilsin ! Pasif kalmak senin ruhuna aykırı. Girişkenlik seni bugunlere getiren,seni sen yapan en önemli özelliğin. O kadar konuşkan olduğun söylenmesede yinede gerçekleri söylemekten asla geri kalmazsın. Ve gerçekler uğruna, inancın uğruna asla durmazsın.</p>

            </div>


        </div>

    </div>

DELIMETER;
					}

					// echo "opennes : " . $opennes . "<br>";
					// echo "extraversion: " . $extraversion . "<br><br>";

				}

			}
		}
	}

}

$time = Carbon::now()->subMinutes(2)->timestamp;

$api = "https://api.typeform.com/v1/form/hum5hr?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersOpennesAndExtraversion($fb, $api);

?>

@endsection