<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
        <div class="pull-left info">
          <p>{{Auth::user()->firstname}}</p>
        </div>
      </div>
      <ul class="sidebar-menu">
        @if (Auth::user()->user_type == "admin")
          <li>
            <a href="{{route('admin.showProduct')}}">
              <i class="fa fa-th"></i> <span>all Products</span>
            </a>
          </li>
          <li class="treeview">
            <a href="{{route('admin.showUser')}}">
              <i class="fa fa-pie-chart"></i>
              <span>all users</span>
            </a>
          </li>   
          <li class="treeview">
            <a href="{{route('admin.addUser')}}">
              <i class="fa fa-pie-chart"></i>
              <span>add user</span>
            </a>
          </li>   
          <li class="treeview">
            <a href="{{route('admin.addProduct')}}">
              <i class="fa fa-pie-chart"></i>
              <span>add product</span>
            </a>
          </li>   
        @endif
        <li class="treeview">
          <a href="{{ route('changePassword')}}">
            <i class="fa fa-files-o"></i>
            <span>update password</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('Product.index',['user'=>Auth::user()->id])}}">
            <i class="fa fa-pie-chart"></i>
            <span>user products</span>
          </a>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  