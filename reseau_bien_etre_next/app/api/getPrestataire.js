export async function GetPrestataire() {
  //const res = await fetch(process.env.NEXT_PUBLIC_API_BASE+'/api/prestataires')
  const res = await fetch('http://localhost:8000'+'/api/prestataires')
  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error('Failed to fetch data')
  }
  return res.json();
}

