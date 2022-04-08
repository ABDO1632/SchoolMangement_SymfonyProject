<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407171719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cycle ADD school_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cycle ADD CONSTRAINT FK_B086D193A1BE284D FOREIGN KEY (school_id_id) REFERENCES school (id)');
        $this->addSql('CREATE INDEX IDX_B086D193A1BE284D ON cycle (school_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cycle DROP FOREIGN KEY FK_B086D193A1BE284D');
        $this->addSql('DROP INDEX IDX_B086D193A1BE284D ON cycle');
        $this->addSql('ALTER TABLE cycle DROP school_id_id');
    }
}
