<?php 
// Product Details 
// Minimum amount is $0.50 US 
// Test Stripe API configuration 

define('STRIPE_API_KEY', 'sk_test_51HhonjJiyl95iPsrXGYAZrPhNR20FMDFFbTsjIWpYh0lLX45O2fSANdQKtaFMZVtrKX8Knx2p4LwevhkNSrFV1gz00P4KQzHlN');  
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51HhonjJiyl95iPsrHWk23ZtLhZOFgmONRWqH1CeMgdfRRckY9qDQ6UCTqnyxkylauC5xfEIdwLNCa82bgetSYCj800qe8A9gv2'); 

define('STRIPE_SUCCESS_URL', 'http://localhost/stripe/success.php'); 
define('STRIPE_CANCEL_URL', 'http://localhost/stripe/cancel.php'); 

// Database configuration   
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'paypage'); 
?>



