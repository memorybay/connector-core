<?php
namespace jtl\Connector\Event\CrossSelling;

use Symfony\Contracts\EventDispatcher\Event;
use jtl\Connector\Model\CrossSelling;


class CrossSellingBeforeDeleteEvent extends Event
{
    const EVENT_NAME = 'crossselling.before.delete';

	protected $crossSelling;

    public function __construct(CrossSelling &$crossSelling)
    {
		$this->crossSelling = $crossSelling;
    }

    public function getCrossSelling()
    {
        return $this->crossSelling;
	}
	
}