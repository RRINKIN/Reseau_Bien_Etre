'use client'
import React from 'react';
import { useEffect, useState } from 'react';
import { GetPrestataire } from '../../api/getPrestataire';
import Cards from '../global/cardPrestataire';
import CardsWithNew from '../global/cardPrestataire_with_new';
import PaginationNext from "./paginationNext";
import PaginationPrevious from "./paginationPrevious";
import PrestataireSearchBar from "../homePage/prestataireSearchBar";
import PrestataireFilter from "../homePage/prestataireFilter"

function PrestataireCards() {
  const [prestataireCard, setPrestataireCard] = useState();

  // collect the URL
  const [urlPrestataire, setUrlPrestataire] = useState('/api/prestataires');
  const prestataireUrlToUse = (value) => {
    setUrlPrestataire(`/api/prestataires?nom=${value}`);
  }
  const [nextUrlPrestataire, setNextUrlPrestataire] = useState('');
  const [previousUrlPrestataire, setPreviousUrlPrestataire] = useState('');

  const prestataireUrlToUseforNext = (e) => {
    if (nextUrlPrestataire !== undefined) {
      setUrlPrestataire(`${nextUrlPrestataire.toString()}`);
    } else {
      // set url to an empty string
      setUrlPrestataire('/api/prestataires');
    }
  }
  const prestataireUrlToUseforPrevious = (a) => {
    if (previousUrlPrestataire !== undefined) {
      setUrlPrestataire(`${previousUrlPrestataire.toString()}`);
    } else {
      // set url to an empty string
      setUrlPrestataire('/api/prestataires');
    }
  }

  // fonction d'appel de l'API services
  const callPrestataireData = () => {
    // get promise
    const data = GetPrestataire(urlPrestataire);
    // what to do with the promise
    data.then(
      res => {
        const prestataireCards = [];
        let nextApiUrl = res['hydra:view']['hydra:next'];
        let previousApiUrl = res['hydra:view']['hydra:previous'];
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
        setPreviousUrlPrestataire(previousApiUrl);
      })
    }

    let displayPreviousButton;
    if (previousUrlPrestataire != undefined) {
      displayPreviousButton = <PaginationPrevious onPaginationPreviousClick={prestataireUrlToUseforPrevious} />;
    } 

    let displayNextButton;
    if (nextUrlPrestataire != undefined) {
      displayNextButton = <PaginationNext onPaginationNextClick={prestataireUrlToUseforNext}/>;
    }

  useEffect(() => {
    callPrestataireData();
    // function used when component unmount
    return() => {};
  },[urlPrestataire]) 

  return(
    <>
      <div className="flex flex-row items-center justify-center md:w-2/3">
        {/*<input type="search" id="search" name="search" placeholder="Que cherchez-vous?" className="bg-transparent px-4 outline-none" />*/}
        <div className='m-5'>
          <PrestataireFilter />
        </div>
        <div>
          <PrestataireSearchBar onSearchChange={prestataireUrlToUse}/>
        </div>
      </div>
      <ul className="flex flex-col md:flex-row items-center flex-wrap max-w-screen-lg">
        {prestataireCard}
      </ul>
      <div className='flex flex-row justify-around md:w-1/3'>
        {displayPreviousButton}
        {displayNextButton}
      </div>
    </>
  )
}
export default PrestataireCards;