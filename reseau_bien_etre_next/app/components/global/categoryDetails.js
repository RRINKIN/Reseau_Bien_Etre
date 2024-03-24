'use client'
import React from 'react';
import { useEffect, useState } from 'react';
import { GetCategoryId } from '../../api/getCategoryId';
import Image from 'next/image';
import GetPrestataireList from '../../api/getPrestataireList';
import Link from "next/link";

function CategoryInfo({categoryId}) {
    // Get the details of a service
    const [categoryInfo, setCategoryInfo] = useState();
    useEffect(() => {
      // get promise
      const data = GetCategoryId(categoryId);
      // what to do with the promise
      data.then (
        res => {
          setCategoryInfo(res);
        }
      );
    },[])

    // Get the list of the presataires attached to a service
    const [prestataireList, setPrestataireList] = useState('');
    useEffect(() => {
      // get promise
      const dataList = GetPrestataireList(categoryId);
      // what to do with the promise
      dataList.then (
        res => {const listCategory = res['hydra:member'].map((x) => (
          <li key={x.id} className='capitalize bg-white shadow-lg rounded-lg'>
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
          </li>
        ));
        setPrestataireList(listCategory);
        }
      );
    },[setPrestataireList])
    //console.log(prestataireList);

    return (
      <div>
        <div className='md:flex md:flex-row'>
          {categoryInfo && (
          <Image 
            src={`/images/${categoryInfo.nom}.jpg`}
            width="900" 
            height="700" 
            alt={categoryInfo.nom} 
            className='rounded-lg w-1/2 mr-7'
            />
          )}
          <div>
            <div className='text-2xl pb-7'>
              <h3>Un petit moment {categoryInfo && categoryInfo.nom} ?</h3>
            </div>
            <div>
              {categoryInfo && categoryInfo.description}
            </div>
          </div>
        </div>
        <div>
          <div className='h-px w-full bg-zinc-300 my-5'></div>
          <h3 className='text-2xl py-7'>Vous pourriez aimer les prestataires suivants</h3>
          <ul className='flex flex-row flex-wrap gap-y-2 gap-x-5'>  
            {prestataireList}
          </ul>
        </div>
      </div>
    )
}
export default CategoryInfo;