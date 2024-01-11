import React from 'react';
import { GetCategory } from '../../api/getCategory';
import Link from "next/link";

async function Categories() {
    const data = await GetCategory();
    const listCategory = data['hydra:member'].map((x) => (
    <li key={x} className='capitalize'>
      <Link href={`/service/${x.id}`}>
        {x.nom}
      </Link>
    </li>
  ));

    return (
        <div className='bg-transparent'>
            <ul>
                {listCategory}
            </ul>    
        </div>
    )
}
export default Categories;