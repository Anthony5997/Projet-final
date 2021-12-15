<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211215125304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vehicule (id VARCHAR(255) NOT NULL, type_of_vehicule_id INT DEFAULT NULL, country_of_registration VARCHAR(255) DEFAULT NULL, numberplate VARCHAR(255) DEFAULT NULL, brand VARCHAR(255) DEFAULT NULL, model VARCHAR(255) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, year INT DEFAULT NULL, vehicule_picture VARCHAR(255) DEFAULT \'default-vehicule.jpg\', INDEX IDX_292FFF1D9C052F8F (type_of_vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D9C052F8F FOREIGN KEY (type_of_vehicule_id) REFERENCES type_of_vehicule (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6494A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6494A4A3511');
        $this->addSql('DROP TABLE vehicule');
    }
}
