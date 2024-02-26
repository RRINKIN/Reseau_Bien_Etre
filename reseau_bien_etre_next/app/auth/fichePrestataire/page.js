'use client'
import { useState, useEffect } from "react";
import PutPrestataireId from '../../api/putPrestataireId';

function FichePrestataire() {
  const [prestataireNom, setPrestatireNom] = useState('');
  const [prestataireSiteInternet, setPrestataireSiteInternet] = useState('');
  const [prestataireNumTel, setPrestataireNumTel] = useState('');
  const [prestataireNumTVA, setPrestataireNumTVA] = useState('');
  const [prestataireAdresseNum, setPrestataireAdresseNum] = useState('');
  const [prestataireAdresseRue, setPrestataireAdresseRue] = useState('');
  const [prestataireLocalite, setPrestataireLocalite] = useState('');

  const handleChangeFichePrestataire = (e) => {
    switch (e.target.name) {
      case 'prestataireNom':
        setPrestatireNom(e.target.value);
        break;
      case 'prestataireSiteInternet':
        setPrestataireSiteInternet(e.target.value);
        break;
      case 'prestataireNumTel':
        setPrestataireNumTel(e.target.value);
        break;
      case 'prestataireNumTVA':
        setPrestataireNumTVA(e.target.value);
      break;
      case 'prestataireAdresseNum':
        setPrestataireAdresseNum(e.target.value);
      break;
      case 'prestataireAdresseRue':
        setPrestataireAdresseRue(e.target.value);
      break;
      case 'prestataireLocalite':
        setPrestataireLocalite(e.target.value);
      break;
      default:
        break;
    }
  };

  const handleFichePrestataire = (e) => {
    e.preventDefault();
    const resPostCreateUser = PutPrestataireId(prestataireNom, prestataireSiteInternet, prestataireNumTel, prestataireNumTVA, prestataireAdresseNum, prestataireAdresseRue, prestataireLocalite);
    resPostCreateUser.then(
      (res) => {
        console.log(res);
      }
    )
  }

  return (
    <div className="flex justify-center items-center">
      <div className="bg-zinc-300 h-auto rounded p-7 m-7 md:ml-7 w-1/2">
        <h2>fiche prestataire</h2>
        <form className="flex flex-col">
          <label htmlFor="prestataireNom">Nom</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="prestataireNom" name="prestataireNom" className="rounded px-4 outline-none"/>
          <label htmlFor="prestataireSiteInternet">Site Internet</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="prestataireSiteInternet" name="prestataireSiteInternet" className="rounded px-4 outline-none"/>
          <label htmlFor="prestataireNumTel">Téléphone</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="prestataireNumTel" name="prestataireNumTel" className="rounded px-4 outline-none"/>
          <label htmlFor="prestataireNumTVA">TVA</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="prestataireNumTVA" name="prestataireNumTVA" className="rounded px-4 outline-none"/>
          <label htmlFor="prestataireAdresseNum">Numéro</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="prestataireAdresseNum" name="prestataireAdresseNum" className="rounded px-4 outline-none"/>
          <label htmlFor="prestataireAdresseRue">Rue</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="prestataireAdresseRue" name="prestataireAdresseRue" className="rounded px-4 outline-none"/>
          <label htmlFor="prestataireLocalite">Localité</label>
          <select onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="prestataireAdresseRue" name="prestataireAdresseRue" className="rounded px-4 outline-none">
            <option value="">--faites un choix--</option>
            <option value="ROLE_PRESTATAIRE">Je suis un prestataire de bien-être</option>
            <option value="ROLE_INTERNAUTE">Je suis à la recherche de bien-être</option>
          </select>
          <button 
          type="submit"
          className="text-center h-7 mt-7 px-4 outline-none hover:bg-violet-400 bg-zinc-500 md:w-1/3 rounded text-white flex flex-row items-center"
          onClick={(e) => {
            handleFichePrestataire(e);
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
  );
}
export default FichePrestataire;