// function designed to delete the cookie of the session
import Cookies from 'universal-cookie';

function RemoveCookie() {
  const cookie = new Cookies(null, {path: '/'});
  const token = cookie.get('token');
  if (token) {
    cookie.remove('token');
  } else {
    console.log('Le cookie n\'existe pas');
  }
}
export default RemoveCookie;