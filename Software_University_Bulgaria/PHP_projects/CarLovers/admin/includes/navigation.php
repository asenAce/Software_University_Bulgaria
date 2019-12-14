
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Cars CMS Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              <li><a href="../index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
						<?php 
							if($_SESSION['admin_username']){
									$theAdmin=$_SESSION['admin_username'];
									echo $theAdmin;
								} 
						?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-in"></i>Statistics</a>
                        </li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="posts" class="collapse">
                        <li>
                          <a href="view_all_posts.php">View All Posts</a>
                        </li>
                        <li>
                          <a href="add_post.php">Create a Post</a> <!-- href="add_post.php?source=add_post" -->
                        </li>
                      </ul>
                    </li>
                    <li>
  <a href="javascript:;" data-toggle="collapse" data-target="#category"><i class="fa fa-fw fa-arrows-v"></i>Categories<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="category" class="collapse">
                            <li>
                                <a href="view_all_categories.php">View All Categories</a>
                            </li>
                            <li>
                                <a href="categories.php">Create a Category</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#admins"><i class="fa fa-fw fa-arrows-v"></i> Admins <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="admins" class="collapse">
                            <li>
                                <a href="viewAdmin.php">View All Admins</a>
                            </li>
                            <li>
                                <a href="addAdmin.php">Create an Admin</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>
                                <a href="view_all_users.php">View All Users</a>
                            </li>
                            <li>
                                <a href="addUser.php">Create an User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#comments"><i class="fa fa-fw fa-arrows-v"></i> Comments <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="comments" class="collapse">
                            <li>
                                <a href="view_all_comments.php">View All Comments</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#photos"><i class="fa fa-fw fa-arrows-v"></i>Photos<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="photos" class="collapse">
                            <li>
                                <a href="view_all_photos.php">View All Photos</a>
                            </li>
                            <li>
                                <a href="add_photos.php">Create an Photos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>