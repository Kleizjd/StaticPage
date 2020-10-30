	<nav class="navbar top-navbar navbar-expand-md navbar-dark">
		<div class="navbar-header">
			<a class="navbar-brand" href="./">
				<span>
					<!-- <img src="../../public/img/favicon/favicon.ico" alt="ingesoftware" height="50" width="200"> -->
					<img src="../../public/img2/Gaming.jpg" alt="ingesoftware" height="50" width="200">
				</span>
			</a>
		</div>


		<div class="navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
				<!-- ============================================================== -->
				<!-- Comment -->
				<!-- ============================================================== -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
						<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
					</a>
					<div class="dropdown-menu mailbox animated bounceInDown">
						<span class="with-arrow"><span class="bg-primary"></span></span>
						<ul>
							<li>
								<div class="drop-title bg-primary text-white">
									<h4 class="m-b-0 m-t-5">4 New</h4>
									<span class="font-light">Notifications</span>
								</div>
							</li>
							<li>
								<div class="message-center">
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
										<div class="mail-contnet">
											<h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
										<div class="mail-contnet">
											<h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
										<div class="mail-contnet">
											<h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
										<div class="mail-contnet">
											<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<a class="nav-link text-center m-b-5" href="javascript:void(0);"> Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
					</div>
				</li>

				<li class="nav-item search-box">
					<a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
						<i class="fas fa-arrow-down"></i>
					</a>
					<form class="app-search" id="form_searchEmail">
						<a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
							<i class="fas fa-arrow-up"></i>
						</a>
						<select name="correo[]" id="correo" class="select2 form-control" title="buscar"></select>
						<!-- <input type="text" class="form-control" placeholder="Search &amp; enter"> -->
						<!-- <a class="srh-btn">
	                        <i class="fa fa-times"></i>
	                    </a> -->
						<button class="btn btn-success btn-xs my-2 my-sm-0  mr-sm-2" type="submit">
							<i class="fa fa-search"></i></button>
					</form>
				</li>
			</ul>


			<ul class="navbar-nav my-lg-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../public/img/svg/upload-user.svg" alt="user" id="img_profile" class="img-circle" width="30"></a>
					<div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
						<span class="with-arrow"><span class="bg-primary"></span></span>
						<div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
							<div class=""><img src="../../public/img/svg/upload-user.svg" alt="user" id="img_profile_herence" class="img-circle" width="60"></div>
							<div class="m-l-10">
								<h4 class="m-b-0"><?= $_SESSION['nombre_completo']; ?></h4>
								<p class=" m-b-0">
									<!-- <a href="mailto:mailto:example@example.org">correo</a> -->
									<a class="eml-protected" href="#"></a>
									<!-- <a class="eml-protected" href="#">9cf9e4fdf1ecf0f9dcf9e4fdf1ecf0f9b2f3eefb</a> -->
							</div>
						</div>
						<a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> </a>
						<a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> </a>
						<a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> </a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void(0)" id="viewAcount"><i class="ti-settings m-r-5 m-l-5"></i>Configuracion</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off m-r-5 m-l-5"></i> Salir</a>
						<div class="dropdown-divider"></div>
						<div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">Ver Perfil</a></div>
					</div>
				</li>
				<!-- ============================================================== -->
				<!-- User profile and search -->
				<!-- ============================================================== -->
				<li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>


			</ul>
		</div>
	</nav>
	<script>
		$(document).ready(function() {
			$(".select2").select2({
				width: "300px",
				theme: "classic"

			});

			$(function imageHerence() {
				$("#img_profile").click(function() {
					$("#img_profile_herence").attr("src", $("#img_profile").attr("src"));
				});
			});
			$(function selectEmails() {
				$.ajax({
					url: "../../app/lib/ajax.php",
					method: "post",
					data: {
						module: "Survey",
						controller: "Survey",
						nameFunction: "selectEmail"
					},
				}).done((res) => {
					$("#correo").html(res);
				});
			});

			// $(function notificationMeeting() {

			// 	$.ajax({
			// 		url: "../../app/lib/ajax.php",
			// 		method: "post",
			// 		data: {
			// 			module: "Meeting",
			// 			controller: "Meeting",
			// 			nameFunction: "notificationMeeting",
			// 			userId: $("#userId").val(),
			// 		},
			// 	}).done((res) => {
			// 		// $("#correo").html(res);
			// 	});
			// });
			$(function loadImageUser() {
				$.ajax({
					url: '../../app/lib/ajax.php',
					method: "post",
					dataType: "JSON",
					// method: $(this).attr('method'),
					data: {
						module: "Session",
						controller: "Session",
						nameFunction: "loadImageUser",
						userId: $("#userId").val()
					},
				}).done((res) => {
					$("#img_profile").attr("src", "../../views/Admin/Files/" + res.address);
				});
			});
			
		});
	</script>
	<!-- ============================================================== -->
	<!-- Right sidebar -->
	<!-- ============================================================== -->
	<!-- .right-sidebar -->
	<div class="right-sidebar">
		<div class="slimscrollright">
			<div class="rpanel-title"> Panel de Servicio <span><i class="ti-close right-side-toggle"></i></span> </div>
			<div class="r-panel-body">
				<ul id="themecolors" class="m-t-20">
					<li><b>Con barra lateral Clara</b></li>
					<li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
					<li class="d-block m-t-30"><b>Con barra lateral Oscura</b></li>
					<li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
					<li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
				</ul>
				<!-- <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../../public/img/svg/upload-user.svg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul> -->
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Right sidebar -->
	<!-- ============================================================== -->