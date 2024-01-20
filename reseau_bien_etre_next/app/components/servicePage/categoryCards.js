'use client'
import React from 'react';
import { useState, useEffect } from 'react';
import { GetCategory } from '../../api/getCategory';
import Cards from "../global/cardService"

function CategoryCards() {
  const [categoryCard, setCategoryCard] = useState();
  useEffect(() => {
    // get promise
    const data = GetCategory();
    // what to do with the promise
    data.then(
      res => {
        const listCategories = res['hydra:member'].map((cardsData) => (
          <Cards cardsData={cardsData} key={cardsData['@id']}/>
        ));
        setCategoryCard(listCategories);
      }
    );
    // function used when component unmount
    return() => {};
  }, [setCategoryCard]) 

  return(
    <ul className="flex flex-col md:flex-row items-center flex-wrap max-w-screen-lg">
      {categoryCard}
    </ul>   
  )
}
export default CategoryCards;