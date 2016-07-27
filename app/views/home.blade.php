@extends('layouts.front.master')

@section('body')

<div class="fh5co-slider">
    <div class="owl-carousel owl-carousel-fullwidth">
        <div class="item" style="background-image:url({{ url('images/slide_1.jpg') }})">
            <div class="fh5co-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="fh5co-owl-text-wrap">
                            <div class="fh5co-owl-text text-center to-animate">
                                <h1 class="fh5co-lead">LaraSCI</h1>
                                <h2 class="fh5co-sub-lead">Laravel example starter project. Lovely crafted by <a href="#">SCI.NG</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url({{ url('images/slide_2.jpg') }})">
            <div class="fh5co-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="fh5co-owl-text-wrap">
                            <div class="fh5co-owl-text text-center to-animate">
                                <h1 class="fh5co-lead">Start your projects with ease</h1>
                                <h2 class="fh5co-sub-lead">Get started with your laravel project in minutes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="item" style="background-image:url({{ url('images/slide_3.jpg') }})">
<div class="fh5co-overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="fh5co-owl-text-wrap">
<div class="fh5co-owl-text text-center to-animate">
<h1 class="fh5co-lead">Branding, UX under in one roof</h1>
<h2 class="fh5co-sub-lead">Booster is a free responsive HTML5 template using bootstrap released under Creative Commons 3.0. Lovely crafted by <a href="#">FREEHTML5.co</a></h2>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item" style="background-image:url({{ url('images/slide_4.jpg') }})">
<div class="fh5co-overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="fh5co-owl-text-wrap">
<div class="fh5co-owl-text text-center to-animate">
<h1 class="fh5co-lead">Creative Folks</h1>
<h2 class="fh5co-sub-lead">Booster is a free responsive HTML5 template using bootstrap released under Creative Commons 3.0. Lovely crafted by <a href="#">FREEHTML5.co</a></h2>
</div>
</div>
</div>
</div>
</div>
</div>-->
    </div>
</div>	
<div id="fh5co-main">
    <!-- Features -->

    <div id="fh5co-features">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="fh5co-section-lead">Key Features</h2>
                    <h3 class="fh5co-section-sub-lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
                </div>
                <div class="fh5co-spacer fh5co-spacer-md"></div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 fh5co-feature-border">
                    <div class="fh5co-feature">
                        <div class="fh5co-feature-icon to-animate">
                            <i class="icon-bag"></i>
                        </div>
                        <div class="fh5co-feature-text">
                            <h3>Members Directory</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            <p><a href="https://github.com/sci-talents/larasci">Learn more</a></p>
                        </div>
                    </div>
                    <div class="fh5co-feature no-border">
                        <div class="fh5co-feature-icon to-animate">
                            <i class="icon-head"></i>
                        </div>
                        <div class="fh5co-feature-text">
                            <h3>User Authentication</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            <p><a href="https://github.com/sci-talents/larasci">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="fh5co-feature">
                        <div class="fh5co-feature-icon to-animate">
                            <i class="icon-user"></i>
                        </div>
                        <div class="fh5co-feature-text">
                            <h3>User Registration</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            <p><a href="https://github.com/sci-talents/larasci">Learn more</a></p>
                        </div>
                    </div>
                    <div class="fh5co-feature no-border">
                        <div class="fh5co-feature-icon to-animate">
                            <i class="icon-clock2"></i>
                        </div>
                        <div class="fh5co-feature-text">
                            <h3>24/7 Support</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            <p><a href="https://github.com/sci-talents/larasci">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features -->


    <div class="fh5co-spacer fh5co-spacer-lg"></div>		
    <!-- Members -->
    <div class="container" id="fh5co-products">
        <div class="row text-left">
            <div class="col-md-8">
                <h2 class="fh5co-section-lead">Latest Members</h2>
                <h3 class="fh5co-section-sub-lead">Featuring some of our latest members. Click <a href="{{ url('members') }}">here</a> to view all</h3>
            </div>
            <div class="fh5co-spacer fh5co-spacer-md"></div>
        </div>
        <div class="row">
            @if($members->count() == 0)
            <div class="col-xxs-12 fh5co-mb30">
                No members yet.
            </div>
            @else
            @foreach($members as $member)
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="{{ $member->picture }}" alt="{{ $member->fullName }}" class="img-responsive img-rounded to-animate">
                    <h4>{{ $member->fullName }}</h4>
                    <p>{{ $member->bio }}.</p>
                    <p><a href="{{ url('members/'.$member->id) }}">View Profile</a></p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <!-- Members -->
    <div class="fh5co-spacer fh5co-spacer-lg"></div>
    <!--
<div id="fh5co-clients">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="{{ url('images/client_1.png') }}" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="{{ url('images/client_2.png') }}" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
<div class="visible-sm-block visible-xs-block clearfix"></div>
<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="{{ url('images/client_3.png') }}" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="{{ url('images/client_4.png') }}" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
</div>
</div>
</div>-->

    <div class="fh5co-bg-section" style="background-image: url({{ url('images/slide_2.jpg') }}); background-attachment: fixed;">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="fh5co-hero-wrap">
                        <div class="fh5co-hero-intro text-center">
                            <h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Coding is poetry. <span class="quo">&rdquo;</span></h1>
                            <p class="author">&mdash; <cite>Unknown</cite></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
