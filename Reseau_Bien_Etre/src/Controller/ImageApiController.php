<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\Internaute;
use App\Entity\Prestataire;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;

class ImageApiController extends AbstractController
{
    #[Route('/api/imageInternaute/{id}', name: 'app_api_imageInternaute')]
    public function imageInternaute(Int $id, Request $request, EntityManagerInterface $em): Response
    {
        $image = $em->getRepository(Images::class)->findOneBy(['internaute'=> $id]);
        if(!$image) {
            $image = new Images();
        }
        $internaute = $em->getRepository(Internaute::class)->find($id);
        /** @var Symfony\Component\HttpFoundation\File\UploadedFile $data */
        $data = $request->files->get('file');
        $publicPath = $this->getParameter('kernel.project_dir').'/public/images';
        $newFilename = "/images/".$id."-image".$data->getClientOriginalName();
        $data->move($publicPath, $newFilename);
        $image->setImage($newFilename);
        $internaute->setImages($image);
        $em->persist($image);
        $em->persist($internaute);
        $em->flush();
        return new JsonResponse(['success' => true , 'uri' => $newFilename ]);
    }

    #[Route('/api/imagePrestataire/{id}/{ordre}', name: 'app_api_imagePrestataire')]
    public function imagePrestataire(Int $id, Int $ordre, Request $request, EntityManagerInterface $em): Response
    {
        $image = $em->getRepository(Images::class)->findOneBy(['prestataire'=> $id, 'ordre'=> $ordre]);
        if(!$image) {
            $image = new Images();
        }
        $prestataire = $em->getRepository(Prestataire::class)->find($id);
        /** @var Symfony\Component\HttpFoundation\File\UploadedFile $data */
        $data = $request->files->get('file');
        $publicPath = $this->getParameter('kernel.project_dir').'/public/images';
        $newFilename = "/images/".$id."-image".$data->getClientOriginalName();
        $data->move($publicPath, $newFilename);
        $image->setImage($newFilename);
        $image->setOrdre($ordre);
        if ($ordre == 0) {
            $prestataire->setImageLogo($image);
        } else {
            $prestataire->addImage($image);
        }
        $em->persist($image);
        $em->persist($prestataire);
        $em->flush();
        return new JsonResponse(['success' => true , 'uri' => $newFilename ]);
    }
}
