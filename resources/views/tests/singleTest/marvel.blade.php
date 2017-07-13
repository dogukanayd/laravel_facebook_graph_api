@extends('layouts.singleTest')
@section('content')

    <div class="bd-example" data-example-id="">
        <div class="card">
            <h2 class="card-title">Hangi Marvel Karakterisin?</h2>
            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                 style="height: 330px; width: 360px; display: block;" src="http://www.placehold.it/360x360"
                 data-holder-rendered="true">
            <div class="card-block">

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>

            </div>
            <button id="agreeableness" type="button" class="btn btn-primary btn-md"
                    onclick="goToFacebook('#agreeableness','{{ url("/agreeableness") }}')">
                <span><i class="fa fa-facebook-official fa-3" aria-hidden="true"></i> Facebook ile giriş yap</span>
            </button>

        </div>

    </div>

@endsection