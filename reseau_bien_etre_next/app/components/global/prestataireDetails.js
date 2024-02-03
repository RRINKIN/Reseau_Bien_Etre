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
          <div className='flex flex-row w-1/3'>
            {/* Map over proposer array to render multiple images and links */}
            {prestataireInfo && prestataireInfo.proposer.map((proposer, index) => (
              <div key={index} className='rounded-lg bg-zinc-100 mr-4'>
                <Link href={`/service/${proposer.id}`}>
                  <Image
                    src={`/images/${proposer.nom}.jpg`} // Use proposer.nom dynamically
                    width="900"
                    height="700"
                    alt={proposer.nom}
                    className="rounded-lg"
                  />
                  <p className='capitalize text-center'>{proposer.nom}</p>
                </Link>
              </div>
            ))}
          </div>      
        </div>
      </div>
    )
}
export default PrestataireInfo;