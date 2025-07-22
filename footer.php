<footer id="footer">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-6 col-md-4">
				<a href="#">
					<img src="images/footer-logo.png" alt="" class="footer-logo">
				</a>
				<ul class="socialicon">
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="d-flex justify-content-md-end mt-4 mt-md-0 mt-sm-2">
					<div>
						<h2 class="footer-hding">Contact Us</h2>
						<address class="footer-address">
							<div class="d-flex gap-3">
							 	<i class="fa-solid fa-phone-volume"></i> <?php echo $phone; ?>
							</div> 
							<div class="d-flex gap-3">
							 	<i class="fa-solid fa-envelope"></i> <?php echo $email; ?>
							</div> 	
						</address>
					</div>
				</div>		
			</div>
			 <div class="col-md-12">
			 	<hr class="hr">
			 	<p class="footer-disclaimer">
			 		<strong>Disclaimer</strong><br>
					Farelobby.com is a travel search and booking platform that aggregates flight deals and travel offers from third-party providers and airline partners. While we strive to provide accurate, up-to-date information, prices and availability may change at any time without prior notice and are subject to the terms and conditions of the respective providers.<br><br>

					We do not guarantee the accuracy of third-party content, and Farelobby.com is not liable for any loss, delay, cancellation, or additional charges incurred due to changes made by airlines or service providers. Users are advised to carefully review all booking details, fare rules, and cancellation policies before making any travel arrangements.<br><br>

					By using our website, you agree to our <a href="terms-and-conditions.php">Terms of Service</a> and <a href="privacy-policy.php">Privacy Policy</a>. For any issues or clarifications, please contact our support team.
			 	</p>
			 	<hr class="hr">
			 </div>
			 <div class="col-md-6">
				<p class="copyright text-center text-md-start">Copyright © 2025 Farelobby.com. All rights reserved</p>
			</div>
			<div class="col-md-6">
				<ul class="footer-list2 justify-content-center justify-content-md-end">
					<li><a href="privacy-policy.php">Privacy Policy</a></li>
					<li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
				</ul>
			</div>
			
		</div>
	</div>	
</footer>


<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript">

// partner-logo carousel
$('#partner-logo-carousel').owlCarousel({
	  //items: 1,
	  loop: true,
	  //center:true,
	  singleItem:true,
	  navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      dots: false,
      nav: true, // Show next and prev buttons
      navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
      responsiveClass:true,
	  slideBy: 1,
	  margin: 25,
	  animateIn: true,
	  animateOut: true,
	  merge: true,
	  lazyLoad: true,
	  autoplay: true,
	  autoplayTimeout: 3000,
	  autoplayHoverPause: true,
	   responsive:{
		  0:{
		  items:2
		  },
		  768:{
		  items:4
		  },
		  992:{
		  items:6
		  }
		}
});       
</script>




<!-- Hide travelpayout watermark -->
<script>

function hideTPPoweredByInAllShadowRoots(node = document) {
  const treeWalker = document.createTreeWalker(node, NodeFilter.SHOW_ELEMENT);
  while (treeWalker.nextNode()) {
    const el = treeWalker.currentNode;

    // Try to access open shadow root
    if (el.shadowRoot) {
      // Look for .tp_powered_by inside this shadow root
      const target = el.shadowRoot.querySelector('.tp_powered_by');
      if (target) {
        target.style.display = 'none';
        console.log('Hidden .tp_powered_by in shadowRoot of', el);
      }
      // Recurse deeper
      hideTPPoweredByInAllShadowRoots(el.shadowRoot);
    }

    // If we can't access closed shadow roots, we skip those (browser limitation)
  }
}

// Run now and then observe future changes (dynamic content)
hideTPPoweredByInAllShadowRoots();

// Watch for new elements being added
const observer = new MutationObserver(() => {
  hideTPPoweredByInAllShadowRoots();
});
observer.observe(document, { childList: true, subtree: true });

</script>
</body>
</html>