'use client'
import { useEffect, useState } from "react";
import Link from "next/link";

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
          setAction('Resend confirmation mail');
        } else {
          setMessage('confirmée');
          setAction('Login');
        }
      }, [action]);
  })

  const handleAction = () => {
    if (action === "Resend confirmation mail") {
      // Implement logic for resending confirmation email
      console.log("Resending confirmation email...");
    } else if (action === "Login") {
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
            <div className="mt-4">
              {action === 'Resend confirmation mail' ? (
                <button className="px-2 py-2 bg-gray-100 text-violet-700 fill-violet-700 rounded hover:text-white hover:fill-white hover:bg-gradient-to-r from-violet-900 to-indigo-400 duration-500">
                  {action}
                </button>
              ) : (
                <Link 
                href="/auth" 
                onClick={handleAction} 
                className="px-2 py-2 bg-gray-100 text-violet-700 fill-violet-700 rounded hover:text-white hover:fill-white hover:bg-gradient-to-r from-violet-900 to-indigo-400 duration-500"
                >
                  {action}
                </Link>
              )}
            </div>
          </div>
        </div>
    </section>
  );
}
export default Confirmation;