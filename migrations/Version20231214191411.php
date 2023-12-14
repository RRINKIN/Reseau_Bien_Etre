<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214191411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creating relation user - CodePostal - Commune';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD code_postal_id INT DEFAULT NULL, ADD commune_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B2B59251 FOREIGN KEY (code_postal_id) REFERENCES code_postal (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649131A4F72 FOREIGN KEY (commune_id) REFERENCES commune (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649B2B59251 ON user (code_postal_id)');
        $this->addSql('CREATE INDEX IDX_8D93D649131A4F72 ON user (commune_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B2B59251');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649131A4F72');
        $this->addSql('DROP INDEX IDX_8D93D649B2B59251 ON user');
        $this->addSql('DROP INDEX IDX_8D93D649131A4F72 ON user');
        $this->addSql('ALTER TABLE user DROP code_postal_id, DROP commune_id');
    }
}
