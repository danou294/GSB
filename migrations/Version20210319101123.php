<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319101123 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interagir CHANGE med_perturbateur med_perturbateur INT NOT NULL');
        $this->addSql('ALTER TABLE medicament ADD id_medicament INT AUTO_INCREMENT NOT NULL, CHANGE med_depotlegal med_depotlegal INT NOT NULL, CHANGE med_contreindic med_contreindic VARCHAR(255) DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id_medicament)');
        $this->addSql('ALTER TABLE prescrire MODIFY med_depotlegal INT NOT NULL');
        $this->addSql('ALTER TABLE prescrire DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE prescrire CHANGE med_depotlegal med_depotlegal INT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE prescrire ADD PRIMARY KEY (med_depotlegal, tin_code, dos_code)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interagir CHANGE med_perturbateur med_perturbateur INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE medicament MODIFY id_medicament INT NOT NULL');
        $this->addSql('ALTER TABLE medicament DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE medicament DROP id_medicament, CHANGE med_depotlegal med_depotlegal INT AUTO_INCREMENT NOT NULL, CHANGE med_contreindic med_contreindic VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE medicament ADD PRIMARY KEY (med_depotlegal)');
        $this->addSql('ALTER TABLE prescrire DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE prescrire CHANGE med_depotlegal med_depotlegal INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE prescrire ADD PRIMARY KEY (med_depotlegal)');
    }
}
