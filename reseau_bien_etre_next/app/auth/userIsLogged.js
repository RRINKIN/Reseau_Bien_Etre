'use client'
// function designed to read the cookie of the session
// function will return TRUE or FALSE depending on cookie validity & availability
import Cookies from 'universal-cookie';

function UserIsLogged() {
  const cookie = new Cookies(null, {path: '/'});
  const token = cookie.get('token');
  if (token) {
    const base64Payload = token.split('.')[1];
    const decodedPayload = atob(base64Payload);
    const payload = JSON.parse(decodedPayload);
    let expDate = payload.exp; 
    const dateNow = Math.floor(Date.now()/1000);
   return dateNow < expDate;
  } 
  return false;
}
export default UserIsLogged;