<?php


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

        $date = date('Y-m-d');
        $webmastersService = new Google_Service_Webmasters($client);

        $searchanalytics = $webmastersService->searchanalytics;
        $request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();

        $request->setStartDate("2019-01-01");
        $request->setEndDate("$date");

        // replace 'siteUrl' with the actual site URL
        $response = $searchanalytics->query('sc-domain:la-ronde-des-nutons.fr', $request);
    
        $data = [];
        $data[] = $client;
        $data[] = $response;
        $data[] = $request;
        return $data;
    }
}

?>