<nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">
	<button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle"> <i class="fa fa-bars"></i>
	</button>
	<img src="{{ asset('img/lavas.svg') }}" />
	<ul class="ml-auto navbar-nav">
		<li class="mx-1 nav-item p-3">
			<a href="{{ route('home') }}" title="view website">
				<i class="fab fa-internet-explorer text-info"></i>
			</a>
		</li>
		<li class="mx-1 nav-item p-3">
			<a href="https://www.youtube.com/channel/UCIBWTgOXH5oa2YlbfpO7QLQ" target="_blank" title="Subscribe now"> <i class="fab fa-youtube text-danger"></i>
			</a>
		</li>
		<li class="mx-1 nav-item p-3">
			<a href="https://fb.com/mesinkasircomplete" target="_blank" title="be fans"> <i class="fab fa-facebook"></i>
			</a>
		</li>
		<li class="mx-1 nav-item p-3">
			<a href="https://github.com/mesinkasir/lavablog" target="_blank" title="Star Repo">
				<i class="fab fa-github text-dark"></i>
			</a>
		</li>
		<div class="topbar-divider d-none d-sm-block"></div>
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 text-gray-600 d-none d-lg-inline small">{{ Auth::user()->name }}</span>
				<img class="img-profile rounded-circle" width="80" src="https://bstp.sourceforge.io/voc.jpg">
			</a>
			<div class="shadow dropdown-menu dropdown-menu-right animated--grow-in text-center" aria-labelledby="userDropdown">
				<div class="dropdown-divider"></div>
				<a class="dropdown-item bg-danger p-1 text-white" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-power-off"></i>
					Log Out</a>
			</div>
		</li>
	</ul>
</nav>