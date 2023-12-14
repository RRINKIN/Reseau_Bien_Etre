<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214190731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Extending User to Prestataire and Internaute + relate user to Localite';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE internaute CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE internaute ADD CONSTRAINT FK_6C8E97CCBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestataire CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE prestataire ADD CONSTRAINT FK_60A26480BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD localite_id INT DEFAULT NULL, ADD dtype VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649924DD2B5 FOREIGN KEY (localite_id) REFERENCES localite (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649924DD2B5 ON user (localite_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE internaute DROP FOREIGN KEY FK_6C8E97CCBF396750');
        $this->addSql('ALTER TABLE internaute CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE prestataire DROP FOREIGN KEY FK_60A26480BF396750');
        $this->addSql('ALTER TABLE prestataire CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649924DD2B5');
        $this->addSql('DROP INDEX IDX_8D93D649924DD2B5 ON user');
        $this->addSql('ALTER TABLE user DROP localite_id, DROP dtype');
    }
}
