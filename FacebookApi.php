<?php

/* author : Erdem Egin */
/* date . 2019 - 12- 11 */
/* https://github.com/darkegn*/

class FacebookApi
{

    private $accesstoken = "YOUR_APP_ACCESS_TOKEN";
  
    public function api($slug)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v5.0/' . $slug . 'access_token=' . $this->accesstoken . '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $re = json_decode($result);
    }

    public function SetBusiness($id)
    {

        return $this->setSlug("$id/owned_ad_accounts?");

    }

    public function setSlug($slug)
    {
        return $this->api($slug);
    }


    public function setAccountName($aid)
    {
        return $this->setSlug("$aid?fields=name&");
    }

    public function getAccountCampaigns($aid)
    {
        return $this->setSlug("$aid/campaigns?");

    }

    public function getCampaignName($cid){

        return $this->setSlug("$cid?fields=name&");
    }

    public function getReportData($cid){

        return $this->setSlug("$cid/insights?fields=impressions,clicks,ctr,objective,unique_ctr,spend,cpc,reach,campaign_name&date_preset=today");
    }


}


?>
