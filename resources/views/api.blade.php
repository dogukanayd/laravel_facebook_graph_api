<?php

function getAnswersOpennesAndConscientiousness($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//opennes - açıklık
			$singleAnswer_1 = $singleData['answers']['opinionscale_58880010'];
			$singleAnswer_2 = $singleData['answers']['opinionscale_58880075'];
			$singleAnswer_3 = $singleData['answers']['opinionscale_58880094'];
			$singleAnswer_4 = $singleData['answers']['opinionscale_58880096'];
			$singleAnswer_5 = $singleData['answers']['opinionscale_58880098'];

			//conscientiousness - sorumluluk
			$singleAnswer_6 = $singleData['answers']['opinionscale_58880099'];
			$singleAnswer_7 = $singleData['answers']['opinionscale_58880100'];
			$singleAnswer_8 = $singleData['answers']['opinionscale_58880102'];
			$singleAnswer_9 = $singleData['answers']['opinionscale_58880125'];
			$singleAnswer_10 = $singleData['answers']['opinionscale_58880126'];
			$singleAnswer_11 = $singleData['answers']['opinionscale_58880809'];
			$singleAnswer_12 = $singleData['answers']['opinionscale_58880812'];
			$singleAnswer_13 = $singleData['answers']['opinionscale_58880818'];

			foreach ($hidden as $facebookId) {

				if ($facebookId == $id) {
					echo $facebookId . '<br>';

					$answerTotalForOpennes =
						$singleAnswer_1 +
						$singleAnswer_2 +
						$singleAnswer_3 +
						$singleAnswer_4 +
						$singleAnswer_5;

					$opennes = $answerTotalForOpennes / 5;
					//echo $opennes . '<br><br>';

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
					$answerTotalForConscientiousness = $singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8 +
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13;
					$conscientiousness = $answerTotalForConscientiousness / 8;
					//echo $conscientiousness . "<br>";

					// $people = array("Peter", "Joe", "Glenn", "Cleveland");
					// echo end($people);
					// if ($opennes > $conscientiousness) {
					// 	echo "açıklık <br>";
					// } else {
					// 	echo "sorumluluk<br>";
					// }

					echo "opennes: " . $opennes . "<br>";
					echo "conscientiousness: " . $conscientiousness . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Opennes And Conscientiousness </b><br>";
getAnswersOpennesAndConscientiousness(1428246347214816, 'https://api.typeform.com/v1/form/yimdi7?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';

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

					// if ($opennes > $extraversion) {
					// 	echo "açıklık <br>";
					// } else {
					// 	echo "dışadönüklük<br>";
					// }

					echo "opennes : " . $opennes . "<br>";
					echo "extraversion: " . $extraversion . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Opennes And Extraversion </b><br>";
getAnswersOpennesAndExtraversion(1428246347214816, 'https://api.typeform.com/v1/form/hum5hr?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

function getAnswersOpennesAndAgreeableness($id, $url) {
	$JSON = file_get_contents($url);
	$allData = json_decode($JSON, true);
	foreach ($allData['responses'] as $singleData) {
		$is_completed = $singleData['completed'];
		if ($is_completed == 1) {
			$hidden = $singleData['hidden'];

			//opennes - açıklık
			$singleAnswer_1 = $singleData['answers']['opinionscale_eln5ePyzy2oh']; //normal
			$singleAnswer_2 = $singleData['answers']['opinionscale_oOv9OYRJxGaA']; //normal
			$singleAnswer_3 = $singleData['answers']['opinionscale_qC46SLGffUdk']; //normal
			$singleAnswer_4 = $singleData['answers']['opinionscale_NT8vRmjXfPMK']; //normal
			$singleAnswer_5 = $singleData['answers']['opinionscale_fyUKDlOQ9mYy']; //normal

			//agreeableness - uyumluluk
			$singleAnswer_6 = $singleData['answers']['opinionscale_tgbwiRqxQV8F']; //normal
			$singleAnswer_7 = $singleData['answers']['opinionscale_Mql2P3fIoLZ7']; //normal
			$singleAnswer_8 = $singleData['answers']['opinionscale_NV4dtp18aLzJ']; //normal
			$singleAnswer_9 = $singleData['answers']['opinionscale_Fvj0wubjjYO1']; //normal
			$singleAnswer_10 = $singleData['answers']['opinionscale_AfRNvUtcKeiu']; //normal
			$singleAnswer_11 = $singleData['answers']['opinionscale_sFMMvH9SpWKY']; //normal
			$singleAnswer_12 = $singleData['answers']['opinionscale_tbhvKqxosxf3']; //normal
			$singleAnswer_13 = $singleData['answers']['opinionscale_ajip6SQPUwEz']; //normal

			foreach ($hidden as $facebookId) {

				if ($facebookId == $id) {
					echo "facebook id: " . $facebookId . '<br>';

					$answerTotalForOpennes =
						$singleAnswer_1 +
						$singleAnswer_2 +
						$singleAnswer_3 +
						$singleAnswer_4 +
						$singleAnswer_5;

					$opennes = $answerTotalForOpennes / 5;
					//echo $opennes . '<br><br>';

					$answerTotalForAgreeableness = $singleAnswer_6 +
						$singleAnswer_7 +
						$singleAnswer_8 +
						$singleAnswer_9 +
						$singleAnswer_10 +
						$singleAnswer_11 +
						$singleAnswer_12 +
						$singleAnswer_13;
					$agreeableness = $answerTotalForAgreeableness / 8;

					// if ($opennes > $agreeableness) {
					// 	echo "açıklık <br>";
					// } else {
					// 	echo "uyumluluk<br>";
					// }
					echo "opennes: " . $opennes . "<br>";
					echo "agreeableness: " . $agreeableness . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Opennes And Agreeableness </b><br>";
getAnswersOpennesAndAgreeableness(1428246347214816, 'https://api.typeform.com/v1/form/ycyvsi?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';

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

					// if ($opennes > $agreeableness) {
					//  echo "açıklık <br>";
					// } else {
					//  echo "uyumluluk<br>";
					// }
					echo "opennes: " . $opennes . "<br>";
					echo "neuroticism: " . $neuroticism . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Opennes And Neutoticism </b><br>";
getAnswersOpennesAndNeuroticism(1428246347214816, 'https://api.typeform.com/v1/form/owtbkc?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';

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

					// if ($opennes > $agreeableness) {
					//  echo "açıklık <br>";
					// } else {
					//  echo "uyumluluk<br>";
					// }
					echo "conscientiousness: " . $conscientiousness . "<br>";
					echo "extraversion: " . $extraversion . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Conscientiousness And Extraversion </b><br>";
getAnswersConscientiousnessAndExtraversion(1428246347214816, 'https://api.typeform.com/v1/form/p6odqd?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';

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

					$egreeableness = $answerTotalForAgreeableness / 8;

					// if ($opennes > $agreeableness) {
					//  echo "açıklık <br>";
					// } else {
					//  echo "uyumluluk<br>";
					// }
					echo "conscientiousness: " . $conscientiousness . "<br>";
					echo "egreeableness: " . $egreeableness . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Conscientiousness And Agreeableness </b><br>";
getAnswersConscientiousnessAndAgreeableness(1428246347214816, 'https://api.typeform.com/v1/form/ggw30v?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';

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

					// if ($opennes > $agreeableness) {
					//  echo "açıklık <br>";
					// } else {
					//  echo "uyumluluk<br>";
					// }
					echo "conscientiousness: " . $conscientiousness . "<br>";
					echo "neuroticsm: " . $neuroticsm . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Conscientiousness And Neutoticism </b><br>";
getAnswersConscientiousnessAndNeuroticism(1428246347214816, 'https://api.typeform.com/v1/form/ey4gqn?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';
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

					// if ($opennes > $agreeableness) {
					//  echo "açıklık <br>";
					// } else {
					//  echo "uyumluluk<br>";
					// }
					echo "extraversion: " . $extraversion . "<br>";
					echo "agreeableness: " . $agreeableness . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Extraversion And Agreeableness </b><br>";
getAnswersExtraversionAndAgreeableness(1428246347214816, 'https://api.typeform.com/v1/form/n9e2hn?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';

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

					// if ($opennes > $agreeableness) {
					//  echo "açıklık <br>";
					// } else {
					//  echo "uyumluluk<br>";
					// }
					echo "extraversion: " . $extraversion . "<br>";
					echo "neuroticism: " . $neuroticism . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Extraversion And Neuroticism </b><br>";
getAnswersExtraversionAndNeuroticism(1428246347214816, 'https://api.typeform.com/v1/form/ib4zjh?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');

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
					echo "facebook id: " . $facebookId . '<br>';

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

					// if ($opennes > $agreeableness) {
					//  echo "açıklık <br>";
					// } else {
					//  echo "uyumluluk<br>";
					// }
					echo "agreeableness: " . $agreeableness . "<br>";
					echo "neuroticism: " . $neuroticism . "<br><br>";

				}

			}
		}
	}

}

echo "<b> Agreeableness and Neuroticism </b><br>";
getAnswersAgreeablenessAndNeuroticism(1428246347214816, 'https://api.typeform.com/v1/form/maqaq3?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30&completed=true%27');
?>











