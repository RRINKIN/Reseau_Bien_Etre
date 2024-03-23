function Promotions({prestataireInfo}) {
    return (
        <div>
            {prestataireInfo && prestataireInfo.promotions.map((promotions, index) => (
            <div key={index}>
                <p>Promotions #{index+1}</p>
                <div className='border-dotted border py-2 border-t-black'></div>
                <p>Déscription: {promotions.description}</p>
                <p>Document: {promotions.documentPdf}</p>
                <p>Début du stage: {formatDate(promotions.debut)}</p>
                <p>Fin du stage: {formatDate(promotions.fin)}</p>
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

export default Promotions;