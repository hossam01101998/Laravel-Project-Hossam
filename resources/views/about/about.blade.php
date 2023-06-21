@extends('layouts.app')

@section('title' ,  'HOME')


@section('content')
<br>

<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">About us:</div>

                    <div class="card-body">

                        <h4> <strong> Welcome to AllOverCars!</strong></h4>
                        <hr>

                        AllOverCars is a vibrant online community where car enthusiasts from all around the world gather
                         to share their passion for automobiles. Whether you're a seasoned car enthusiast or just getting started,
                          this forum is the perfect place for you to connect with like-minded individuals,
                           exchange knowledge, and engage in exciting discussions about all things automotive.
                           <br> <br>

                        At AllOverCars, you have the opportunity to create and publish your own posts, ask questions, and share your experiences with fellow members. Whether you want to showcase your latest car modification, seek advice on vehicle maintenance, or simply share breathtaking car photos, this platform provides the ideal space for you to express yourself and interact with others who share your enthusiasm.
                        <br><br>
                        Join our diverse community of car lovers and unlock a wealth of resources and insights.
                         Connect with experienced automotive enthusiasts who can provide valuable guidance and assistance.
                          Explore a wide range of car-related topics, including performance upgrades, car reviews, industry news,
                           and much more.
                        <br> <br>
                        Don't miss out on the opportunity to showcase your car knowledge, engage in friendly debates,
                         and contribute to a thriving community of car enthusiasts. AllOverCars is your gateway to connect,
                          learn, and be inspired by the incredible world of cars.
                        <br><br>
                        <a href="/register" style="text-decoration:none; color: orange;"> <strong> JOIN </strong></a> AllOverCars today and let your automotive journey begin!

                        <img src="{{ asset('photos/car1.png') }}" style="width:100%;">





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
