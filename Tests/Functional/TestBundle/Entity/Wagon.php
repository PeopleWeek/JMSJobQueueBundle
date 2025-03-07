<?php

namespace JMS\JobQueueBundle\Tests\Functional\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\ChangeTrackingPolicy('DEFERRED_EXPLICIT')]
#[ORM\Table(name: 'wagons')]
class Wagon
{
    #[ORM\Id]
    #[ORM\GeneratedValue('AUTO')]
    #[ORM\Column(type: 'integer')]
    public $id;

    #[ORM\ManyToOne(targetEntity: Train::class)]
    public $train;

    #[ORM\Column(type: 'string')]
    public $state = 'new';
}