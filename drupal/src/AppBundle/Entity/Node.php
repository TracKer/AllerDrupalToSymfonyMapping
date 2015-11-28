<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Node
 *
 * @ORM\Table(name='node')
 * @ORM\Entity
 */
class Node
{
  /**
   * @var integer
   *
   * @ORM\Column(name="nid", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var integer
   *
   * @ORM\Column(name='vid', type='integer')
   */
  private $vid;

  /**
   * @var string
   *
   * @ORM\Column(name='type', type="string", length=32)
   */
  private $type;


  /**
   * Get id
   *
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }
}

