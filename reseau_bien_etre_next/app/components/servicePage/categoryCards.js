import React from 'react';
import { GetCategory } from '../../api/getCategory';
import Image from 'next/image';

async function CategoryCards() {
    const data = await GetCategory();
    const listCategories = data['hydra:member'].map((x) => (
      <div key={x} className="max-w-sm rounded overflow-hidden shadow-lg m-2 hover:shadow-2xl">
        <Image src="/images/coiffeur.jpg" width="900" height="700" alt="Categorie" className="w-full" />
        <div className="px-6 py-4">
            <div className="font-bold text-2xl mb-2">{x.nom}</div>
            <p className="text-gray-700 text-base max-w-72">
              {x.description}
            </p>
        </div>
        <div className='flex flex-row justify-between items-center'>
          <div className="px-2 pt-4 pb-2">
            <p className='bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:text-white hover:fill-white hover:bg-zinc-500 duration-500'>Découvrir</p>
          </div>
        </div>
      </div> 
    ));

    return (
        <div className='flex flex-col md:flex-row items-center flex-wrap max-w-screen-lg'>
          {listCategories}
        </div>
    )
}
export default CategoryCards;