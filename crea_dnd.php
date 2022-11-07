<?php

class Personnage {
    protected string $nom;
    protected string $classe;
    protected int $phyPwr;
    protected int $magPwr;
    protected int $armor;
    protected int $escape;
    protected int $life;
    protected int $mana;
    protected Bag $inventory;
    protected ?Weapon $weapon;
    protected ?Shield $shield;
    protected DateTime $dateDeCreation;

    public function __construct(string $nom,string $classe)
    {
        $this->nom = $nom;
        $this->classe = $classe;
        $this->phyPwr = 0;
        $this->magPwr = 0;
        $this->armor = 0;
        $this->escape = 0;
        $this->life = 0;
        $this->mana = 0;
        $this->inventory = new Bag();
        $this->weapon = null;
        $this->shield = null;
        $this->dateTime = new \DateTime();
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): Personnage
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string
     */
    public function getClasse(): string
    {
        return $this->classe;
    }

    /**
     * @param string $classe
     */
    public function setClasse(string $classe): Personnage
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * @return int
     */
    public function getPhyPwr(): int
    {
        return $this->phyPwr;
    }

    /**
     * @param int $phyPwr
     */
    public function setPhyPwr(int $phyPwr): Personnage
    {
        $this->phyPwr = $phyPwr;

        return $this;
    }

    /**
     * @return int
     */
    public function getMagPwr(): int
    {
        return $this->magPwr;
    }

    /**
     * @param int $magPower
     */
    public function setMagPower(int $magPwr): Personnage
    {
        $this->magPwr = $magPwr;

        return $this;
    }

    /**
     * @return int
     */
    public function getArmor(): int
    {
        return $this->armor;
    }

    /**
     * @param int $armor
     */
    public function setArmor(int $armor): Personnage
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * @return int
     */
    public function getEscape(): int
    {
        return $this->escape;
    }

    /**
     * @param int $escape
     */
    public function setEscape(int $escape): Personnage
    {
        $this->escape = $escape;

        return $this;
    }

    /**
     * @return int
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * @param int $life
     */
    public function setLife(int $life): Personnage
    {
        $this->life = $life;

        return $this;
    }

    /**
     * @return int
     */
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     * @param int $mana
     */
    public function setMana(int $mana): Personnage
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * @return Bag
     */
    public function getInventory(): Bag
    {
        return $this->inventory;
    }

    /**
     * @param Bag $inventory
     */
    public function setInventory(Bag $inventory): Personnage
    {
        $this->inventory = $inventory;
    }

    /**
     * @return Weapon|null
     */
    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    /**
     * @param Weapon|null $weapon
     */
    public function setWeapon(?Weapon $weapon): Personnage
    {
        $this->weapon = $weapon;
    }

    /**
     * @return Shield|null
     */
    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    /**
     * @param Shield|null $shield
     */
    public function setShield(?Shield $shield): Personnage
    {
        $this->shield = $shield;
    }

    /**
     * @return DateTime
     */
    public function getDateDeCreation(): DateTime
    {
        return $this->dateDeCreation;
    }

    /**
     * @param DateTime $dateDeCreation
     */
    public function setDateDeCreation(DateTime $dateDeCreation): Personnage
    {
        $this->dateDeCreation = $dateDeCreation;

        return $this;
    }
}
?>