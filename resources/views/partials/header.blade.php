<div class="uk-container">
	<nav class="uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar>
	    
	    	<div class="uk-navbar-left">
	    	
	    	    <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
	                Jim Nieters
	            </a>
	    	
	    	    <ul class="uk-navbar-nav">
	    	        <li>
	    	            <a href="#">
	    	                Leadership
	    	            </a>
	    	        </li>
	    	        <li>
	    	            <a href="#">
	    	                Design
	    	            </a>
	    	        </li>
	    	        <li>
	    	            <a href="#">
	    	                Presence
	    	            </a>
	    	        </li>
	    	    </ul>
	    	</div>
	
	    	<div class="uk-navbar-right">
	
		        <ul class="uk-navbar-nav">
		            @if (Auth::guest())
	                    <li><a href="{{ route('login') }}">Login</a></li>
	                    <li><a href="{{ route('register') }}">Register</a></li>
	                @else
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                            {{ Auth::user()->name }} <span class="caret"></span>
	                        </a>
	
	                        <ul class="dropdown-menu" role="menu">
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
	                        </ul>
	                    </li>
	                @endif
		        </ul>
	
		    </div>
	</nav>
</div>