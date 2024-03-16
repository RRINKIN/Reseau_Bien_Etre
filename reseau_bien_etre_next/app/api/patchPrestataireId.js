// function to update Prestataire Information
async function PatchPrestataireId(nom, siteInternet, numTel, numTVA, stages, promotions, images, commentaires, image_Logo, proposer, email, roles, password, dresseNum,adresseRue, localite, codePostal, commune) {
    try{
        const res = await fetch(
            `http://localhost:8000/api/prestataires/{id}`,
            {
                method:'PATCH',
                headers: {'Content-Type': 'application/ld+json'},
                body: JSON.stringify({
                    "nom": nom,
                    "siteInternet": siteInternet,
                    "numTel": numTel,
                })
            }
        );
        const result = await res.json();
        console.log(result);
        if (result.status) {
            if (result.status === 500) {
                alert("Cet e-mail existe déjà ;-)");   
            }
            throw new Error('Failed to fetch data: ' + result.status);
          }
          return result;
    } catch (error){
        console.error("Error:", error);
    }
} 
export default PatchPrestataireId
