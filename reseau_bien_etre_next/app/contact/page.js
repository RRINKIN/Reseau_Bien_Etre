import Image from "next/image";

function Contact() {
  return (
    <section className='max-w-screen-lg mx-auto py-7 px-3 md:px-0'>
        <h1 className="text-2xl">Contactez-nous</h1>
        <div className="md:flex md:flex-row">
          <p className="py-6 md:w-1/2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque recusandae iusto cupiditate ad expedita pariatur, temporibus dolorum quia explicabo exercitationem distinctio accusantium inventore sequi, molestias maiores optio iste nesciunt consequuntur. Nihil repudiandae asperiores aut? Consequatur aliquam quibusdam dolores voluptates ducimus vitae soluta eos nesciunt aspernatur recusandae nihil doloribus, sapiente, exercitationem dolorum amet natus nobis veritatis minus fugit maxime perferendis delectus velit quasi. Ab iste quo assumenda veniam vitae sunt aperiam magni id? Minima quidem repudiandae aperiam iure molestiae dolor vel, perferendis laudantium est esse aliquid, quo facilis iste blanditiis ea libero molestias delectus, aspernatur nam quod quaerat in reiciendis rem numquam! Ratione a doloremque molestiae, ducimus quasi delectus cupiditate ullam perferendis obcaecati eius nobis, nesciunt ea iure, sed omnis earum eligendi rem harum! Vitae ducimus harum, similique molestiae dolorem adipisci illum blanditiis est voluptatibus quas magnam nulla praesentium accusantium, perspiciatis veniam itaque placeat distinctio voluptate laborum? Fugit odio provident aperiam iure culpa dicta nobis eveniet, quibusdam, quas, veniam nostrum ducimus doloribus voluptatem tenetur cumque illo natus error eaque praesentium minus. Amet repudiandae assumenda voluptatem commodi repellat, voluptate velit deserunt, veniam soluta, molestias odit ab at quam dolore quasi beatae sequi blanditiis earum ipsam nisi. Voluptatibus ipsa id eius aut!</p>
          <div className="bg-gradient-to-b from-[#c3bef0] to-zinc-300 md:w-1/2 h-auto rounded p-7 mb-7 md:ml-7">
            <form className="flex flex-col">
              <label for="fname">Prénom *</label>
              <input type="text" id="fname" name="fname" className="rounded px-4 outline-none"/>
              <label for="name">Nom *</label>
              <input type="text" id="name" name="name" className="rounded px-4 outline-none"/>
              <label for="phone">Téléphone *</label>
              <input type="text" id="phone" name="phone" className="rounded px-4 outline-none"/>
              <label for="subject">Message</label>
              <textarea id="subject" name="subject" className="rounded px-4 outline-none h-80"></textarea>
              <button 
              type="submit"
              className="text-center h-7 mt-7 px-4 outline-none hover:bg-violet-400 bg-zinc-500 md:w-1/3 rounded text-white flex flex-row items-center"
              >
                <svg 
                  xmlns="http://www.w3.org/2000/svg"
                  className="fill-white h-10 pr-5"
                  viewBox="0 0 512 512">
                  <path d="M440 6.5L24 246.4c-34.4 19.9-31.1 70.8 5.7 85.9L144 379.6V464c0 46.4 59.2 65.5 86.6 28.6l43.8-59.1 111.9 46.2c5.9 2.4 12.1 3.6 18.3 3.6 8.2 0 16.3-2.1 23.6-6.2 12.8-7.2 21.6-20 23.9-34.5l59.4-387.2c6.1-40.1-36.9-68.8-71.5-48.9zM192 464v-64.6l36.6 15.1L192 464zm212.6-28.7l-153.8-63.5L391 169.5c10.7-15.5-9.5-33.5-23.7-21.2L155.8 332.6 48 288 464 48l-59.4 387.3z"/>
                </svg>
                Envoyer
              </button>
            </form>
          </div>
        </div>
        <div className="bg-gradient-to-b from-white to-zinc-200 rounded flex flex-row">
            <Image src="/images/reseau_bien_etre_girl_small.webp" width="200" height="200" alt="fille-bien-etre" />
            <div className="p-4 text-zinc-500">
              <h2 className="pb-4">Rendez-nous visite</h2>
              <p>Réseau Bien-être SRL</p>
              <p>Rue Saint-Laurent 33 4000 Liège - Belgique</p>
              <p>TVA - BE0000000000</p>
            </div>
        </div>
    </section>
  );
}
export default Contact;