'use client'
// function designed to read the cookie of the session
// function will return the data included in the JWT Payload
import Cookies from 'universal-cookie';

function getPayloadData() {
  const cookie = new Cookies(null, {path: '/'});
  const token = cookie.get('token');
  if (token) {
    const base64Payload = token.split('.')[1];
    const decodedPayload = atob(base64Payload);
    const payload = JSON.parse(decodedPayload);
   return payload;
  } 
  return False;
}
export default getPayloadData;