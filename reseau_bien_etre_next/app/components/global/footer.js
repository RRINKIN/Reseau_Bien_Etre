import React from 'react';
import Logo from './logo';

function Footer() {
    return (
        <div className='text-white bg-zinc-300 grid grid-cols-3 md:grid-cols-12 gap-1 p-7'>
            <div className='col-span-1'>
                <Logo />
            </div>
            <p className='pb-2 text-justify col-span-2 md:col-span-7 md:pr-8'> 
            Massage relaxant, séance de yoga ou coiffeur? 
            Réseau Bien-Etre: trouvez le professionnel qualifié et expérimenté de votre région.
            Comparez les profils, leurs qualifications, leurs tarifs et leurs disponibilités. 
            Partagez vos avis avec d'autres utilisateurs, en toute transparence. 
            </p>
            <div className='col-span-1 md:col-span-2'>
                <ul>
                    <li ><a href="/" >Accueil</a></li>
                    <li ><a href="/apropos" >A Propos</a></li>
                    <li ><a href="/contact" >Contact</a></li>
                    <li ><a href="/login" >Se connecter</a></li>
                </ul>
                <span className='fill-white p-2'>
                    <a href="https://be.linkedin.com/in/rrinkin" >
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" width="20" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                </span>
            </div>
            <ul className='col-span-1 md:col-span-2'>
                <li ><a href="/legal" >Mentions légales</a></li>
                <li ><a href="/plan" >Plan du site</a></li>
                <li ><a href="/cgv" >CGV</a></li>
                <li ><a href="/confidentialite" >Confidentialité</a></li>
            </ul>

        </div>
    )
}
export default Footer;