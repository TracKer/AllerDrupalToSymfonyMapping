<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine;

/**
 * Node
 *
 * @ORM\Table(name="node")
 * @ORM\Entity
 */
class Node
{
  /**
   * @ORM\Column(name="nid", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var integer
   *
   * @ORM\Column(name="vid", type="integer")
   */
  private $vid;

  /**
   * @var string
   *
   * @ORM\Column(name="type", type="string", length=32)
   */
  private $type;

  /**
   * @var string
   *
   * @ORM\Column(name="language", type="string", length=12)
   */
  private $language;

  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string", length=12)
   */
  private $title;

  /**
   * @ORM\OneToMany(targetEntity="FieldBody", mappedBy="field_data_body")
   */
  private $body;

  /**
   * @return int
   */
  public function getVid() {
    return $this->vid;
  }

  /**
   * @param int $vid
   */
  public function setVid($vid) {
    $this->vid = $vid;
  }

  /**
   * @return string
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType($type) {
    $this->type = $type;
  }

  /**
   * @return string
   */
  public function getLanguage() {
    return $this->language;
  }

  /**
   * @param string $language
   */
  public function setLanguage($language) {
    $this->language = $language;
  }

  /**
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * @param string $title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

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

