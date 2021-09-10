@extends('layout.main')

@section('content')
<div class="container" style="padding-bottom: 15%;margin-bottom: 8%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding: 8% 0">
                <h3 style="padding-bottom: 3%">Избранные Записи</h3>

                @if(count($favorites) > 0)
                    @foreach($favorites as $el)
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
                    <p>Избранных статей пока нет</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
