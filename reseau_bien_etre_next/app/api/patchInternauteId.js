// function to partially update Internaute Information
export async function patchInternauteId(id, internauteStates) {
    try{
        const res = await fetch(
            `http://localhost:8000/api/internautes/${id}`,
            {
                method:'PATCH',
                headers: {'Content-Type': 'application/merge-patch+json'},
                body: JSON.stringify(
                    internauteStates
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
};
