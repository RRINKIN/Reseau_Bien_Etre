<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231221181126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adding relation for Image_Logo';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestataire ADD image_logo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE prestataire ADD CONSTRAINT FK_60A264806C9F4396 FOREIGN KEY (image_logo_id) REFERENCES images (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_60A264806C9F4396 ON prestataire (image_logo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestataire DROP FOREIGN KEY FK_60A264806C9F4396');
        $this->addSql('DROP INDEX UNIQ_60A264806C9F4396 ON prestataire');
        $this->addSql('ALTER TABLE prestataire DROP image_logo_id');
    }
}
