import React from "react"

function PaginationPrevious({onPaginationPreviousClick}) {
    return(
        <div className="flex flex-row justify-center bg-zinc-200 hover:text-white w-40 md:hover:bg-zinc-600 rounded-full h-10 md:h-12 w-1/3 border-none mt-10 mb-10">
            <button 
                type="input" 
                id="more" 
                name="more" 
                className="text-center bg-transparent px-4 outline-none flex flex-row items-center"
                onClick={a => {onPaginationPreviousClick(a)}}
                >
                <svg className="w-5 mr-5 fill-zinc-400 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8 .4 34.3z"/></svg>
                Précédent
            </button>
        </div>
    )
} 
export default PaginationPrevious