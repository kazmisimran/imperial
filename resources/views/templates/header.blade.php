



<!--==========================

Header Section
============================-->
<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <a href="#hero"><img src="{{asset('img/logo.png')}}" alt="" title="" /></img></a>
      <!-- Uncomment below if you prefer to use a text image -->
      <!--<h1><a href="#hero">Header 1</a></h1>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="#hero">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#team">Team</a></li>
        <li class="menu-has-children"><a href="">Drop Down <i class="fas fa-caret-down"></i> </a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="menu-has-children"><a href="#">Drop Down 2 <i class="fas fa-caret-down"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
            <li><a href="#">Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="{{route('admin.index')}}">Admin</a></li>

      </ul>
    </nav>
    <!-- #nav-menu-container -->
  </div>
</header>
<!-- #header -->
