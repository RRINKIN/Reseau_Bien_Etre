export async function GetCategory(urlService) {
  //const param = enAvant===undefined ? '' : '?enAvant=' + enAvant;
  console.log(urlService);
  const res = await fetch(`http://localhost:8000${urlService}`)
  //const res = await fetch(process.env.API_BASE+'/api/categorie_de_servicess')
  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error('Failed to fetch data')
  }
  return res.json();
};
