<?php 
require("page.php");

$homepage = new Page();

$homepage->content ="<!-- page content -->
					<section>
					<h2>Welcome to the home page of this beautiful website</h2>
					<p>Please take some time to read through all of the information. Be ware of the details hidden within.</p>
					<p>If you do not read through carefully, you will be sorry.</p>
					</section>";

$homepage->Display();

?>