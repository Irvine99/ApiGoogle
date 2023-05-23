<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



</head>

<body>
  
  <button type="button">Authorize me</button>
  <script src="https://accounts.google.com/gsi/client"></script>

  <script>
    const json = {
      "web": {
        "client_id": "974654405852-8ki5cnk9pqmoklhc5ernac6h7frc8a9o.apps.googleusercontent.com",
        "project_id": "projet-api-385606",
        "auth_uri": "https://accounts.google.com/o/oauth2/auth",
        "token_uri": "https://oauth2.googleapis.com/token",
        "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
        "client_secret": "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",
        "javascript_origins": [
          "http://localhost",
          "http://127.0.0.1:5500"
        ]
      }
    }
    /**
     * Sample JavaScript code for webmasters.searchanalytics.query
     * See instructions for running APIs Explorer code samples locally:
     * https://developers.google.com/explorer-help/code-samples#javascript
     */

    const siteUrl = "sc-domain:la-ronde-des-nutons.fr";
    const startDate = "2020-06-06";
    const endDate = "2023-04-04";

    const fetchData = async ({
      access_token
    }) => {
      const response = await fetch(`https://www.googleapis.com/webmasters/v3/sites/${siteUrl}/searchAnalytics/query`, {
        method: 'POST',
        headers: {
          'Authorization': 'Bearer ' + access_token,
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          siteUrl: siteUrl,
          startDate: startDate,
          endDate: endDate
        })
      });
      const data = await response.json();
      console.log(data);
    }

    const client = google.accounts.oauth2.initTokenClient({
      client_id: json.web.client_id,
      scope: 'https://www.googleapis.com/auth/webmasters.readonly',
      callback: fetchData
    });

    const button = document.querySelector('button');
    button.addEventListener('click', () => {
      client.requestAccessToken();
    });
  </script>

</body>
</html>

"email profile openid
https://www.googleapis.com/auth/webmasters
https://www.googleapis.com/auth/userinfo.profile
https://www.googleapis.com/auth/userinfo.email
https://www.googleapis.com/auth/webmasters.readonly"