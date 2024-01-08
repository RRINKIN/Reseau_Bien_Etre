import Image from 'next/image';
import LoginButton from "../components/global/login";

function APropos() {
  return (
    <section className='max-w-screen-lg mx-auto py-7 px-3 md:px-0'>
      <h1 className="text-2xl">A propos du réseau bien-être</h1>
      <div className='md:grid md:grid-cols-2 md:gap-4'>
        <div className='pt-6'>
        <Image src="/images/Founders.webp" width="700" height="500" alt="Les 2 fondateurs" className='py-4 md:grid-cols-1' />
          <LoginButton />
        </div>
        <p className="py-6 md:grid-cols-1">
        En 2022, deux amis passionnés de bien-être, Johan et Mathieu, se rencontrent lors d'un stage de yoga. Ils partagent la même vision du bien-être, comme un chemin de vie qui permet de se sentir bien dans son corps et dans sa tête. Ils décident de créer une plateforme web qui mettrait en relation des professionnels du bien-être et des clients.
        Ils se lancent dans un projet ambitieux, qui nécessite de nombreuses compétences techniques et marketing. Ils travaillent d'arrache-pied pendant un an pour développer la plateforme, qui sera baptisée "Bien-être en ligne".
        La plateforme Bien-être en ligne est lancée en 2023. Elle propose un large choix de professionnels du bien-être, des masseurs aux coachs sportifs, en passant par les thérapeutes et les naturopathes. Les clients peuvent facilement trouver un praticien en fonction de leur localisation, de leur budget et de leurs besoins.
        La plateforme rencontre un succès immédiat. Elle compte aujourd'hui plus de 10 000 professionnels du bien-être inscrits et plus de 50 000 clients. Elle permet à des milliers de personnes de prendre soin de leur bien-être, au quotidien.
        Johan et Mathieu sont fiers de leur réussite. Ils ont réussi à rendre le bien-être accessible à tous, en facilitant la recherche d'un praticien adapté à ses besoins.
        </p>
      </div>
      <h2 className="text-xl">L'histoire de Johan et Mathieu</h2>
      <p className="py-6">Johan et Mathieu ont tous deux une formation dans le domaine du bien-être. Johan est massothérapeute et Mathieu est coach sportif. Ils sont passionnés par leur métier et ils souhaitent le partager avec le plus grand nombre.
      Lors de leur rencontre, ils se rendent compte qu'ils ont la même vision du bien-être. Ils veulent créer une plateforme qui permette aux gens de prendre soin de leur bien-être, de manière simple et efficace.
      Ils commencent par se renseigner sur le marché du bien-être en ligne. Ils découvrent qu'il existe de nombreuses plateformes, mais qu'elles sont souvent complexes et peu intuitives. Ils décident de créer une plateforme qui soit simple à utiliser et qui propose un large choix de professionnels du bien-être.
      </p>
      <h2 className="text-xl">Le développement de la plateforme</h2>
      <p className="py-6">Le développement de la plateforme Bien-être en ligne est un long processus. Johan et Mathieu doivent acquérir de nouvelles compétences techniques et marketing. Ils travaillent avec des développeurs web et des experts en marketing pour créer une plateforme qui réponde aux besoins des professionnels du bien-être et des clients.
      Ils se lancent dans une campagne de communication pour faire connaître la plateforme. Ils utilisent les réseaux sociaux, la publicité en ligne et les relations publiques pour atteindre le plus grand nombre.
      </p>
      <h2 className="text-xl">Le succès de la plateforme</h2>
      <p className="py-6">La plateforme Bien-être en ligne rencontre un succès immédiat. Elle est rapidement adoptée par les professionnels du bien-être et les clients.
      Les professionnels du bien-être apprécient la facilité d'utilisation de la plateforme et la visibilité qu'elle leur offre. Ils peuvent facilement créer un profil et proposer leurs services aux clients.
      Les clients apprécient la possibilité de trouver un professionnel du bien-être adapté à leurs besoins, en fonction de leur localisation, de leur budget et de leurs préférences.
      </p>
      <h2 className="text-xl">L'avenir de la plateforme</h2>
      <p className="py-6">Johan et Mathieu ont de grandes ambitions pour l'avenir de la plateforme Bien-être en ligne. Ils souhaitent la développer dans de nouveaux pays et proposer de nouvelles fonctionnalités.
      Ils envisagent notamment de créer une application mobile pour permettre aux clients de trouver un praticien en déplacement. Ils souhaitent également proposer des formations et des événements pour accompagner les professionnels du bien-être dans leur développement.
      La plateforme Bien-être en ligne est un projet innovant qui a le potentiel de changer la façon dont les gens prennent soin de leur bien-être. Johan et Mathieu sont déterminés à faire de leur plateforme une référence dans le domaine du bien-être en ligne.
      </p>
    </section>
  );
}
export default APropos;