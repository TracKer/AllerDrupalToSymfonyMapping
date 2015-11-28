<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
use AppBundle\Entity\Node;

/**
 * FieldBody
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Table(
 *   name="field_data_body",
 *   uniqueConstraints={
 *     @ORM\UniqueConstraint(name="field_unique",columns={"entity_type,entity_id,deleted,delta,language"})
 *   }
 * )
 */
class FieldBody
{
  /**
   * @var string
   *
   * @ORM\Column(name="entity_type", type="string")
   */
  private $entity_type;

  /**
   * @var integer
   *
   * @ORM\Column(name="entity_id", type="integer")
   * @ORM\Id()
   */
  private $entity_id;

  /**
   * @var integer
   *
   * @ORM\Column(name="deleted", type="integer")
   */
  private $deleted;

  /**
   * @var integer
   *
   * @ORM\Column(name="delta", type="integer")
   */
  private $delta;

  /**
   * @return string
   */
  public function getEntityType() {
    return $this->entity_type;
  }

  /**
   * @param string $entity_type
   */
  public function setEntityType($entity_type) {
    $this->entity_type = $entity_type;
  }

  /**
   * @return int
   */
  public function getEntityId() {
    return $this->entity_id;
  }

  /**
   * @param int $entity_id
   */
  public function setEntityId($entity_id) {
    $this->entity_id = $entity_id;
  }

  /**
   * @return int
   */
  public function getDeleted() {
    return $this->deleted;
  }

  /**
   * @param int $deleted
   */
  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }

  /**
   * @return int
   */
  public function getDelta() {
    return $this->delta;
  }

  /**
   * @param int $delta
   */
  public function setDelta($delta) {
    $this->delta = $delta;
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
   * @var string
   *
   * @ORM\Column(name="language", type="string", length=32)
   */
  private $language;

  /**
   * @var string
   *
   * @ORM\Column(name="body_value", type="string")
   */
  private $value;

  /**
   * @return string
   */
  public function getValue() {
    return $this->value;
  }

  /**
   * @param string $value
   */
  public function setValue($value) {
    $this->value = $value;
  }

  /**
   * @ORM\ManyToOne(targetEntity="Node", inversedBy="body")
   * @ORM\JoinColumn(name="entity_id", referencedColumnName="nid")
   */
  private $node;

}

