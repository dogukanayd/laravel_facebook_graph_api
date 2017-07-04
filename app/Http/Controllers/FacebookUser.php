<?php

namespace App\Http\Controllers;
use Request;
//use Illuminate\Http\Request;
use Facebook\Facebook;
use App\User;




class FacebookUser extends Controller
{
    //
    public function store(Facebook $fb) //method injection
    {
        // retrieve form input parameters
        $uid = Request::input('uid');
        $access_token = Request::input('access_token');
        $permissions = Request::input('permissions');

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
        $fields = "id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time,verified";
        $fb_user = $fb->get('/me?fields='.$fields)->getGraphUser();
        dump($fb_user);
    }    
}
