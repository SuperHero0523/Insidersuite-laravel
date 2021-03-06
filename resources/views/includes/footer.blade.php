<div id="footer"></div>
<div id="site-footer" style="padding-left: 15px; padding-right:15px;">
	<img src="{{ url('imgs/logo.png') }}" class="footer-logo img-responsive center" height="200" style="display: inline;">
	<div class="row footer-content">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<div class="col-md-2 col-sm-12 footer-margin-top">
						<a href="@if(Auth::User()) {{ url('our-story') }} @else {{ url('our_story') }} @endif"><h4 >Our story </h4></a><br>
						<a href="@if(Auth::User()) {{ url('how-it-works') }} @else {{ url('how_it_works') }} @endif"><h4>How it works</h4></a>
					</div>
					<div class="col-md-2 col-sm-12 footer-margin-top">
						<a @if(Auth::User()) href="{{ url('sponsor') }}" @else href="#" data-toggle="modal" data-target="#authentication" @endif><h4>Sponsor</h4></a><br>
						<a @if(Auth::User()) href="{{ url('gift-card') }}" @else href="#" data-toggle="modal" data-target="#authentication" @endif><h4>Gift card</h4></a><br>
					</div>
					<div class="col-md-2 col-sm-12 footer-margin-top">
						<a href="@if(Auth::User()) {{ url('write-to-us') }} @else {{ url('write_to_us') }} @endif"><h4>Write to us</h4></a><br>
						@if(Auth::User())
						<a href="#" data-toggle="modal" data-target="#website_feedback"><h4 >Website feedback</h4></a>
						@else
						<a href="#" data-toggle="modal" data-target="#authentication"><h4>Website feedback</h4></a>
						@endif
					</div>
					<div class="col-md-2 col-sm-12 footer-margin-top">
						<a href="@if(Auth::User()) {{ url('career') }} @else {{ url('careers') }} @endif"><h4 >Career</h4></a><br>
						<a href="@if(Auth::User()) {{ url('legal-terms') }} @else {{ url('legal_terms') }} @endif"><h4  >Terms & conditions</h4></a>
					</div>
					<div class="col-md-2 col-sm-12 footer-margin-top">
						<a href="@if(Auth::User()) {{ url('blog') }} @else {{ url('blogs') }} @endif"><h4 >Insider <i>'Secrets</i></h4></a><br>
						<a href="mailto:contact@insidersuite.com"><h4  >Become partner</h4></a>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-sm-12"></div>
			<div class="col-md-4 col-sm-12">
				<div class="col-md-2 col-sm-4"></div>
<!-- 				<div class="col-md-8 col-sm-4"><a href="@if(Auth::User()) {{ url('#') }} @else {{ url('#') }} @endif"><h4>PREMIUM PACKAGE</h4></a></div> -->
				<div class="col-md-2 col-sm-4"></div>
			</div>
			<div class="col-md-4 col-sm-12"></div>
		</div>
		<div class="row">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-10 col-sm-10" style="background-color: #333;height:0.1em;"></div>
			<div class="col-md-1 col-sm-1"></div>
		</div><br>
		<div class="row">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-10 col-sm-10 footer-padding">
				@if(Auth::User())
				<div class="col-md-3 col-sm-3 col-xs-3 footer-social">
					<a href="https://www.facebook.com/insidersuite/" target="_blank"><img src="{{ url('imgs/facebook-logo.png') }}"  width="20"></a>
					<!-- <a href="https://www.linkedin.com/company/insider-suite/" target="_blank"><img src="{{ url('imgs/linkdin-logo-black.png') }}"  width="20"></a> -->
					<a href="https://www.instagram.com/insidersuite/" target="_blank"><img src="{{ url('imgs/instagram-logo.png') }}"  width="20"></a>
				</div>
				@else
				<div class="col-md-3 col-sm-3 col-xs-3 footer-social">
					<a href="https://www.facebook.com/insidersuite/" target="_blank"><img src="{{ url('imgs/facebook-logo.png') }}"  width="20"></a>
					<!-- <a href="https://www.linkedin.com/company/insider-suite/" target="_blank"><img src="{{ url('imgs/linkdin-logo-black.png') }}"  width="20"></a> -->
					<a href="https://www.instagram.com/insidersuite/" target="_blank"><img src="{{ url('imgs/instagram-logo.png') }}"  width="20"></a>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-9 footer-mail">
					<form action="{{ url('add-newsletter') }}" method="post">
							{{ csrf_field() }}
							<div class="row" style="float:right;">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="col-md-10 col-sm-10 col-xs-10 footer-padding">
										<input type="email" required="" name="newsletter" id="newsletter" placeholder="Enter Your Email" class="form-control">
									</div>
									<div class="col-md-2 col-sm-2 col-xs-2 footer-padding">
										<input type="submit" class="btn btn-default newsletter_send" value="OK">
									</div>
								</div>
							</div>
					</form>
				</div>
				@endif
			</div>
			<div class="col-md-1 col-sm-1"></div>
		</div>
	</div>
</div>
