<?php

namespace App\Controller;

use App\Form\SearchCarType;
use App\Repository\DesignerldRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    /**
     * @Route("/search" , name="search")
     */

    public function searchCar(Request $request,DesignerldRepository $DesignerldRepository)
    {

        $designerlds = [];        
        $searchCarForm=$this ->createForm(SearchCarType::class);

        if($searchCarForm->handleRequest($request)->isSubmitted() && $searchCarForm->isValid()) {
            $criteria = $searchCarForm->getData();
            $designerlds=$DesignerldRepository->SearchCar($criteria);
    }

        return $this->render('search/search.html.twig' , [
            'search_form'=>$searchCarForm->createview(),
            'designerlds'=>$designerlds,
        ]);

 }
        
}