<?php

namespace App\Http\Controllers;

use App\User;
//use Illuminate\Http\Request;
use Facebook\Facebook;
use Request;
use Session;

class FacebookUser extends Controller {
	//
	public function getFacebookInfo(Facebook $fb) //method injection
	{
		// retrieve form input parameters
		$uid = Request::input('uid');
		$access_token = Request::input('access_token');

		// assuming we have a User model already set up for our database
		// and assuming facebook_id field to exist in users table in database
		$user = User::firstOrCreate(['facebook_id' => $uid]);

		// get long term access token for future use
		$oAuth2Client = $fb->getOAuth2Client();

		// assuming access_token field to exist in users table in database
		$user->access_token = $oAuth2Client->getLongLivedAccessToken($access_token)->getValue();

		$user->save();

		// set default access token for all future requests to Facebook API
		$fb->setDefaultAccessToken($user->access_token);

		// call api to retrieve person's public_profile details
		$fields = "id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time,verified,email";
		$fb_user = $fb->get('/me?fields=' . $fields)->getGraphUser();

		$likes = $fb->get('/me/likes?fields=id&limit=100000')->getGraphEdge();
		$totalLikes = array();
		if ($fb->next($likes)) {
			$likesArray = $likes->asArray();
			$totalLikes = array_merge($totalLikes, $likesArray);
			while ($likes = $fb->next($likes)) {
				$likesArray = $likes->asArray();
				$totalLikes = array_merge($totalLikes, $likesArray);
			}
		} else {
			$likesArray = $likes->asArray();
			$totalLikes = array_merge($totalLikes, $likesArray);
		}
		//dump($fb_user);

		$user->name = $fb_user['name'];
		$user->first_name = $fb_user['first_name'];
		$user->last_name = $fb_user['last_name'];
		$user->age_range = $fb_user['age_range'];
		$user->link = $fb_user['link'];
		$user->gender = $fb_user['gender'];
		$user->locale = $fb_user['locale'];
		$user->picture = $fb_user['picture'];
		$user->email = $fb_user['email'];
		foreach ($totalLikes as $totalLike) {
			$likesTo = $totalLike['id'] . ", ";
			$user->user_likes .= $likesTo;
		}

		$user->save();

		Session::put('facebookId', $uid);

	}

	public function agreeableness(Facebook $fb) {
		$this->getFacebookInfo($fb);

		return redirect('/agreeableness');
	}

	public function neuroticism(Facebook $fb) {

		$this->getFacebookInfo($fb);

		return redirect('/neuroticism');
	}

	public function conscientiousness(Facebook $fb) {
		$this->getFacebookInfo($fb);

		return redirect('/conscientiousness');
	}

	public function extraversion(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/extraversion');
	}

	//açıklık ve sorumluluk - bitti
	public function opennesAndConscientiousness(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/yimdi7');
	}

	//açıklık ve dışadönüklük - bitti
	public function opennesAndExtraversion(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/hum5hr');
	}

	//açıklık ve uyumluluk - bitti
	public function opennesAndAgreeableness(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/ycyvsi');
	}

	//açıklık ve duygusal denge - bitti
	public function opennesAndNeuroticism(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/owtbkc');
	}

	//sorumluluk ve dışadönüklük - bitti
	public function conscientiousnessAndExtraversion(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/p6odqd');
	}

	//sorumluluk ve uyumluluk - bitti
	public function conscientiousnessAndAgreeableness(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/ggw30v');
	}

	//sorumluluk ve duygusal denge - bitti
	public function conscientiousnessAndNeuroticism(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/ey4gqn');
	}

	//dışadönüklük ve uyumluluk - bitti
	public function extraversionAndAgreeableness(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/n9e2hn');
	}

	//dışadönüklük ve duygusal denge -
	public function extraversionAndNeuroticism(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/ib4zjh');
	}

	//uyumluluk ve duygusal denge
	public function agreeablenessAndNeuroticism(Facebook $fb) {
		$this->getFacebookInfo($fb);
		return redirect('/smNYsh');
	}

}
