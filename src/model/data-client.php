<?php

require_once 'vendor/autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=credentials.json');

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope('https://www.googleapis.com/auth/webmasters.readonly');

if ($client->isAccessTokenExpired()) {
    $client->fetchAccessTokenWithAssertion();
}

$access_token = $client->getAccessToken();

var_dump($access_token);

// $client->setApplicationName("sc-domain:la-ronde-des-nutons.fr");

$webmastersService = new Google_Service_Webmasters($client);

$searchanalytics = $webmastersService->searchanalytics;
$request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();

$request->setStartDate("2020-06-06");
$request->setEndDate("2023-04-04");

// replace 'siteUrl' with the actual site URL
$response = $searchanalytics->query('sc-domain:la-ronde-des-nutons.fr', $request);