
export async function GetCategory(enAvant) {
  const param = enAvant===undefined ? '' : '?enAvant=' + enAvant;
  //const res = await fetch('https://localhost:8000'+'/api/categorie_de_servicess')
  const res = await fetch(process.env.API_BASE+'/api/categorie_de_servicess')
  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error('Failed to fetch data')
  }
  return res.json();
};
