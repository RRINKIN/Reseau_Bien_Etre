<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214195556 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creating relation promotion';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion ADD prestataire_id INT DEFAULT NULL, ADD categorie_de_services_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD14A81A587 FOREIGN KEY (categorie_de_services_id) REFERENCES categorie_de_services (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1BE3DB2B7 ON promotion (prestataire_id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD14A81A587 ON promotion (categorie_de_services_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1BE3DB2B7');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD14A81A587');
        $this->addSql('DROP INDEX IDX_C11D7DD1BE3DB2B7 ON promotion');
        $this->addSql('DROP INDEX IDX_C11D7DD14A81A587 ON promotion');
        $this->addSql('ALTER TABLE promotion DROP prestataire_id, DROP categorie_de_services_id');
    }
}
