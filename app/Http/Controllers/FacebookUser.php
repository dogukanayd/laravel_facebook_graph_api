<?php

namespace App\Http\Controllers;

use Request;
//use Illuminate\Http\Request;
use Facebook\Facebook;
use App\User;
use Session;


class FacebookUser extends Controller
{
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
        $user->save();

        Session::put('facebookId', $uid);

    }

    public function agreeableness(Facebook $fb)
    {
        $this->getFacebookInfo($fb);

        return redirect('/agreeableness');
    }

    public function neuroticism(Facebook $fb)
    {

        $this->getFacebookInfo($fb);

        return redirect('/neuroticism');
    }

    public function conscientiousness(Facebook $fb)
    {
        $this->getFacebookInfo($fb);

        return redirect('/conscientiousness');
    }

    public function extraversion(Facebook $fb)
    {
        $this->getFacebookInfo($fb);
        return redirect('/extraversion');
    }
}
