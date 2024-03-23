function Stages({prestataireInfo}) {
    return (
        <div>
            {prestataireInfo && prestataireInfo.stages.map((stages, index) => (
            <div key={index}>
                <p>Stage #{index+1}</p>
                <div className='border-dotted border py-2 border-t-black'></div>
                <p>Déscription: {stages.description}</p>
                <p>Détails: {stages.infoComplementaire}</p>
                <p>Instructeur: {stages.nom}</p>
                <p>Prix: {stages.tarif} €</p>
                <p>Début du stage: {formatDate(stages.debut)}</p>
                <p>Fin du stage: {formatDate(stages.fin)}</p>
            </div>
            ))}
        </div>
    )}

function formatDate(dateString) {
    const date = new Date(dateString);
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0'); // Add leading zero for single-digit months
    const day = String(date.getDate()).padStart(2, '0'); // Add leading zero for single-digit days
    
    return `${year}-${month}-${day}`;
    }

export default Stages;