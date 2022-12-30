<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: auth-login.php");
	}
	include "includes/head.php";
	include "includes/sidebar.php";

	include 'database/config2.php';

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Todo List</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Write down your activities for today</h5>
					</div>
					<div class="card-body">

                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">My Profile Details</h5>
                                </div>
                                <div class="card-body text-center">
                                    <img src="img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                                    <h5 class="card-title mb-0"><?php echo $row['member_name']?></h5>
                                    <div class="text-muted mb-2"><?php echo $row['position']?></div>

                                    <div>
                                        <a class="btn btn-success btn-sm" href="#">Active</a>
                                        
                                        <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                            <div class="position-relative btn btn-warning btn-sm">
                                                <i class="align-middle" data-feather="message-square"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                            <div class="dropdown-menu-header">
                                                <div class="position-relative">
                                                    Write down your activity
                                                </div>
                                            </div>
                                            <form action="" method="GET">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <div class="row g-0 align-items-center">
                                                            <div class="col-2">
                                                                <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                                            </div>
                                                            <div class="col-10 ps-2">
                                                                <div class="text-dark"><i><small>Typing...</small></i></div>
                                                                <textarea name="activity" id="" cols="30" rows="3" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-menu-footer">
                                                    <button type="submit" class="btn btn-success"><span data-feather="send"></span> Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">Hobbies</h5>
                                    <a href="#" class="badge bg-primary me-1 my-1"><?php echo $row['hobbies']?></a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">About</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#"><?php echo $row['country']?></a></li>

                                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">Biazo</a></li>
                                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#"><?php echo $row['address']?></a></li>
                                    </ul>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                   
                                </div>
                            </div>
                        </div>

                        <!--div class="col-md-8 col-xl-9">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Activities</h5>
                                </div>
                                <div class="card-body h-100">

                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Vanessa Tucker">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">5m ago</small>
                                            <strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br />
                                            <small class="text-muted">Today 7:51 pm</small><br />

                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">30m ago</small>
                                            <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br />
                                            <small class="text-muted">Today 7:21 pm</small>

                                            <div class="border text-sm text-muted p-2 mt-1">
                                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                                                pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                                            </div>

                                            <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">1d ago</small>
                                            <strong>William Harris</strong> started following <strong>Christina Mason</strong><br />
                                            <small class="text-muted">Yesterday 3:12 pm</small>

                                            <div class="d-flex align-items-start mt-1">
                                                <a class="pe-3" href="#">
                                                    <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                                                </a>
                                                <div class="flex-grow-1">
                                                    <div class="border text-sm text-muted p-2 mt-1">
                                                        Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-primary">Load more</a>
                                    </div>
                                </div>
                            </div>
                        </div-->
                    </div>

					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
