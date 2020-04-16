<?php

namespace App\Controller;

use App\Model\CrookManager;

class CrookController extends AbstractController
{

    public function all() : string
    {
        $crookManager = new CrookManager();
        $sheets = $crookManager->selectAllBy('popularity', 'DESC');
        return $this->twig->render('Crook/index.html.twig', [
            'sheets' => $sheets,
        ]);
    }
}
