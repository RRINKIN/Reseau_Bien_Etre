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
                    "roles": role,
                    "password": password,
                })
            }
        );
        const result = await res.json();
        if (result.status) {
            if (result.status === 500) {
                alert("Cet e-mail existe déjà ;-)");   
            }
            throw new Error('Failed to fetch data: ' + result.status);
          }
          return result;
    } catch (error){
        console.error("Error:", error);
    }
} 
export default PostCreateUser
