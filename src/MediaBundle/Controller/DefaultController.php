<?php

namespace MediaBundle\Controller;

use MediaBundle\Form\AlbumType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DomCrawler\Field\ChoiceFormField;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use MediaBundle\Entity\Album;
use MediaBundle\Entity\Commentaire;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MediaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/", name="accueil")
     */
    public function newAction(Request $request)
    {
        // create an album and give it some dummy data for this example
        $album = new Media();
        $form = $this->createForm(AlbumType::class, $album);

        $form->handleRequest($request);

//        $album->setMedia('Ajouter un album');
//        $media->setDueDate(new \DateTime('tomorrow'));

//        $form = $this->createFormBuilder($album)
//            ->add('titre_album', TextType::class)
//            ->add('artiste', TextType::class)
//            ->add('genre', CheckboxType::class, array('choices' => array('Hip Hop' => true,
//                'Soul' => true,
//                'Rock' => true)))
//            ->add('support', CheckboxType::class, array('choices' => array('Vinyl' => true,
//                'CD' => true,
//                'Cassette' => true)))
////            ->add('dueDate', DateType::class)
//            ->add('Ajouter', SubmitType::class, array('label' => 'Créer un album'))
//            ->getForm();

//        if ($form->isSubmitted() && $form->isValid()) {
//            $media = $form->getData();
//
//            return $this->redirectToRoute('task_success');
//        }

        return $this->renderView('MediaBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}