//'use client'
import React from "react"

function Pagination({onPaginationNextClick}) {
    return(
        <div className="flex flex-row justify-center bg-zinc-200 md:hover:bg-zinc-600 rounded-full h-10 md:h-12 w-1/3 border-none mt-10 mb-10">
            <button 
                type="input" 
                id="more" 
                name="more" 
                className="text-center bg-transparent px-4 outline-none"
                onClick={e => {onPaginationNextClick(e)}}
                >
                Suivant !
            </button>
        </div>
    )
} 
export default Pagination