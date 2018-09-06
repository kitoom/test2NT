<?php
namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
/**
 * Description of TestController
 *
 * @author etudiant
 */
class TestController extends Controller {
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction() {
        $uneVariable = new \stdClass();
        $uneVariable->nom = "Harry";
        $uneVariable->prenom = "Potter";
        
        return $this->render('testUtilisateur/index.html.twig',['unevariable'=>$uneVariable]);
    }
    /**
     * @Route("/contact")
     * @return Response
     */
    public function contactAction() {
        return $this->render('testUtilisateur/pageContact.html.twig');
    }
}
