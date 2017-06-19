<div class="uk-container">
	<nav class="uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar>
	    
	    	<div class="uk-navbar-left">
	    	
	    	    <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
	                Jim Nieters
	            </a>
	    	
	    	    
	    	</div>
	
	    	<div class="uk-navbar-right">
				<ul class="uk-navbar-nav">
	    	        @foreach ($categories as $cat)
                        <li class="">
                            <a href="/category/{{$cat->slug}}">{{$cat->title}}</a>
                        </li>
                    @endforeach
	    	    </ul>
		        {{-- <ul class="uk-navbar-nav">
		            @if (Auth::guest())
	                    <li><a href="{{ route('login') }}">Login</a></li>
	                    <li><a href="{{ route('register') }}">Register</a></li>
	                @else
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                            {{ Auth::user()->name }} <span class="caret"></span>
	                        </a>
	
	                    </li>
	                    <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
	                @endif
		        </ul> --}}
	
		    </div>
	</nav>
</div>