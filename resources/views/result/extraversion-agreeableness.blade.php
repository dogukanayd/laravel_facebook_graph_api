@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersExtraversionAndAgreeableness($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//extraversion - dışadönüklük
			$singleAnswer_1 = $singleData['answers']['opinionscale_WyJpPT5WVbos']; //tersi
			$singleAnswer_2 = $singleData['answers']['opinionscale_luNAHUZclWpF']; //tersi
			$singleAnswer_3 = $singleData['answers']['opinionscale_O1xzoVccoT46']; //tersi
			$singleAnswer_4 = $singleData['answers']['opinionscale_dmqymiL9RbdK']; //normal
			$singleAnswer_5 = $singleData['answers']['opinionscale_Dm5B7WXmj65P']; //tersi
			$singleAnswer_6 = $singleData['answers']['opinionscale_zBUYvsNWG3cx']; //normal
			$singleAnswer_7 = $singleData['answers']['opinionscale_H3vCPy2uKqDh']; //tersi
			$singleAnswer_8 = $singleData['answers']['opinionscale_Prp0Y5JvLoRa']; //tersi

			//agreeableness - uyumluluk
			$singleAnswer_9 = $singleData['answers']['opinionscale_OfRqMmpY8meU']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_X3hwbbSGo79d']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_pfwcqkntCFAX']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_Ic6PNAbBVu4t']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_iAeiEYfymmF6']; //normal
			$singleAnswer_14 = $singleData['answers']['opinionscale_WYHP2fPo5ihR']; //normal
			$singleAnswer_15 = $singleData['answers']['opinionscale_W4bTlgoqN1hL']; //normal
			$singleAnswer_16 = $singleData['answers']['opinionscale_SJKzqsG6FOxZ']; //normal

			foreach ($hidden as $facebookId) {

				if ($facebookId == $id) {

					//son
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

					if ($extraversion > $agreeableness) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">YANDEX</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img924/1361/x2AFJb.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Always İnnovation ! Hiçbir zaman yeniliği aramaktan geri durmazsın. Girişimcilik ruhun sayesinde asosyal bir hayata adımını atmazsın. Pasif görünmek sana göre değil. Her zaman insan ilişkilere önem verip,yeni arkadaşlıklar kazanmaya çalışırsın. Ah bu arada çenen hiç susmaz.</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">YANDEX</h2>
            <img  class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img923/7729/vTcl4a.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">İyilik meleği desek abartılı olmaz. Çevrenin beklentilerini karşılamadan duramazsın. Duyarsız kalmak senin tarzın değil. Dışarıdan sıradan görünsende için sevgi dolu. İyi niyetini bir an bile esirgemezsin.</p>

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

$api = "https://api.typeform.com/v1/form/n9e2hn?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersExtraversionAndAgreeableness($fb, $api);

?>

@endsection

