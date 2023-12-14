<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214194046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creating relations Position';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE position ADD bloc_id INT DEFAULT NULL, ADD internaute_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE position ADD CONSTRAINT FK_462CE4F55582E9C0 FOREIGN KEY (bloc_id) REFERENCES bloc (id)');
        $this->addSql('ALTER TABLE position ADD CONSTRAINT FK_462CE4F5CAF41882 FOREIGN KEY (internaute_id) REFERENCES internaute (id)');
        $this->addSql('CREATE INDEX IDX_462CE4F55582E9C0 ON position (bloc_id)');
        $this->addSql('CREATE INDEX IDX_462CE4F5CAF41882 ON position (internaute_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE position DROP FOREIGN KEY FK_462CE4F55582E9C0');
        $this->addSql('ALTER TABLE position DROP FOREIGN KEY FK_462CE4F5CAF41882');
        $this->addSql('DROP INDEX IDX_462CE4F55582E9C0 ON position');
        $this->addSql('DROP INDEX IDX_462CE4F5CAF41882 ON position');
        $this->addSql('ALTER TABLE position DROP bloc_id, DROP internaute_id');
    }
}
