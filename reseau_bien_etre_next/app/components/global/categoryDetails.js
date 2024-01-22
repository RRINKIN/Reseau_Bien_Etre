'use client'
import React from 'react';
import { useEffect, useState } from 'react';
import { GetCategoryId } from '../../api/getCategoryId';
import Image from 'next/image';

function CategoryInfo({categoryId}) {
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
      // function used when component unmount
      return () => {};
    },[])

    return (
      <div className='flex flex-row'>
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
            <p className='capitalize'>Un petit moment " {categoryInfo && categoryInfo.nom} " ?</p>
          </div>
          <div>
            {categoryInfo && categoryInfo.description}
          </div> 
        </div>
      </div>
    )
}
export default CategoryInfo;