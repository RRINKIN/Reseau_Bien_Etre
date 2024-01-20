import React from 'react';
import { useEffect, useState } from 'react';
import { GetPrestataire } from '../../api/getPrestataire';
import Cards from '../global/cardPrestataire';

function PrestataireCards() {
  const [prestataireCard, setPrestataireCard] = useState();
  useEffect(() => {
    // get promise
    const data = GetPrestataire();
    // what to do with the promise
    data.then(
      res => {
        const listPrestataire = res['hydra:member'].map((cardsData) => (
          <Cards cardsData={cardsData} key={cardsData['@id']}/>
        ));
        setPrestataireCard(listPrestataire);
      }
    );
    // function used when component unmount
    return() => {};
  }, [setPrestataireCard]) 

  return(
    <ul className="flex flex-col md:flex-row items-center flex-wrap max-w-screen-lg">
      {prestataireCard}
    </ul>   
  )
}
export default PrestataireCards;