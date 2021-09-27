<?php

namespace App\Tests;

use App\Entity\Categorie;
use App\Entity\Oeuvre;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class OeuvreUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $oeuvre = new Oeuvre();
        $datetime = new \DateTime();
        $categorie = new Categorie();
        $user = new User();

        $oeuvre
            ->setNom('nom')
            ->setLargeur(20.20)
            ->setHauteur(20.20)
            ->setEnVente(true)
            ->setDateRealisation($datetime)
            ->setCreatedAt($datetime)
            ->setDescription('description')
            ->setPortfolio(true)
            ->setSlug('slug')
            ->setFile('file')
            ->addCategorie($categorie)
            ->setPrix(20.20)
            ->setUser($user);

        $this->assertTrue($oeuvre->getNom() === 'nom');
        $this->assertTrue($oeuvre->getLargeur() == 20.20);
        $this->assertTrue($oeuvre->getHauteur() == 20.20);
        $this->assertTrue($oeuvre->getEnVente() === true);
        $this->assertTrue($oeuvre->getDateRealisation() === $datetime);
        $this->assertTrue($oeuvre->getCreatedAt() === $datetime);
        $this->assertTrue($oeuvre->getDescription() === 'description');
        $this->assertTrue($oeuvre->getPortfolio() === true);
        $this->assertTrue($oeuvre->getSlug() === 'slug');
        $this->assertTrue($oeuvre->getFile() === 'file');
        $this->assertTrue($oeuvre->getPrix() == 20.20);
        $this->assertContains($categorie, $oeuvre->getCategorie());
        $this->assertTrue($oeuvre->getUser() === $user);
    }

    public function testIsFalse()
    {
        $oeuvre = new Oeuvre();
        $datetime = new \DateTime();
        $categorie = new Categorie();
        $user = new User();

        $oeuvre
            ->setNom('nom')
            ->setLargeur(20.20)
            ->setHauteur(20.20)
            ->setEnVente(true)
            ->setDateRealisation($datetime)
            ->setCreatedAt($datetime)
            ->setDescription('description')
            ->setPortfolio(true)
            ->setSlug('slug')
            ->setFile('file')
            ->addCategorie($categorie)
            ->setPrix(20.20)
            ->setUser($user);

        $this->assertFalse($oeuvre->getNom() === 'false');
        $this->assertFalse($oeuvre->getLargeur() == 22.20);
        $this->assertFalse($oeuvre->getHauteur() == 22.20);
        $this->assertFalse($oeuvre->getEnVente() === false);
        $this->assertFalse($oeuvre->getDateRealisation() === new \DateTime());
        $this->assertFalse($oeuvre->getCreatedAt() === new \DateTime());
        $this->assertFalse($oeuvre->getDescription() === 'false');
        $this->assertFalse($oeuvre->getPortfolio() === false);
        $this->assertFalse($oeuvre->getSlug() === 'false');
        $this->assertFalse($oeuvre->getFile() === 'false');
        $this->assertFalse($oeuvre->getPrix() === 22.20);
        $this->assertNotContains(new Categorie(), $oeuvre->getCategorie());
        $this->assertFalse($oeuvre->getUser() === new User());
    }

    public function testIsEmpty()
    {
        $oeuvre = new Oeuvre();

        $this->assertEmpty($oeuvre->getNom());
        $this->assertEmpty($oeuvre->getLargeur());
        $this->assertEmpty($oeuvre->getHauteur());
        $this->assertEmpty($oeuvre->getEnVente());
        $this->assertEmpty($oeuvre->getDateRealisation());
        $this->assertEmpty($oeuvre->getCreatedAt());
        $this->assertEmpty($oeuvre->getDescription());
        $this->assertEmpty($oeuvre->getPortfolio());
        $this->assertEmpty($oeuvre->getSlug());
        $this->assertEmpty($oeuvre->getFile());
        $this->assertEmpty($oeuvre->getPrix());
        $this->assertEmpty($oeuvre->getCategorie());
        $this->assertEmpty($oeuvre->getUser());
    }
}
