<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210904182829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE travel_preferences ADD user_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE travel_preferences ADD CONSTRAINT FK_F6B2907AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F6B2907AA76ED395 ON travel_preferences (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE travel_preferences DROP FOREIGN KEY FK_F6B2907AA76ED395');
        $this->addSql('DROP INDEX UNIQ_F6B2907AA76ED395 ON travel_preferences');
        $this->addSql('ALTER TABLE travel_preferences DROP user_id');
    }
}
