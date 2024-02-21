'use client'
import { useState } from "react";

function RegistrationDetails() {

  // collect the inputed values
  // registration handler
  const [regAdresseRue, setRegAdresseRue] = useState('');
  const [regAddresseNum, setRegAddresseNum] = useState('');
  const [regLocalite, setRegLocalite] = useState('');
  const [regCodePostal, setRegCodePostal] = useState('');
  const [regCommune, setRegCommune] = useState('');

  // Handle the changes and update the state
  const handleChangeRegistration = (e) => {
    switch (e.target.name) {
      case 'adresseRue':
        setRegAdresseRue(e.target.value);
        break;
      case 'addresseNum':
        setRegAddresseNum(e.target.value);
        break;
      case 'localite':
        setRegLocalite(e.target.value);
        break;
      case 'codePostal':
        setRegCodePostal(e.target.value);
        break;
      case 'commune':
        setRegCommune(e.target.value);
        break;
      default:
        break;
    }
  };

  return (
    <section className='max-w-screen-lg mx-auto py-7 px-3 md:px-0'>
        <div className="md:flex md:flex-row">
          <div className="bg-zinc-300 h-auto rounded p-7 mb-7 md:ml-7">
            <h2>Mes détails</h2>
            <form className="flex flex-col">
              <label htmlFor="adresseRue">Rue</label>
              <input onChange={(e)=>{handleChangeRegistration(e)}} type="text" id="adresseRue" name="adresseRue" className="rounded px-4 outline-none"/>
              <label htmlFor="addresseNum">Numéro</label>
              <input onChange={(e)=>{handleChangeRegistration(e)}} type="text" id="addresseNum" name="addresseNum" className="rounded px-4 outline-none"/>
              <label htmlFor="localite">Localité</label>
              <input onChange={(e)=>{handleChangeRegistration(e)}} type="text" id="localite" name="localite" className="rounded px-4 outline-none"/>
              <label htmlFor="codePostal">Code Postal</label>
              <input onChange={(e)=>{handleChangeRegistration(e)}} type="text" id="codePostal" name="codePostal" className="rounded px-4 outline-none"/>
              <label htmlFor="commune">Commune</label>
              <input onChange={(e)=>{handleChangeRegistration(e)}} type="text" id="commune" name="commune" className="rounded px-4 outline-none"/>
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
export default RegistrationDetails;