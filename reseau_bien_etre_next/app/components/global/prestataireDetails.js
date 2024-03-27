'use client'
import React from 'react';
import { useEffect, useState } from 'react';
import { GetPrestataireId } from '../../api/getPrestataireId';
import GetPrestataireSimilar from '../../api/getPrestataireSimilar';
import Image from 'next/image';
import Link from 'next/link';
import Promotions from './promotions';
import Stages from './stages';
import Commentaires from './commentaires';
import UserIsLogged from '../../auth/userIsLogged';
import Map from '../map/map';

function PrestataireInfo({prestataireId}) {
    const [prestataireInfo, setPrestataireInfo] = useState();
    const [urlLogo, setUrlLogo] = useState('http://localhost:8000/images/avatar.webp'); // state of the logo
    const [localite, setLocalite] = useState('');

    useEffect(() => {
      // get promise
      const data = GetPrestataireId(prestataireId);
      // what to do with the promise
      data.then (
        res => {
          setPrestataireInfo(res); // update prestataire info
          if (res.image_Logo && res.image_Logo.image){
            setUrlLogo('http://localhost:8000' + res.image_Logo.image);
          }
          setLocalite(res.localite.localite);
        }
      );
      // function used when component unmount
      return () => {};
    },[])

    // Display promotions when logged
    const [showPromotions, setShowPromotions] = useState(false);
        useEffect(() => {
            const PromotionIsVisible = UserIsLogged() ? true : false;
            setShowPromotions(PromotionIsVisible);
          }, [UserIsLogged]);

    // Get the list of similar prestataires
    const [prestataireList, setPrestataireList] = useState('');
    useEffect(() => {
      // get promise
      const dataList = GetPrestataireSimilar(prestataireInfo?.localite?.localite, prestataireInfo?.proposer?.id);
      // what to do with the promise
      dataList.then (
        res => {const listCategory = res['hydra:member'].map((x) => (
          <div key={x.id} className='capitalize bg-white shadow-lg rounded-lg mr-4'>
            <Link href={`/prestataires/${x.id}`}>
              <Image
                src={`/images/coiffeur.jpg`}
                width="150"
                height="100"
                alt={x.nom}
                className="rounded-lg"
              />
              <p className='capitalize text-center max-w-[150px] px-1'>{x.nom}</p>
            </Link>
          </div>
        ));
        setPrestataireList(listCategory);
        }
      );
    },[setPrestataireList, prestataireInfo])
  
    return (
      <div>
        <div className='md:flex md:flex-row'>
          {urlLogo && (
          <Image 
            src="/images/coiffeur.jpg" 
            width="900" 
            height="700" 
            alt="Coiffure" 
            className="rounded-lg w-1/2 mr-7" 
          />
          )}
          <div>
            <div className='flex flex-row'>
              <div className='mr-5'>
                {prestataireInfo && (
                  <img 
                      src={urlLogo} 
                      width="150" 
                      height="150" 
                      alt="logo" 
                      className="rounded-lg mb-5" 
                  />
                )}
              </div>
              <div className='text-2xl pb-5'>
                <p className='capitalize'>{prestataireInfo && prestataireInfo.nom}</p>
                <div className='border-dotted border py-2 border-t-black'></div>
                <p className='text-sm'>Inscrit depuis: {formatDate(prestataireInfo && prestataireInfo.inscription)}</p>
                <Link href={`${prestataireInfo && prestataireInfo.siteInternet}`}>
                  <span className='text-sm'>Site internet: </span>
                  <span className='text-sm'>{prestataireInfo && prestataireInfo.siteInternet}</span>
                </Link>
                <p className='text-sm'>Téléphone: {prestataireInfo && prestataireInfo.numTel}</p>
                <p className='text-sm'>TVA: {prestataireInfo && prestataireInfo.numTVA}</p>
              </div>
            </div>
            <div>
              {prestataireInfo && prestataireInfo.description}
            </div>
            <p>Services</p>
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
        {/* The promotions are only display if logged in */}
        <div className={`${showPromotions ? 'hidden' : 'pt-5'}`}>
          <p>Envie de promo? </p>
          <p><Link className='text-violet-400' href={`/auth`}>Connectez-vous</Link> pour voir les promotions.</p>
        </div>
        <div className={`${showPromotions ? 'py-5' : 'hidden'}`}>
            <Promotions prestataireInfo={prestataireInfo}/>
        </div>
        <div className='py-5'>
          <Stages prestataireInfo={prestataireInfo}/>
        </div>
        <div className='py-5'>
          <Commentaires prestataireInfo={prestataireInfo}/>
        </div>
        <p>Vous pourriez aussi aimer</p>
        <div className='border-dotted border py-2 border-t-black'></div>
        <div className='py-5 flex flex-row'>
          {prestataireList}
        </div>
        <p>Où me trouver?</p>
        <div className='border-dotted border py-2 border-t-black'></div>
        <div>
          <Map location={localite}/>
        </div>
      </div>
    )
    
    function formatDate(dateString) {
      const date = new Date(dateString);
      const year = date.getFullYear();
      const month = String(date.getMonth() + 1).padStart(2, '0'); // Add leading zero for single-digit months
      const day = String(date.getDate()).padStart(2, '0'); // Add leading zero for single-digit days
      
      return `${year}-${month}-${day}`;
      }
}
export default PrestataireInfo;