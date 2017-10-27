<!-- sidebar menu: : style can be found in sidebar.less -->
<ul id="responsive-menu" class="sidebar-menu">
    <li class="header">MENÚ</li>
    <li id="treeview-dashboard" class="treeview">
        <a href="{{ url('/admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li id="treeview-dashboard" class="treeview">
        <a href="{{ url('/admin')}}">
            <i class="fa fa-desktop"></i> <span>Item Simple</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-area-chart"></i> <span>Item List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Sub Item 1</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sub Item 1</a></li>
        </ul>
    </li>
</ul>