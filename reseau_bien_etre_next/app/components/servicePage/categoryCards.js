'use client'
import React from 'react';
import { useState, useEffect } from 'react';
import { GetCategory } from '../../api/getCategory';
import Cards from "../global/cardService";
import ServiceSearchBar from "./serviceSearchBar";

function CategoryCards() {
  const [categoryCard, setCategoryCard] = useState();
  // collect the URL
  const [urlService, setUrlService] = useState(`/api/categorie_de_servicess`);
  const categoryUrlToUse = (value) => {
    setUrlService(`/api/categorie_de_servicess?nom=${value}`);
    // re-render service cards
    callData();
  }

  // fonction d'appel de l'API services
  const callData = () => {
    // get promise
    if(urlService === undefined) {
      return;
    }
    const data = GetCategory(urlService);
    // what to do with the promise
    data.then(
      res => {
        const listCategories = res['hydra:member'].map((cardsData) => (
          <Cards cardsData={cardsData} key={cardsData['@id']}/>
        ));
        setCategoryCard(listCategories);
      }
    );
  }

  useEffect(() => {
    callData();
    // function used when component unmount
    return() => {};
  }, [setCategoryCard]) 

  return(
    <>
      <div className="flex bg-zinc-200 rounded-full h-10 md:h-12 md:w-1/3 border-none mt-10 mb-10">
        <ServiceSearchBar onSearchChange={categoryUrlToUse}/>
      </div>
      <ul className="flex flex-col md:flex-row items-center flex-wrap max-w-screen-lg">
        {categoryCard}
      </ul>   
    </>
  )
}
export default CategoryCards;