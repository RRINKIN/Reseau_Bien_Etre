'use client'

function ServiceSearchBar({onSearchChange}) {
    return(
        <>
            <input 
            type="text"  
            name="searchBar" 
            onChange={(e) => onSearchChange(e.target.value)}
            placeholder="Que cherchez-vous?" 
            className="bg-transparent px-4 outline-none" 
            />
        </>
    )
}
export default ServiceSearchBar