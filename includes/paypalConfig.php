<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AWNdbDokBIyQRBQ-2D3shjl6pOas3aSE4RcFA0VmidNr3Jd_OtRpYLsKCexd27aoQdUQi9QkgPWeglg-',     // ClientID
        'EHvQnEt9cCHelBWiWqOMVEq9-9vfTuNn6fhlAHLDaAHXniYOTzurSF7ECeIlBiqMS6WahJqvE4Pv7QrF'      // ClientSecret
    )
);

?>