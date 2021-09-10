<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210910094152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule ADD type_of_vehicule_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D9C052F8F FOREIGN KEY (type_of_vehicule_id) REFERENCES type_of_vehicule (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D9C052F8F ON vehicule (type_of_vehicule_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D9C052F8F');
        $this->addSql('DROP INDEX IDX_292FFF1D9C052F8F ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP type_of_vehicule_id');
    }
}
