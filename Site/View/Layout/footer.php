<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			
			<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
					<li><a href="#">How to order</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="contact.html">Location</a></li>
					<li><a href="#">Shipping</a></li>
					<li><a href="#">Membership</a></li>	
				</ul>	
			</div>
			<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
				<p>
				Contrary to popular belief</p>
				<p>The standard chunk</p>
				<p>office:  +12 34 995 0792</p>
				<ul class="social">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="twitter"> </i></a></li>
					<li><a href="#"><i class="rss"> </i></a></li>
					<li><a href="#"><i class="gmail"> </i></a></li>
					
				</ul>
			</div>
			<div class="col-md-4 amet-sed">
				<h4>Newsletter</h4>
				<p>Sign Up to get all news update
				and promo</p>
				<form>
					<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<input type="submit" value="Sign up">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-class">
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
</div>

<script>
	$(function(){
        $updatecart = $(".updatecart");
        $updatecart.click(function(e)
        {
            e.preventDefault();
            $qty = $(this).parents("tr").find(".qty").val();
            $key = $(this).attr("data-key");
            $.ajax({
                url: '?controller=cart&action=update_cate',
                type: 'GET',
                data: { 'qty':$qty, 'key':$key},
                success:function(data)
                {
                    if(data=1)
                    {
                        alert("Cập nhật giỏ hàng thành công.");
                        location.href = '?controller=cart';
                    }
                }
            }); 

        })
    })
</script>