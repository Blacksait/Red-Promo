@extends('layout.main')

@section('content')


        <!-- Page Content
        ================================================== -->
        <div class="full-page-container">

            <div class="full-page-sidebar">
                <div class="full-page-sidebar-inner" data-simplebar>
                    <form method="GET" action="/articles">
                        @if($favorites == true)
                            <input type="hidden" name="favorites" value="true">
                        @endif
                         <div class="sidebar-container">
                            <!-- Keywords -->
                            <div class="sidebar-widget">
                                <h3>Search Article</h3>
                                <div class="keywords-container">
                                        <div class="keyword-input-container">
                                            <input type="text" name="name" class="keyword-input" placeholder="Enter the article" value="{{request()->name}}">
                                        </div>
                                    <div class="keywords-list"><!-- keywords go here --></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>


                             <div class="sidebar-widget">
                                 <h3>Города</h3>
                                 @foreach($cities as $city)
                                     <div>
                                         <label for="{{$city->name}}">{{$city->name}}</label>
                                         <input type="radio" id="{{$city->name}}" name="city" value="{{$city->name}}" @if($city->name == request('city',[])) checked @endif  >
                                     </div>
                                 @endforeach
                             </div>
                         </div>

                         <!-- Sidebar Container / End -->

                         <!-- Search Button -->
                         <div class="sidebar-search-button-container">
                             <button type="submit" class="button ripple-effect">Search</button>
                         </div>
                         <!-- Search Button / End-->
                    </form>
                </div>
            </div>
            <!-- Full Page Sidebar / End -->

            <!-- Full Page Content -->
            <div class="full-page-content-container" data-simplebar>
                <div class="full-page-content-inner">

                    <h3 class="page-title">Search Results</h3>


                    <div class="listings-container grid-layout margin-top-35">

                    @if(count($articles) > 0)
                        @foreach($articles as $el)
                    <!-- Articles Listing -->

                        <a href="/articles/{{$el->id}}" class="job-listing">
                            <!-- Articles Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="/images/{{$el->image}}" alt="">

                                </div>
                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h4 class="job-listing-company">{{$el->title}}
                                        <h3 class="job-listing-title">{{$el->name}}</h3>
                                    </h4>
                                </div>
                            </div>

                            <!-- Articles Listing Footer -->
                            <div class="job-listing-footer">
                                <ul>
                                    <li><i class="icon-material-outline-location-on"></i>{{$el->tag}}</li>

                                        @if($el->favorites == true)
                                            <li><i class="icon-material-outline-business-center">
                                            <span><b>Рекомендуемая запись</b></span>
                                        @endif
                                        </i>
                                </ul>

                            </div>
                        </a>
                             @endforeach
                        @else
                            <p>Статей пока нет</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

@endsection
