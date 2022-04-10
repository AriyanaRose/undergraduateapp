<style>
	.card {
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 1px solid #e7eaed;
		border-radius: 0;
	}

	.accordion .card {
		margin-bottom: .75rem;
		box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
		border-radius: .25rem;
	}

	.accordion .card .card-header {
		background-color: transparent;
		border: none;
		padding: 2rem;
	}

	.grid-margin {
		margin-bottom: 0.625rem;
	}

	.accordion .card .card-header a[aria-expanded="true"]:before {
		content: "\F374";
	}

	.accordion .card .card-header a:before {
		font-family: "Material Design Icons";
		position: absolute;
		right: 7px;
		top: 0;
		font-size: 18px;
		display: block;
	}

	.accordion .card .card-header a[aria-expanded="false"]:before {
		content: "\F415";
	}
</style>

<header class="py-2 bg-light border-bottom mb-4">
	<div class="container">
		<div class="text-dark text-center my-5">
			<h1 class="fw-bolder">Frequently Asked Questions</h1>
			<p class="lead mb-0"></p>
		</div>
	</div>
</header>

<!--	URL: https://www.bootdey.com/snippets/view/bs4-faqs-page-with-sections#css
                Bootstrap snippet. bs4 faqs page with sections
                Author:  MDBootstrap.com
            -->



<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<div class="container">
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<form action="#">
						<div class="form-group d-flex search-field">
							<input type="text" class="form-control" placeholder="Search Here" value="">
							<button type="submit" class="btn btn-primary ml-3">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="row">
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="faq-block card-body">
							<div class="container-fluid py-2">
								<h5 class="mb-0">My Account</h5>
							</div>
							<div id="accordion-1" class="accordion">
								<div class="card">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Why do I need to register on the site before I can place an order
											</a>
										</h5>
									</div>
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-1">
										<div class="card-body">
											<p class="mb-0">Establishing an online account with us assures you that your purchasing information is secure, confidential and accessible to you.  Once you establish an account, you will only need to sign-in to place an order in the future, check on the status of your current order,  view past purchases or update your profile information.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												What is Lorum Ipsum and who invented it?
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-1">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												How may times Lorum Ipsum has been used in this theme?
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-1">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 grid-margin grid-margin-md-0">
					<div class="card">
						<div class="faq-block card-body">
							<div class="container-fluid py-2">
								<h5 class="mb-0">Section 3</h5>
							</div>
							<div id="accordion-4" class="accordion">
								<div class="card">
									<div class="card-header" id="headingOne-4">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
												Can I transfer the money from the wallet to my bank account?
											</a>
										</h5>
									</div>
									<div id="collapseOne-4" class="collapse show" aria-labelledby="headingOne-4" data-parent="#accordion-4">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
												on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
												raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo-4">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseTwo-4" aria-expanded="false" aria-controls="collapseTwo-4">
												I forgot my account password. What should I do?
											</a>
										</h5>
									</div>
									<div id="collapseTwo-4" class="collapse" aria-labelledby="headingTwo-4" data-parent="#accordion-4">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
												on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
												raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree-4">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseThree-4" aria-expanded="false" aria-controls="collapseThree-4">
												What should I do if I need any assistance using my account
											</a>
										</h5>
									</div>
									<div id="collapseThree-4" class="collapse" aria-labelledby="headingThree-4" data-parent="#accordion-4">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
												on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
												raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- sub col -->
		<div class="col-12 col-md-6">
			<div class="row">
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="faq-block card-body">
							<div class="container-fluid py-2">
								<h5 class="mb-0">Section 2</h5>
							</div>
							<div id="accordion-3" class="accordion">
								<div class="card">
									<div class="card-header" id="headingOne-3">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
												How many instances of Lorum Ipsum usage can be found on the web?
											</a>
										</h5>
									</div>
									<div id="collapseOne-3" class="collapse show" aria-labelledby="headingOne-3" data-parent="#accordion-3">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
												on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
												raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo-3">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
												What is Lorum Ipsum and who invented it?
											</a>
										</h5>
									</div>
									<div id="collapseTwo-3" class="collapse" aria-labelledby="headingTwo-3" data-parent="#accordion-3">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
												on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
												raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree-3">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3">
												How may times Lorum Ipsum has been used in this theme?
											</a>
										</h5>
									</div>
									<div id="collapseThree-3" class="collapse" aria-labelledby="headingThree-3" data-parent="#accordion-3">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
												on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
												raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="faq-block card-body">
							<div class="container-fluid py-2">
								<h5 class="mb-0">Section 4</h5>
							</div>
							<div id="accordion-2" class="accordion">
								<div class="card">
									<div class="card-header" id="headingOne-2">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
												How many instances of Lorum Ipsum usage can be found on the web?
											</a>
										</h5>
									</div>
									<div id="collapseOne-2" class="collapse show" aria-labelledby="headingOne-2" data-parent="#accordion-2">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo-2">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
												What is Lorum Ipsum and who invented it?
											</a>
										</h5>
									</div>
									<div id="collapseTwo-2" class="collapse" aria-labelledby="headingTwo-2" data-parent="#accordion-2">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree-2">
										<h5 class="mb-0">
											<a data-toggle="collapse" data-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">
												How may times Lorum Ipsum has been used in this theme?
											</a>
										</h5>
									</div>
									<div id="collapseThree-2" class="collapse" aria-labelledby="headingThree-2" data-parent="#accordion-2">
										<div class="card-body">
											<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
											<p>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- parent row -->
</div>