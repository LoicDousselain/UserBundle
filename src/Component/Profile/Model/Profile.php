<?php

namespace MMC\User\Component\Profile\Model;

abstract class Profile implements ProfileInterface
{

    /**
     * @var int
     */
    protected $id;


    /**
     * @var string
     */
    protected $uuid;


    /**
     * @var array
     */
    protected $roles;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getUuid();
    {
        return $this->uuid;
    }

    /**
     * {@inheritdoc}
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles();
    {
        return $this->roles;
    }

    /**
     * {@inheritdoc}
     */
    public function setRoles($uuid)
    {
        $this->roles = $roles;

        return $this;
    }
}
