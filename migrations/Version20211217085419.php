<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211217085419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking (id VARCHAR(255) NOT NULL, trip_id VARCHAR(255) DEFAULT NULL, user_id VARCHAR(255) DEFAULT NULL, created_at DATE DEFAULT NULL, INDEX IDX_E00CEDDEA5BC2E0E (trip_id), INDEX IDX_E00CEDDEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id VARCHAR(255) NOT NULL, sender_id VARCHAR(255) NOT NULL, receiver_id VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, send_at DATETIME NOT NULL, INDEX IDX_B6BD307FF624B39D (sender_id), INDEX IDX_B6BD307FCD53EDB6 (receiver_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id VARCHAR(255) NOT NULL, author_id VARCHAR(255) NOT NULL, user_rated_id VARCHAR(255) NOT NULL, trip_id VARCHAR(255) DEFAULT NULL, content VARCHAR(255) DEFAULT NULL, rating INT NOT NULL, created_at DATETIME DEFAULT NULL, INDEX IDX_794381C6F675F31B (author_id), INDEX IDX_794381C6AA3E2149 (user_rated_id), INDEX IDX_794381C6A5BC2E0E (trip_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE travel_preferences (id INT AUTO_INCREMENT NOT NULL, discussion VARCHAR(255) DEFAULT NULL, music VARCHAR(255) DEFAULT NULL, smoking VARCHAR(255) DEFAULT NULL, animals VARCHAR(255) DEFAULT NULL, health_pass VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trip (id VARCHAR(255) NOT NULL, driver_id VARCHAR(255) NOT NULL, departure VARCHAR(255) NOT NULL, arrival VARCHAR(255) NOT NULL, date_of_trip DATE NOT NULL, passengers INT NOT NULL, trip_full TINYINT(1) DEFAULT \'0\' NOT NULL, trip_completed TINYINT(1) DEFAULT \'0\' NOT NULL, duration VARCHAR(255) DEFAULT NULL, distance VARCHAR(255) DEFAULT NULL, start_time TIME DEFAULT NULL, trip_started TINYINT(1) DEFAULT NULL, created_at DATE NOT NULL, INDEX IDX_7656F53BC3423909 (driver_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_of_vehicule (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id VARCHAR(255) NOT NULL, user_experience_id INT DEFAULT NULL, travel_preferences_id INT DEFAULT NULL, vehicule_id VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, date_of_birth DATE DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, bio VARCHAR(255) DEFAULT NULL, profile_picture VARCHAR(255) DEFAULT \'default_profile_picture.jpg\', created_at DATE NOT NULL, profile_completed TINYINT(1) NOT NULL, trips_made INT NOT NULL, global_rating DOUBLE PRECISION DEFAULT NULL, reset_token VARCHAR(255) DEFAULT NULL, password_attempt INT DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649A867A377 (user_experience_id), UNIQUE INDEX UNIQ_8D93D6496B0970FA (travel_preferences_id), UNIQUE INDEX UNIQ_8D93D6494A4A3511 (vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_experience_level (id INT AUTO_INCREMENT NOT NULL, experience_level VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id VARCHAR(255) NOT NULL, type_of_vehicule_id INT DEFAULT NULL, country_of_registration VARCHAR(255) DEFAULT NULL, numberplate VARCHAR(255) DEFAULT NULL, brand VARCHAR(255) DEFAULT NULL, model VARCHAR(255) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, year INT DEFAULT NULL, vehicule_picture VARCHAR(255) DEFAULT \'default-vehicule.jpg\', INDEX IDX_292FFF1D9C052F8F (type_of_vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEA5BC2E0E FOREIGN KEY (trip_id) REFERENCES trip (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FCD53EDB6 FOREIGN KEY (receiver_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6AA3E2149 FOREIGN KEY (user_rated_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6A5BC2E0E FOREIGN KEY (trip_id) REFERENCES trip (id)');
        $this->addSql('ALTER TABLE trip ADD CONSTRAINT FK_7656F53BC3423909 FOREIGN KEY (driver_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A867A377 FOREIGN KEY (user_experience_id) REFERENCES user_experience_level (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496B0970FA FOREIGN KEY (travel_preferences_id) REFERENCES travel_preferences (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6494A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D9C052F8F FOREIGN KEY (type_of_vehicule_id) REFERENCES type_of_vehicule (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496B0970FA');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEA5BC2E0E');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6A5BC2E0E');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D9C052F8F');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEA76ED395');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF624B39D');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FCD53EDB6');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6F675F31B');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6AA3E2149');
        $this->addSql('ALTER TABLE trip DROP FOREIGN KEY FK_7656F53BC3423909');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A867A377');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6494A4A3511');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE travel_preferences');
        $this->addSql('DROP TABLE trip');
        $this->addSql('DROP TABLE type_of_vehicule');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_experience_level');
        $this->addSql('DROP TABLE vehicule');
    }
}
