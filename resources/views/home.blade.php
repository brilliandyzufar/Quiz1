@extends('layouts.app')

@section('content')
<div class="menu">
		<div class="container clearfix">

			<div id="logo" class="grid_3">
				<img src="assets/images/logo.png">
			</div>

			<div id="nav" class="grid_9 omega">
				<ul class="navigation">
					<li data-slide="1">Home</li>
					<li data-slide="2">Services</li>
					<li data-slide="3">About</li>
					<li data-slide="4">Team</li>
					<li data-slide="5">Portfolio</li>
					<li data-slide="6">Blog</li>
					<li data-slide="8">Contact</li>
				</ul>
			</div>

		</div>
	</div>


	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<center>
			<div id="content" class="grid_12">
				<h1>Welcome</h1>
				<h2>Sharwadarma  Creative Onepage Template</h2>
				<p>Remember that this is a BETA version. This is my first framework so if you see any issue please.</p>
				<p>
					<a href="" class="btn btn-success btn-lg">Learn more</a>
					<a href="" class="btn btn-default btn-lg">Download now</a>
				</p>
			</div>
			</center>
		</div>
	</div>



	<div class="slide" id="services" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
			<div>
				<div class="grid_3"><i class="fa fa-cogs"></i><br><h3>Lorem ipsum dolor sit</h3><br> amet, consectetur adipiscing elit. Mauris ac enim felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra aliquet sem at convallis.</div>
				<div class="grid_3"><i class="fa fa-camera-retro"></i><br><h3>Lorem ipsum dolor sit</h3><br> amet, consectetur adipiscing elit. Mauris ac enim felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra aliquet sem at convallis.</div>
				<div class="grid_3"><i class="fa fa-rocket"></i><br><h3>Lorem ipsum dolor sit</h3><br> amet, consectetur adipiscing elit. Mauris ac enim felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra aliquet sem at convallis.</div>
				<div class="grid_3 omega"><i class="fa fa-dashboard"></i><br><h3>Lorem ipsum dolor sit</h3><br> amet, consectetur adipiscing elit. Mauris ac enim felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra aliquet sem at convallis.</div>
			</div>

		</div>
	</div>



	<div class="slide" id="about" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>About us</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor. </p>
			<div>
				<div class="grid_6">
					<img src="assets/images/mockup.png" width="100%" height="100%">
				</div>
				<div class="grid_6 omega">
					<p>Morbi ornare imperdiet tellus sed rutrum. Quisque eu molestie neque. Vivamus at feugiat augue. Aliquam tristique tristique dolor, ut sodales sem ornare volutpat. Sed faucibus porta placerat. Sed nec dolor egestas, tristique lacus eu, adipiscing libero. Praesent et fermentum mauris, nec facilisis erat.</p>
					<p>
					Proin vitae leo et diam bibendum condimentum. Aenean pretium sapien ut sapien ornare, nec tincidunt libero posuere. Ut accumsan viverra dignissim. Maecenas nec interdum quam, vitae ornare orci. Morbi eu tellus sed dolor cursus aliquam. Phasellus eu lectus pulvinar, convallis ligula in, tincidunt elit.</p>
					<p>
					<a href="" class="btn btn-success btn-lg">Learn more</a>
					<a href="" class="btn btn-default btn-lg">Download now</a>
					</p>
				</div>
			</div>

		</div>
	</div>



	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<center>
			<h2>Meet our team</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor. </p><br>
			<div class="grid_3">
				<img src="assets/images/team/1.jpg" width="150px" height="150px" class="hexagon">
				<h4>Lachlan Saunderson</h4>
				<p>Managing Director</p>
				<i class="fa fa-facebook"></i>&nbsp; 
				<i class="fa fa-twitter"></i>&nbsp; 
				<i class="fa fa-google-plus"></i>&nbsp; 
				<i class="fa fa-instagram"></i>&nbsp; 
				<i class="fa fa-dribbble"></i>&nbsp; 
				<i class="fa fa-linkedin"></i>
			</div>
			<div class="grid_3">
				<img src="assets/images/team/2.jpg" width="150px" height="150px" class="hexagon">
				<h4>Victoria Brewer</h4>
				<p>Techincal Director</p>
				<i class="fa fa-facebook"></i>&nbsp; <i class="fa fa-twitter"></i>&nbsp; <i class="fa fa-google-plus"></i>&nbsp; <i class="fa fa-instagram"></i>&nbsp; <i class="fa fa-dribbble"></i>&nbsp; <i class="fa fa-linkedin"></i>
			</div>
			<div class="grid_3">
				<img src="assets/images/team/3.jpg" width="150px" height="150px" class="hexagon">
				<h4>Timothy Patterson</h4>
				<p>Web Developer</p>
				<i class="fa fa-facebook"></i>&nbsp; <i class="fa fa-twitter"></i>&nbsp; <i class="fa fa-google-plus"></i>&nbsp; <i class="fa fa-instagram"></i>&nbsp; <i class="fa fa-dribbble"></i>&nbsp; <i class="fa fa-linkedin"></i>
			</div>
			<div class="grid_3 omega">
				<img src="assets/images/team/4.jpg" width="150px" height="150px" class="hexagon">
				<h4>Shirley Kelly</h4>
				<p>Web Designer</p>
				<i class="fa fa-facebook"></i>&nbsp; <i class="fa fa-twitter"></i>&nbsp; <i class="fa fa-google-plus"></i>&nbsp; <i class="fa fa-instagram"></i>&nbsp; <i class="fa fa-dribbble"></i>&nbsp; <i class="fa fa-linkedin"></i>
			</div>
			</center>
		</div>
	</div>
	<div class="slide" id="skill" data-slide="4" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Our skills</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor. </p>
			<div>
				<div class="grid_6">
					<p>HTML 5</p>
					<div class="progress progress-striped active pull-r">
  						<div class="progress-bar progress-bar-success pull-right"  role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
    						<span class="sr-only">85%</span>
  						</div>
					</div>
					<p>CSS 3</p>
					<div class="progress progress-striped active">
  						<div class="progress-bar progress-bar-success pull-right"  role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
    						<span class="sr-only">90%</span>
  						</div>
					</div>
					<p>PHP & MySQL</p>
					<div class="progress progress-striped active">
  						<div class="progress-bar progress-bar-success pull-right"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    						<span class="sr-only">80%</span>
  						</div>
					</div>
				</div>
				<div class="grid_6 omega">
					<p>Photoshop</p>
					<div class="progress progress-striped active">
  						<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
    						<span class="sr-only">95%</span>
  						</div>
					</div>
					<p>Illustrator</p>
					<div class="progress progress-striped active">
  						<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
    						<span class="sr-only">75%</span>
  						</div>
					</div>
					<p>Muse</p>
					<div class="progress progress-striped active">
  						<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
    						<span class="sr-only">85%</span>
  						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="slide" id="portfolio" data-slide="5" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Our latest projects</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor. </p>
			<div>
				

				<div class="grid_3">
					<img src="assets/images/thumb/1.jpg">
				</div>
				<div class="grid_3">
					<img src="assets/images/thumb/2.jpg">
				</div>
				<div class="grid_3">
					<img src="assets/images/thumb/3.jpg">
				</div>
				<div class="grid_3 omega">
					<img src="assets/images/thumb/4.jpg">
				</div>
				<div class="grid_3">
					<img src="assets/images/thumb/5.jpg">
				</div>
				<div class="grid_3">
					<img src="assets/images/thumb/9.jpg">
				</div>
				<div class="grid_3">
					<img src="assets/images/thumb/7.jpg">
				</div>
				<div class="grid_3 omega">
					<img src="assets/images/thumb/8.jpg">
				</div>
				</div>
				</div>
			</div>

		</div>
	</div>

	<div class="slide" id="client" data-slide="5" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Our lovely clients</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor. </p>
			<div>
				
				<div class="grid_3"><img src="assets/images/client/cc.png" width="100%" height="100%"></div>
				<div class="grid_3"><img src="assets/images/client/tf.png" width="100%" height="100%"></div>
				<div class="grid_3"><img src="assets/images/client/vh.png" width="100%" height="100%"></div>
				<div class="grid_3 omega"><img src="assets/images/client/gr.png" width="100%" height="100%"></div>
				
			</div>

		</div>
	</div>

	<div class="slide" id="testimonials" data-slide="5" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Our fermentum</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor.</p>
			<div class="grid_2"></div>
			<div class="grid_8">
				<img src="assets/images/mockup2.png" width="100%" height="100%" class="browsermockup">
			</div>
			<div class="grid_2"></div>
				

		</div>
	</div>

	<div class="slide" id="blogs" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Our latest blogs</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor. </p>
			<div>
				
				<div class="grid_4">
					<div class="thumbnail">
						<img src="assets/images/thumb/5.jpg" width="100%" height="100%">
							<div class="buttons">
								<center>
								<div class="inner-btn">
								<a href="" class="btn btn-success btn-lg"><i class="fa fa-share-square-o"></i></a>
								<a href="" class="btn btn-success btn-lg"><i class="fa fa-eye"></i></a>
								</div>
								</center>
							</div>
					</div>
					<div class="info">
						<h4> <a href="">Cras eget ligula id enim pulvinar ornare.</a></h4><div class="decor"></div>
						<p>Integer sed sem eu dolor egestas tempus. Etiam suscipit semper eleifend. Donec molestie accumsan leo, ac blandit urna. </p>
					</div><hr class="separate">
					<div class="author">
						<p class="pull-left">12 hours ago</p><p class="pull-right"><i class="fa fa-comment"></i> &nbsp;273&nbsp;&nbsp; <i class="fa fa-heart"></i> &nbsp;541&nbsp; </p>
					</div>
				</div>
				<div class="grid_4">
					<div class="thumbnail">
						<img src="assets/images/thumb/8.jpg" width="100%" height="100%">
							<div class="buttons">
								<center>
								<div class="inner-btn">
								<a href="" class="btn btn-success btn-lg"><i class="fa fa-share-square-o"></i></a>
								<a href="" class="btn btn-success btn-lg"><i class="fa fa-eye"></i></a>
								</div>
								</center>
							</div>
					</div>
					<div class="info">
						<h4>  <a href="">Donec molestie accumsan leo, ac blandit urna.</a></h4><div class="decor"></div>
						<p>Integer sed sem eu dolor egestas tempus. Etiam suscipit semper eleifend. Donec molestie accumsan leo, ac blandit urna. </p>
					</div><hr class="separate">
					<div class="author">
						<p class="pull-left">12 hours ago</p><p class="pull-right"><i class="fa fa-comment"></i> &nbsp;273&nbsp;&nbsp; <i class="fa fa-heart"></i> &nbsp;541&nbsp; </p>
					</div>
				</div>
				<div class="grid_4 omega">
					<div class="thumbnail">
						<img src="assets/images/thumb/9.jpg" width="100%" height="100%">
							<div class="buttons">
								<center>
								<div class="inner-btn">
								<a href="" class="btn btn-success btn-lg"><i class="fa fa-share-square-o"></i></a>
								<a href="" class="btn btn-success btn-lg"><i class="fa fa-eye"></i></a>
								</div>
								</center>
							</div>
					</div>
					<div class="info">
						<h4>  <a href="">Proin tellus augue, dictum malesuada tempus.</a></h4><div class="decor"></div>
						<p>Integer sed sem eu dolor egestas tempus. Etiam suscipit semper eleifend. Donec molestie accumsan leo, ac blandit urna. </p>
					</div><hr class="separate">
					<div class="author">
						<p class="pull-left">12 hours ago</p><p class="pull-right"><i class="fa fa-comment"></i> &nbsp;273&nbsp;&nbsp; <i class="fa fa-heart"></i> &nbsp;541&nbsp; </p>
					</div>
				</div>
				
			</div>

		</div>
	</div>

	<div class="slide" id="subscribe" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Subscribe newsletter</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor.</p>
			
                    <input type="text" class="form-control form-control-inverse" placeholder="your email address">

		</div>
	</div>

    
    <div class="slide" id="contact" data-slide="7" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Get in touch</h2>
			<p class="heading">Aenean sit amet quam quis ipsum fermentum vestibulum vitae ut ligula. Integer vel velit nulla. Integer at mauris bibendum magna eleifend tempor.</p>
			
                    <div class="grid_4">
                        <input type="text" class="form-control" placeholder="your name">
                    </div>
                    <div class="grid_4">
                        <input type="text" class="form-control" placeholder="subject">
                    </div>
                    <div class="grid_4 omega">
                        <input type="text" class="form-control" placeholder="your email address">
                    </div>
                    	<textarea class="form-control" rows="5" placeholder="your messages"></textarea>

		</div>
	</div>
@endsection
