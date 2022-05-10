<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
            </li>
            <li class="menu-title">General</li><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Schedule</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-id-badge"></i><a href="/schedule">Area</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Laporan</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="tables-basic.html">Laporan Pendapatan</a></li>
                    <li><i class="fa fa-table"></i><a href="tables-data.html">Laporan Pemesanan</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="menu-icon fa fa-user"></i>
                    Karyawan</a>
            </li>
            <li class="">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="menu-icon fa fa-sign-out"></i>Logout </a>
            </li>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </ul>
    </div><!-- /.navbar-collapse -->
