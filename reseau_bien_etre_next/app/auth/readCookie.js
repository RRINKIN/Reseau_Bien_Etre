// function designed to read the cookie of the session
import Cookies from 'universal-cookie';

function readCookie() {
  const cookie = new Cookies(null, {path: '/'});
  const token = cookie.get('token');
  if (token) {
    const base64Payload = token.split('.')[1];
    const decodedPayload = atob(base64Payload);
    const payload = JSON.parse(decodedPayload);
    let tokenMail = payload.username; 
    const parts = tokenMail.split("@");
    const username = parts[0];
    return username;
  } 
    return null;
}
export default readCookie;