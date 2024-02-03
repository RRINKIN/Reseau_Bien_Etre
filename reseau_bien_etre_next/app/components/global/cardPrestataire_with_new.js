import React from "react"
import Image from "next/image"
import Link from "next/link";

const CardsWithNew = ({cardsData}) => {
    return (
      <div key={cardsData['@id']} className="max-w-xs rounded overflow-hidden shadow-lg m-2 hover:shadow-2xl">
        <Image src="/images/coiffeur.jpg" width="900" height="700" alt={`${cardsData.nom} - ${cardsData.proposer[0].nom}`} className="w-full" />
        <div className="px-6 py-4">
          <div className="font-bold text-2xl mb-2">{cardsData.nom}</div>
          {/* Generate multiple proposer names based on numberCategories */}
          {cardsData.proposer.map((proposer, index) => (
            <span key={index} className="font-bold text-lg mb-2 capitalize">
              {proposer.nom} |  
            </span>
          ))}
          <p className="text-gray-700 text-base max-w-72">
            {cardsData.proposer[0].description}
          </p>
        </div>
        <div className='flex flex-row justify-between items-center'>
          <div className="px-2 pt-4 pb-2 flex flex-row">
          <Link href={`/prestataires/${cardsData.id}`} className="font-bold text-2xl white mt=0 text-center capitalize">
            <p className='bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:text-white hover:fill-white hover:bg-zinc-500 duration-500'>Découvrir</p>
          </Link>
          <p className='bg-[#c3bef0] rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2 duration-500'>new</p>
          </div>
        </div>
      </div>
    )
}
export default CardsWithNew