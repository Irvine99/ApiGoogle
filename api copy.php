<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Search Console API Example</title>
    <script src="https://accounts.google.com/gsi/client"></script>
</head>
<body>
  <script src="https://accounts.google.com/gsi/client" async defer></script>

  <div id="g_id_onload"
      data-client_id="974654405852-8ki5cnk9pqmoklhc5ernac6h7frc8a9o.apps.googleusercontent.com"
      data-auto_prompt="false"></div>
  <div class="g_id_signin"
        data-type="standard"
        data-size="large"
        data-theme="outline"
        data-text="sign_in_with"
        data-prompt_parent_id="g_id_onload">
  </div>

  <pre id="response"></pre>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script>
      function onSignIn(googleUser) {
          console.log(googleUser)
          var id_token = googleUser.getAuthResponse().id_token;
          var xhr = new XMLHttpRequest();
          xhr.open('POST', 'https://oauth2.googleapis.com/token');
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          xhr.onload = function() {
              var response = JSON.parse(xhr.responseText);
              console.log(response);
              var access_token = response.access_token;
              gapi.load('client', function() {
                  gapi.client.init({
                      'apiKey': 'AIzaSyDpmMEOwKFA-t_zr87iMmRVghvHnd_vOwA',
                      'clientId': '974654405852-8ki5cnk9pqmoklhc5ernac6h7frc8a9o.apps.googleusercontent.com',
                      'scope': 'https://www.googleapis.com/auth/webmasters.readonly'
                  }).then(function() {
                      gapi.auth.setToken({
                          'access_token': access_token
                      });
                      gapi.client.webmasters.searchanalytics.query({
                          'siteUrl': 'sc-domain:la-ronde-des-nutons.fr',
                          'startDate': '2023-04-01',
                          'endDate': '2023-04-30',
                          'dimensions': ['query', 'page'],
                          'searchType': 'web',
                          'rowLimit': 10
                      }).then(function(response) {
                          console.log(response.result);
                          document.getElementById('response').textContent = JSON.stringify(response.result);
                      }, function(reason) {
                          console.error('Error: ' + reason.result.error.message);
                      });
                  });
              });
          };
          xhr.send('grant_type=urn:ietf:params:oauth:grant-type:jwt-bearer&assertion=' + id_token);
      }
  </script>
  <script>
  google.accounts.id.initialize({
    client_id: '974654405852-8ki5cnk9pqmoklhc5ernac6h7frc8a9o.apps.googleusercontent.com',
    callback: onSignIn,
    auto_select: false
  });
</script>

</body>
</html>
