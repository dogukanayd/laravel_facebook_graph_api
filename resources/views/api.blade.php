<?php

$url = 'https://api.typeform.com/v1/form/yG74ZF?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true';
$JSON = file_get_contents($url);
$allData = json_decode($JSON, true);

/* @version1 */
/*foreach ($allData['responses'] as $singleData) {
    $fbId = $singleData['hidden'];
    if ($fbId == '1428246347214816') {
        $info = $singleData['answers'];
        foreach ($info as $answer) {
            // var_dump($answer);
            echo $answer . "<br>";
        }
    }

}*/

/* @version2 running */
/*foreach ($allData['responses'] as $singleData) {
        $info = $singleData['answers'];
        foreach ($info as $answer) {
            // var_dump($answer);
            echo $answer . "<br>";
        }
    }*/

/* @version3 completed değeri 1 olanların tüm cevaplarını çeker */
/*foreach ($allData['responses'] as $singleData) {
    $is_completed = [];
    $is_completed = $singleData['completed'];
    if($is_completed == 1){
        $answers = $singleData['answers'];
        foreach ($answers as $answer){

            echo "->" .   $answer . "<br>";
        }
    }
    }*/

/* @version4 bütün facebook id leri ile beraber ona uygun cevapları çeker */
/*foreach ($allData['responses'] as $singleData) {
    $is_completed = $singleData['completed'];
    if ($is_completed == 1) {
        $answers = $singleData['answers'];
        $hidden = $singleData['hidden'];
        foreach ($hidden as $facebookId) {
            echo $facebookId . '<br>';
            foreach ($answers as $answer) {
                echo $answer . "<br>";
            }
        }

    }
}*/

/* @version5 verilen facebook idsine yönelik cevapları çeker */
/*foreach ($allData['responses'] as $singleData) {
    $is_completed = $singleData['completed'];
    if ($is_completed == 1) {
        $answers = $singleData['answers'];
        $hidden = $singleData['hidden'];
        foreach ($hidden as $facebookId) {
            if ($facebookId == 10213857502261961) {
                echo $facebookId . '<br>';
                foreach ($answers as $answer) {
                    echo $answer . "<br>";
                }
            }
        }

    }
}*/

function getAnswers($id)
{
    $url = 'https://api.typeform.com/v1/form/yG74ZF?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true';
    $JSON = file_get_contents($url);
    $allData = json_decode($JSON, true);
    foreach ($allData['responses'] as $singleData) {
        $is_completed = $singleData['completed'];
        if ($is_completed == 1) {
            $answers = $singleData['answers'];
            $hidden = $singleData['hidden'];
            $singleAnswer_a = $singleData['answers']['opinionscale_jUmHCZYrWgd0'];
            $singleAnswer_b = $singleData['answers']['opinionscale_OMjYatWCXk24'];
            $singleAnswer_c = $singleData['answers']['opinionscale_TIQWhz2Ltsrp'];
            $singleAnswer_d = $singleData['answers']['opinionscale_Oq7XnhBQULgW'];
            $singleAnswer_e = $singleData['answers']['opinionscale_Qn8POVIYECSS'];
            $singleAnswer_f = $singleData['answers']['opinionscale_hRdOviQZBPHs'];
            $singleAnswer_g = $singleData['answers']['opinionscale_hRdOviQZBPHs'];
            $singleAnswer_h = $singleData['answers']['opinionscale_PonE1VwNcsK9'];
            foreach ($hidden as $facebookId) {
                if ($facebookId == $id) {
                    echo $facebookId . '<br>';
                    echo $singleAnswer_a . '<br>';
                    echo $singleAnswer_b . '<br>';
                    echo $singleAnswer_c . '<br>';
                    echo $singleAnswer_d . '<br>';
                    echo $singleAnswer_e . '<br>';
                    echo $singleAnswer_f . '<br>';
                    echo $singleAnswer_g . '<br>';
                    echo $singleAnswer_h . '<br>';
                }

            }
        }
    }

}

getAnswers(1428246347214816);
//1428246347214816
//10213857502261961


?>











