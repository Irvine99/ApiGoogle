<?php

require_once 'vendor/autoload.php';
use Google\Service\AndroidPublisher\Timestamp;



class ConnectApi {

    public function connectApi() {

        putenv('GOOGLE_APPLICATION_CREDENTIALS=json/credentials.json');

        $client = new GuzzleHttp\Client();

        $request = $client->request('GET','https://la-ronde-des-nutons.fr', ['verify' => 'cacert.pem']);

        $client = new Google_Client();

        $client->useApplicationDefaultCredentials();

        $client->addScope('https://www.googleapis.com/auth/webmasters.readonly');

        if ($client->isAccessTokenExpired()) {
            $client->fetchAccessTokenWithAssertion();
        }
        
        $access_token = $client->getAccessToken();
        $_SESSION['access_token'] = $access_token;
        return $client;
    }

    public function getInfo($client, $request) {

        $client->setApplicationName("sc-domain:la-ronde-des-nutons.fr");
        
        $webmastersService = new Google_Service_Webmasters($client);

        $searchanalytics = $webmastersService->searchanalytics;

        $response = $searchanalytics->query('sc-domain:la-ronde-des-nutons.fr', $request);

        return $response;
    }

    public function getDate()
    {
        $date = date('Y-m-d');

        $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();
        $request->setDimensions(['date']);
        // $request->setRowLimit(10);
        $request->setStartDate("2023-01-01");
        $request->setEndDate("$date");
        return $request;
    }
    public function getDateTotal()
    {
        $date = date('Y-m-d');

        $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();

        // $request->setRowLimit(10);
        $request->setStartDate("2023-01-01");
        $request->setEndDate("$date");
        return $request;
    }

    public function setDate($startDate, $endDate)
    {
        if($startDate)
        {
            if($startDate < $endDate) {
                
                if($endDate > $startDate)
                {

                    $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();
                    $request->setDimensions(['date']);
                    $request->setStartDate("$startDate");
                    $request->setEndDate("$endDate");
                    return $request;
                }
                else
                {
                    echo 'Wesh gros tu sais pas lire';
                }
            }
            else
            {
                $this->getDate();
            }
        }
        else
        {
            $this->getDate();
        }
    }
    public function setDateTotal($startDate, $endDate)
    {
        if($startDate)
        {
            if($startDate < $endDate) {
                
                if($endDate > $startDate)
                {

                    $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();
                  
                    $request->setStartDate("$startDate");
                    $request->setEndDate("$endDate");
                    return $request;
                }
                else
                {
                    $endDate = date('Y-m-d');
                    $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();
                   
                    $request->setStartDate("$startDate");
                    $request->setEndDate("$endDate");
                    return $request;
                }
            }
            else
            {
                $this->getDate();
            }
        }
        else
        {
            $this->getDate();
        }
    }
}

?>