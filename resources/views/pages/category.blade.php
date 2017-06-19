@extends('layouts.app')

@section('content')
<div class="uk-container">
    {{-- <div class="hero-section">
        <div class="" uk-grid>
            <div class="uk-width-1-2@m">
                <div>I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users.</div>
            </div>
        </div>
        
    </div> --}}

    <div class="" uk-grid>
        <div class="uk-width-1-4@m">
            <div class="sidebar">
                <ul class="uk-nav uk-nav-default">
                    @foreach ($categories as $cat)
                        <li class="{{ $cat->id == $category->id ? 'uk-active' : '' }}">
                            <a href="/category/{{$cat->slug}}">{{$cat->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            
                
            
        </div>
        <div class="uk-width-3-4@m">
            <div class="categories">
                <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-grid-large" uk-grid>
                    @foreach ($articles as $article)
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
                                    <div class="img-card" style="background-image:url({{ $article->hero_img }})">
                                    </div>
                                    <div class="overlay"></div>
                                    <h3 class="uk-card-title">{{ $article->title }}</h3>
                                </div>
                                <div class="uk-card-body">
                                    
                                    <p>{{ $article->summary }}</p>
                                </div>
                                <div class="uk-card-footer">
                                    <a href="/content/{{ $article->slug }}" class="uk-button uk-button-text">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>

   
    <br><br><br>
</div>
@endsection