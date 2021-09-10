@extends('layout.main')

@section('content')

    <div class="single-page-header" data-background-image="images/single-job.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner">
                        <div class="left-side">
                            <div class="header-image">
                                <img src="/images/{{$article->image}}" alt="">
                            </div>
                            <div class="header-details">
                                <h3>{{ $article->name }}</h3><br>
                                <span>{{ $article->title }}</span><br>
                                <span>{{ $article->tag }}</span>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="salary-box">
                                <h3><a href="/articles/{{$article->id}}/edit">Добавить в избранное</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content
    ================================================== -->
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-xl-8 col-lg-8 content-right-offset">
                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Описание</h3>
                    <p>{{ $article->text }}</p>
                </div>
                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Похожие новости</h3>

                    <!-- Listings Container -->
                    <div class="listings-container grid-layout">

                        <!-- Job Listing -->
                        @foreach($similars as $similar)
                            <a href="#" class="job-listing">

                                <!-- Job Listing Details -->
                                <div class="job-listing-details">
                                    <!-- Logo -->
                                    <div class="job-listing-company-logo">
                                        <img src="/images/{{$similar->image}}" alt="">
                                    </div>

                                    <!-- Details -->
                                    <div class="job-listing-description">
                                        <h4 class="job-listing-company">{{$similar->title}}</h4>
                                        <h3 class="job-listing-title">{{$similar->name}}</h3>
                                    </div>
                                </div>

                                <!-- Job Listing Footer -->
                                <div class="job-listing-footer">
                                    <ul>
                                        <li><i class="icon-material-outline-location-on"></i>{{$similar->tag}}</li>
                                    </ul>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <!-- Listings Container / End -->
                </div>
            </div>
        </div>
    </div>

@endsection
