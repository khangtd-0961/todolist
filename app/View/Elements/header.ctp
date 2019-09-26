<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color:black;" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black;" href="<?php echo $this->Html->url(array('controller' =>  'sinhviens' , 'action' => 'index' ));?>"> Sinh vien</a>

      </li>
		<li class="nav-item">
			<a class="nav-link" style="color:black;" href="<?php echo $this->Html->url(array('controller' =>  'users' , 'action' => 'index' ));?>"> User</a>

      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a href="#" style="color:chartreuse;">
    <?php echo $current_user['username'];?>
 <a href='<?php echo $this->webroot."users/logout";?>'>Logout</a></a>
  </div>
</nav>
