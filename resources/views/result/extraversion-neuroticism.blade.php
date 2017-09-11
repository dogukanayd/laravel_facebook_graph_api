@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersExtraversionAndNeuroticism($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//extraversion - dışadönüklük
			$singleAnswer_1 = $singleData['answers']['opinionscale_rskDdJ6y5COP']; //tersi
			$singleAnswer_2 = $singleData['answers']['opinionscale_ZhYCpcDtnihR']; //tersi
			$singleAnswer_3 = $singleData['answers']['opinionscale_FiMfHeux9heP']; //tersi
			$singleAnswer_4 = $singleData['answers']['opinionscale_hhhj1fv5Qcoz']; //normal
			$singleAnswer_5 = $singleData['answers']['opinionscale_rI3dPSnZEG5u']; //tersi
			$singleAnswer_6 = $singleData['answers']['opinionscale_OdWHQCExQulg']; //normal
			$singleAnswer_7 = $singleData['answers']['opinionscale_fe7Qzu2vx0tf']; //tersi
			$singleAnswer_8 = $singleData['answers']['opinionscale_fzUWID7BmZAA']; //tersi

			//neuroticism - duygusal denge
			$singleAnswer_9 = $singleData['answers']['opinionscale_wGlTImKDFY9Z']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_OYaQ8EpIkyC6']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_gcg60fEc89au']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_k1uvekBslI2S']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_f6TgBXAE1TC1']; //normal
			$singleAnswer_14 = $singleData['answers']['opinionscale_sfTj8e3UGaon']; //normal
			$singleAnswer_15 = $singleData['answers']['opinionscale_KmeQalXX39DV']; //normal
			$singleAnswer_16 = $singleData['answers']['opinionscale_MVI8HnVOSG0o']; //normal
			$singleAnswer_17 = $singleData['answers']['opinionscale_iywlK5JOM55J']; //normal

			foreach ($hidden as $facebookId) {

				if ($facebookId == $id) {

					//extraversion - dışadönüklük
					if ($singleAnswer_1 == 5) {
						$singleAnswer_1 = 1;
					} else if ($singleAnswer_1 == 4) {
						$singleAnswer_1 = 2;
					} else if ($singleAnswer_1 == 2) {
						$singleAnswer_1 = 4;
					} else if ($singleAnswer_1 == 1) {
						$singleAnswer_1 = 5;
					}

					if ($singleAnswer_2 == 5) {
						$singleAnswer_2 = 1;
					} else if ($singleAnswer_2 == 4) {
						$singleAnswer_2 = 2;
					} else if ($singleAnswer_2 == 2) {
						$singleAnswer_2 = 4;
					} else if ($singleAnswer_2 == 1) {
						$singleAnswer_2 = 5;
					}

					if ($singleAnswer_3 == 5) {
						$singleAnswer_3 = 1;
					} else if ($singleAnswer_3 == 4) {
						$singleAnswer_3 = 2;
					} else if ($singleAnswer_3 == 2) {
						$singleAnswer_3 = 4;
					} else if ($singleAnswer_3 == 1) {
						$singleAnswer_3 = 5;
					}

					if ($singleAnswer_5 == 5) {
						$singleAnswer_5 = 1;
					} else if ($singleAnswer_5 == 4) {
						$singleAnswer_5 = 2;
					} else if ($singleAnswer_5 == 2) {
						$singleAnswer_5 = 4;
					} else if ($singleAnswer_5 == 1) {
						$singleAnswer_5 = 5;
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

					$answerTotalForExtraversion =
						$singleAnswer_1 +
						$singleAnswer_2 +
						$singleAnswer_3 +
						$singleAnswer_4 +
						$singleAnswer_5 +
						$singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8;

					$extraversion = $answerTotalForExtraversion / 8;
					//echo $opennes . '<br><br>';

					//neuroticism

					$answerTotalForNeuroticism =
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13 +
						$singleAnswer_14 +
						$singleAnswer_15 +
						$singleAnswer_16 +
						$singleAnswer_17;

					$neuroticism = $answerTotalForNeuroticism / 9;

					if ($extraversion > $neuroticism) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">HARRY POTTER</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/2487/I8WTt2.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Sen Harry Pottersın! Dünyanın en zor şeyi düşmanın olmak; en güzel şeyiyse dostun olmak. Korkusuz ve doğuştan yetenekli olduğunuzu bilmem söylemeye gerek var mı?</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">DRACO MALFOY</h2>
            <img  class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/1969/91b3nt.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Draco Malfoy:İnsanların düşündükleri kadar huysuz ve kendini beğenmiş değilsin. Sadece biraz hırslısın!</p>

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

$api = "https://api.typeform.com/v1/form/ib4zjh?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersExtraversionAndNeuroticism($fb, $api);

?>

@endsection

