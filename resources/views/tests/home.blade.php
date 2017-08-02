@extends('layouts.testhome')
@section('card1')
    <div class="bd-example" data-example-id="">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                 style="height: 190px; width: 100%; display: block;"
                 src="https://zete.com/wp-content/uploads/2015/05/batman-superman.jpg"
                 data-holder-rendered="true">
            <div class="card-block">
                <center><h4 class="card-title">Hangi DC Comics Karakterisin?</h4></center>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.br</p>
                <a href="{{ url('/dc') }}" id="neuroticism" type="button" class="btn btn-primary btn-md center-block"
                   onclick="goToFacebook('#agreeableness','{{ url("/agreeableness") }}')">
                    <span> Teste Git</span>
                </a>

            </div>
        </div>
    </div>

@endsection

@section('card2')
    <div class="bd-example" data-example-id="">
        <div class="card " style="width: 20rem;">
            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                 style="height: 190px; width: 100%; display: block;"
                 src="https://img-s2.onedio.com/id-54bc36a2432de02b3bc020c9/rev-0/w-500/s-762b76277ef16fcb73675fcf86a0534ea73e5392.jpg"
                 data-holder-rendered="true">
            <div class="card-block">
                <center><h4 class="card-title center-block">Hangi Marvel Karakterisin?</h4></center>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's</p>
                <a href="{{ url('/marvel') }}" id="agreeableness" type="button"
                   class="btn btn-primary btn-md center-block"
                   onclick="goToFacebook('#agreeableness','{{ url("/agreeableness") }}')">
                    <span> Teste Git</span>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('card3')
    <div class="bd-example" data-example-id="">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                 style="height: 190px; width: 100%; display: block;"
                 src="http://www.listefilm.com/wp-content/uploads/2016/06/Friends-Konusu-ve-Karakterleri.jpg"
                 data-holder-rendered="true">
            <div class="card-block">
                <h4 class="card-title">Hangi Friends Karakterisin?</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="{{ url('/friends') }}" id="agreeableness" type="button"
                   class="btn btn-primary btn-md center-block"
                   onclick="goToFacebook('#conscientiousness','{{ url("/conscientiousness") }}')">
                    <span> Teste Git</span>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('card4')
    <div class="bd-example" data-example-id="">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                 style="height: 190px; width: 100%; display: block;"
                 src="https://i.ytimg.com/vi/ZiBZrsrkcIw/maxresdefault.jpg"
                 data-holder-rendered="true">
            <div class="card-block">
                <h4 class="card-title">Hangi HIMYM karakterisin?</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="{{ url('/himym') }}" id="extraversion" type="button"
                   class="btn btn-primary btn-md center-block"
                   onclick="goToFacebook('#extraversion','{{ url("/extraversion") }}')">
                    <span> Teste Git</span>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('footer')

@endsection