import React from 'react';
import { useEffect, useState } from 'react';
import { GetCategory } from '../../api/getCategory';
import Link from "next/link";

function Categories() {
    const [subMenu, setSubMenu] = useState();
    useEffect(() => {
      // get promise
      const data = GetCategory('/api/categorie_de_servicess');
      // what to do with the promise
      data.then (
        res => {
          const listCategory = res['hydra:member'].map((x) => (
            <li key={x.id} className='capitalize'>
              <Link href={`/service/${x.id}`}>
                {x.nom}
              </Link>
            </li>
          ));
          setSubMenu(listCategory);
        }  
      );
      // function used when component unmount
      return () => {};
    },[setSubMenu])

    return (
      <ul className="pt-2 text-white h-fit bg-transparent">
          {subMenu}
      </ul>    
    )
}
export default Categories;