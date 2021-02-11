<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210211203456 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dosage (dos_code INT AUTO_INCREMENT NOT NULL, dos_quantite VARCHAR(10) NOT NULL, dos_unite VARCHAR(10) NOT NULL, PRIMARY KEY(dos_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE famille (fam_code INT AUTO_INCREMENT NOT NULL, fam_libelle VARCHAR(80) NOT NULL, PRIMARY KEY(fam_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE interagir (med_perturbateur INT NOT NULL, med_med_perturbe INT NOT NULL, PRIMARY KEY(med_perturbateur, med_med_perturbe)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament (id_medicament INT AUTO_INCREMENT NOT NULL, med_depotlegal INT NOT NULL, med_nomcommercial VARCHAR(25) NOT NULL, med_composition VARCHAR(255) NOT NULL, med_effets VARCHAR(255) NOT NULL, med_contreindic VARCHAR(255) NOT NULL, med_prixechantillon DOUBLE PRECISION NOT NULL, fam_code INT NOT NULL, INDEX fam_code (fam_code), PRIMARY KEY(id_medicament)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prescrire (med_depotlegal INT UNSIGNED NOT NULL, tin_code INT NOT NULL, dos_code INT NOT NULL, pre_posologie VARCHAR(40) NOT NULL, INDEX dos_code (dos_code), INDEX tin_code (tin_code), PRIMARY KEY(med_depotlegal, tin_code, dos_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, test1 VARCHAR(255) DEFAULT NULL, test2 VARCHAR(255) NOT NULL, test3 NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_individu (tin_code INT AUTO_INCREMENT NOT NULL, tin_libelle VARCHAR(50) NOT NULL, PRIMARY KEY(tin_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dosage');
        $this->addSql('DROP TABLE famille');
        $this->addSql('DROP TABLE interagir');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE prescrire');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE type_individu');
    }
}
