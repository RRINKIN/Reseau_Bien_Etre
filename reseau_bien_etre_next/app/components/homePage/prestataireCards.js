'use client'
import React from 'react';
import { useEffect, useState } from 'react';
import { GetPrestataire } from '../../api/getPrestataire';
import Cards from '../global/cardPrestataire';
import CardsWithNew from '../global/cardPrestataire_with_new';

function PrestataireCards() {
  const [prestataireCard, setPrestataireCard] = useState();
  useEffect(() => {
    // get promise
    const data = GetPrestataire();
    // what to do with the promise
    data.then(
      res => {
        // sort array based on id
        const sortedRes = res['hydra:member'].sort((a,b)=> b['id'] - a['id']);
        // map prestataires and directly update the state
        /*setPrestataireCard(sortedRes.map((cardsData) => (
          <Cards cardsData={cardsData} key={cardsData['@id']}/>
        )));*/
        const prestataireCards = [];
        let counter = 0;
        for (const cardsData of sortedRes) {
          if (counter < 4) {
            prestataireCards.push(<CardsWithNew cardsData={cardsData} key={cardsData['@id']}/>); 
            counter++;
          } else {
            prestataireCards.push(<Cards cardsData={cardsData} key={cardsData['@id']} />);
          }
        }
        setPrestataireCard(prestataireCards);
      }, [GetPrestataire]);
    // function used when component unmount
    return() => {};
  }, [setPrestataireCard]) 
  console.log(prestataireCard);

  return(
    <ul className="flex flex-col md:flex-row items-center flex-wrap max-w-screen-lg">
      {prestataireCard}
    </ul>   
  )
}
export default PrestataireCards;