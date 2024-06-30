<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240630110825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE continent DROP id_continent');
        $this->addSql('ALTER TABLE couleur DROP id_couleur');
        $this->addSql('ALTER TABLE fabricant DROP id_fabricant');
        $this->addSql('ALTER TABLE typebiere DROP id_type');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE continent ADD id_continent INT NOT NULL');
        $this->addSql('ALTER TABLE couleur ADD id_couleur INT NOT NULL');
        $this->addSql('ALTER TABLE fabricant ADD id_fabricant INT NOT NULL');
        $this->addSql('ALTER TABLE typebiere ADD id_type INT NOT NULL');
    }
}
