@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersOpennesAndNeuroticism($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//opennes - açıklık
			$singleAnswer_1 = $singleData['answers']['opinionscale_vbxnIEPGytzJ']; //normal
			$singleAnswer_2 = $singleData['answers']['opinionscale_IA4VA8B3Qd3o']; //normal
			$singleAnswer_3 = $singleData['answers']['opinionscale_v4fEKCQrvmGq']; //normal
			$singleAnswer_4 = $singleData['answers']['opinionscale_MKOCSGpzE330']; //normal
			$singleAnswer_5 = $singleData['answers']['opinionscale_SrBkUkshUPon']; //normal

			//neuroticism = duygusal denge
			$singleAnswer_6 = $singleData['answers']['opinionscale_mzVsQ4EBaZjT']; //normal
			$singleAnswer_7 = $singleData['answers']['opinionscale_y9UWEtp8wxip']; //normal
			$singleAnswer_8 = $singleData['answers']['opinionscale_iIevv9CaTe06']; //normal
			$singleAnswer_9 = $singleData['answers']['opinionscale_KGoAE5NVFMBz']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_cFWMM6acjEBw']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_xoGGMb6w34Lm']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_mBCdGMnWW3Gi']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_58882503']; //normal
			$singleAnswer_14 = $singleData['answers']['opinionscale_58882518']; //normal

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

					$answerTotalForNeuroticism = $singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8 +
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13 +
						$singleAnswer_14;

					$neuroticism = $answerTotalForNeuroticism / 9;

					if ($opennes > $neuroticism) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">JEDI</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img922/3194/kR46eH.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Kahramana selam durun ! İyilik ve amaçların uğruna her şeyi yapabilecek düzeydesin. Kabiliyetlerin ağzı açık bıraktırır. Cesurluğun bizi kıskandırıyor.</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">SITH</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img924/9807/6sR1lg.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">İçim ürperdi ! Agresifliğin ve kızgınlığın düşmanlarını korkutacak düzeyde. Amaçlarına ulaşmakta sabırsızsın ya olacak ya olacak!</p>

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

$api = "https://api.typeform.com/v1/form/owtbkc?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersOpennesAndNeuroticism($fb, $api);

?>

@endsection

