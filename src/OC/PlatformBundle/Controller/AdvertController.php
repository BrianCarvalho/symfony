<?php
/**
 * Created by PhpStorm.
 * User: ELEVE
 * Date: 27/08/2018
 * Time: 09:42
 */
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this
            ->get('templating')
            ->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Brian'));

        return new response($content);
    }

    public function byebyeAction()
    {
        $content = $this
            ->get('templating')
            ->render('OCPlatformBundle:Advert:byebye.html.twig', array('nom' => 'Brian'));

        return new response($content);

    }

    public function viewAction($id)
    {
        //$id vaut 5 si l'on recupere l'url /platform/advert/5

        //ici , on recuperera depuis la base de données
        // l'annonce coorespondant a l'id $id
        //Puis on passera l'annonce  à la vue pour qu'elle s'affiche

        return new Response("Affichage de l'annonce d'id : " . $id);
    }

    public function viewSlugAction(){
        return new response("On pourrais afficher l'annonce correspondant au slug ".$slug.",crée en ".$year. " et au format" .$format. ".");
    }
}