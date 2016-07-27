@extends('layouts.front.master')

@section('title', 'Contact Us')

@section('body')

<div id="fh5co-main">

    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fh5co-page-heading-lead">
                        Contact Us
                        <span class="fh5co-border"></span>
                    </h1>

                </div>
            </div>
        </div>
    </aside>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Filling like leaving a message for us, Holla and we'll get back to you at once</h3>
            </div>
            <form action="{{ url('contact') }}" method="post">

                @if(Session::has('message'))
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-success col-md-12" role="alert" style="display:inline-block">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        {{ Session::pull('message') }}
                    </div>
                </div>
                @endif
                @if(isset($error))
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-danger col-md-12" role="alert" style="display:inline-block">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        {{$error}}
                    </div>
                </div>
                @endif

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input placeholder="Please enter your full name" name="fullname" type="fullname" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Email</label>
                        <input placeholder="Please enter your email" name="email" type="email" class="form-control input-lg">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Message</label>
                        <textarea placeholder="Please enter your message" rows="3" name="message" class="form-control input-lg"></textarea>
                    </div>
                </div>                
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary " value="Send Message">
                    </div>
                </div>
            </form>	
        </div>
    </div>
</div>

@stop