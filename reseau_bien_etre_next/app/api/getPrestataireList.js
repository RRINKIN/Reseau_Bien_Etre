export default async function GetPrestataireList(categoryId) {
  const res = await fetch(`http://localhost:8000/api/service/${categoryId}/prestataire`)
  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error('Failed to fetch data')
  }
  return res.json();
}
