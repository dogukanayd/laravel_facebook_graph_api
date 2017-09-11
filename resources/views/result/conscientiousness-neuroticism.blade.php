@extends('layouts.result')
@section('result')
<?php
use Carbon\Carbon;

function getAnswersConscientiousnessAndNeuroticism($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//conscientiousness - sorumluluk
			$singleAnswer_1 = $singleData['answers']['opinionscale_vcEszcF5LhAX'];
			$singleAnswer_2 = $singleData['answers']['opinionscale_CtlZo3HvTwfK'];
			$singleAnswer_3 = $singleData['answers']['opinionscale_egBoWUXsWWpL'];
			$singleAnswer_4 = $singleData['answers']['opinionscale_NiS9JO3qPE9g'];
			$singleAnswer_5 = $singleData['answers']['opinionscale_WUrCYGYKqZlM'];
			$singleAnswer_6 = $singleData['answers']['opinionscale_NNFnInrFOyni'];
			$singleAnswer_7 = $singleData['answers']['opinionscale_aC5JXzwqZM6j'];
			$singleAnswer_8 = $singleData['answers']['opinionscale_SqpaSnsmT41b'];

			//neuroticsm - duygusal denge
			$singleAnswer_9 = $singleData['answers']['opinionscale_TdmrmkaNUszc']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_fRUhy0Xwdzso']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_Gx6KkWGDP0qY']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_jdGWGGFUPybu']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_XY3d2KXU8g6t']; //normal
			$singleAnswer_14 = $singleData['answers']['opinionscale_ynkOycPRlDfN']; //normal
			$singleAnswer_15 = $singleData['answers']['opinionscale_pEbEoXIvw27V']; //normal
			$singleAnswer_16 = $singleData['answers']['opinionscale_idba6VD95Vo8']; //normal
			$singleAnswer_17 = $singleData['answers']['opinionscale_58884729']; //normal

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
					} else if ($singleAnswer_8 == 4) {
						$singleAnswer_8 = 2;
					} else if ($singleAnswer_8 == 2) {
						$singleAnswer_8 = 4;
					} else if ($singleAnswer_8 == 1) {
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

					$neuroticsm = $answerTotalForNeuroticism / 9;

					if ($conscientiousness > $neuroticsm) {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">ELF</h2>
            <img class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img924/3572/0lGZG6.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">We Are The BEST ! Kesinlikle sen en iyisisin. Çalışmaktan zevk alan,boş durmaktan nefret eden bir ruha sahipsin. Üşengeçligin bir parçası bile sende bulunmaz. Sen bu dünyaya çalışmak ve eğlenmek için gönderilmişsin. Hayattaki en önemli presibin düzenindir. En ufak bir düzensizliğe ve dağınıklığa tahammülün yok.</p>

            </div>


        </div>

    </div>

DELIMETER;
					} else {
						echo $html = <<<DELIMETER
<div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">CÜCE</h2>
            <img  class="card-img-top img-responsive" data-src="holder.js/100px180/" alt="100%x180"
                 src="http://imageshack.com/a/img922/3523/Aly2Nx.jpg"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Baltalar Elimizde ! Her işinde mutlaka bir parça sabırsızlık var. Aceleci olmak,sabırsız olmak senin için su ve ekmek gibi olmuş. Sinirinden hiç bahsetmek istemiyorum çünkü betimleyebilecek bir kelime hala yaratılmadı.</p>

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

$api = "https://api.typeform.com/v1/form/ey4gqn?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27&since=" . $time;

$fb = Session::get('facebookId');

getAnswersConscientiousnessAndNeuroticism($fb, $api);

?>

@endsection

