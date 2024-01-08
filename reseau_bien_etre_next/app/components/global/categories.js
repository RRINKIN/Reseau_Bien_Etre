import React from 'react';
import { GetCategory } from '../../api/getCategory';

async function Categories() {
    const data = await GetCategory();
    const listCategory = data['hydra:member'].map((x) => (
    <li key={x} className='capitalize'>
      {`${x.nom}`}
    </li>
  ))

    return (
        <div className='bg-transparent'>
            <ul>
                {listCategory}
            </ul>    
        </div>
    )
}
export default Categories;