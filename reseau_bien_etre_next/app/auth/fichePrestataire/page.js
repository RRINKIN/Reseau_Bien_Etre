'use client'
import { useState, useEffect } from "react";
import { GetPrestataireId } from "../../api/getPrestataireId";
import { patchPrestataireId } from '../../api/patchPrestataireId';
import getPayloadData from "../../auth/getPayloadData";

function FichePrestataire() {

  // get the id of the prestataire
  const payloadData = getPayloadData();

  // get the information to complete the form
  useEffect(() => {
    GetPrestataireId(payloadData.id).then((response)=>{
      const prestataireData = {
        "nom" : response.nom,
        "siteInternet" : response.siteInternet,
        "numTel" : response.numTel,
        "numTVA" : response.numTVA,
        "adresseNum" : response.adresseNum,
        "adresseRue" : response.adresseRue,
        "localite" : {"localite" : response.localite.localite},
        "codePostal" : {"codePostal" : response.codePostal.codePostal },
      };
      setPrestataireState({...prestataireStates, ...prestataireData});
      if(response.image_Logo){
        setUrlLogo('http://localhost:8000'+response.image_Logo.image);
      }
      if(response.images){
        for (let index = 0; index < response.images.length; index++) {
          const element = response.images[index];
          if (element.ordre == 0) continue;
          console.log(element, 'element');
          if (element.ordre == 1) {
            setUrlImage1('http://localhost:8000'+element.image);
          }
        }
      }
    });
    return() => {};
  },[]);

  const [prestataireStates, setPrestataireState] = useState(
    {
      "nom" : '',
      "siteInternet" : '',
      "numTel" : '',
      "numTVA" : '',
      "adresseNum" : '',
      "adresseRue" : '',
      "localite" : {"localite" : ''},
      "codePostal" : {"codePostal" :''},
    }
  );

  const handleChangeFichePrestataire = (e) => {
    switch (e.target.name) {
      case 'nom':
        setPrestataireState({...prestataireStates,nom:e.target.value});
        break;
      case 'siteInternet':
        setPrestataireState({...prestataireStates,siteInternet:e.target.value});
        break;
      case 'numTel':
        setPrestataireState({...prestataireStates,numTel:e.target.value});
        break;
      case 'numTVA':
        setPrestataireState({...prestataireStates,numTVA:e.target.value});
      break;
      case 'adresseNum':
        setPrestataireState({...prestataireStates,adresseNum:e.target.value});
      break;
      case 'adresseRue':
        setPrestataireState({...prestataireStates,adresseRue:e.target.value});
      break;
      case 'localite':
        setPrestataireState({...prestataireStates,localite:{"localite" : e.target.value}});
      break;
      case 'codePostal':
        setPrestataireState({...prestataireStates,codePostal:{"codePostal" : e.target.value}});
      break;
      default:
        break;
    }
  };

  const handleFichePrestataire = (e) => {
    e.preventDefault();
    const resPostCreateUser = patchPrestataireId(payloadData.id, prestataireStates);
    resPostCreateUser.then(
      (res) => {
        console.log(res);
      }
    )
  }
  
  // setup state of the logo
  const [urlLogo, setUrlLogo] = useState('http://localhost:8000/images/avatar.webp');

  // manage logo upload
  const uploadLogo = (e) => {
    e.preventDefault();
    const input = document.querySelector('#logo');
    const data = new FormData();
    data.append('file', input.files[0]);
    fetch(`http://localhost:8000/api/imagePrestataire/${payloadData.id}/0`, {
      method: 'POST',
      body: data
    }).then((response) => {
      return response.json();
    }).then((response) => {
      setUrlLogo('http://localhost:8000'+response.uri);
    });
  }

  // setup state of the images
  const [urlImage1, setUrlImage1] = useState('http://localhost:8000/images/avatar.webp');

  // manage logo image
  const uploadImage1 = (e) => {
    e.preventDefault();
    const input = document.querySelector('#image1');
    const data = new FormData();
    data.append('file', input.files[0]);
    fetch(`http://localhost:8000/api/imagePrestataire/${payloadData.id}/1`, {
      method: 'POST',
      body: data
    }).then((response) => {
      return response.json();
    }).then((response) => {
      setUrlImage1('http://localhost:8000'+response.uri);
    });
  }

  return (
    <div className="flex flex-col md:flex-row md:justify-center md:items-center">
      <div className="bg-zinc-300 h-auto rounded p-7 m-7 md:ml-7 md:w-1/2">
        <h2>Fiche prestataire</h2>
        <form className="flex flex-col">
          <label htmlFor="nom">Nom</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="nom" value={prestataireStates.nom ?? ''} name="nom" className="rounded px-4 outline-none"/>
          <label htmlFor="siteInternet">Site Internet</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="siteInternet" value={prestataireStates.siteInternet ?? ''} name="siteInternet" className="rounded px-4 outline-none"/>
          <label htmlFor="numTel">Téléphone</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="numTel" value={prestataireStates.numTel ?? ''} name="numTel" className="rounded px-4 outline-none"/>
          <label htmlFor="numTVA">TVA</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="numTVA" value={prestataireStates.numTVA ?? ''} name="numTVA" className="rounded px-4 outline-none"/>
          <label htmlFor="adresseNum">Numéro</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="adresseNum" value={prestataireStates.adresseNum ?? ''} name="adresseNum" className="rounded px-4 outline-none"/>
          <label htmlFor="adresseRue">Rue</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="adresseRue" value={prestataireStates.adresseRue ?? ''} name="adresseRue" className="rounded px-4 outline-none"/>
          <label htmlFor="localite">Localité</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="localite" value={prestataireStates.localite.localite ?? ''} name="localite" className="rounded px-4 outline-none"/>
          <label htmlFor="codePostal">Code Postal</label>
          <input onChange={(e)=>{handleChangeFichePrestataire(e)}} type="text" id="codePostal" value={prestataireStates.codePostal.codePostal ?? ''} name="codePostal" className="rounded px-4 outline-none"/>
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
      <div className="flex flex-col">
        <div className="p-7 m-7 md:ml-7">
            <img 
                src={urlLogo} 
                width="200" 
                height="200" 
                alt={prestataireStates.nom} 
                className="rounded-lg mb-5" 
            />
            <form>
              <label htmlFor="logo"></label>
              <input type='file' id="logo" name="logo"/>
              <button className="bg-zinc-100 text-black px-3 rounded border-black border" onClick={(e)=>{uploadLogo(e)}}>charger...</button>
            </form>
        </div>
      <div className="p-7 m-7 md:ml-7">
          <img 
              src={urlImage1} 
              width="200" 
              height="200" 
              alt={prestataireStates.nom} 
              className="rounded-lg mb-5" 
          />
          <form>
            <label htmlFor="image1"></label>
            <input type='file' id="image1" name="image1"/>
            <button className="bg-zinc-100 text-black px-3 rounded border-black border" onClick={(e)=>{uploadImage1(e)}}>charger...</button>
          </form>
        </div>
      </div>
    </div>
  );
}
export default FichePrestataire;