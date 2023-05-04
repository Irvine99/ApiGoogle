<script src="https://apis.google.com/js/platform.js"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
    <div id="g_id_onload"
         data-client_id="974654405852-8ki5cnk9pqmoklhc5ernac6h7frc8a9o.apps.googleusercontent.com"
         data-callback="handleCredentialResponse">
    </div>
    
    <div class="g_id_signin" data-type="standard"></div>
    <script>
      function handleCredentialResponse(resp) {
        console.log(resp)
        
      }
      
    </script>
<script>
  /**
   * Sample JavaScript code for webmasters.searchanalytics.query
   * See instructions for running APIs Explorer code samples locally:
   * https://developers.google.com/explorer-help/code-samples#javascript
   */

  function authenticate() {
    return gapi.auth2.getAuthInstance()
        .signIn({scope: "https://www.googleapis.com/auth/webmasters https://www.googleapis.com/auth/webmasters.readonly"})
        .then(function() { console.log("Sign-in successful"); },
              function(err) { console.error("Error signing in", err); });
  }
  function loadClient() {
    gapi.client.setApiKey("AIzaSyDpmMEOwKFA-t_zr87iMmRVghvHnd_vOwA");
    return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/searchconsole/v1/rest")
        .then(function() { console.log("GAPI client loaded for API"); },
              function(err) { console.error("Error loading GAPI client for API", err); });
  }
  // Make sure the client is loaded and sign-in is complete before calling this method.
  function execute() {
    return gapi.client.webmasters.searchanalytics.query({
      "siteUrl": "sc-domain:la-ronde-des-nutons.fr",
      "resource": {
        "startDate": "2022-06-06",
        "endDate": "2023-05-05"
      }
    })
        .then(function(response) {
                // Handle the results here (response.result has the parsed body).
                console.log("Response", response);
              },
              function(err) { console.error("Execute error", err); });
  }
  gapi.load("client:auth2", function() {
    gapi.auth2.init({client_id: "974654405852-8ki5cnk9pqmoklhc5ernac6h7frc8a9o.apps.googleusercontent.com"});
  });
</script>
<button onclick="authenticate().then(loadClient)">authorize and load</button>
<button onclick="execute()">execute</button>
