<!DOCTYPE html>
<html>
  <head>
    <title> Detalii Comanda </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">

    <style>
    body{
      overflow-x: hidden;
    }
    </style>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/order-details.css" type="text/css"/>
    <link rel="stylesheet" href="css/colors.css" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
	
	<div class="container my-2 px-5 py-2">
		<div class="row">
			<div class="col-2">
				<img src="images/logo_blue.svg" alt="Page_logo" class="img-fluid">
			</div>
			<div class="col-10 ">
				<div class="row">
					<div class="row w-100 roadmap">
						<div class="col-4 cyan border-right-white px-0">

						</div>
						<div class="col-4 grey border-right-white px-0">

						</div>
						<div class="col-4 grey px-0">

						</div>	
					</div>

					<div class="row mb-3 w-100">
						<div class="col-4 px-0 text-right">
							<span class="roadmap-txt-cyan translate-arrow"> <i class="fas fa-chevron-up"></i> </span>
						</div>
						<div class="col-4 px-0">
						</div>
						<div class="col-4 px-0">
						</div>
					</div>

					<div class="row w-100">
						<div class="col-3 text-left px-0">
							<span class="roadmap-txt-cyan">Cosul meu </span>
						</div>
						<div class="col-2 text-center px-0">
							<span class="roadmap-txt-cyan bold-txt">Detalii comanda </span>
						</div>
						<div class="col-2 px-0"></div>
						<div class="col-2 text-center px-0">
							<span class="roadmap-txt-grey">Sumar comanda </span>
						</div>
						<div class="col-3 text-right px-0">
							<span class="roadmap-txt-grey">Comanda plasata </span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="line my-2"></div>

		<div class="container">
			<div class="row">
				<div class="col-6">
					<h1 class="title">Detalii comanda</h1>
				</div>
				<div class="col-6 my-auto">
					<div class="row box float-right my-1 mr-1">
						<div class="col-2 pl-2 pr-0 my-auto mx-auto">
							<i class="fas fa-lock green-icon my-auto mx-auto"></i>
						</div>
						<div class="col-10 px-1 mb-1 text-center">
							<span class="font-sz">CONEXIUNE</span>
							<span class="font-sz"> SECURIZATA</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container blue-bg pb-3">
				<div class="row my-2 pt-3">
					<h3 class="subtitle">
						<span class="step-number">1</span>
						<span class="mt-2"> Detalii livrare </span>
					</h3>
				</div>

				<div class="row my-3">
					<div class="col-6 pr-1">
						<label class="container-radio border-radio text-center">
							<span class="blue-txt">Livrare prin curier 1</span>
						  <input type="radio" checked="checked" name="delivery-option">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="col-6 pl-1">
						<label class="container-radio border-radio text-center">
							<span class="blue-txt">Ridicare personala 2</span>
						  <input type="radio" name="delivery-option">
						  <span class="checkmark"></span>
						</label>
					</div>

					<div class="col-6 pr-1">
						<label class="container-radio border-radio text-center">
							<span class="blue-txt">Livrare prin curier 2</span>
						  <input type="radio" name="delivery-option">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="col-6 pl-1">
						<label class="container-radio border-radio text-center">
							<span class="blue-txt">Ridicare personala 2</span>
						  <input type="radio" name="delivery-option">
						  <span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="row my-3 mx-2 py-3 white-bg">

					<div class="col-10 px-0 mx-auto">
							<h4> Selecteaza adresa de livrare: </h4>
							<div class="line"></div>
					</div>

					<div class="col-12 mt-3">
						<div class="row">
							<label class="col-10 container-radio address-radio text-left">
								<div class="col-11 px-3 ml-auto">
									<div class="row">
										<div class="col-10 font-md">
											<div class="row">
												<span class="bold-txt"> Persoana de contact </span>
											</div>
											<div class="row">
												<span class=""> Vasile Ifrim - 0712345678 </span>
											</div>
											<div class="row">
												<span class="bold-txt"> Adresa de livrare </span>
											</div>
											<div class="row">
												<span class=""> Str. Panselutelor nr. 67 - Cluj-Napoca, Cluj </span>
											</div>
										</div>
										
									</div>
									<div class="row px-3 py-2 mt-2 grey-bg font-md">
										<div class="col-12"> <span class=""> <span class="bold-txt">Estimat livrare:</span>  luni, 7 mai – marti, 8 mai </span></div>
										<div class="col-12"> <span class="orange-txt"><span class="bold-txt">INFO:</span> taxa suplimentara 12 lei pentru localitati indepartate</span></span></div>
										<!-- <div class="col-12"> <span class="green-txt bold-txt"> GRATUITA </span></div> -->
									</div>
								</div>
							  <input type="radio" checked="checked" name="delivery-address">
							  <span class="checkmark"></span>
							</label>
							<div class="col-2">
								<button type="button" class="btn btn-outline-primary btn-outline-cust">Modifica</button>
							</div>
						</div>
					</div>
					
					<div class="col-10 mx-auto px-0 line"></div>

					<div class="col-12 mt-2">
						<div class="row">
							<label class="col-10 container-radio address-radio text-left">
								<div class="col-11 px-3 ml-auto">
									<div class="row">
										<div class="col-10 font-md">
											<div class="row">
												<span class="bold-txt"> Persoana de contact </span>
											</div>
											<div class="row">
												<span class=""> Ana Ifrim - 078965432 </span>
											</div>
											<div class="row">
												<span class="bold-txt"> Adresa de livrare </span>
											</div>
											<div class="row">
												<span class=""> Str. Panselutelor nr. 68 - Cluj-Napoca, Cluj </span>
											</div>
										</div>
										
									</div>
									<div class="row px-3 py-2 mt-2 grey-bg font-md">
										<div class="col-12"> <span class=""> <span class="bold-txt">Estimat livrare:</span>  luni, 7 mai – marti, 8 mai </span></div>
										<!-- <div class="col-12"> <span class="orange-txt"><span class="bold-txt">INFO:</span> taxa suplimentara 12 lei pentru localitati indepartate</span></span></div> -->
										<div class="col-12"> <span class="green-txt bold-txt"> GRATUITA </span></div> 
									</div>
								</div>
							  <input type="radio" name="delivery-address">
							  <span class="checkmark"></span>
							</label>
							<div class="col-2">
								<button type="button" class="btn btn-outline-primary btn-outline-cust">Modifica</button>
							</div>
						</div>
					</div>

				<div class="col-10 mx-auto px-0 text-left">
					<button type="button" class="btn btn-outline-primary btn-outline-cust">+ Adauga</button>
				</div>	
			</div>
		</div>

			<div class="container blue-bg mt-4 pb-3">
				<div class="row my-2 pt-3">
					<h3 class="subtitle">
						<span class="step-number">2</span>
						<span class="mt-2"> Detalii facturare </span>
					</h3>
				</div>
			
				<div class="white-bg py-2">
					<ul class="nav nav-tabs nav-justified pt-3" id="myTab" role="tablist">
					  <li class="nav-item pad-left">
					    <a class="nav-link active" id="pers-fiz-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Persoana fizica</a>
					  </li>
					  <li class="nav-item pad-right">
					    <a class="nav-link" id="pers-jur-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Persoana juridica</a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pers-fiz-tab">

					  	<div class="col-12 mt-3">
							<div class="row">
								<label class="col-12 container-radio receipt-1-radio text-left">
									<div class="col-11 px-3 ml-auto">
										<div class="row">
											<div class="col-12 font-md">
												
												<div class="row">
													<span class=""> Vasile Ifrim - 0712345678 </span>
												</div>
												
												<div class="row">
													<span class=""> Str. Panselutelor nr. 67 - Cluj-Napoca, Cluj </span>
												</div>
											</div>
											
										</div>
									</div>
									<div class=" col-10 mx-auto line my-2"> </div>
								  <input type="radio" checked="checked" name="receipt-1-details">
								  <span class="checkmark"></span>
								</label>
								
							</div>
						</div>
						<div class="col-12 mt-3">
							<div class="row">
								<label class="col-12 container-radio receipt-1-radio text-left">
									<div class="col-11 px-3 ml-auto">
										<div class="row">
											<div class="col-12 font-md">
												
												<div class="row">
													<span class=""> Ana Ifrim - 0769845631 </span>
												</div>
												
												<div class="row">
													<span class=""> Str. Panselutelor nr. 68 - Cluj-Napoca, Cluj </span>
												</div>
											</div>
											
										</div>
									</div>
									<div class=" col-10 mx-auto line my-2"> </div>
								  <input type="radio" name="receipt-1-details">
								  <span class="checkmark"></span>
								</label>
								
							</div>
							<div class="col-10 mx-auto px-0 my-3 text-left">
								<button type="button" class="btn btn-outline-primary btn-outline-cust">+ Adauga detaliile de facturare</button>
							</div>	
						</div>
				 	</div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="pers-jur-tab">
					  	<div class="col-12 mt-3">
							<div class="row">
								<label class="col-12 container-radio receipt-2-radio text-left">
									<div class="col-11 px-3 ml-auto">
										<div class="row">
											<div class="col-12 font-md">
												
												<div class="row">
													<span class=""> Vasile Ifrim juridic - 0712345678 </span>
												</div>
												
												<div class="row">
													<span class=""> Str. Panselutelor nr. 69 - Cluj-Napoca, Cluj </span>
												</div>
											</div>
											
										</div>
									</div>
									<div class=" col-10 mx-auto line my-2"> </div>
								  <input type="radio" checked="checked" name="receipt-2-details">
								  <span class="checkmark"></span>
								</label>
								
							</div>
					  		<div class="col-10 mx-auto px-0 my-3 text-left">
								<button type="button" class="btn btn-outline-primary btn-outline-cust">+ Adauga detaliile de facturare</button>
							</div>	
					  </div>
					</div>
				</div>

			</div>

	</div>



	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Font Awesome CDN for vector icons-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</body>
</html>