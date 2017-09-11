@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersAgreeablenessAndNeuroticism($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//agreeableness - uyumluluk
			$singleAnswer_1 = $singleData['answers']['opinionscale_j7AzV4ldcGGJ']; //normal
			$singleAnswer_2 = $singleData['answers']['opinionscale_PqVEzsc4X5Eq']; //normal
			$singleAnswer_3 = $singleData['answers']['opinionscale_dynW844sBUok']; //normal
			$singleAnswer_4 = $singleData['answers']['opinionscale_F65gNiHtrsoV']; //normal
			$singleAnswer_5 = $singleData['answers']['opinionscale_vNxzgWD9mqTP']; //normal
			$singleAnswer_6 = $singleData['answers']['opinionscale_Sv8Ohl5yAhJt']; //normal
			$singleAnswer_7 = $singleData['answers']['opinionscale_e8A19X1rCQJN']; //normal
			$singleAnswer_8 = $singleData['answers']['opinionscale_yQYVyi68UwBZ']; //normal

			//neuroticism - duygusal denge
			$singleAnswer_9 = $singleData['answers']['opinionscale_jrBT58V8T4WP']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_y8w7xLcNuEO9']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_RAKwzlYrCX2n']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_s9LZjIZZ8Jks']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_JHCPm0YIYbZM']; //normal
			$singleAnswer_14 = $singleData['answers']['opinionscale_xyzMC6CVl6St']; //normal
			$singleAnswer_15 = $singleData['answers']['opinionscale_wo6rRMeHF8HO']; //normal
			$singleAnswer_16 = $singleData['answers']['opinionscale_VCTDTcJYbe4u']; //normal
			$singleAnswer_17 = $singleData['answers']['opinionscale_WSgmnW1L2qGG']; //normal

			foreach ($hidden as $facebookId) {

				if ($facebookId == $id) {

					//extraversion - dışadönüklük

					$answerTotalForAgreeableness =
						$singleAnswer_1 +
						$singleAnswer_2 +
						$singleAnswer_3 +
						$singleAnswer_4 +
						$singleAnswer_5 +
						$singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8;

					$agreeableness = $answerTotalForAgreeableness / 8;
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

					if ($agreeableness > $neuroticism) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">LED ZEPPELIN</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/7035/F27EIE.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Ayakların yere sağlam basıyor. Kim olsa seni sever :)</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">THE DOORS</h2>
            <img  class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/7035/F27EIE.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Zamansızsın! Gittiğin her yerde her zaman en çok dikkat çeken sensin</p>

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

$api = "https://api.typeform.com/v1/form/smnys?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersAgreeablenessAndNeuroticism($fb, $api);

?>

@endsection

