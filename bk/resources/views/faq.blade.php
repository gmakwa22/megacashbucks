@extends('layout.layout')

@section('content')

@include('global.homebanner')

<div class="faq-area pt-90 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dreamit-section-title bg-bar2 text-center pb-45">
					<h4>FAQ</h4>
					<h3>Frequently Ask Any</h3>
					<h3>Question Here</h3>
					<div class="em-bar-center"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12  col-md-6 col-sm-12">
				<div class="row">
					<div class="col-lg-12">
						<div id="accordion">
							<div class="card">
								<div class="card-header" id="headingone">
									<h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
											1. What does {{ $comp }} do?
										</button>
									</h5>
								</div>

								<div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#accordion">
									<div class="card-body">
										{{ $comp }} provides online payday loans to Americans, Indians & Filipino customers. Our payday loans are designed to solve temporary cash-flow needs.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingtwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
										2. How do I apply for a loan from you?
										</button>
									</h5>
								</div>
								<div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
									<div class="card-body">
									The process is super quick and easy. Just complete our online payday loan application with <b>{{ $comp }}</b> by clicking:                     <div class="about-button">
                                        <a href="{{ $register  }}">Apply Now</a>
                                      </div>. We will let you know within seconds if your application has been pre-approved. If approved, we will get your online payday loan to you promptly!
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingthree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
											3. How fast can I get a payday loan?
										</button>
									</h5>
								</div>
								<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
									<div class="card-body">
										{{ $comp }} is committed to making sure you get your loan as quickly as possible. We fund payday loans by bank transfer and direct deposit. The biggest time factors involved are your financial institution and the time of your application.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingefour">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
											 4. What will I need to provide to get a {{ $comp }} payday loan?
										</button>
									</h5>
								</div>
								<div id="collapsefour" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
                    <p>To get a payday loan with {{ $comp }}, you will need to:</p>
                    <i class="far fa-check-circle"></i> Have your own, valid email account <br>
                    <i class="far fa-check-circle"></i> Provide us with your home or cell phone number<br>
                    <i class="far fa-check-circle"></i> Be a resident 19 years old or older<br>
                    <i class="far fa-check-circle"></i> Have an open bank account<br>
                    <i class="far fa-check-circle"></i> Get paid by direct deposit<br>
                    <i class="far fa-check-circle"></i> Have at least a monthly net income of $800<br> <br>
                    (A lot of sources of income, can be counted toward this total. Include such income sources in the Employment Details of your application and you're ready to go.)
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge5">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
											 5. Do I need to have a job?
										</button>
									</h5>
								</div>
								<div id="collapse5" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
                    You must have at least a monthly net income of $800 to get a {{ $comp }} payday loan.</br>
                      A lot of sources of income, can be counted toward this total.</br>
                      Include such income sources in the Employment Details of your application and you're ready to go.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge6">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
											 6. Can I get a loan if I do not own my own home?
										</button>
									</h5>
								</div>
								<div id="collapse6" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										Absolutely. All we need is a current address, details of your income, plus a guarantee to repay your payday loan, in order to consider your application.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge7">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
											 7. Do you need any personal information from me?
										</button>
									</h5>
								</div>
								<div id="collapse7" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										We look at banking, personal, and employment information when we’re reviewing online applications for payday loans. But your information is kept strictly confidential, as outlined in our Privacy Policy.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge8">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
											 8. Do you do a credit check?
										</button>
									</h5>
								</div>
								<div id="collapse8" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										We may perform a credit check as one component of our automated decision making process. But {{ $comp }} advanced algorithmic analysis looks at many factors when judging a loan candidate’s credit-worthiness. So to have the best chance of being accepted for a loan, make sure the information you provide on your online application is accurate.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingefour">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
											 9. I have bad credit. Is that a problem?
										</button>
									</h5>
								</div>
								<div id="collapse9" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										Bad Credit will not necessarily disqualify you. Your Credit is one of the many factors our automated system considers when looking at your application, along with income, payment history and other factors. So don’t let bad credit stop you from applying for a loan you need.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge10">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
											 10. Do I have to explain why I want a loan?
										</button>
									</h5>
								</div>
								<div id="collapse10" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										No. You don’t need to explain your reasons for applying for a loan, or tell us how you plan to use the money. As long as you are able to pay your loan back responsibly, we are here to help you through any cash flow gaps.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge11">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
											 11. How much interest do I have to pay for a loan?
										</button>
									</h5>
								</div>
								<div id="collapse11" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										All our fees and interest charges are listed on our website and on your application form, as well as on the loan agreement. So there are no surprises.  If you miss a payment, interest will continue to accumulate on the outstanding balance of your loan until paid in full.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge12">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
											 12. When do I need to pay back my loan?
										</button>
									</h5>
								</div>
								<div id="collapse12" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										Repayment will be due on your next scheduled pay date, unless your next pay date occurs in the next two days; in that case, repayment is extended to your following pay date.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge13">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
											 13. If I take out a loan, how soon can I borrow again?
										</button>
									</h5>
								</div>
								<div id="collapse13" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										Our policy requires the borrower to repay any existing loans in full before applying for another. But once that’s paid off, you can apply again. Our priority is to support you to borrow responsibly. So the service we offer our customers provides critical assistance at important times, rather than being a fixture of your long term planning.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge14">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
											 14. How do I send the money to pay back my loan?
										</button>
									</h5>
								</div>
								<div id="collapse14" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										{{ $comp }} will withdraw payment(s) automatically and directly from your bank account on the agreed date(s).
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge15">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
											 15. What happens if I can't repay my loan?
										</button>
									</h5>
								</div>
								<div id="collapse15" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										If you don’t repay your loan within the agreed term, you will be contacted to arrange payment, and additional fees may apply, as described in your {{ $comp }} Loan Agreement. Your account will be handled by Our professional collections team to help you manage repayment. We do our best to help you figure out a solution, and avoid handing your account to an outside collection team, as repeated failure to honor loan payments can impact your credit score for up to six years.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge16">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
											 16. Is your service impacted by public holidays and weekends?
										</button>
									</h5>
								</div>
								<div id="collapse16" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										Yes, because a loan cannot be deposited at your bank unless it is open for business.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge17">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
											 17. What if I'm unhappy with {{ $comp }}'s service?
										</button>
									</h5>
								</div>
								<div id="collapse17" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										We want your {{ $comp }} experience to be great! If you’re not happy with our service, please let us know by filling out a feedback form. And if that doesn’t fix the issue, you can submit a formal complaint via &quot;<a href="mailto:{{ $suportemail }}">{{ $suportemail }}</a>&quot;. We are continually working to make our service better, and we want your feedback!.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge18">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
											 18. Do you have any retail Payday Loan stores?
										</button>
									</h5>
								</div>
								<div id="collapse18" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										We used to have brick and mortar stores, but we realized most people do their business online these days. So focusing on online loans helps us give you the fastest and most efficient service, with greater privacy.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge19">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
											 19. So how do I apply?
										</button>
									</h5>
								</div>
								<div id="collapse19" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										It’s super easy! Just click                     <div class="about-button">
                                          <a href="{{ $register  }}">Apply Now</a>
                                        </div> and follow the application steps. If you’re approved, you could receive a loan in as little as an hour.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge20">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
											 20. As a new customer, how much can I borrow the first time?
										</button>
									</h5>
								</div>
								<div id="collapse20" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										New customers can receive loans up to $750 on their first approved application depending on the province they live in.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge21">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
											 21. What is the maximum I can borrow, if I've borrowed from you before and always repaid?
										</button>
									</h5>
								</div>
								<div id="collapse21" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
                    If eligible, you can borrow up to $1,500! <br>
          Log into your {{ $comp }} Account and submit an application to see what you qualify for.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headinge22">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
											22. Can I come to your office to get a payday loan?
										</button>
									</h5>
								</div>
								<div id="collapse22" class="collapse" aria-labelledby="headingefour" data-parent="#accordion">
									<div class="card-body">
										No need to leave home! Everything is collected and processed online. We don’t do loans at our physical locations anymore, so just complete your application here:
                    <div class="about-button">
                      <a href="{{ $register  }}">Apply Now</a>
                    </div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>

         <div class="col-lg-12 text-center mt-40">
              <h6> If you do not find the answer to your question listed within our FAQ's, you can always contact us directly at: <a href="mailto:{{ $suportemail }}">{{ $suportemail }}</a></h6>
         </div>

  	</div>
	</div>
</div>

<!-- Delete start -->




<!-- Delete End -->

@endsection
