	</div> 
</div> 
</div>
</div>
</div>
<br>
<hr>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>
<footer>
	<div id="footer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<p class="fh5co-social-icons">
					<a href="#"><i class="icon-twitter2"></i></a>
					<a href="#"><i class="icon-facebook2"></i></a>
					<a href="#"><i class="icon-instagram"></i></a>
					<a href="#"><i class="icon-dribbble2"></i></a>
					<a href="#"><i class="icon-youtube"></i></a>
				</p>
				<p>Copyright 2018 <a href="#">Listing</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by Muhammad Syahputra</a> / Demo Images: <a href="https://www.facebook.com/photo.php?fbid=887620094773707&set=a.107113956157662.1073741825.100005771738672&type=3&theater" target="_blank">Unsplash</a></p>
			</div>
		</div>
	</div>
</footer>

<!-- jQuery -->
<script src="<?php echo base_url('assets/hotel/js/jquery.min.js'); ?>"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url('assets/hotel/js/jquery.easing.1.3.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/hotel/js/bootstrap.min.js'); ?>"></script>
<!-- Waypoints -->
<script src="<?php echo base_url('assets/hotel/js/jquery.waypoints.min.js'); ?>"></script>
<!-- Waypoints -->
<script src="<?php echo base_url('assets/hotel/js/jquery.stellar.min.js'); ?>"></script>
<!-- Flexslider -->
<script src="<?php echo base_url('assets/hotel/js/jquery.flexslider-min.js'); ?>"></script>
<!-- Main -->
<script src="<?php echo base_url('assets/hotel/js/main.js'); ?>"></script>
<!-- Rating -->
<script src="<?php echo base_url('assets/hotel/js/rating.js'); ?>"></script>
  <script type="text/javascript">
    $(function(){
      $('.rating').on('rating.change', function(event, value, caption) {
      productId = $(this).attr('productId');
      $.ajax({
            url: "rating.php",
            dataType: "json",
            data: {vote:value, productId:productId, type:'save'},
            success: function( data ) {
            alert("rating saved");
          },
        error: function(e) {
        console.log(e);
      },
        timeout: 30000  
      });
    });
  });
  </script>
</body>
</html>