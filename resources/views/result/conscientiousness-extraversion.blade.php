@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersConscientiousnessAndExtraversion($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//conscientiousness - sorumluluk
			$singleAnswer_1 = $singleData['answers']['opinionscale_sMqyntHTFYiV'];
			$singleAnswer_2 = $singleData['answers']['opinionscale_vKihTllRS3iV'];
			$singleAnswer_3 = $singleData['answers']['opinionscale_W3SS88KzqSd4'];
			$singleAnswer_4 = $singleData['answers']['opinionscale_LMWtZ5fZDvae'];
			$singleAnswer_5 = $singleData['answers']['opinionscale_BlxNzfPkHYE8'];
			$singleAnswer_6 = $singleData['answers']['opinionscale_MKevYoqnaWBS'];
			$singleAnswer_7 = $singleData['answers']['opinionscale_jqQ0Oo6Xiedi']; //tersi
			$singleAnswer_8 = $singleData['answers']['opinionscale_KpZwsd6NhijP']; //tersi

			//extraversion - dışadönüklük
			$singleAnswer_9 = $singleData['answers']['opinionscale_58883656']; //tersi
			$singleAnswer_10 = $singleData['answers']['opinionscale_58883676']; //tersi
			$singleAnswer_11 = $singleData['answers']['opinionscale_58883752']; //tersi
			$singleAnswer_12 = $singleData['answers']['opinionscale_58883762']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_58883776']; //tersi
			$singleAnswer_14 = $singleData['answers']['opinionscale_58883815']; //normal
			$singleAnswer_15 = $singleData['answers']['opinionscale_58883841']; //tersi
			$singleAnswer_16 = $singleData['answers']['opinionscale_58883858']; //tersi

			foreach ($hidden as $facebookId) {

				if ($facebookId == $id) {

					//conscientiousness
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
					} else if ($singleAnswer_7 == 4) {
						$singleAnswer_8 = 2;
					} else if ($singleAnswer_7 == 2) {
						$singleAnswer_8 = 4;
					} else if ($singleAnswer_7 == 1) {
						$singleAnswer_8 = 5;
					}

					$answerTotalForConscientiousness =
						$singleAnswer_1 +
						$singleAnswer_2 +
						$singleAnswer_3 +
						$singleAnswer_4 +
						$singleAnswer_5 +
						$singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8;

					$conscientiousness = $answerTotalForConscientiousness / 8;
					//echo $opennes . '<br><br>';

					//extraversion
					if ($singleAnswer_9 == 5) {
						$singleAnswer_9 = 1;
					} else if ($singleAnswer_9 == 4) {
						$singleAnswer_9 = 2;
					} else if ($singleAnswer_9 == 2) {
						$singleAnswer_9 = 4;
					} else if ($singleAnswer_9 == 1) {
						$singleAnswer_9 = 5;
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

					if ($singleAnswer_11 == 5) {
						$singleAnswer_11 = 1;
					} else if ($singleAnswer_11 == 4) {
						$singleAnswer_11 = 2;
					} else if ($singleAnswer_11 == 2) {
						$singleAnswer_11 = 4;
					} else if ($singleAnswer_11 == 1) {
						$singleAnswer_11 = 5;
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

					if ($singleAnswer_15 == 5) {
						$singleAnswer_15 = 1;
					} else if ($singleAnswer_15 == 4) {
						$singleAnswer_15 = 2;
					} else if ($singleAnswer_15 == 2) {
						$singleAnswer_15 = 4;
					} else if ($singleAnswer_15 == 1) {
						$singleAnswer_15 = 5;
					}

					if ($singleAnswer_16 == 5) {
						$singleAnswer_16 = 1;
					} else if ($singleAnswer_16 == 4) {
						$singleAnswer_16 = 2;
					} else if ($singleAnswer_16 == 2) {
						$singleAnswer_16 = 4;
					} else if ($singleAnswer_16 == 1) {
						$singleAnswer_16 = 5;
					}

					$answerTotalForExtraversion =
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13 +
						$singleAnswer_14 +
						$singleAnswer_15 +
						$singleAnswer_16;

					$extraversion = $answerTotalForExtraversion / 8;

					if ($conscientiousness > $extraversion) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">CAN MANAY</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img924/5056/Z2EK2j.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Keşke su içmeyi sevdiğin kadar insanları da sevebilsen. Hayattan bu kadar korkacak ne var?</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">DENİZ</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/9542/GSN5gG.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Kendi seçimlerini yapmak için neyi bekliyorsun? Sen sana yetersin, kendine gel ;)</p>

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

$api = "https://api.typeform.com/v1/form/p6odqd?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersConscientiousnessAndExtraversion($fb, $api);

?>

@endsection

