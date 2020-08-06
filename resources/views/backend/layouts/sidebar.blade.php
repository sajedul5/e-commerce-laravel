@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp


<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    @if(Auth::user()->role=='admin')
    <li class="nav-item has-treeview  {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage User
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('users.view')}}" class="nav-link {{($route=='/users.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Users</p>
          </a>
        </li>
      </ul>
    </li>
    @endif
    <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Profile
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.view')}}" class="nav-link {{($route=='/profiles.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Your Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='/profiles.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Change Password</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview  {{($prefix=='/logos')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Logo
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('logos.view')}}" class="nav-link {{($route=='/logos.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Logos</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview  {{($prefix=='/sliders')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Slider
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('sliders.view')}}" class="nav-link {{($route=='/sliders.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Slider</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/video')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Video
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('video.view')}}" class="nav-link {{($route=='/video.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Video</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/about')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage About
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('about.view')}}" class="nav-link {{($route=='/about.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View About Us</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/contact')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Contact
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('contact.view')}}" class="nav-link {{($route=='/contact.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Contact Us</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('contact.message')}}" class="nav-link {{($route=='/contact.message')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Message</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview  {{($prefix=='/category')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Category
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('category.view')}}" class="nav-link {{($route=='/category.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Category</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/brand')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Brand
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('brand.view')}}" class="nav-link {{($route=='/brand.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Brand</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview  {{($prefix=='/color')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Color
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('color.view')}}" class="nav-link {{($route=='/color.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Color</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/size')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Size
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('size.view')}}" class="nav-link {{($route=='/size.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Size</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/product')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Product
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('product.view')}}" class="nav-link {{($route=='/product.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Product</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/customer')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Customer
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('customer.view')}}" class="nav-link {{($route=='/customer.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Customer</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('customer.draft.view')}}" class="nav-link {{($route=='/customer.draft.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Draft Customer</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/customer')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Orders
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('order.pending.list')}}" class="nav-link {{($route=='/order.approve.list')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Pending Orders</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('order.approve.list')}}" class="nav-link {{($route=='/order.approve.list')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Approve Orders </p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
