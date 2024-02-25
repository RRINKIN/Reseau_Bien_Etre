'use client'
import { useEffect, useState } from "react";

function Confirmation() {

  const confirmationUrl = "http://localhost:8000/auth/confirmation";

  const [message, setMessage] = useState('');
  const [errorMessage, setErrorMessage] = useState('');
  const [action, setAction] = useState('');

  useEffect(()=>{
    const location = window.location;
    const search = location.search;
    console.log(search);
    fetch(confirmationUrl + search)
      .then(res=>res.json())
      .then(res=>{
        console.log(res);
        if (res.error === true) {
          setMessage('non confirmée');
          setErrorMessage(res.message);
          setAction('resend');
        } else {
          setMessage('confirmée');
          setAction('login');
        }
      }, [action]);
  })

  const handleAction = () => {
    if (action === "resend") {
      // Implement logic for resending confirmation email
      console.log("Resending confirmation email...");
    } else if (action === "login") {
      // Handle login action, e.g., using a navigation library
      console.log("Navigating to login page...");
    }
  }

  return (
    <section className='max-w-screen-lg mx-auto py-7 px-3 md:px-0'>
        <div className="md:flex md:flex-row">
          <div className="bg-[#c3bef0] md:w-1/2 h-auto rounded p-7 mb-7 md:ml-7">
            <h2>Votre inscription est {message}</h2>
            <p>Erreur: {errorMessage}</p>
            <button onClick={handleAction}>
              {action}
            </button>
          </div>
        </div>
    </section>
  );
}
export default Confirmation;