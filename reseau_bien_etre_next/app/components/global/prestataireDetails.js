'use client'
import React from 'react';
import { useEffect, useState } from 'react';
import { GetPrestataireId } from '../../api/getPrestataireId'
import Image from 'next/image';
import Link from 'next/link';

function PrestataireInfo({prestataireId}) {
    const [prestataireInfo, setPrestataireInfo] = useState();

    useEffect(() => {
      // get promise
      const data = GetPrestataireId(prestataireId);
      // what to do with the promise
      data.then (
        res => {
          setPrestataireInfo(res);
        }
      );
      // function used when component unmount
      return () => {};
    },[])

    return (
      <div className='flex flex-row'>
        {prestataireInfo && (
        <Image 
          src="/images/coiffeur.jpg" 
          width="900" 
          height="700" 
          alt="Coiffure" 
          className="rounded-lg w-1/2 mr-7" 
        />
        )}
        <div>
          <div className='text-2xl pb-7'>
            <p className='capitalize'>{prestataireInfo && prestataireInfo.nom}</p>
            <p className='text-sm'>Inscrit depuis: {prestataireInfo && prestataireInfo.inscription}</p>
            <Link href={`${prestataireInfo && prestataireInfo.siteInternet}`}>
              <span className='text-sm'>Site internet: </span>
              <span className='text-sm'>{prestataireInfo && prestataireInfo.siteInternet}</span>
            </Link>
            <p className='text-sm'>Téléphone: {prestataireInfo && prestataireInfo.numTel}</p>
          </div>
          <div>
            {prestataireInfo && prestataireInfo.description}
          </div>
          <div className='border-dotted border py-2 border-t-black'></div>
          <div className='w-1/4 rounded-lg bg-zinc-100'>
            <Link href={`/service/${prestataireInfo && prestataireInfo.proposer[0].id}`}>
              <Image 
                src={`/images/${prestataireInfo && prestataireInfo.proposer[0].nom}.jpg`}
                width="900" 
                height="700" 
                alt={prestataireInfo && prestataireInfo.proposer[0].nom} 
                className="rounded-lg" 
              />
              <p className='capitalize text-center'>{prestataireInfo && prestataireInfo.proposer[0].nom}</p>
            </Link>
          </div>    
        </div>
      </div>
    )
}
export default PrestataireInfo;