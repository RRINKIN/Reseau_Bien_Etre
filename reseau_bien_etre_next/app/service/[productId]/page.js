import React from 'react'
import CategoryInfo from '../../components/global/categoryDetails'

function ServiceDetails({params}) {
  return (
    <main className='p-7'>
        <CategoryInfo categoryId={params.productId}/>
    </main>
  );
}
export default ServiceDetails;