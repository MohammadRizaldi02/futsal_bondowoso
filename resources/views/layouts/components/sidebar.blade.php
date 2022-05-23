<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="menu-title">General</li><!-- /.menu-title -->
            <li class="">
                <a href="#"><i class="menu-icon fa fa-table"></i>Report </a>
            </li>
            <li class="">
                <a href="/area"><i class="menu-icon fa fa-table"></i>Area/Lapangan </a>
            </li>
            <li class="">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="menu-icon fa fa-sign-out"></i>Logout </a>
            </li>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </ul>
    </div><!-- /.navbar-collapse -->
