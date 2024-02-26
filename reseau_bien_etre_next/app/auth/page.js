'use client'
import PostLoginCheck from '../api/postLoginCheck';
import {useState} from 'react';
import Cookies from 'universal-cookie';
import removeCookie from './removeCookie';
import PostCreateUser from '../api/postCreateUser';
import { redirect } from 'next/navigation'

function EspacePrive() {
  // define states to collect inputed values
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState(''); 

  // Handle the changes and update the state
  const handleEmailChange = (e) => {
    setEmail(e.target.value)
  };
  const handlePasswordChange = (e) => {
    setPassword(e.target.value)
  };
 
  // Create cookie object
  const cookie = new Cookies(null, {path: '/'});

  // reveal password
  const revealPassword = ( typePassword) => {
    if(typePassword=='regPassword'){
      alert(regPassword);
    }
    else{
      alert(password);
    }
      
  };

  // call login post function & store answer into cookie
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
            alert('Vous êtes maintenant connecté');
            // redirection to home page
            window.location.href = '/';
        }
      } 
    )
  };

  // registration handler
  const [regEmail, setRegEmail] = useState('');
  const [regPassword, setRegPassword] = useState('');
  const [regRole, setRegRole] = useState(['ROLE_USER']);

  // check password validity
  console.log(regPassword);
  const regex = /^(?=.*[0-9])(?=.*[a-zA-Z]).{7,}$/;
  const isPasswordValid = regPassword.match(regex);

  // Handle the changes and update the state
  const handleChangeRegistration = (e) => {
    switch (e.target.name) {
      case 'email':
        setRegEmail(e.target.value);
        break;
      case 'mdp':
        setRegPassword(e.target.value);
        break;
      case 'role':
        setRegRole([...regRole, e.target.value]);
        break;
      default:
        break;
    }
  };

  const handleRegistration = (e) => {
    e.preventDefault();
    const resPostCreateUser = PostCreateUser(regEmail, regRole, regPassword, '', '', '', '', '');
    resPostCreateUser.then(
      (res) => {
        console.log(res);
      }
    )
  }
  
  // Manage disconnection by removing the cookie
  const handleLogout = () => {
    removeCookie();
  };

  return (
    <section className='max-w-screen-lg mx-auto py-7 px-3 md:px-0'>
        <div className="md:flex md:flex-row">
          <div className="bg-[#c3bef0] md:w-1/2 h-auto rounded p-7 mb-7 md:ml-7">
            <h2>Me connecter</h2>
            <form className="flex flex-col">
              <label htmlFor="fname">Identifiant *</label>
              <input onChange={(e)=>{handleEmailChange(e)}} type="text" id="fname" name="fname" className="rounded px-4 outline-none"/>
              <label htmlFor="name">Mot de passe *</label>
              <div className="flex flex-row">
                <input onChange={(e)=>{handlePasswordChange(e)}} type="password" id="name" name="name" className="rounded px-4 w-11/12 outline-none"/>
                  <svg 
                    xmlns="http://www.w3.org/2000/svg" 
                    viewBox="0 0 576 512" 
                    className='h-6 w-1/12 mx-1 fill-zinc-500'
                    onClick={(e)=>{revealPassword('password')}}>
                    <path d="M572.5 241.4C518.3 135.6 410.9 64 288 64S57.7 135.6 3.5 241.4a32.4 32.4 0 0 0 0 29.2C57.7 376.4 165.1 448 288 448s230.3-71.6 284.5-177.4a32.4 32.4 0 0 0 0-29.2zM288 400a144 144 0 1 1 144-144 143.9 143.9 0 0 1 -144 144zm0-240a95.3 95.3 0 0 0 -25.3 3.8 47.9 47.9 0 0 1 -66.9 66.9A95.8 95.8 0 1 0 288 160z"/>
                  </svg>
              </div>
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
            {/*<div>
              <readCookie />
            </div>*/}
          </div>
          <div className="bg-zinc-300 md:w-1/2 h-auto rounded p-7 mb-7 md:ml-7">
            <h2>M'inscrire</h2>
            <form className="flex flex-col">
              <label htmlFor="email">E-mail *</label>
              <input onChange={(e)=>{handleChangeRegistration(e)}} type="email" id="email" name="email" className="rounded px-4 outline-none"/>
              <label htmlFor="mdp">Mot de passe *</label>
              <div className="flex flex-row">
                <input onChange={(e)=>{handleChangeRegistration(e)}} type="password" id="mdp" name="mdp" className="rounded px-4 outline-none w-11/12"/>
                <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      viewBox="0 0 576 512" 
                      className='h-6 w-1/12 mx-1 fill-zinc-500'
                      onClick={(e)=>{revealPassword('regPassword')}}>
                      <path d="M572.5 241.4C518.3 135.6 410.9 64 288 64S57.7 135.6 3.5 241.4a32.4 32.4 0 0 0 0 29.2C57.7 376.4 165.1 448 288 448s230.3-71.6 284.5-177.4a32.4 32.4 0 0 0 0-29.2zM288 400a144 144 0 1 1 144-144 143.9 143.9 0 0 1 -144 144zm0-240a95.3 95.3 0 0 0 -25.3 3.8 47.9 47.9 0 0 1 -66.9 66.9A95.8 95.8 0 1 0 288 160z"/>
                    </svg>
              </div>
              <div className={`${isPasswordValid ? 'text-emerald-600' : 'text-red-600'}`}>
                  {isPasswordValid ? 'Password valide' : 'Min 5 caractères, 1 chiffre et 1 lettre'}
              </div>
              <label htmlFor="role">Qui êtes-vous?</label>
              <select onChange={(e)=>{handleChangeRegistration(e)}} name="role" id="role">
                <option value="">--faites un choix--</option>
                <option value="ROLE_PRESTATAIRE">Je suis un prestataire de bien-être</option>
                <option value="ROLE_INTERNAUTE">Je suis à la recherche de bien-être</option>
              </select>
              <button 
              type="submit"
              className="text-center h-7 mt-7 px-4 outline-none hover:bg-violet-400 bg-zinc-500 md:w-1/3 rounded text-white flex flex-row items-center"
              onClick={(e) => {
                handleRegistration(e);
              }}
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