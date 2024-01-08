import { GetCategory } from '@/app/api/getCategory';
import React from 'react';

function CategorieDuMois() {

    // find current month
    const currentDate = new Date(); // Get the actual current date
    const currentMonth = currentDate.getMonth(); // Get the current month from the current date
    const month = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre'];
    const monthInLetters = month[currentMonth];

    /* find category of the month
    /*const categ = GetCategory();
    const enAvantCateg = categ['hydra:member'].map((x) => (
        <div key={x}>
          {x.enAvant}
        </div>
    ))*/

    return (
        <section className='bg-[url("/images/coiffeur.jpg")] h-96 bg-cover bg-center flex flex-row items-center'>
            <div className='w-72 h-72 p-3 bg-zinc-400 text-white rounded-md  ml-7'>
                <h2 className='py-3'>En {monthInLetters} c'est #CatégorieEnCours#</h2>
                <p>#categorie catégorie Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione earum explicabo voluptatum quasi doloremque minima ex aliquam pariatur quia ducimus!</p>
            </div>
        </section>
    ) 
}
export default CategorieDuMois;