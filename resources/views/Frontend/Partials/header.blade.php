<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-themers">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="{{ route('home') }}"><img src="{{asset('assets/frontend/images/logo.png')}}" alt="logo"></a>
			  </div>

			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-themers navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('computer.user') }}">Computer Users</a></li>
					<li><a href="#feature">Incoming </a></li>
					<li><a href="#screenshot">Outgoing</a></li>
					<li><a href="{{ route('cc-camera') }}">Camera List</a></li>
					<li><a href="#clients">Questions</a></li>
					<li><a href="{{ route('kpi.home') }}">KPI Link</a></li>


                        @if(auth()->user())

                        <li><a href="{{ route('profile') }}" class="btn-primary app-store">
                            <i class="fa fa-user"></i> <span>Profile</span> </a></li>
                            @endif

				</ul>
			  </div>
		</div>
	</nav>
</div>
