<div class="global-header">
	<div class="uk-container">
		<nav class="uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar>
		    
		    	<div class="uk-navbar-left">
		    		<div class="uk-flex uk-flex-middle">
		    			<div class="logo-icon">
		    				JN
		    			</div>
		    			<div class="logo-text">
		    				jim<span>nieters</span>
		    			</div>
		    		</div>
		    	    <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
		                
		            </a>
		    	
		    	    
		    	</div>
		
		    	<div class="uk-navbar-right">
					<ul class="uk-navbar-nav">
		    	        @foreach ($categories as $cat)
	                        <li class="">
	                            <a class="" href="/category/{{$cat->slug}}">{{$cat->title}}</a>
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
</div>