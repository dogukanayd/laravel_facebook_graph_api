@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersConscientiousnessAndAgreeableness($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//conscientiousness - sorumluluk
			$singleAnswer_1 = $singleData['answers']['opinionscale_YB30oOxMqO9d'];
			$singleAnswer_2 = $singleData['answers']['opinionscale_mEyiANKH8y4c'];
			$singleAnswer_3 = $singleData['answers']['opinionscale_ud0wNdIJyJyn'];
			$singleAnswer_4 = $singleData['answers']['opinionscale_FPyewQrC7IXL'];
			$singleAnswer_5 = $singleData['answers']['opinionscale_PMwhN4YMJKPL'];
			$singleAnswer_6 = $singleData['answers']['opinionscale_lkaLSrfps8CX'];
			$singleAnswer_7 = $singleData['answers']['opinionscale_YLwK2yTtySfg'];
			$singleAnswer_8 = $singleData['answers']['opinionscale_ORVyIHgRC6D0'];

			//agreeableness - uyumluluk
			$singleAnswer_9 = $singleData['answers']['opinionscale_UKHjxmIZeGtg']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_yu66sNHMQ0og']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_dqdDH0iNkkQ3']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_LdanJoP6onSK']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_OTXGjlGoS4XT']; //normal
			$singleAnswer_14 = $singleData['answers']['opinionscale_QTf8BBK0vf5Q']; //normal
			$singleAnswer_15 = $singleData['answers']['opinionscale_Wj193kzz20Gn']; //normal
			$singleAnswer_16 = $singleData['answers']['opinionscale_rtUBQ5ZsTSjK']; //normal

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

					//agreeableness

					$answerTotalForAgreeableness =
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13 +
						$singleAnswer_14 +
						$singleAnswer_15 +
						$singleAnswer_16;

					$agreeableness = $answerTotalForAgreeableness / 8;

					if ($conscientiousness > $agreeableness) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">Lionel Messi</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/9857/b6N002.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Messi ve goool! Çalışkanlığın ve disiplinin ile Lionel Messi'sin!</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">Cristiano Ronaldo</h2>
            <img  class="card-img-top img-responsive img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img924/1049/2DnZaF.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">CR7! Gol attığın kadar attırdığın da çok; paylaşımcı karakterinle Cristiano Ronaldo'sun!</p>

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

$api = "https://api.typeform.com/v1/form/ggw30v?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersConscientiousnessAndAgreeableness($fb, $api);

?>

@endsection

