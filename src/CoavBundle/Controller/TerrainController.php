<?php

namespace CoavBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CoavBundle\Entity\Terrain;

/**
 * Terrain controller.
 *
 */
class TerrainController extends Controller
{
    /**
     * Lists all Terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $terrains = $em->getRepository('CoavBundle:Terrain')->findAll();

        return $this->render('terrain/index.html.twig', array(
            'terrains' => $terrains,
        ));
    }

    /**
     * Finds and displays a Terrain entity.
     *
     */
    public function showAction(Terrain $terrain)
    {

        return $this->render('terrain/show.html.twig', array(
            'terrain' => $terrain,
        ));
    }
}
