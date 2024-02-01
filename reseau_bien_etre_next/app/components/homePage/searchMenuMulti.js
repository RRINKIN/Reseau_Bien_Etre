import React, { useState, useEffect } from 'react';

function SearchMenuMulti(props) {
  // Declare the getters and setters of the state
  const [namePrestataire, setNamePrestataire] = useState('');
  const [catPrestataire, setCatPrestataire] = useState('');
  const [cpPrestataire, setCpPrestataire] = useState('');
  const [communePrestataire, setCommunePrestataire] = useState('');
  const [villePrestataire, setVillePrestataire] = useState('');
  
  // manage state changes
  const handleNameChange = (event) => {
    setNamePrestataire(event.target.value);
  };
  const handleCatChange = (event) => {
    setCatPrestataire(event.target.value);
  };
  const handleCpChange = (event) => {
    setCpPrestataire(event.target.value);
  };
  const handleCommuneChange = (event) => {
    setCommunePrestataire(event.target.value);
  };
  const handleVilleChange = (event) => {
    setVillePrestataire(event.target.value);
  };

  // Manage the onClick
  const handleFilterMenuClick = () => {
    const filteredSearchData = {
      namePrestataire,
      catPrestataire,
      cpPrestataire,
      communePrestataire,
      villePrestataire,
    };
    props.btnFilterHandler(filteredSearchData);
  };

  return (
    <form className="flex flex-col bg-zinc-300 m-7">
      <h2 className="text-center mb-4">Plus de critères ?</h2>
      <label htmlFor="fname">Nom de prestataire</label>
      <input type="text" id="fname" name="fname" value={namePrestataire} onChange={handleNameChange} className="rounded px-4 outline-none mb-2 text-zinc-500"/>
      <label htmlFor="name">Catégorie</label>
      <input type="text" id="name" name="name" value={catPrestataire} onChange={handleCatChange} className="rounded px-4 outline-none mb-2 text-zinc-500"/>
      <label htmlFor="phone">Code postal</label>
      <input type="text" id="phone" name="phone" value={cpPrestataire} onChange={handleCpChange} className="rounded px-4 outline-none mb-2 text-zinc-500"/>
      <label htmlFor="phone">Commune</label>
      <input type="text" id="phone" name="phone" value={communePrestataire} onChange={handleCommuneChange} className="rounded px-4 outline-none mb-2 text-zinc-500"/>
      <label htmlFor="phone">Ville</label>
      <input type="text" id="phone" name="phone" value={villePrestataire} onChange={handleVilleChange} className="rounded px-4 outline-none text-zinc-500"/>
      <button 
      type="button"
      className="text-center h-7 mt-7 px-4 outline-none hover:bg-violet-400 bg-zinc-500 rounded text-white"
      onClick={handleFilterMenuClick}
      >
      Chercher
      </button>
    </form>
  );
}

export default SearchMenuMulti;