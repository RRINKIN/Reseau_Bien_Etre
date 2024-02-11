// function to request a cookie when login in into the system
async function PostLoginCheck(email, password) {
    const res = await fetch(
        `http://localhost:8000/api/login_check`,
        {
            method:'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({
                "email": email, 
                "password": password
            })
        }
    );
    if (!res.ok) {
      // This will activate the closest `error.js` Error Boundary
      //throw new Error('Failed to fetch data')
      return {'status' : 'error' , 'message': res.statusText};
    }
    return res.json();
} 
export default PostLoginCheck