<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SysAdminController extends AbstractController
{
    /**
     * @Route("/admin" , name="admin")
     */
    public function admin()
    {
        return $this->render('admin/admin.html.twig');
    }
}
