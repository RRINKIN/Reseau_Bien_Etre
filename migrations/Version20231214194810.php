<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214194810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creating Relations Abus';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abus ADD commentaire_id INT DEFAULT NULL, ADD internaute_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE abus ADD CONSTRAINT FK_72C9FD01BA9CD190 FOREIGN KEY (commentaire_id) REFERENCES commentaire (id)');
        $this->addSql('ALTER TABLE abus ADD CONSTRAINT FK_72C9FD01CAF41882 FOREIGN KEY (internaute_id) REFERENCES internaute (id)');
        $this->addSql('CREATE INDEX IDX_72C9FD01BA9CD190 ON abus (commentaire_id)');
        $this->addSql('CREATE INDEX IDX_72C9FD01CAF41882 ON abus (internaute_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abus DROP FOREIGN KEY FK_72C9FD01BA9CD190');
        $this->addSql('ALTER TABLE abus DROP FOREIGN KEY FK_72C9FD01CAF41882');
        $this->addSql('DROP INDEX IDX_72C9FD01BA9CD190 ON abus');
        $this->addSql('DROP INDEX IDX_72C9FD01CAF41882 ON abus');
        $this->addSql('ALTER TABLE abus DROP commentaire_id, DROP internaute_id');
    }
}
