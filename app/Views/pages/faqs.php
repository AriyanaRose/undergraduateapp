<style>
	.btn-check:focus+.btn,
	.btn:focus {
		outline: 0;
		box-shadow: none
	}

	.bg-cover {
		background-size: cover !important;
		opacity: 0.6
	}

	body {
		min-height: 100vh;
	}
</style>


<!--	URL: https://bbbootstrap.com/snippets/bootstrap-accordion-collapse-24517436
                Bootstrap 5 Accordion collapse
                Author:  BBBootstrap Team
            -->





<div style="background: url('images/bookself4.jpg')" class="jumbotron bg-cover text-white">
	<div class="container py-5 text-center">
	</div>
</div>


<div class="container my-5">
	<div class="accordion" id="accordionExample">
		<div class="card">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0"> <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Activity 1 </button> </h2>
			</div>
			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h2 class="mb-0"> <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Activity 2 </button> </h2>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingThree">
				<h2 class="mb-0"> <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Activity 3 </button> </h2>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Senectus et netus et malesuada fames ac turpis. Rhoncus dolor purus non enim. </div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingThree">
				<h2 class="mb-0"> <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Activity 3 </button> </h2>
			</div>
			<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				<div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Senectus et netus et malesuada fames ac turpis. Rhoncus dolor purus non enim. </div>
			</div>
		</div>
	</div>
</div>