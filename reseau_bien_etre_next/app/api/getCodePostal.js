export async function GetCodePostals() {
  const res = await fetch(process.env.API_BASE+'/api/code_postals')
  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error('Failed to fetch data')
  }
  return res.json();
}