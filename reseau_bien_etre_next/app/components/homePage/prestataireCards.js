'use client'
import React from 'react';
import { useEffect, useState } from 'react';
import { GetPrestataire } from '../../api/getPrestataire';
import Cards from '../global/cardPrestataire';
import CardsWithNew from '../global/cardPrestataire_with_new';
import Pagination from "./pagination";

function PrestataireCards() {
  const [prestataireCard, setPrestataireCard] = useState();

  // collect the URL
  const [urlPrestataire, setUrlPrestataire] = useState('/api/prestataires');
  const [nextUrlPrestataire, setNextUrlPrestataire] = useState('');
  const prestataireUrlToUseforNext = (e) => {
    setUrlPrestataire(`${nextUrlPrestataire.toString()}`);
  }

  // fonction d'appel de l'API services
  const callPrestataireData = () => {
    // get promise
    console.log(urlPrestataire, 'test');
    const data = GetPrestataire(urlPrestataire);
    // what to do with the promise
    data.then(
      res => {
        const prestataireCards = [];
        let nextApiUrl = res['hydra:view']['hydra:next'];
        //let previousApiUrl = res['hydra:view']['hydra:previous'];
        let counter = 0;
        for (const cardsData of res['hydra:member']) {
          if (counter < 4) {
            prestataireCards.push(<CardsWithNew cardsData={cardsData} key={cardsData['@id']}/>); 
            counter++;
          } else {
            prestataireCards.push(<Cards cardsData={cardsData} key={cardsData['@id']} />);
          }
        }
        setPrestataireCard(prestataireCards);
        setNextUrlPrestataire(nextApiUrl);
      })
    }

  useEffect(() => {
    callPrestataireData();
    // function used when component unmount
    return() => {};
  },[urlPrestataire]) 

  return(
    <>
      <ul className="flex flex-col md:flex-row items-center flex-wrap max-w-screen-lg">
        {prestataireCard}
      </ul>
      <Pagination onPaginationNextClick={prestataireUrlToUseforNext} />
    </>
  )
}
export default PrestataireCards;