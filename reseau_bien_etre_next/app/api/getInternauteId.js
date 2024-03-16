export async function getInternauteId(id) {
  const url = `http://localhost:8000/api/internautes/${id}`;
  const res = await fetch(url);
  if (!res.ok) {
    // This will activate the closest `error.js` Error Boundary
    throw new Error('Failed to fetch data');
  }

  return res.json();
};
