import React from 'react'
import PrestataireInfo from '../../components/global/prestataireDetails'

function PrestataireDetails({params}) {
  return (
    <main className='p-7'>
      <PrestataireInfo prestataireId={params.prestataireId}/>
    </main>
  );
}
export default PrestataireDetails;