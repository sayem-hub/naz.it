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
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">IT Inventory <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item active" href="{{ route('computer.user') }}">Computer Users</a></li>
                            <li><a class="dropdown-item active" href="{{ route('faceid.index') }}">FaceID Machine</a></li>
                            <li><a href="#">Wireless Router</a></li>
                            <li><a href="#">Printer</a></li>
                            <li><a href="#">Scanner</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Sewing Machine</a></li>

                        </ul>
                    </li>

					<li><a href="{{ route('received.goods') }}">Received Item </a></li>
					<li><a href="{{ route('sent.items') }}">Sent Item</a></li>
					<li><a href="{{ route('cc-camera') }}">Camera List</a></li>
					<li><a href="#clients">Questions</a></li>
					<li><a href="{{ route('kpi.home') }}">KPI Link</a></li>


                    @if(auth()->user())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span
                                class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="{{ route('profile') }}"> Profile</a></li>

                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" >Logout</a></li>

                        </ul>
                    </li>
                @endif


                    {{-- @if(auth()->user())
                    <li><a href="{{ route('profile') }}" class="btn-primary app-store">
                    <i class="fa fa-user"></i> <span>Profile</span> </a></li>
                    @endif --}}



				</ul>
			  </div>
		</div>
	</nav>
</div>
