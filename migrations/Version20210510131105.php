<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210510131105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pilote DROP FOREIGN KEY FK_6A3254DD40F8D01E');
        $this->addSql('DROP INDEX IDX_6A3254DD40F8D01E ON pilote');
        $this->addSql('ALTER TABLE pilote DROP classement_pilote_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pilote ADD classement_pilote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pilote ADD CONSTRAINT FK_6A3254DD40F8D01E FOREIGN KEY (classement_pilote_id) REFERENCES classement_pilote (id)');
        $this->addSql('CREATE INDEX IDX_6A3254DD40F8D01E ON pilote (classement_pilote_id)');
    }
}
