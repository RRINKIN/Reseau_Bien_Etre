import React from "react"
import Image from "next/image"
import Link from "next/link"

const Cards = ({cardsData}) => {
    return (
      <div key={cardsData.id} className="max-w-xs rounded overflow-hidden shadow-lg m-2 hover:shadow-2xl">
        <Link href={`/service/${cardsData.id}`} className="font-bold text-2xl white mt=0 text-center capitalize">
          <Image src={`/images/${cardsData.nom}.jpg`} width="700" height="700" alt={cardsData.nom} className=" w-full" />
          <div className="font-bold text-2xl white mt=0 text-center capitalize">{cardsData.nom}</div>
        </Link>
      </div>
    )
}
export default Cards