'use client'
import { useEffect, useState } from "react";

function Confirmation() {

  const confirmationUrl = "http://localhost:8000/auth/confirmation";

  useEffect(()=>{
    const location = window.location;
    const search = location.search;
    console.log(search);
    fetch(confirmationUrl + search)
      .then(res=>res.json())
      .then(res=>{
        console.log(res);
      });
  })

  return (
    <section className='max-w-screen-lg mx-auto py-7 px-3 md:px-0'>
        <div className="md:flex md:flex-row">
          <div className="bg-[#c3bef0] md:w-1/2 h-auto rounded p-7 mb-7 md:ml-7">
            <h2>Votre inscription est confirmée</h2>
          </div>
        </div>
    </section>
  );
}
export default Confirmation;