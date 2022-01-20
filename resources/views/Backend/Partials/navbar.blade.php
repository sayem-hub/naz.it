


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light">
    <div class="position-sticky ">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>

          <li class="nav-item">
              <a class="nav-link" href="{{route('nims.user.index')}}">
                  <span data-feather="users"></span>
                  Users
              </a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.computer')}}">
            <span data-feather="shopping-cart"></span>
            Computers
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Routers
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Switches
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Printers
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Scanners
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.incoming')}}">
            <span data-feather="users"></span>
            Incoming Goods
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.outgoing')}}">
            <span data-feather="users"></span>
            Outgoing Goods
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.ccam') }}">
                <span data-feather="users"></span>
                CC Camera List
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.questions')}}">
            <span data-feather="users"></span>
            Interview Questions
          </a>
        </li>



          <li class="nav-item">
              <a class="nav-link" href="{{ route('user.request') }}">
                  <span data-feather="bar-chart-2"></span>
                  User Request
              </a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('import.export') }}">
            <span data-feather="bar-chart-2"></span>
            Reports
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="layers"></span>
            Integrations
          </a>
        </li>
      </ul>

    </div>
  </nav>

