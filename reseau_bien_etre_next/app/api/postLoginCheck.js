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
    // alert on error login or password
    const result = await res.json();
    if (result.code === 401) {
        alert('Le login ou password est éronné ;-)')
    }

    if (!res.ok) {
      // This will activate the closest `error.js` Error Boundary
      return {'status' : 'error' , 'message': res.statusText};
    }
    return result;
} 
export default PostLoginCheck