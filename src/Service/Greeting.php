<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Greeting {
	
	/**
	 * @var LoggerInterface
	 */
	 
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

	 public function get_quant(){
		 return 5;
	 }
	 
    public function greet(string $name): string
    {
        $this->logger->info("Greeted $name");
        return "Hello $name";
    }
}

?>