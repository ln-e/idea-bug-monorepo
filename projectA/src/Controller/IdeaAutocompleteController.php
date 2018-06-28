<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IdeaAutocompleteController extends Controller
{
    /**
     * @Route("/idea/autocomplete", name="idea_autocomplete")
     */
    public function index()
    {
        // Try here to get autocomplete from $this in idea.
        // $this->
        return $this->render('idea_autocomplete/index.html.twig', [
            'controller_name' => 'IdeaAutocompleteController',
        ]);
    }
}
