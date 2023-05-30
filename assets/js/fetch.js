
// Définir les paramètres de la requête
const startDate = "2022-04-01"; // Définir la date de début de la plage de données
const endDate = "2022-04-30"; // Définir la date de fin de la plage de données
const dimensions = "page"; // Définir les dimensions des données de performance (ici, les pages)
const searchType = "web"; // Définir le type de recherche (ici, recherche Web)

// Définir les options de la requête
const requestOptions = {
  method: "POST",
  headers: {
    //Authorization: `Bearer VOTRE_TOKEN`,
    "Content-Type": "application/json"
  },
  body: JSON.stringify({
    startDate,
    endDate,
    dimensions: [dimensions],
    searchType
  })
};

// Effectuer une requête asynchrone à l'API Search Console
fetch("https://www.googleapis.com/webmasters/v3/sites/https://la-ronde-des-nutons.fr/searchAnalytics/query", requestOptions)
  .then(response => response.json()) // Extraire les données JSON de la réponse de la requête
  .then(data => { // Manipuler les données JSON
    const clicks = data.rows[0].clicks; // Extraire le nombre de clics à partir de l'objet JSON
    console.log(`Nombre de clics : ${clicks}`);
  })
  .catch(error => console.error(error));
