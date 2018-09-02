<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head itemscope>
	<title>Daxte.io</title>
	<!--<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">-->
	<link rel="stylesheet" type="text/css" href="offline/all.css">
	<link rel="stylesheet" type="text/css" href="offline/bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha256-Md8eaeo67OiouuXAi8t/Xpd8t2+IaJezATVTWbZqSOw=" crossorigin="anonymous" />-->
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo rand()?>">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700">
	<script src="offline/jquery.min.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>-->
	<script type="text/javascript" src="socket.io.js"></script>
	<script type="text/javascript" src="minicolors.js"></script>
	<script src="offline/bootstrap.min.js"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha256-xaF9RpdtRxzwYMWg4ldJoyPWqyDPCRD0Cv7YEEe6Ie8=" crossorigin="anonymous"></script>-->
</head>
<body>
	<div id="preroll" class="preroll"></div>
	<div class="app">
		<div id="overview">
			<div class="container">
				<nav class="navigation">
					<ul class="nav nav-tabs" role="tablist">
						<li>
							<a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="active show">
								<span>Home</span>
								<i class="fa fa-home"></i>
							</a>
						</li>
						<li>
							<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
								<span>Profile</span>
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
								<span>Settings</span>
								<i class="fa fa-cog"></i>
							</a>
						</li>
						<li>
							<a href="#theming" aria-controls="theming" role="tab" data-toggle="tab">
								<span>Theming</span>
								<i class="fa fa-paint-brush"></i>
							</a>
						</li>
						<li>
							<a href="#hotkeys" aria-controls="hotkeys" role="tab" data-toggle="tab">
								<span>HotKeys</span>
								<i class="far fa-keyboard"></i>
							</a>
						</li>
						<li>
							<a href="#info" aria-controls="info" role="tab" data-toggle="tab">
								<span>Info</span>
								<i class="fa fa-info-circle"></i>
							</a>
						</li>
					</ul>
				</nav>
				<div class="container-fluid menu">
					<div class="game-content">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="home">
								<div class="row">
									<div class="col-sm">
										<div class="advert-pane-center">
											<p class="text-muted font-weight-bold text-center">Advertisement</p>
											<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-1863951032999492" data-ad-slot="6306062943"></ins>
											<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
										</div>
										<div class="advert-mini">
											<p class="text-muted font-weight-bold text-center mb-1">Advertisement</p>
											<ins class="adsbygoogle" style="display:inline-block;width:180px;height:150px" data-ad-client="ca-pub-1863951032999492" data-ad-slot="7517632878"></ins>
											<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
										</div>					
									</div>
									<div class="col-sm">
										<div class="skin-preview">
											<div class="skin"></div>
										</div>
										<div class="inputs-container">
											<div class="input-group mb-2 team-group">
												<input type="text" name="team" class="form-control dark-input team" placeholder="Tag">
											</div>
											<div class="input-group mb-2 nick-group">
												<input type="text" name="nick" id="nick" class="form-control dark-input nick" placeholder="Nickname">
											</div>
											<div class="input-group mb-2 skin-group">
												<input type="text" name="skin-url" class="form-control dark-input skin-url" placeholder="Skin Url">
											</div>
										</div>
										<button class="btn btn-block btn-lg btn-primary play-button">Play</button>
										<button class="btn btn-block btn-lg btn-success spectate-button">Spectate</button>
										<button class="btn btn-block btn-lg btn-danger respawn-button">Respawn</button>
									</div>
									<div class="col-sm">
										<p class="text-center text-uppercase">Servers</p>
										<hr>
										<div class="servers"></div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<span>Email profile should be here.</span>
								<div class="row">
									<div class="col-sm">

									</div>
									
									<div class="col-sm">
									<?php 
									
									if(isset($_SESSION["user_email"])){?>
									<ul class="resp-tabs-list">
                                                  <li class="resp-tab-item" style="width:500px;" ><span>My Profile</span></li>
												  
												<h2 style=" font-family: cursive;">Email:  <?php echo $_SESSION["user_email"];?></h2>
												<h4 class="h2">Username: <?php echo $_SESSION["user_name"];?></h4>
                                     </ul>
									
									<a class="btn btn-block btn-lg btn-primary play-button"  href="logout.php">Logout</a>
									<?php }
									else{
										
									
									?>
									               <ul class="resp-tabs-list">
                                                  <li class="resp-tab-item"  onclick="myFunction()"><span>Login</span></li>
                                                  <li class="resp-tab-item"  onclick="myFunctionn()"><span>Sign Up</span></li>
                                                 </ul>
										
                                  <div class="swm-right-w3ls" id="login" >
					               <div class="errorr"><?php
                                     if(isset($_GET["class"])){
	                                     echo"<div class='".$_GET["class"]."' >".$_GET["e"]."</div>";
                                               }
                                             ?>
                                  </div>
                        <form action="login.php" method="post">
                           <div class="main">
                              <div class="icon-head-wthree">
                                 <h2>Login Here</h2>
                              </div>
							  	       <div class="inputs-container">

											<div class="input-group mb-2 nick-group">
												<input type="text" name="email"  class="form-control dark-input " placeholder="E-mail">
											</div>
											<div class="input-group mb-2 nick-group">
												<input type="text" name="password"  class="form-control dark-input " placeholder="Password">
											</div>
											<button name="submit" class="btn btn-block btn-lg btn-primary play-button">Login</button>
										</div>

                           </div>
                        </form>
                     </div>
					 
                     <div class="swm-left-w3ls" id="singup" style="display:none;">
                        <form action="singup.php" method="post">
                           <div class="main">
                              <div class="icon-head-wthree">
                                 <h2>SingUp Here</h2>
                              </div>
							  	       <div class="inputs-container">
											<div class="input-group mb-2 nick-group">
												<input type="text" name="username"  class="form-control dark-input" placeholder="Username">
											</div>
											<div class="input-group mb-2 nick-group">
												<input type="email" name="email"  class="form-control dark-input" placeholder="E-mail">
											</div>
											<div class="input-group mb-2 nick-group">
												<input type="password" name="password"  class="form-control dark-input" placeholder="Password">
											</div>
											<button name="signup" class="btn btn-block btn-lg btn-primary play-button">SignUp</button>
										</div>

                           </div>
                        </form>
                     </div>					 
									
									
									
									<?php }?>
									</div>

									<div class="col-sm">

									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="settings">
								<div class="row">
									<div class="col-md">
										<div class="firstSettings secondSettings"></div>
									</div>
									<div class="col-md">
										<div class="range-container">
											<div class="zoomSpeed"></div>
											<div class="borderSize"></div>
											<div class="nameMassScale"></div>
											<div class="delayAnimation"></div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="theming">
								<div class="theme-content">
									<div class="form-group">
										<label>Background Color</label>
										<input type="text" id="backgroundColor" class="minicolors form-control dark-input minicolors-input" data-position="bottom right">
									</div>
									<div class="form-group">
										<label>Border Color</label>
										<input type="text" id="borderColor" class="minicolors form-control dark-input minicolors-input" data-position="bottom right">
									</div>
									<div class="form-group">
										<label>Food Color</label>
										<input type="text" id="pelletColor" class="minicolors form-control dark-input minicolors-input" data-position="bottom right">
									</div>
									<div class="form-group">
										<label>Virus Color</label>
										<input type="text" id="virusColor" class="minicolors form-control dark-input minicolors-input" data-position="bottom right">
									</div>
									<div class="form-group">
										<label>Virus Border Color</label>
										<input type="text" id="virusStrokeColor" class="minicolors form-control dark-input minicolors-input" data-position="bottom right">
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="hotkeys">
								<div id="hotkeysoverlaycontent"></div>
								<div class="mt-4 text-center">
									<button class="btn text-uppercase btn-lg btn-primary button-hotkey-save">Save</button>
									<button class="btn text-uppercase btn-lg btn-danger button-hotkey-cancel">Cancel</button>
									<button class="btn text-uppercase btn-lg btn-warning button-hotkey-reset">Reset</button>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="info">
								<div class="credits">
									<div class="card">
										<img class="card-img-top" src="" alt="Daxte Game"></img>
										<div class="card-body">
											<h5 class="card-title text-center">Dante</h5>
											<p class="card-text">
												Dante es el fundador de este juego.
											</p>
											<div class="btn-group is-centered">
												<a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-youtube"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-instagram"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-discord"></i></a>
											</div>
										</div>
									</div>
									<div class="card">
										<img class="card-img-top" src="" alt="xAz developer"></img>
										<div class="card-body">
											<h5 class="card-title text-center">xAz</h5>
											<p class="card-text">
												xAz es uno de los developers de este juego.
											</p>
											<div class="btn-group is-centered">
												<a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-youtube"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-instagram"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-discord"></i></a>
											</div>
										</div>
									</div>
									<div class="card">
										<img class="card-img-top" src="" alt="xAz developer"></img>
										<div class="card-body">
											<h5 class="card-title text-center">Mike</h5>
											<p class="card-text">
												Mike es uno de los developers de este juego.
											</p>
											<div class="btn-group is-centered">
												<a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-youtube"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-instagram"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-discord"></i></a>
											</div>
										</div>
									</div>
									<div class="card">
										<img class="card-img-top" src="" alt="Shair developer"></img>
										<div class="card-body">
											<h5 class="card-title text-center">Shair</h5>
											<p class="card-text">
												Shair es uno de los developers de este juego.
											</p>
											<div class="btn-group is-centered">
												<a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-youtube"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-instagram"></i></a>
												<a href="#" class="btn btn-primary"><i class="fab fa-discord"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="hud">
			<div class="leaderboard"></div>
			<div class="stats"></div>
			<div class="chat"></div>
			<div class="chat-area">
				<input class="chat-input form-control dark-input" type="text" placeholder="Type your message...">
			</div>
			<div class="minimap-hud">
				<canvas id="minimapNode"></canvas>
				<canvas id="minimap"></canvas>
			</div>
		</div>
		<canvas id="canvas"></canvas>
	</div>
	<script src="app.js"></script>
	<script>
function myFunction() {
    var x = document.getElementById("singup");
	    var y = document.getElementById("login");
    if (y.style.display === "none") {
        y.style.display = "block";
		x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}
function myFunctionn() {
	    var x = document.getElementById("singup");
    var y = document.getElementById("login");
    if (x.style.display === "none") {
        x.style.display = "block";
		y.style.display = "none";
    } else {
        y.style.display = "none";
    }
}
	</script>
</body>
</html>