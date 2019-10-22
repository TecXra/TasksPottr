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

	<title>Create Project</title>
</head>
<body>
	<div class="container-fluid top-bg">
		<div class="row">
			<div class="offset-xl-3 offset-lg-3 offset-md-2 offset-sm-1 col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12">
				<img src="/images/logo.png" class="mt-5 mb-4">
				<h2 class="font-weight-bold mb-2">
					Tell us what you need done.
				</h2>
				<p class="font-weight-bold">
					Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with the work.
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid form-top-container">
		<div class="row">
			<div class="offset-xl-3 offset-lg-3 offset-md-2 offset-sm-1 col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 form-column">
				<p class="mt-2 font-weight-bold form-input-lable">Choose a name for your project</p>
				<input type="text" class="form-control">
				<p class="mt-2 mb-1 font-weight-bold form-input-lable">Tell us more about your project</p>
			</div>
		</div>
	</div>
	<div class="container-fluid form-container">
		<div class="row">
			<div class="offset-xl-3 offset-lg-3 offset-md-2 offset-sm-1 col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 form-column">
				<p>
					Start with a bit about yourself or your business and include an overview of what you need one.
				</p>
				<textarea class="form-control" rows="5"></textarea>
				<p class="mt-2">
					Detect Language. Dansk. If we are wrong <a href="#">Click Here</a>
				</p>
				<div class="border">
					<input type="file" class="form-control">
					<table class="table">
						<tr>
							<td class="text-center">test.pdf</td>
							<td class="text-center">846.57 KB</td>
							<td class="text-center"><a href="#">Delete</a> </td>
						</tr>
						<tr>
							<td class="text-center">test2.pdf</td>
							<td class="text-center">84.57 KB</td>
							<td class="text-center"><a href="#">Delete</a> </td>
						</tr>
					</table>
				</div>
				<p class="mt-2 mb-1 font-weight-bold form-input-lable">What skills are required?</p>
				<p>
					Enter upto five skills that best describe your project. Freelancers will usen these skills to find projects they are most interested and experienced in.
				</p>
				<div class="border p-3">
					<span class="skill-name">PHP</span>
					<span class="skill-name">MySQL</span>
				</div>
				<p class="mt-2">
					Suggested Skills :
					<a href="#">HTML, </a>
					<a href="#">Graphic Design, </a>
					<a href="#">PHP, </a>
					<a href="#">Anything Goes, </a>
					<a href="#">Wordpress </a>
				</p>
				<p class="mt-2 mb-1 font-weight-bold form-input-lable">How would you like to get it done?</p>
				<div class="row project-payment-type-container">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
						<div class="media border px-3 py-4">
							<span class="ribbon"> Most Popular </span>
							<i class="primary-color fas fa-tv fa-lg mr-2 mt-2"></i>
							<div class="media-body">
								<h5 class="mt-0">Post a project</h5>
								Receive free qoutes, best for when you have a specific idea. The project is not visual in nature or the project is complex.
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
						<div class="media border px-3 py-4">
							<i class="primary-color fas fa-trophy fa-lg mr-2 mt-2"></i>
							<div class="media-body">
								<h5 class="mt-0">Start a contest</h5>
								Crowdsource ideas. Post a prize get competing entries which you can iterate on with facebook. Great for visual desings.
							</div>
						</div>
					</div>
				</div>
				<p class="mb-1 font-weight-bold form-input-lable">How would you want to pay?</p>
				<div class="row project-payment-type-container">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
						<div class="media border px-3 py-4">
							<i class="primary-color fas fa-lock fa-lg mr-2 mt-2"></i>
							<div class="media-body">
								<h5 class="mt-0">Pay Fixed Project</h5>
								Agree on a price and release payment when the job is done. <br> Best for one-off tasks.
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
						<div class="media border px-3 py-4">
							<i class="primary-color fas fa-stopwatch fa-lg mr-2 mt-2"></i>
							<div class="media-body">
								<h5 class="mt-0">Pay by the hour</h5>
								Hire based on an hourly rateand pay for hours billed. <br> Best for ongoing work.
							</div>
						</div>
					</div>
				</div>

				<p class="mb-1 font-weight-bold form-input-lable">What is estimated budget?</p>
				<form class="form-inline">
					<div class="form-group mb-2">
						<select class="form-control">
							<option>USD</option>
							<option>SEK</option>
						</select>
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<select class="form-control">
							<option>Very small project ($250 - 750 USD)</option>
							<option>Small project ($500 - 1000 USD)</option>
							<option>Medium project ($1000 - 1500 USD)</option>
							<option>Large project ($1500 - 2000 USD)</option>
							<option>Very large project ($2000 - 2500 USD)</option>
						</select>
					</div>
				</form>

				<p class="mt-2 mb-1 font-weight-bold form-input-lable">Do you need a helping hand?</p>
				<div class="row project-payment-type-container">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
						<div class="media border px-3 py-4">
							<i class="primary-color fas fa-tv fa-lg mr-2 mt-2"></i>
							<div class="media-body">
								<h5 class="mt-0">Standard Project</h5>
								Receive free qoutes, best for when you have a specific idea, the project is not visual in nature or the project is complex.
								<br>
								<h6 class="mt-3">Free</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
						<div class="media border px-3 py-4">
							<i class="primary-color fas fa-trophy fa-lg mr-2 mt-2"></i>
							<div class="media-body">
								<span class="ribbon"> Recommended </span>
								<h5 class="mt-0">Recruiter Project</h5>
								Crowdsource ideas. Post a prize and get competing entries which you can iterate on with facebook. Great for visual desings.
								<br>
								<h6 class="mt-3 font-weight-bold primary-color">ONLY $9.50 <del>$19.00</del> </h6>
							</div>
						</div>
					</div>
				</div>
				<p class="text-right pt-2 pb-4">
					<a href="#">Hide advanced options</a>
				</p>
				<div class="border py-2 mb-3" style="box-shadow: 0px 0px 3px rgba(0, 0, 0, 1);">
					<div class="row mx-0">
						<div class="col-md-1 text-center py-2">
							<label class="checkbox-container">
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="col-md-3 py-2 text-center">
							<span style="color: white; background-color: #fb8913; border-radius: 5px; padding: 0.1rem 1.3rem 0.1rem 1.3rem; font-size: 0.9rem;">Recruiter</span>
						</div>
						<div class="col-md-6" style="font-size: 0.8rem;">
							One of our experts will find and recommend the perfect freelancer for yourjob.
						</div>
						<div class="col-md-2 text-center" style="font-size: 0.8rem;">
							<span class="font-weight-bold primary-color">ONLY $9.50</span> <br> <del class="font-weight-bold">$19.00</del>
						</div>
					</div>
				</div>
				<div class="border py-2 mb-3" style="box-shadow: 0px 0px 3px rgba(0, 0, 0, 1);">
					<div class="row mx-0">
						<div class="col-md-1 text-center py-2">
							<label class="checkbox-container">
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="col-md-3 py-2 text-center">
							<span style="color: white; background-color: #fb8913; border-radius: 5px; padding: 0.1rem 1.3rem 0.1rem 1.3rem; font-size: 0.9rem;">Recruiter</span>
						</div>
						<div class="col-md-6" style="font-size: 0.8rem;">
							One of our experts will find and recommend the perfect freelancer for yourjob.
						</div>
						<div class="col-md-2 text-center" style="font-size: 0.8rem;">
							<span class="font-weight-bold primary-color">ONLY $9.50</span> <br> <del class="font-weight-bold">$19.00</del>
						</div>
					</div>
				</div>
				<p class="mt-2 mb-1 font-weight-bold form-input-lable">Do you need a helping hand?</p>
				<div class="border py-3">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 text-center py-3">
							<i class="primary-color fas fa-tv fa-3x"></i>
							<br>
							<span>Preoject</span>
							<br>
							<span class="primary-color">$250 - 750 USD</span>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12 d-block d-sm-none d-md-none d-lg-none d-xl-none text-center">
							<div class="mx-auto" style="border: solid 1px #fb8913; padding: 0px; width: 120px; max-width: 120px; height: 0px;"> </div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12 d-none d-sm-block d-md-block d-lg-block d-xl-block my-2" style="border: solid 1px #fb8913; padding: 0px; width: 0px; max-width: 0px; height: 120px;"></div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 project-payment-type-container">
							<div class="media px-3 py-3">
								<div class="media-body">
									<h5 class="mt-0">Project Title</h5>
									Receive free qoutes, best for when you have a specific idea. The project is not visual in nature or the project is complex.
									<br>
									<div class="mt-2">
										<span class="skill-name">PHP</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p class="text-right pt-5">
					<a href="#" class="post-project-btn"> Yes, Post My Project</a>
				</p>
				<p class="mt-4 pt-2 footer-copyrite" style="border-top: solid 5px darkgrey;">
					By clicking 'Yes, Post My Project', You agree to <b>terms and conditions and privacy policy.</b>
					<br>
					<b>Copyrite &copy; 2019, taskspottr.com</b>
				</p>
			</div>
		</div>
	</div>
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