function Promotions({prestataireInfo}) {
    return (
        <div>
            {prestataireInfo && prestataireInfo.stages.map((promotions, index) => (
            <div key={index}>
                <p>Promotions#{index+1}</p>
                <div className='border-dotted border py-2 border-t-black'></div>
                <p>Déscription: {promotions.description}</p>
                <p>Document: {promotions.documentPdf}</p>
            </div>
            ))}
        </div>
    )}
export default Promotions;