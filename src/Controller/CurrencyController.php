<?php

namespace App\Controller;

use App\Repository\CurrencyRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

	/**
	 *@Route ("/currency")
	 */
	 
class CurrencyController
{

	 
	 /**
	 *@var \CurrencyRepository
	 */
	  private $currencyRepository;
	 
	public function __construct(CurrencyRepository $currencyRepository)
	{
		$this->currencyRepository =$currencyRepository;
		
	}
	
	/**
	 *@Route ("/", name="currency_index")
	 */
	 
	 public function index()
	 {
		$html = $this->twig->render('currency/index.html.twig', [
		'posts' => $this->currencyRepository->findAll()
		]);
			return new Response($html);
	 }
}
