<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
<div class="sl-sideleft">
  <div class="input-group input-group-search">
	<input type="search" name="search" class="form-control" placeholder="Search">
	<span class="input-group-btn">
	  <button class="btn"><i class="fa fa-search"></i></button>
	</span><!-- input-group-btn -->
  </div><!-- input-group -->

  <label class="sidebar-label">Navigation</label>
  <div class="sl-sideleft-menu">
	<a href="{{ url('dashboard') }}" class="sl-menu-link active">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
		<span class="menu-item-label">Dashboard</span>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<a href="{{ url('dashboard/settings/update/page') }}" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
		<span class="menu-item-label">Settings</span>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<a href="{{ url('dashboard/about/update/page') }}" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
		<span class="menu-item-label">About</span>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
		<span class="menu-item-label">Category</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/category/insert/page') }}" class="nav-link">Insert</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/category/loop') }}" class="nav-link">Loop</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
		<span class="menu-item-label">Slider</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/slider/insert/page') }}" class="nav-link">Insert</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/slider/loop') }}" class="nav-link">Loop</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
		<span class="menu-item-label">Customer</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/customer/insert/page') }}" class="nav-link">Insert</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/customer/loop') }}" class="nav-link">Loop</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
		<span class="menu-item-label">Gallery</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/gallery/insert/page') }}" class="nav-link">Insert</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/gallery/loop') }}" class="nav-link">Loop</a></li>
	</ul>
  </div><!-- sl-sideleft-menu -->

  <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->