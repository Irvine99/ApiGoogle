<?php

use Google\Service\AndroidPublisher\Timestamp;

require_once 'vendor/autoload.php';

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
        
        // $client->setApplicationName("sc-domain:la-ronde-des-nutons.fr");
        
        $webmastersService = new Google_Service_Webmasters($client);

        $searchanalytics = $webmastersService->searchanalytics;
        

        // replace 'siteUrl' with the actual site URL
        $response = $searchanalytics->query('sc-domain:la-ronde-des-nutons.fr', $request);
    
        $data = [];
        $data[] = $client;
        $data[] = $response;
        return $data;
    }

    public function getDate()
    {
        $date = date('Y-m-d');

        $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();

        $request->setStartDate("2019-01-01");
        $request->setEndDate("$date");
        return $request;
    }

    public function setDate($startDate, $endDate)
    {
        if($_POST)
        {
            if($_POST['startDate'] != "") {
                $startDate = $_POST['startDate'];
                if($_POST['endDate'] != "")
                {
                    $endDate = $_POST['endDate'];

                    $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();

                    $request->setStartDate("$startDate");
                    $request->setEndDate("$endDate");
                    var_dump($request);
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