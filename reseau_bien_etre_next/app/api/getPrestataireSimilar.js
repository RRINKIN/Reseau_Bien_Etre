export default async function GetPrestataireSimilar(localite, categoryId) {
  const res = await fetch(`http://localhost:8000/api/prestataires?page=1&localite.localite=${localite}&proposer.id=${categoryId}`)
  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error('Failed to fetch data')
  }
  return res.json();
}
