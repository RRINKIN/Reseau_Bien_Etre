import Categories from "./components/global/categories";
import PrestaireCards from "./components/homePage/prestataireCards";
import Image from 'next/image';
import Reinsurance from "./components/homePage/Reinsurance";
import CategorieDuMois from "./components/homePage/categorieDuMois";
 
async function HomePage() {
  return (
    <section>
      <section className="flex bg-gradient-to-b from-[#c3bef0] to-zinc-300 justify-content px-7 md:pl-20 pt-20 items-center">
        <div>
          <h1 className="text-4xl md:text-7xl text-white md:max-w-4xl font-extrabold">Prenez soin de vous Près de chez vous</h1>
          <div className="flex bg-white rounded-full h-10 md:h-12 w-2/3 border-none mt-10 mb-10">
            <input type="search" id="search" name="search" placeholder="Que cherchez-vous?" className="bg-transparent px-4" />
          </div>
        </div>
        <div className="hidden md:block">
          <Image src="/images/reseau_bien_etre_girl.png" width="900" height="700" alt="fille-bien-etre" />
        </div>
      </section>
      <section className="p-4 bg-zinc-100 flex flex-row justify-between">
        <div>
          Insert Carouselle here
        </div>
        <div className="w-52 capitalize bg-zinc-300 rounded-lg p-4 mr-7">
          <h2 className="font-bold">Que cherchez-vous?</h2>
          <ul className="pl-2 pt-2 text-white overflow-auto h-28">
            <Categories />
          </ul>
        </div>
      </section>
      <section className="flex flex-col items-center max-w-screen-lg mx-auto">
        <h2 className=" text-2xl md:text-4xl font-extrabold pt-7">Votre bien-être commence ici</h2>
        <div className="flex bg-zinc-200 rounded-full h-10 md:h-12 md:w-1/3 border-none mt-10 mb-10">
            <input type="search" id="search" name="search" placeholder="Que cherchez-vous?" className="bg-transparent px-4" />
        </div>
        <PrestaireCards />
        <div className="flex flex-row justify-center bg-zinc-200 rounded-full h-10 md:h-12 w-1/3 border-none mt-10 mb-10">
            <input type="more" id="more" name="more" placeholder="J'en veux plus !" className="text-center bg-transparent px-4" />
        </div>
      </section>
      <CategorieDuMois />
      <Reinsurance />
    </section>

  );
}
export default HomePage;
