// function to update Prestataire Information
export async function patchPrestataireId(id, prestataireStates) {
    try{
        const res = await fetch(
            `http://localhost:8000/api/prestataires/${id}`,
            {
                method:'PATCH',
                // PATCH doesn't support 'application/ld+json' content-type.
                headers: {'Content-Type': 'application/merge-patch+json'},
                body: JSON.stringify(
                    prestataireStates
                )
            }
        );
        const result = await res.json();
        if (result.status) {
            if (result.status === 500) {
                alert("Oups. Vos données n'ont pas pu être mises à jour.");   
            }
            throw new Error('Failed to fetch data: ' + result.status);
          }
          return result;
    } catch (error){
        console.error("Error:", error);
    }
} 
