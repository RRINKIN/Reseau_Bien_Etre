// function to create a new user
async function PostCreateUser(email, role, password, addresseNum, adresseRue, localite, codePostal, commune) {
    const res = await fetch(
        `http://localhost:8000/api/users`,
        {
            method:'POST',
            headers: {'Content-Type': 'application/ld+json'},
            body: JSON.stringify({
                "email": email,
                "password": password,
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
export default PostCreateUser