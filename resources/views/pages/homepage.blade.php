<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">
	{{-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> --}}

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">

	<!-- Owl carousel CSS -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

	<!-- Favicon -->
	<link rel="icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">

	<title>Homepage</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light py-2 bg-base">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="taskspottr"></a>
			<button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto ml-xs-2">
					<li class="nav-item">
						<a class="nav-link" href="#">HUR DET FUNGERAR</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">TILLGÄNGLIGA JOBB</a>
					</li>
				</ul>
				<ul class="navbar-nav mx-auto register-list-btn">
					<li class="nav-item">
						<a class="nav-link" href="#">LOGGA IN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">BLI MEDLEM</a>
					</li>
				</ul>
				<ul class="my-auto">
					<li class="nav-item btn create-project-btn" >
						<a class="nav-link" href="/create-project" target="_blank">POSTA ETT PROJEKT</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="slider">
		{{-- <div class="arrows">
			<a class="previous" href="#">&#xf053;</a>
			<a class="next" href="#">&#xf054;</a>
		</div> --}}
		<div class="container">
			<div class="slides">
				<div class="slide active slide-one" data-icon="&#xf0ac;">
					<div class="overlay"></div>
					<div class="container">
						<div class="content">
							<h1> Anlita experter frilansare för <br/> alla jobb online </h1>
							<p class="mb-0"> Miljontals småföretag använder taskpottr för att förvandla sina </p>
							<p class="mb-0"> Ideer till verklighet </p>
							<a href="#" class="hire-btn"> Jag vill anställa </a>
							<a href="#" class="work-btn"> jag vill jobba </a>
						</div>
						<div class="d-flex bd-highlight mb-4">
							<div class="bullets my-auto"> </div>

							<div class="ml-auto p-2 cost-label">
								<div class="cost-label-text">Kostnad För Webbutveckling</div>
								<div class="cost-label-cost">$ 200</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide slide-two" data-icon="&#xf0f3;">
					<div class="overlay"></div>
					<div class="container">
						<div class="content">
							<h2> Anlita experter frilansare för <br/> alla jobb online </h2>
							<p> Miljontals småföretag använder taskpottr för att förvandla sina </p>
							<p> Ideer till verklighet </p>
							<a href="#"> Jag vill anställa </a>
							<a href="#"> jag vill jobba </a>
						</div>
						<div class="d-flex bd-highlight mb-3">
							<div class="bullets"> </div>

							<div class="ml-auto p-2 cost-label">
								<div class="cost-label-text">Kostnad För Webbutveckling</div>
								<div class="cost-label-cost">$ 200</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide slide-three" data-icon="&#xf013;">
					<div class="overlay"></div>
					<div class="container">
						<h2> Anlita experter frilansare för <br/> alla jobb online </h2>
						<p> Miljontals småföretag använder taskpottr för att förvandla sina </p>
						<p> Ideer till verklighet </p>
						<a href="#"> Jag vill anställa </a>
						<a href="#"> jag vill jobba </a>
						<div class="d-flex bd-highlight mb-3">
							<div class="bullets"> </div>

							<div class="ml-auto p-2 cost-label">
								<div class="cost-label-text">Kostnad För Webbutveckling</div>
								<div class="cost-label-cost">$ 200</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide slide-four" data-icon="&#xf013;">
					<div class="overlay"></div>
					<div class="container">
						<h2> Anlita experter frilansare för <br/> alla jobb online </h2>
						<p> Miljontals småföretag använder taskpottr för att förvandla sina </p>
						<p> Ideer till verklighet </p>
						<a href="#"> Jag vill anställa </a>
						<a href="#"> jag vill jobba </a>
						<div class="d-flex bd-highlight mb-3">
							<div class="bullets"> </div>

							<div class="ml-auto p-2 cost-label">
								<div class="cost-label-text">Kostnad För Webbutveckling</div>
								<div class="cost-label-cost">$ 200</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- work process --}}
	<div class="container-fluid pt-5 pb-2 work-process-container">
		<div class="container">
			<h3 class="font-weight-bold">
				Behöver du gjort arbete?
			</h3>
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
					<p>
						Det är lätt. Lägg bara in ett jobb du behöver slutfört och få konkurrenskraft bud frän frilansare inom några minuter.
					</p>
					<p>
						Whatever your needs, there will be a freelancer to get it done: from web design, mobile app development, virtual assistants, product manufacturing, and graphic design (and a whole lot more).
					</p>
					<p class="d-lg-none d-xl-none d-md-block d-sm-block d-block">
						With secure payments and thousands of reviewed professionals to choose from, Freelancer.com is the simplest and safest way to get work done online.
					</p>
				</div>
				<div class="col-md-12 col-sm-12 col-12 d-lg-none d-xl-none d-md-block d-sm-block d-block text-center">
					<img src="/images/animated-work.png" style="width: 65%;">
				</div>

				<div class="col-lg-6">
					<p class="d-lg-block d-xl-block d-md-none d-sm-none d-none">
						With secure payments and thousands of reviewed professionals to choose from, Freelancer.com is the simplest and safest way to get work done online.
					</p>
					<h3 class="font-weight-bold mb-2 mt-2">
						Vad är bra med det?
					</h3>
					<div class="media">
						<i class="primary-icon fas fa-check-circle fa-lg mr-2 mt-2"></i>
						<div class="media-body mb-2">
							Du måste bara betala för arbete när det är klart och du är 100% nöjd.
						</div>
					</div>
					<div class="media">
						<i class="primary-icon fas fa-check-circle fa-lg mr-2 mt-2"></i>
						<div class="media-body mb-2">
							Du får gratis bud från våra begåvade frilansare inom några sekunder.
						</div>
					</div>
					<div class="media">
						<i class="primary-icon fas fa-check-circle fa-lg mr-2 mt-2"></i>
						<div class="media-body mb-2">
							Vi är alltid här för att hjälpa. Vårt stöd består av riktiga människor som är tillgängliga dygnet runt.
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 mt-xl-n4 mt-lg-n2 col-md-12 col-sm-12 col-12 d-lg-block d-xl-block d-md-none d-sm-none d-none text-center">
					<img src="/images/animated-work.png" style="width: 85%;">
				</div>
				<div class="col-lg-8">
					<div class="media">
						<i class="primary-icon fas fa-check-circle fa-lg mr-2 mt-2"></i>
						<div class="media-body mb-2">
							Du kan leva chatt med dina frilansare för att få ständiga uppdateringar om hur arbetet fortskrider.
						</div>
					</div>

					<div class="media">
						<i class="primary-icon fas fa-check-circle fa-lg mr-2 mt-2"></i>
						<div class="media-body mb-2">
							Håll dig uppdaterad och på väg med vår tidspårare och mobilapp.
						</div>
					</div>

					<div class="media">
						<i class="primary-icon fas fa-check-circle fa-lg mr-2 mt-2"></i>
						<div class="media-body mb-2">
							Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	{{-- Audience Favorites Section --}}
	<div class="container-fluid audience-favorites-container pt-5 pb-2">
		<div class="container">
			<h1 class="text-center audience-favorites-heading">
				Publikens favoriter
			</h1>
			<p class="text-center audience-favorites-description">
				Här är några av våra mest populära projekt:
			</p>
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-one.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-two.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-three.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-four.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row audience-favorites-container">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-five.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-six.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-seven.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="overlay-image-container">
						<img src="/images/audience-favorites/audience-favorites-eight.png">
						<div class="image-overlay">
						</div>
						<div class="text">
							<p class="mb-0 project-title"> Data Entry </p>
							<p class="mb-0 project-price"> Starting from $550 </p>
							<a href="#" class="mb-0 project-upload-btn">Lägg upp ett projekt som det här</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Categories Section --}}
	<div class="container-fluid Categories-container pt-5 pb-5">
		<div class="container">
			<h2 class="text-center font-weight-bold Categories-heading">
				Få arbete i över 1350 olika kategorier
			</h2>
			<div class="row">
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-desktop fa-2x"></i><span class="mt-2">Website Design</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-mobile-alt fa-2x"></i><span class="mt-2">Mobile Apps</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fab fa-android fa-2x"></i><span class="mt-2">Android Apps</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fab fa-apple fa-2x"></i><span class="mt-2">iPhone Apps</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="far fa-flag fa-2x"></i><span class="mt-2">Banner Design</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<img src="/images/favicon.png" width="36px" height="32px"><span class="mt-2">Logo Design</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<img src="/images/photoshop-icon.png" width="36px" height="32px"><span class="mt-2">Photoshop</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<img src="/images/paint-brush.png" width="36px" height="32px"><span class="mt-2">Graphic Design</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<img src="/images/hot-article.png" width="36px" height="32px"><span class="mt-2">Article Writing</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-ghost fa-2x"></i><span class="mt-2">Ghost Writing</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-pen-alt fa-2x"></i><span class="mt-2">Copy Writing</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="far fa-newspaper fa-2x"></i><span class="mt-2">SEO</span>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-globe fa-2x"></i><span class="mt-2">Internet Matketing</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-chart-line fa-2x"></i><span class="mt-2">Finance</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-calculator fa-2x"></i><span class="mt-2">Accounting</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-industry fa-2x"></i><span class="mt-2">Manufacturing</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-truck fa-2x"></i><span class="mt-2">Logistics</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-balance-scale fa-2x"></i><span class="mt-2">Legal</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-cubes fa-2x"></i><span class="mt-2">3D Model</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fas fa-laptop-code fa-2x"></i><span class="mt-2">Software Develop</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fab fa-linux fa-2x"></i><span class="mt-2">Linux</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fab fa-php fa-2x"></i><span class="mt-2">PHP</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="far fa-keyboard fa-2x"></i><span class="mt-2">Data Entry</span>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-6 px-1 py-3 category">
					<i class="fab fa-aws fa-2x"></i><span class="mt-2">AWS</span>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mt-5 text-right">
					<div class="taskSpottr-api-container">
						<h6>TaskSpottr API</h6>
						<h4 class="font-weight-bold mb-3"> 36 miljoner yrkespersoner <br/> på begäran. </h4>
						<p class="mb-4">
							Why hire people when you can simply <br/> integrate our talented cloud workforce <br/> instead?.
						</p>
						<a href="#" class="view-documentation-btn"> Visa dokumentation </a>
					</div>
				</div>
				<div class="col-lg-6 mt-5">
					<div class="taskSpottr-enterprise-container">
						<h6>TaskSpottr Enterprise</h6>
						<h4 class="font-weight-bold mb-3"> Company budget? <br> Get more done for less </h4>
						<p class="mb-5">
							Use our workforce of 36 million to help <br/> your business achieve more.
						</p>
						<a href="#" class="contact-us-btn"> Kontakta oss </a>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- job categories --}}
	<div class="container-fluid job-categories-container pb-5 pt-3">
		<div class="container">
			<h2 class="text-center font-weight-bold job-categories-heading pb-3">
				Bläddra bland de främsta jobbkategorierna
			</h2>
			<div class="row">
				<div class="col-lg-3">
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> PHP </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Graphic Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Web Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> HTML </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Logo Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Photoshop </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Wordpress </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Article Writing </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> JavaScript </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Mobile App Development </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Software Architecture </span> </p>
				</div>
				<div class="col-lg-3">
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> PHP </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Graphic Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Web Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> HTML </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Logo Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Photoshop </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Wordpress </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Article Writing </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> JavaScript </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Mobile App Development </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Software Architecture </span> </p>
				</div>
				<div class="col-lg-3">
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> PHP </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Graphic Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Web Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> HTML </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Logo Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Photoshop </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Wordpress </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Article Writing </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> JavaScript </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Mobile App Development </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Software Architecture </span> </p>
				</div>
				<div class="col-lg-3">
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> PHP </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Graphic Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Web Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> HTML </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Logo Design </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Photoshop </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Wordpress </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Article Writing </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> JavaScript </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Mobile App Development </span> </p>
					<p> <i class="primary-icon fas fa-caret-right fa-lg"></i> <span> Software Architecture </span> </p>
				</div>
			</div>
		</div>
	</div>

	{{-- footer section --}}
	<footer>
		<div class="container pt-5">
			<div class="row">
				<div class="col-lg-3">
					<ul>
						<li class="mt-0"> <img src="/images/logo.png" class="footer-logo"> </li>
						<li>
							<a href="#">
								<i class="fas fa-globe fa-lg mr-2"></i> English - US (International)
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fas fa-question-circle fa-lg mr-2"></i> Help & Support
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-2">
					<h3>
						TaskSpottr
					</h3>
					<ul>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Contests</a></li>
						<li><a href="#">Freelancers</a></li>
						<li><a href="#">Enterprice</a></li>
						<li><a href="#">Preferred Freelancer</a></li>
						<li><a href="#">Project Management</a></li>
						<li><a href="#">Local Jobs</a></li>
						<li><a href="#">Showcase</a></li>
						<li><a href="#">API for Developers</a></li>
					</ul>
				</div>
				<div class="col-lg-2">
					<h3>
						About
					</h3>
					<ul>
						<li><a href="#">About US</a></li>
						<li><a href="#">How It Works</a></li>
						<li><a href="#">Security</a></li>
						<li><a href="#">Investor</a></li>
						<li><a href="#">SiteMap</a></li>
						<li><a href="#">Quotes</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div>
				<div class="col-lg-2">
					<h3>
						Terms
					</h3>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Copyright Policy</a></li>
						<li><a href="#">Code Of Conduct</a></li>
						<li><a href="#">Fees & Charges</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h3>
						Terms
					</h3>
					<ul>
						<li>
							<a href="#">
								<img src="/images/android-apple-store.png" class="store-image">
							</a>
						</li>
						<li>
							<a href="#"><i class="fab fa-facebook-square fa-2x mr-2"></i></a>
							<a href="#"><i class="fab fa-twitter-square fa-2x mr-2"></i></a>
							<a href="#"><i class="fab fa-instagram fa-2x mr-2"></i></a>
							<a href="#"><i class="fas fa-rss-square fa-2x mr-2"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row border-top py-3 copyright-container">
				<div class="col-lg-4 pl-0">
					<strong>36,194,790</strong> Registered Users
				</div>
				<div class="col-lg-4 text-center">
					<strong>16,192,024</strong> Registered Users
				</div>
				<div class="col-lg-4 pr-0 text-right">
					<strong>Copyright &copy; 2019, taskspottr.com</strong>
				</div>
			</div>
		</div>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>

	<!-- custom JavaScript -->
	<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>