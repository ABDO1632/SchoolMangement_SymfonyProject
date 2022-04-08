<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407171313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, arabic_name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classroom (id INT AUTO_INCREMENT NOT NULL, school_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, nb_places INT DEFAULT NULL, arabic_name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_497D309DA1BE284D (school_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, arabic_name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cycle (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, arabic_name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE documents (id INT AUTO_INCREMENT NOT NULL, school_id_id INT DEFAULT NULL, staff_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, path VARCHAR(255) DEFAULT NULL, arabic_name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_A2B07288A1BE284D (school_id_id), INDEX IDX_A2B072882A13690 (staff_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE school (id INT AUTO_INCREMENT NOT NULL, city_id_id INT DEFAULT NULL, country_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, director_name VARCHAR(255) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, header VARCHAR(255) DEFAULT NULL, footer VARCHAR(255) DEFAULT NULL, arabic_name VARCHAR(255) DEFAULT NULL, arabic_address VARCHAR(255) DEFAULT NULL, arabic_director_name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_F99EDABB3CCE3900 (city_id_id), INDEX IDX_F99EDABBD8A48BBD (country_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE staff (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, birth_date DATE DEFAULT NULL, national_number VARCHAR(255) DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, postal_code VARCHAR(255) DEFAULT NULL, social_security VARCHAR(255) DEFAULT NULL, recruitment_date DATE DEFAULT NULL, dismissal_date DATE DEFAULT NULL, salary DOUBLE PRECISION DEFAULT NULL, observations LONGTEXT DEFAULT NULL, arabic_first_name VARCHAR(255) DEFAULT NULL, arabic_last_name VARCHAR(255) DEFAULT NULL, arabic_address VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE classroom ADD CONSTRAINT FK_497D309DA1BE284D FOREIGN KEY (school_id_id) REFERENCES school (id)');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B07288A1BE284D FOREIGN KEY (school_id_id) REFERENCES school (id)');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072882A13690 FOREIGN KEY (staff_id_id) REFERENCES staff (id)');
        $this->addSql('ALTER TABLE school ADD CONSTRAINT FK_F99EDABB3CCE3900 FOREIGN KEY (city_id_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE school ADD CONSTRAINT FK_F99EDABBD8A48BBD FOREIGN KEY (country_id_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE school DROP FOREIGN KEY FK_F99EDABB3CCE3900');
        $this->addSql('ALTER TABLE school DROP FOREIGN KEY FK_F99EDABBD8A48BBD');
        $this->addSql('ALTER TABLE classroom DROP FOREIGN KEY FK_497D309DA1BE284D');
        $this->addSql('ALTER TABLE documents DROP FOREIGN KEY FK_A2B07288A1BE284D');
        $this->addSql('ALTER TABLE documents DROP FOREIGN KEY FK_A2B072882A13690');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE classroom');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE cycle');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE school');
        $this->addSql('DROP TABLE staff');
    }
}
