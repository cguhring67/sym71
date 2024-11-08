<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController
{
	#[Route('/')]
	public function home(): Response
	{
		return new Response(
			'<html><body>Bienvenue dans mon Premier projet Symfony 7.1 !</body></html>'
		);
	}
}