import { GetCategory } from '@/app/api/getCategory';
import React from 'react';

async function CategorieDuMois() {
    // find current month
    const currentDate = new Date(); // Get the actual current date
    const currentMonth = currentDate.getMonth(); // Get the current month from the current date
    const month = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre'];
    const monthInLetters = month[currentMonth];

    const categoryData = await GetCategory(1);
    const categorieEnAvant = categoryData['hydra:member'][0].nom;
    const categorieEnAvantDescription = categoryData['hydra:member'][0].description;

    return (
        <section className='bg-[url("/images/coiffeur.jpg")] h-96 bg-cover bg-center flex flex-row items-center'>
            <div className='w-72 h-72 p-3 bg-zinc-400 text-white rounded-md  ml-7'>
                <h2 className='py-3'>En {monthInLetters} c'est #{categorieEnAvant}</h2>
                <p>{categorieEnAvantDescription}</p>
            </div>
        </section>
    ) 
}
export default CategorieDuMois;