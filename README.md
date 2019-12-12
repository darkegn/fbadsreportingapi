# fbadsreportingapi

How to Use?

```php

$fb = new FacebookApi();
$fb->setBusiness('YOUR_FACEBOOK_BUSINESS_ID);

// get account campaigns  

$fb->getAccountCampaigns('YOUR_FACEBOOK_ADS_ACCOUNT_ID);

// get report campaign cpc,cpm,conversion...

$fb->getReportData('YOUR_FACEBOOK_ADS_ACCOUNT_ID');


...
