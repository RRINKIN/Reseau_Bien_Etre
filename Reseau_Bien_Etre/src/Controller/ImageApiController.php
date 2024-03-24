<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\Internaute;
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
}
