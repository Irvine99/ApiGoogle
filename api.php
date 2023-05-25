<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



</head>

<body>

 

  <!--<button type="button">Authorize me</button>
  <script src="https://accounts.google.com/gsi/client"></script>
-->

  <script>
// Encode Base64 URL sécurisé
function base64UrlEncode(str) {
  let base64 = btoa(str);
  base64 = base64.replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/, '');
  return base64;
}

// Obtenir le temps actuel en secondes
const currentTime = Math.floor(Date.now() / 1000);

// Définir les parties du JWT
const header = {
  alg: 'RS256',
  typ: 'JWT',
  kid: '117622678553108254207'
};

const payload = {
  iss: '',
  scope: 'https://www.googleapis.com/auth/webmasters.readonly',
  aud: 'https://oauth2.googleapis.com/token',
  exp: currentTime + 3600, // expiration d'une heure à partir de maintenant
  iat: currentTime // émis à l'heure actuelle
};
**
// Convertir les parties en chaînes JSON
const encodedHeader = base64UrlEncode(JSON.stringify(header));
const encodedPayload = base64UrlEncode(JSON.stringify(payload));

// Concaténer les parties avec un point
const jwt = encodedHeader + '.' + encodedPayload;

const secretKey = '117622678553108254207';

// Fonction de signature HMAC-SHA256
function signWithHmacSha256(message, secret) {
  const encoder = new TextEncoder();
  const data = encoder.encode(message);
  const key = encoder.encode(secret);
  return crypto.subtle.importKey('raw', key, { name: 'HMAC', hash: 'SHA-256' }, true, ['sign'])
    .then(key => crypto.subtle.sign('HMAC', key, data))
    .then(signature => base64UrlEncode(String.fromCharCode.apply(null, new Uint8Array(signature))));
}

// Signer le JWT avec HMAC-SHA256
signWithHmacSha256(jwt, secretKey)
  .then(signature => {
    const signedJwt = jwt + '.' + signature;
    console.log(signedJwt);
  })
  .catch(error => {
    console.error('Erreur lors de la signature du JWT :', error);
  });















//     const json = {
//       "web": {
//         "client_id": "",
//         "project_id": "",
//         "auth_uri": "https://accounts.google.com/o/oauth2/auth",
//         "token_uri": "https://oauth2.googleapis.com/token",
//         "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
//         "client_secret": "",
//         "javascript_origins": [
//           "http://localhost",
//           "http://127.0.0.1:5500"
//         ]
//       }
//     }
//     /**
//      * Sample JavaScript code for webmasters.searchanalytics.query
//      * See instructions for running APIs Explorer code samples locally:
//      * https://developers.google.com/explorer-help/code-samples#javascript
//      */


//     const siteUrl = "";
//     const startDate = "2020-06-06";
//     const endDate = "2023-04-04";
    
    

//     const fetchData = async ({
// access_token
//     }) => {
//       const response = await fetch('https://www.googleapis.com/webmasters/v3/sites/sc-domain:la-ronde-des-nutons.fr/searchAnalytics/query', {
//         method: 'POST',
//         headers: {
//           'Authorization': 'Bearer ' + access_token,
//           'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({
//           siteUrl: siteUrl,
//           startDate: startDate,
//           endDate: endDate
//         })
//       });
//       const data = await response.json();
//       console.log(data);
//     }

//     const client = google.accounts.oauth2.initTokenClient({
//       client_id: json.web.client_id,
//       scope: 'https://www.googleapis.com/auth/webmasters.readonly',
//       callback: fetchData
//     });



//     const button = document.querySelector('button');
//     button.addEventListener('click', () => {
//       client.requestAccessToken();
      
      
    
      
      
