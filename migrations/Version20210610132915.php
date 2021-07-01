<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210610132915 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, artist_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE disc ADD artist_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE disc ADD CONSTRAINT FK_2AF55301F48AE04 FOREIGN KEY (artist_id_id) REFERENCES disc (id)');
        $this->addSql('CREATE INDEX IDX_2AF55301F48AE04 ON disc (artist_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artist');
        $this->addSql('ALTER TABLE disc DROP FOREIGN KEY FK_2AF55301F48AE04');
        $this->addSql('DROP INDEX IDX_2AF55301F48AE04 ON disc');
        $this->addSql('ALTER TABLE disc DROP artist_id_id');
    }
}
