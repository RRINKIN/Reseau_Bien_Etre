import React from 'react';
import PrestataireCards from '../components/homePage/prestataireCards';

async function PrestatairePage() {
  return (
    <section className="flex flex-col items-center max-w-screen-lg mx-auto">
      <h2 className=" text-2xl md:text-4xl font-extrabold pt-7">A la recherche d'un expert en bien-être?</h2>
      <p className='pt-4 px-2 text-center'>Retrouvez tous les spécialistes en bien-être de votre région</p>
      <div className="flex bg-zinc-200 rounded-full h-10 md:h-12 md:w-1/3 border-none mt-10 mb-10">
        <input type="search" id="search" name="search" placeholder="Que cherchez-vous?" className="bg-transparent px-4 outline-none" />
      </div>
        <PrestataireCards />
      <div className="mt-10 mb-10">
      </div>  
    </section>
  );
}
export default PrestatairePage;