//     });
   

    
  
  // var YOUR_CLIENT_ID = '';
  // var YOUR_REDIRECT_URI = 'http://localhost';
  // var fragmentString = location.hash.substring(1);

  // // Parse query string to see if page request is coming from OAuth 2.0 server.
  // var params = {};
  // var regex = /([^&=]+)=([^&]*)/g, m;
  // while (m = regex.exec(fragmentString)) {
  //   params[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
  // }
  // if (Object.keys(params).length > 0) {
  //   localStorage.setItem('oauth2-test-params', JSON.stringify(params) );
  //   if (params['state'] && params['state'] == 'try_sample_request') {
  //     trySampleRequest();
  //   }
  // }

  // // If there's an access token, try an API request.
  // // Otherwise, start OAuth 2.0 flow.
  // function trySampleRequest() {
  //   var params = JSON.parse(localStorage.getItem('oauth2-test-params'));
  //   if (params && params['access_token']) {
  //     var xhr = new XMLHttpRequest();
  //     xhr.open('GET',
  //         'https://www.googleapis.com/webmasters/v3/sites/sc-domain:la-ronde-des-nutons.fr/searchAnalytics/query' +
  //         'access_token=' + params['access_token']);
  //     xhr.onreadystatechange = function (e) {
  //       if (xhr.readyState === 4 && xhr.status === 200) {
  //         console.log(xhr.response);
  //       } else if (xhr.readyState === 4 && xhr.status === 401) {
  //         // Token invalid, so prompt for user permission.
  //         oauth2SignIn();
  //       }
  //     };
  //     xhr.send(null);
  //   } else {
  //     oauth2SignIn();
  //   }
  // }

  // /*
  //  * Create form to request access token from Google's OAuth 2.0 server.
  //  */
  // function oauth2SignIn() {
  //   // Google's OAuth 2.0 endpoint for requesting an access token
  //   var oauth2Endpoint = 'https://accounts.google.com/o/oauth2/v2/auth';

  //   // Create element to open OAuth 2.0 endpoint in new window.
  //   var form = document.createElement('form');
  //   form.setAttribute('method', 'GET'); // Send as a GET request.
  //   form.setAttribute('action', oauth2Endpoint);

  //   // Parameters to pass to OAuth 2.0 endpoint.
  //   var params = {'client_id': '',
  //                 'redirect_uri': 'http://localhost',
  //                 'scope': 'https://www.googleapis.com/auth/webmasters.readonly',
  //                 'state': 'try_sample_request',
  //                 'include_granted_scopes': 'true',
  //                 'response_type': 'token'};

  //   // Add form parameters as hidden input values.
  //   for (var p in params) {
  //     var input = document.createElement('input');
  //     input.setAttribute('type', 'hidden');
  //     input.setAttribute('name', p);
  //     input.setAttribute('value', params[p]);
  //     form.appendChild(input);
  //   }

  //   // Add form to page and submit it to open the OAuth 2.0 endpoint.
  //   document.body.appendChild(form);
  //   form.submit();
  // }


 
 </script>
 <button onclick="trySampleRequest();">Try sample request</button>
<!-- <button type="button">Authorize me</button>
<script src="https://apis.google.com/js/api.js"></script>
<script src="https://accounts.google.com/gsi/client"></script>

<script>
  /**
   * Sample JavaScript code for webmasters.searchanalytics.query
   * See instructions for running APIs Explorer code samples locally:
   * https://developers.google.com/explorer-help/code-samples#javascript
   */

  const json = {
    "web": {
      "client_id": "",
      "project_id": "",
      "auth_uri": "https://accounts.google.com/o/oauth2/auth",
      "token_uri": "https://oauth2.googleapis.com/token",
      "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
      "client_secret": "",
      "javascript_origins": [
        "http://localhost",
        "http://127.0.0.1:5500"
      ]
    }
  }

  const siteUrl = "https://www.googleapis.com/webmasters/v3/sites/'url'/searchAnalytics/query";
  const startDate = "2020-06-06";
  const endDate = "2023-04-04";

  const fetchData = async (access_token) => {
    const response = await fetch('https://www.googleapis.com/webmasters/v3/sites/sc-domain:la-ronde-des-nutons.fr/searchAnalytics/query', {
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

  gapi.load('client:auth2', () => {
    gapi.auth2.init({
      client_id: json.web.client_id
    });
  });

  const button = document.querySelector('button');
  button.addEventListener('click', async () => {
    const user = await gapi.auth2.getAuthInstance().signIn();
    const access_token = user.getAuthResponse().access_token;
    fetchData(access_token);
  }); -->
 <!--</script> -->




</body>

</html>



