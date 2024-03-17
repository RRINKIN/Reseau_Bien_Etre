'use client'
import { useState, useEffect } from "react";
import { getInternauteId } from "../../api/getInternauteId";
import { patchInternauteId } from "../../api/patchInternauteId";
import getPayloadData from "../../auth/getPayloadData";

function FicheInternaute() {

  // get the id of the internaute
  const payloadData = getPayloadData();
  console.log(payloadData);

  // get the information to complete the form
  useEffect(() => {
    getInternauteId(payloadData.id).then((response)=>{
      const internauteData = {
        "nom" : response.nom,
        "prenom" : response.prenom,
        "newsletter" : response.newsletter,
        "images" : response.images,
        "adresseNum" : response.adresseNum,
        "adresseRue" : response.adresseRue,
        "localite" : {"localite" : response.localite.localite},
        "codePostal" : {"codePostal" : response.codePostal.codePostal},
      };
      setInternauteState({...internauteStates, ...internauteData});
    });
    
    return() => {};
  },[]);

  const [internauteStates, setInternauteState] = useState(
    {
      "nom" : '',
      "prenom" : '',
      "newsletter" : '',
      "images" : '',
      "adresseNum" : '',
      "adresseRue" : '',
      "localite" : {"localite" : ''},
      "codePostal" : {"codePostal" :''},
    }
  );   

  const handleChangeFicheInternaute = (e) => {
    switch (e.target.name) {
      case 'name':
        setInternauteState({...internauteStates,nom:e.target.value});
        break;
      case 'surname':
        setInternauteState({...internauteStates,prenom:e.target.value});
        break;
      case 'newsletter':
        setInternauteState({...internauteStates,newsletter:e.target.checked});
        break;
      case 'image':
        setInternauteState({...internauteStates,images:e.target.value});
      break;
      case 'adresseNum':
        setInternauteState({...internauteStates,adresseNum:e.target.value});
      break;
      case 'adresseRue':
        setInternauteState({...internauteStates,adresseRue:e.target.value});
      break;
      case 'localite':
        setInternauteState({...internauteStates,localite:{"localite" : e.target.value}});
      break;
      case 'postalCode':
        setInternauteState({...internauteStates,codePostal:{"codePostal" :e.target.value}});
      break;
      default:
        break;
    }
  };

  const handleFicheInternaute = (e) => {
    e.preventDefault();
    const resPostCreateUser = patchInternauteId(payloadData.id, internauteStates);
    resPostCreateUser.then(
      (res) => {
        console.log(res);
      }
    )
  }

  console.log(patchInternauteId);

  return (
    <div className="flex justify-center items-center">
      <div className="bg-zinc-300 h-auto rounded p-7 m-7 md:ml-7 w-1/2">
        <h2>Fiche internaute</h2>
        <form className="flex flex-col">
          <label htmlFor="name">Nom</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="text" id="name" value={internauteStates.nom ?? ''} name="name" className="rounded px-4 outline-none"/>
          <label htmlFor="surname">Prenom</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="text" id="surname" value={internauteStates.prenom ?? ''} name="surname" className="rounded px-4 outline-none"/>
          <label htmlFor="image">Image</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="text" id="image" value={internauteStates.images ?? ''} name="image" className="rounded px-4 outline-none"/>
          <label htmlFor="adresseNum">Numéro</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="text" id="adresseNum" value={internauteStates.adresseNum ?? ''} name="adresseNum" className="rounded px-4 outline-none"/>
          <label htmlFor="adresseRue">Rue</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="text" id="adresseRue" value={internauteStates.adresseRue ?? ''} name="adresseRue" className="rounded px-4 outline-none"/>
          <label htmlFor="localite">Localité</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="text" id="localite" value={internauteStates.localite.localite ?? ''} name="localite" className="rounded px-4 outline-none"/>
          <label htmlFor="postalCode">Code Postal</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="text" id="postalCode" value={internauteStates.codePostal.codePostal ?? ''} name="postalCode" className="rounded px-4 outline-none"/>  
          <label htmlFor="newsletter">Newsletter</label>
          <input onChange={(e)=>{handleChangeFicheInternaute(e)}} type="checkbox" id="newsletter" value={internauteStates.newsletter && internauteStates.newsletter=='true' ? 'true' : 'false'} name="newsletter" className="rounded px-4 outline-none"/>
          <button 
          type="submit"
          className="text-center h-7 mt-7 px-4 outline-none hover:bg-violet-400 bg-zinc-500 md:w-1/3 rounded text-white flex flex-row items-center"
          onClick={(e) => {
            handleFicheInternaute(e);
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
export default FicheInternaute;