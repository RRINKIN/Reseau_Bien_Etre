// function to create a new user
async function PostCreateUser(email, role, password, addresseNum, adresseRue, localite, codePostal, commune) {
    try{
        const res = await fetch(
            `http://localhost:8000/api/users`,
            {
                method:'POST',
                headers: {'Content-Type': 'application/ld+json'},
                body: JSON.stringify({
                    "email": email,
                    "password": password,
                    "role": [role],
                })
            }
        );
        const result = await res.json();
        console.log(result);
        if (result.status) {
            alert(result.detail);
            throw new Error('Failed to fetch data: ' + result.status);
          }
          return result;
    } catch (error){
        console.error("Error:", error);
    }
} 
export default PostCreateUser
