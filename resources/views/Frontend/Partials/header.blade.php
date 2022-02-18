




    <!-- ========================= header start ========================= -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/frontend/images/logo/logo.png')}}" alt="Logo"></a>
{{--                        <img src="{{asset('assets/frontend/images/new-year-2022.gif')}}" width="200px" height="100px">--}}
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('home') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
                                </li>



                                <li class="nav-item">
                                    <a class="page-scroll dd-menu active collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                       data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">IT Inventory</a>
                                    <ul class="sub-menu collapse" id="submenu-1-1">
                                        <li class="nav-item active"><a href="{{ route('computer.user') }}">Computer User</a></li>
                                        <li class="nav-item"><a href="{{ route('frontend.pabx.index') }}">PABX User</a></li>
                                        <li class="nav-item"><a href="{{ route('faceid.index') }}">FaceId Machine</a></li>
                                        <li class="nav-item"><a href="{{ route('router.index') }}">Router</a></li>
                                        <li class="nav-item"><a href="{{ route('switch.index') }}">Switch</a></li>
                                        <li class="nav-item"><a href="{{ route('printer.index') }}">Printer</a></li>
                                        <li class="nav-item"><a href="{{ route('scanner.index') }}">Scanner</a></li>
                                        <li class="nav-item"><a href="{{ route('cc-camera') }}">CC Camera</a></li>
                                        <li class="nav-item"><a href="{{ route('toner.status') }}">Toner Status</a></li>
                                        <li class="nav-item"><a class="page-scroll" href="{{ route('rfid.index') }}">Rfid</a></li>
                                        <li class="nav-item"><a href="#0">IT Policy</a></li>
                                    </ul>
                                </li>




                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-2"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Item</a>

                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="{{ route('received.goods') }}">Received Item</a></li>
                                        <li class="nav-item"><a href="{{ route('sent.items') }}">Sent Item</a></li>
                                        <li class="nav-item"><a href="{{ route('wastage.index') }}">Wastage Records</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('requisition.index') }}">Requisition</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{route('sewing.home')}}">S.Machine</a>
                                </li>



                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('kpi.home') }}">KPI</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Public </a>

                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a class="page-scroll" href="{{ route('naz.email.list') }}">Email IDs</a></li>
                                        <li class="nav-item"><a class="page-scroll" href="{{ route('nazdeptheads.index') }}">Dept Heads Group </a></li>

                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                       data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                       aria-controls="navbarSupportedContent" aria-expanded="false"
                                       aria-label="Toggle navigation">Request </a>

                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="{{ route('new.mail.form.create') }}">Email ID</a></li>
                                        <li class="nav-item"><a href="{{ route('comp.request.create') }}">Computer/Laptop</a></li>

                                    </ul>
                                </li>




                                @if(auth()->user())
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                           data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false"
                                           aria-label="Toggle navigation"><i class="fa fa-user fa-lg"></i> </a>



                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li><a class="dropdown-item" href="{{ route('profile') }}"> Hi {{auth()->user()->name}}!</a></li>

                                            <li class="divider"></li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>

                                        </ul>
                                    </li>
                                @endif


                            </ul>

                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </header>

    <!-- ========================= header end ========================= -->
