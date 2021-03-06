@extends('layouts.app')

@section('content')

<div class="home-hero">
    <div class="uk-container">
        <div class="uk-flex uk-flex-center uk-text-center" uk-grid>
            <div class="uk-width-1-2@m">
                "I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users."
            </div>
        </div>
    </div>
</div>

<div class="category-section">
    <div class="uk-container">
        @foreach ($categories as $category)
            <div class="each-category" >
                <div uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="cat-img" style="background: url();">
                            <img src="{{ $category->image }}" alt="">
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="cat-txt">
                            <div class="category-title">
                                {{ $category->title }}
                            </div>
                            
                            <div class="category-description">
                                <p>{{ $category->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        @endforeach
    </div>
</div>


{{-- <div class="bg-awesome">
    <div class="bg-img"></div>
</div> --}}
<div class="uk-container">
    <div class="hero-section">
        <div class="" uk-grid>
            <div class="uk-width-1-2@m">
                <div></div>
            </div>
        </div>
        
    </div>

    <section class="categories">
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-grid-large" uk-grid>
            @foreach ($categories as $category)
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <div class="img-card" style="background-image:url({{ $category->image }})">
                            </div>
                            <div class="overlay"></div>
                            <h3 class="uk-card-title">{{ $category->title }}</h3>
                        </div>
                        <div class="uk-card-body">
                            
                            <p>{{ $category->description }}</p>
                        </div>
                        <div class="uk-card-footer">
                            <a href="/category/{{$category->slug}}" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <br><br><br>
</div>
@endsection