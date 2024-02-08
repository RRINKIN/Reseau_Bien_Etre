'use client'
import PostLoginCheck from '../api/postLoginCheck';
import {useState} from 'react';
import Cookies from 'universal-cookie';

function EspacePrive() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState(''); 

  const handleEmailChange = (e) => {
    setEmail(e.target.value)
  };
  const handlePasswordChange = (e) => {
    setPassword(e.target.value)
  };
 
  const cookie = new Cookies(null, {
    path: '/'
  });

  const doLogin = (e) => {
    e.preventDefault();
    const resPostLoginCheck = PostLoginCheck(email, password);
    resPostLoginCheck.then(
      (res) => {
        if(res?.status === 'error') {
          alert(res.message ?? 'Unknow error' );
        }
        else{
            cookie.set('token' , res.token);
        }
      } 
    )
  };

  return (
    <section className='max-w-screen-lg mx-auto py-7 px-3 md:px-0'>
        <div className="md:flex md:flex-row">
          <div className="bg-[#c3bef0] md:w-1/2 h-auto rounded p-7 mb-7 md:ml-7">
            <h2>Se connecter</h2>
            <form className="flex flex-col">
              <label htmlFor="fname">Identifiant *</label>
              <input onChange={(e)=>{handleEmailChange(e)}} type="text" id="fname" name="fname" className="rounded px-4 outline-none"/>
              <label htmlFor="name">Mot de passe *</label>
              <input onChange={(e)=>{handlePasswordChange(e)}} type="text" id="name" name="name" className="rounded px-4 outline-none"/>
              <button 
              type="submit"
              className="text-center h-7 mt-7 px-4 outline-none hover:bg-violet-400 bg-zinc-500 md:w-1/3 rounded text-white flex flex-row items-center"
              onClick={(e)=>{doLogin(e)}}
              >
                <svg 
                  xmlns="http://www.w3.org/2000/svg"
                  className="fill-white h-10 pr-5"
                  viewBox="0 0 512 512">
                  <path d="M440 6.5L24 246.4c-34.4 19.9-31.1 70.8 5.7 85.9L144 379.6V464c0 46.4 59.2 65.5 86.6 28.6l43.8-59.1 111.9 46.2c5.9 2.4 12.1 3.6 18.3 3.6 8.2 0 16.3-2.1 23.6-6.2 12.8-7.2 21.6-20 23.9-34.5l59.4-387.2c6.1-40.1-36.9-68.8-71.5-48.9zM192 464v-64.6l36.6 15.1L192 464zm212.6-28.7l-153.8-63.5L391 169.5c10.7-15.5-9.5-33.5-23.7-21.2L155.8 332.6 48 288 464 48l-59.4 387.3z"/>
                </svg>
                Envoyer
              </button>
            </form>
          </div>
          <div className="bg-zinc-300 md:w-1/2 h-auto rounded p-7 mb-7 md:ml-7">
            <h2>S'inscrire</h2>
            <form className="flex flex-col">
              <label htmlFor="fname">Prénom *</label>
              <input type="text" id="fname" name="fname" className="rounded px-4 outline-none"/>
              <label htmlFor="name">Nom *</label>
              <input type="text" id="mail" name="mail" className="rounded px-4 outline-none"/>
              <label htmlFor="email">E-mail *</label>
              <input type="password" id="mdp" name="mdp" className="rounded px-4 outline-none"/>
              <label htmlFor="mdp">Mot de passe *</label>
              <input type="text" id="phone" name="phone" className="rounded px-4 outline-none"/>
              <label for="pet-select">Que voulez-vous faire?</label>
              <select name="role">
                <option value="">--choisissez--</option>
                <option value="dog">Utilisateur</option>
                <option value="cat">Prestataire</option>
              </select>
              <span className="pt-4">
                <input type="checkbox" id="scales" name="scales" className="mx-2" />
                <label htmlFor="scales">Je souhaite être tenu au courant des stages, promotions et nouveaux prestataires</label>
              </span>
              <button 
              type="submit"
              className="text-center h-7 mt-7 px-4 outline-none hover:bg-violet-400 bg-zinc-500 md:w-1/3 rounded text-white flex flex-row items-center"
              >
                <svg 
                  xmlns="http://www.w3.org/2000/svg"
                  className="fill-white h-10 pr-5"
                  viewBox="0 0 512 512">
                  <path d="M440 6.5L24 246.4c-34.4 19.9-31.1 70.8 5.7 85.9L144 379.6V464c0 46.4 59.2 65.5 86.6 28.6l43.8-59.1 111.9 46.2c5.9 2.4 12.1 3.6 18.3 3.6 8.2 0 16.3-2.1 23.6-6.2 12.8-7.2 21.6-20 23.9-34.5l59.4-387.2c6.1-40.1-36.9-68.8-71.5-48.9zM192 464v-64.6l36.6 15.1L192 464zm212.6-28.7l-153.8-63.5L391 169.5c10.7-15.5-9.5-33.5-23.7-21.2L155.8 332.6 48 288 464 48l-59.4 387.3z"/>
                </svg>
                Envoyer
              </button>
            </form>
          </div>
        </div>
    </section>
  );
}
export default EspacePrive;