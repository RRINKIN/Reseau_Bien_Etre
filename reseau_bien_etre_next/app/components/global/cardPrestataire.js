import React from "react"
import Image from "next/image"

const Cards = ({cardsData}) => {
    return (
        <div key={cardsData['@id']} className="max-w-xs rounded overflow-hidden shadow-lg m-2 hover:shadow-2xl">
        <Image src="/images/coiffeur.jpg" width="900" height="700" alt="Coiffure" className="w-full" />
        <div className="px-6 py-4">
          <div className="font-bold text-2xl mb-2">{cardsData.nom}</div>
          <div className="font-bold text-lg mb-2 capitalize">{cardsData.proposer[0].nom}</div>
          <div>Inscription:{cardsData.inscription}</div>
          <p className="text-gray-700 text-base max-w-72">
          {cardsData.proposer[0].description}
          </p>
        </div>
        <div className='flex flex-row justify-between items-center'>
          <div className="px-6 pt-4 pb-2">
            <span className="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{cardsData.proposer[0].nom}</span>
          </div>
          <div className="px-2 pt-4 pb-2">
            <p className='bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:text-white hover:fill-white hover:bg-zinc-500 duration-500'>Découvrir</p>
          </div>
        </div>
      </div>
    )
}
export default Cards