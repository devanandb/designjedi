@extends('layouts.app')

@section('content')
<div class="img-card" style="background-image:url({{ $article->hero_img }})">&nbsp;</div>
<div class="uk-container">
    {{-- <div class="hero-section">
        <div class="" uk-grid>
            <div class="uk-width-1-2@m">
                <div>I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users.</div>
            </div>
        </div>
        
    </div> --}}

    <div class="" uk-grid>
        {{-- <div class="uk-width-1-4@m">
            <div class="sidebar">
                <ul class="uk-nav uk-nav-default">
                    @foreach ($categories as $cat)
                        <li class="{{ $cat->id == $category->id ? 'uk-active' : '' }}">
                            <a href="/category/{{$cat->slug}}">{{$cat->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            
                
            
        </div> --}}
        <div class="uk-width-3-4@m">
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->summary }}</p>
            
            <div>{!! $article->body !!}</div>
        </div>
        
    </div>

   
    <br><br><br>
</div>
@endsection