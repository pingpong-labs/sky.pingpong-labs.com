<!DOCTYPE html>
<html>
<head>
  <title>Pingpong Sky - Donation</title>
  @include('partials.head')
  <link rel="stylesheet" type="text/css" href="/css/home.css">
</head>
<body>
  @include('partials.header')

  <main class="container">
    <section class="section">
    	<h5>Donate to Pingpong Sky</h5>
    	<p>
    		As you may know, we don't charge a penny for Pingpong Sky but it still costs us time and money to run the service. If you like what we do and would like to help us out, you can donate to via Paypal.
    	</p>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_donations">
		<input type="hidden" name="business" value="HFNTLW4UVFHLY">
		<input type="hidden" name="lc" value="ID">
		<input type="hidden" name="item_name" value="Pingpong Sky Donation">
		<input type="hidden" name="item_number" value="PP-SKY">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
    </section>
  </main>

  @include('partials.footer')

</body>
</html>
