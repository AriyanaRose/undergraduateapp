<style>
	.faqHeader {
		font-size: 23px;
		margin: 25px;
	}

	.panel-heading [data-toggle="collapse"]:after {
		content: "e072";
		/* "play" icon */
		float: right;
		color: #F58723;
		font-size: 10px;
		line-height: 13px;
		/* rotate "play" icon from > (right arrow) to down arrow */
		-webkit-transform: rotate(-90deg);
		-moz-transform: rotate(-90deg);
		-ms-transform: rotate(-90deg);
		-o-transform: rotate(-90deg);
		transform: rotate(-90deg);
	}

	.panel-heading [data-toggle="collapse"].collapsed:after {
		/* rotate "play" icon from > (right arrow) to ^ (up arrow) */
		-webkit-transform: rotate(90deg);
		margin: 25px;
		font-size: 10px;
		-moz-transform: rotate(90deg);
		-ms-transform: rotate(90deg);
		-o-transform: rotate(90deg);
		transform: rotate(90deg);
		color: #454444;
	}

	.bg-cover {
		background-size: cover !important;
		opacity: 0.5
	}

	body {
		min-height: 100vh;
	}
</style>



<div style="background: url('images/bookself4.jpg')" class="jumbotron bg-cover text-white">
	<div class="container py-5 text-center">

	</div>
</div>

<!--	URL: http://www.prepbootstrap.com/bootstrap-template/faq-example
                Bootstrap FAQ Bootsrap Frequently Asked Questions
                Author:  PrepBootstrap
            -->

<div class="container">

	<div class="text-dark text-center my-3">
		<h2 class="fw-bolder">Frequently Asked Questions</h2>
	</div>

	<div class="faqHeader text-center"></div>
	<div class="" id="accordion">
		<div class="faqHeader text-center">General Questions</div>

		<div name="card1" class="card">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Why do I need to register on the site before I can place an order?</a>
				</h5>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in">
				<div class="card-body">
					Establishing an online account with Quills & Pages assures you that your purchasing information is secure, confidential and accessible to you. Once you establish an account, you will only need to sign-in to place an order in the future, check on the status of your current order, view past purchases or update your profile information.
				</div>
			</div>
		</div>
		<div name="card2" class="card">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Do you sell used books?</a>
				</h5>
			</div>
			<div id="collapseTen" class="panel-collapse collapse">
				<div class="card-body">
					<p>Yes we do sell used books, these are not limited to older books but also new books. Popular books in used condition often go quickly and its advisable to sign up for our newsletter to receive updates on new stock.</p>
				</div>
			</div>
		</div>
		<div name="card3" class="card">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What condition are used books in?</a>
				</h5>
			</div>
			<div id="collapseEleven" class="panel-collapse collapse">
				<div class="card-body">
					All used books are like new with no marks, highlights and names. Hardcovers may not have their original dustcover.
				</div>
			</div>
		</div>
		<div name="card4" class="card ">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty">What is the currency are products sold in?</a>
				</h5>
			</div>
			<div id="collapseTwenty" class="panel-collapse collapse">
				<div class="card-body">
					All products are listed in <strong>TTD</strong>.
				</div>
			</div>
		</div>

		<div class="faqHeader text-center">Orders, Delivery & Billing</div>
		<div name="card5" class="card ">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">My order hasn't arrived yet; can I check the status of my order online?</a>
				</h5>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse">
				<div class="card-body">
					Yes. If you are Signed In to your account, click on Orders in the header above to review open order status.
				</div>
			</div>
		</div>
		<div name="card6" class="card">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Shipping rates & delivery times</a>
				</h5>
			</div>
			<div id="collapseThree" class="panel-collapse collapse">
				<div class="card-body">
					Shipping costs and transit times vary depending on the delivery location and the shipping method selected.
					All of our rates and delivery estimates can be found on the Shipping Costs & Delivery page.
				</div>
			</div>
		</div>
		<div name="card7" class="card ">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Do you ship outside the Caribbean?</a>
				</h5>
			</div>
			<div id="collapseFive" class="panel-collapse collapse">
				<div class="card-body">
					Yes, we ship used books internationally. See our Shipping Costs & Delivery page for cost and delivery times.
				</div>
			</div>
		</div>
		<div name="card8" class="card ">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">How can I cancel my order?</a>
				</h5>
			</div>
			<div id="collapseSix" class="panel-collapse collapse">
				<div class="card-body">
					Yes. If you are Signed In to your account, click on Orders in the header above to can cancel your order. If the order has been already shipped the item will need to be returned before a refunded is sent.
				</div>
			</div>
			<div name="card9" class="card">
				<div class="card-header">
					<h5 class="card-header">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?</a>
					</h5>
				</div>
				<div id="collapseEight" class="panel-collapse collapse">
					<div class="card-body">
						For local purchases we accept cash and linx on delivery and credit card and PayPal for payment online. For International orders only PayPal and credit card options are available.
					</div>
				</div>
			</div>
			<div name="card10" class="card">
				<div class="card-header">
					<h5 class="card-header">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Are transactions safe?</a>
					</h5>
				</div>
				<div id="collapseNine" class="panel-collapse collapse">
					<div class="card-body">
						Quills & Pages provides Internet security by:
						<ul>
							<li>Hosting our site on a secure server.</li>
							<li>No other company or organization shares the server we use to store information.</li>
							<li>Creating secure areas of the Web site for the transfer of confidential information such as your credit card number in our online bookstore.</li>
						</ul>
					</div>
				</div>
			</div>


		</div>

		<div class="faqHeader text-center">Wish List, Custom Orders & Pre-Orders</div>
		<div name="card10" class="card ">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Will Items be removed from my wish list after log out?</a>
				</h5>
			</div>
			<div id="collapseFour" class="panel-collapse collapse">
				<div class="card-body">
					No. You wishlist will reflect all items added unless you delete the item or add them to cart, if the item is out of stock it will be reflected in the status.
				</div>
			</div>
		</div>
		<div name="card11" class="card ">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">Can I place a custom order?</a>
				</h5>
			</div>
			<div id="collapseFifteen" class="panel-collapse collapse">
				<div class="card-body">
					Yes, please feel out the contact form and one of our customer representative will contact you.
				</div>
			</div>
		</div>
		<div name="card12" class="card ">
			<div class="card-header">
				<h5 class="card-header">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">How do I order Pre-Order Items</a>
				</h5>
			</div>
			<div id="collapseFourteen" class="panel-collapse collapse">
				<div class="card-body">
					Pre-order items go on sale eight weeks before the item arrives in stock, the will be shipped or delivered as soon as the item is received in stock. We only accept online payments for pre-orders.
				</div>
			</div>
		</div>

	</div>

	<br />
	<br />
	<br />
</div>