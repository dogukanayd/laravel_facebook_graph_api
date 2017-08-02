<?php

function getAnswers($id, $url)
{
    $JSON = file_get_contents($url);
    $allData = json_decode($JSON, true);
    foreach ($allData['responses'] as $singleData) {
        $is_completed = $singleData['completed'];
        if ($is_completed == 1) {
            $hidden = $singleData['hidden'];
            $singleAnswer_a = $singleData['answers']['opinionscale_jUmHCZYrWgd0'];
            $singleAnswer_b = $singleData['answers']['opinionscale_OMjYatWCXk24'];
            $singleAnswer_c = $singleData['answers']['opinionscale_TIQWhz2Ltsrp'];
            $singleAnswer_d = $singleData['answers']['opinionscale_Oq7XnhBQULgW'];
            $singleAnswer_e = $singleData['answers']['opinionscale_Qn8POVIYECSS'];
            $singleAnswer_f = $singleData['answers']['opinionscale_hRdOviQZBPHs'];
            $singleAnswer_g = $singleData['answers']['opinionscale_mze0UYvEGdG0'];
            $singleAnswer_h = $singleData['answers']['opinionscale_PonE1VwNcsK9'];

            foreach ($hidden as $facebookId) {
                if ($facebookId == $id) {
                    echo $facebookId . '<br>';
                    $answerTotal = $singleAnswer_a +
                        $singleAnswer_b +
                        $singleAnswer_c +
                        $singleAnswer_d +
                        $singleAnswer_e +
                        $singleAnswer_f +
                        $singleAnswer_g +
                        $singleAnswer_h;
                    $finalResult = $answerTotal / 8;
                    echo $finalResult . '<br><br>';

                }

            }
        }
    }

}

getAnswers(1428246347214816, 'https://api.typeform.com/v1/form/yG74ZF?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true');
//1428246347214816
//10213857502261961


?>











