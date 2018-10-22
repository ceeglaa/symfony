<?php

namespace App\DataFixtures;

use App\Service\Greeting;
use App\Entity\Currency;
use App\Entity\MicroPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture 
{
	public function load(ObjectManager $manager)
	{
		
		for ($i=0; $i<$quan; $i++){
			$currency = new MicroPost();
			$currency->setText('Some random text ' . rand(0,100));
			$currency->setTime(new \DateTime('2018-03-15'));
			$manager->persist($currency);
			
		}
		$manager->flush();
	}
	
}