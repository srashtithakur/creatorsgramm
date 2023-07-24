<?php include("include/header.php"); ?>
<style>
    header{display: none;}
    footer{display: none;}
</style>
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
			
			<section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
                <div class="overlay-gradient t50">
					<div class="center-y relative">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="col-lg-5 mx-auto wow fadeIn bg-color" data-wow-delay=".5s">
									<div class="box-rounded padding40">
										<h3 class="mb10 text-center">Create an account</h3>
										<p class="text-center">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint Velit </p>
										<form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                            <div class="field-set">
                                                <label for="name">Name</label>
                                                <input type='text' name='name' id='name' class="form-control" placeholder="">
                                            </div>
                                            <div class="field-set">
                                                <label for="name">Username</label>
                                                <input type='text' name='Username' id='Username' class="form-control" placeholder="samsmith67">
                                            </div>
                                            <div class="field-set">
                                                <label for="email">Email</label>
                                                <input type='text' name='email' id='email' class="form-control" placeholder="samsmith67@gmail.com">
                                            </div>
											
                                            <div class="field-set">
                                                 <label for="password">Password</label>
                                                <input type='password' name='password' id='password' class="form-control" placeholder="">
                                            </div>
                                            
                                            <div class="field-set">
                                                 <label for="DOB">DOB</label>
                                                <input type='date' name='DOB' id='DOB' class="form-control" placeholder="">
                                            </div>
                                            
                                            <div class="field-set">
                                                 <label for="rcode">Referral Code (Optional)</label>
                                                <input type='text' name='rcode' id='rcode' class="form-control mb-0" placeholder="">
                                            </div>
                                            <a href="#">
                                                <small>Check referral</small>
                                            </a>
											<div class="form-check my-3">
                                                <input class="bg-transparent border form-check-input" type="checkbox" value="" id="tnc">
                                                <label class="form-check-label" for="tnc">
                                                    I agree to all T&C and Privacy Policy
                                                </label>
                                            </div>
										<a href="index.php">	<div class="field-set">
												<input type='submit' id='send_message' value='Continue' class="btn btn-main btn-fullwidth color-2 py-3 rounded-3">
											</div></a>
											
											<div class="clearfix"></div>
											
											<div class="spacer-single"></div>

                                        <!-- social icons -->
                                        <ul class="d-flex justify-content-center list s3">
                                            <li>Already have an account?</li>
                                            <li><a href="login.php">Log In</a></li>
                                        </ul>
                                        <!-- social icons close -->
                                </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>		
            
            </div>
            <!-- content close -->

            <?php include("include/footer.php"); ?>