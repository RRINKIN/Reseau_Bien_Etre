import PrestataireCards from "./components/homePage/prestataireCards";
import Image from 'next/image';
import Reinsurance from "./components/homePage/Reinsurance";
import CategorieDuMois from "./components/homePage/categorieDuMois";
import Slider_2 from "./components/homePage/slider_2";
 
async function HomePage() {
  return (
    <section>
      <section className="flex bg-gradient-to-b from-[#c3bef0] to-zinc-300 justify-content px-7 md:pl-20 pt-20 items-center">
        <div>
          <h1 className="text-4xl md:text-7xl text-white md:max-w-4xl font-extrabold">Prenez soin de vous Près de chez vous</h1>
        </div>
        <div className="hidden md:block">
          <Image src="/images/reseau_bien_etre_girl.png" width="900" height="700" alt="fille-bien-etre" />
        </div>
      </section>
      <section className="p-4 bg-zinc-100 md:flex md:flex-row md:justify-between">
        <Slider_2 />
        <h2 className=" text-2xl text-center md:text-4xl font-extrabold pt-4 md:pt-[120px] md:pr-20">Votre bien-être commence ici</h2>
      </section>
      <section className="flex flex-col items-center justify-start max-w-screen-xl mx-auto">
          <PrestataireCards/>
      </section>
      <CategorieDuMois />
      <Reinsurance />
    </section>

  );
}
export default HomePage;
