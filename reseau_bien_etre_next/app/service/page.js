import React from 'react';
import CategoryCards from '../components/servicePage/categoryCards';

async function ServicesPage() {
  return (
    <section className="flex flex-col items-center max-w-screen-lg mx-auto">
      <h2 className=" text-2xl md:text-4xl font-extrabold pt-7">Qu'est ce qui vous ferait du bien?</h2>
      <p className='pt-4 px-2 text-center'>Retrouvez tous les services de nos spécialistes en bien-être et faites vous plaisir chaque jour près de chez vous</p>
        <CategoryCards />
      <div className="mt-10 mb-10">
      </div>  
    </section>
  );
}
export default ServicesPage;