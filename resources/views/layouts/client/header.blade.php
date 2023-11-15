<header id="tg-header" class="tg-header tg-haslayout">
	<div class="tg-topbar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul class="tg-addnav">
						<li>
							<a href="javascript:void(0);">
								<i class="icon-envelope"></i>
								<em>Contact</em>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<i class="icon-question-circle"></i>
								<em>Help</em>
							</a>
						</li>
					</ul>
					<div class="dropdown tg-themedropdown tg-currencydropdown">
						<a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-earth"></i>
							<span>Currency</span>
						</a>
						<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
							<li>
								<a href="javascript:void(0);">
									<i>£</i>
									<span>British Pound</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i>$</i>
									<span>Us Dollar</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i>€</i>
									<span>Euro</span>
								</a>
							</li>
						</ul>
					</div>
					@guest
					<div class="tg-userlogin">
						<a href="{{route('login')}}"><button class="btn btn-success">Login</button></a>
					</div>
					@else
					<div class=" dropdown  tg-themedropdown tg-currencydropdown" style="float: right;">
						<a class="" href="" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img style="border-radius: 50%; width: 50px;" src="images/users/img-01.jpg" alt="image description">
							<span>Hi, {{ Auth::user()->name}}</span>
						</a>
						<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
							<li>
								<a href="{{route('profile')}}"><span>Thông tin cá nhân</span></a>
							</li>
							<li>
								<a href="{{route('logout')}}"><span>Đăng xuất</span></a>
							</li>
						</ul>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
	<div class="tg-middlecontainer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<strong class="tg-logo"><a href="index-2.html"><img src="images/logo.png" alt="company name here"></a></strong>
					<div class="tg-wishlistandcart">
						<div class="dropdown tg-themedropdown tg-wishlistdropdown">
							<a href="javascript:void(0);" id="tg-wishlisst" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="tg-themebadge">3</span>
								<i class="icon-heart"></i>
								<span>Wishlist</span>
							</a>
							<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-wishlisst">
								<div class="tg-description">
									<p>No products were added to the wishlist!</p>
								</div>
							</div>
						</div>
						<div class="dropdown tg-themedropdown tg-minicartdropdown">
							<a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="tg-themebadge">3</span>
								<i class="icon-cart"></i>
								<span>$123.00</span>
							</a>
							<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
								<div class="tg-minicartbody">
									<div class="tg-minicarproduct">
										<figure>
											<img src="images/products/img-01.jpg" alt="image description">

										</figure>
										<div class="tg-minicarproductdata">
											<h5><a href="javascript:void(0);">Our State Fair Is A Great Function</a></h5>
											<h6><a href="javascript:void(0);">$ 12.15</a></h6>
										</div>
									</div>
									<div class="tg-minicarproduct">
										<figure>
											<img src="images/products/img-02.jpg" alt="image description">

										</figure>
										<div class="tg-minicarproductdata">
											<h5><a href="javascript:void(0);">Bring Me To Light</a></h5>
											<h6><a href="javascript:void(0);">$ 12.15</a></h6>
										</div>
									</div>
									<div class="tg-minicarproduct">
										<figure>
											<img src="images/products/img-03.jpg" alt="image description">

										</figure>
										<div class="tg-minicarproductdata">
											<h5><a href="javascript:void(0);">Have Faith In Your Soul</a></h5>
											<h6><a href="javascript:void(0);">$ 12.15</a></h6>
										</div>
									</div>
								</div>
								<div class="tg-minicartfoot">
									<a class="tg-btnemptycart" href="javascript:void(0);">
										<i class="fa fa-trash-o"></i>
										<span>Clear Your Cart</span>
									</a>
									<span class="tg-subtotal">Subtotal: <strong>35.78</strong></span>
									<div class="tg-btns">
										<a class="tg-btn tg-active" href="javascript:void(0);">View Cart</a>
										<a class="tg-btn" href="javascript:void(0);">Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tg-searchbox">
						<form class="tg-formtheme tg-formsearch">
							<fieldset>
								<input type="text" name="search" class="typeahead form-control" placeholder="Search by title, author, keyword, ISBN...">
								<button type="submit"><i class="icon-magnifier"></i></button>
							</fieldset>
							<a href="javascript:void(0);">+ Advanced Search</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tg-navigationarea">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<nav id="tg-nav" class="tg-nav">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
							<ul>
								<li class="menu-item-has-children menu-item-has-mega-menu">
									<a href="javascript:void(0);">All Categories</a>
									<div class="mega-menu">
										<ul class="tg-themetabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#artandphotography" aria-controls="artandphotography" role="tab" data-toggle="tab">Art &amp; Photography</a>
											</li>
											<li role="presentation">
												<a href="#biography" aria-controls="biography" role="tab" data-toggle="tab">Biography</a>
											</li>
											<li role="presentation">
												<a href="#childrensbook" aria-controls="childrensbook" role="tab" data-toggle="tab">Children’s Book</a>
											</li>
											<li role="presentation">
												<a href="#craftandhobbies" aria-controls="craftandhobbies" role="tab" data-toggle="tab">Craft &amp; Hobbies</a>
											</li>
											<li role="presentation">
												<a href="#crimethriller" aria-controls="crimethriller" role="tab" data-toggle="tab">Crime &amp; Thriller</a>
											</li>
											<li role="presentation">
												<a href="#fantasyhorror" aria-controls="fantasyhorror" role="tab" data-toggle="tab">Fantasy &amp; Horror</a>
											</li>
											<li role="presentation">
												<a href="#fiction" aria-controls="fiction" role="tab" data-toggle="tab">Fiction</a>
											</li>
											<li role="presentation">
												<a href="#fooddrink" aria-controls="fooddrink" role="tab" data-toggle="tab">Food &amp; Drink</a>
											</li>
											<li role="presentation">
												<a href="#graphicanimemanga" aria-controls="graphicanimemanga" role="tab" data-toggle="tab">Graphic, Anime &amp; Manga</a>
											</li>
											<li role="presentation">
												<a href="#sciencefiction" aria-controls="sciencefiction" role="tab" data-toggle="tab">Science Fiction</a>
											</li>
										</ul>
										<div class="tab-content tg-themetabcontent">
											<div role="tabpanel" class="tab-pane active" id="artandphotography">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="biography">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="childrensbook">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="craftandhobbies">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="crimethriller">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="fantasyhorror">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="fiction">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="fooddrink">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="graphicanimemanga">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane" id="sciencefiction">
												<ul>
													<li>
														<div class="tg-linkstitle">
															<h2>History</h2>
														</div>
														<ul>
															<li><a href="products.html">Veniam quis nostrud</a></li>
															<li><a href="products.html">Exercitation</a></li>
															<li><a href="products.html">Laboris nisi ut aliuip</a></li>
															<li><a href="products.html">Commodo conseat</a></li>
															<li><a href="products.html">Duis aute irure</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Architecture</h2>
														</div>
														<ul>
															<li><a href="products.html">Tough As Nails</a></li>
															<li><a href="products.html">Pro Grease Monkey</a></li>
															<li><a href="products.html">Building Memories</a></li>
															<li><a href="products.html">Bulldozer Boyz</a></li>
															<li><a href="products.html">Build Or Leave On Us</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
													<li>
														<div class="tg-linkstitle">
															<h2>Art Forms</h2>
														</div>
														<ul>
															<li><a href="products.html">Consectetur adipisicing</a></li>
															<li><a href="products.html">Aelit sed do eiusmod</a></li>
															<li><a href="products.html">Tempor incididunt labore</a></li>
															<li><a href="products.html">Dolore magna aliqua</a></li>
															<li><a href="products.html">Ut enim ad minim</a></li>
														</ul>
														<a class="tg-btnviewall" href="products.html">View All</a>
													</li>
												</ul>
												<ul>
													<li>
														<figure><img src="images/img-01.png" alt="image description"></figure>
														<div class="tg-textbox">
															<h3>More Than<span>12,0657,53</span>Books Collection</h3>
															<div class="tg-description">
																<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
															</div>
															<a class="tg-btn" href="products.html">view all</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item-has-children current-menu-item">
									<a href="javascript:void(0);">Home</a>
									<ul class="sub-menu">
										<li class="current-menu-item"><a href="index-2.html">Home V one</a></li>
										<li><a href="indexv2.html">Home V two</a></li>
										<li><a href="indexv3.html">Home V three</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">Authors</a>
									<ul class="sub-menu">
										<li><a href="authors.html">Authors</a></li>
										<li><a href="authordetail.html">Author Detail</a></li>
									</ul>
								</li>
								<li><a href="products.html">Best Selling</a></li>
								<li><a href="products.html">Weekly Sale</a></li>
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">Latest News</a>
									<ul class="sub-menu">
										<li><a href="newslist.html">News List</a></li>
										<li><a href="newsgrid.html">News Grid</a></li>
										<li><a href="newsdetail.html">News Detail</a></li>
									</ul>
								</li>
								<li><a href="contactus.html">Contact</a></li>
								<li class="menu-item-has-children current-menu-item">
									<a href="javascript:void(0);"><i class="icon-menu"></i></a>
									<ul class="sub-menu">
										<li class="menu-item-has-children">
											<a href="aboutus.html">Products</a>
											<ul class="sub-menu">
												<li><a href="products.html">Products</a></li>
												<li><a href="productdetail.html">Product Detail</a></li>
											</ul>
										</li>
										<li><a href="aboutus.html">About Us</a></li>
										<li><a href="404error.html">404 Error</a></li>
										<li><a href="comingsoon.html">Coming Soon</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>