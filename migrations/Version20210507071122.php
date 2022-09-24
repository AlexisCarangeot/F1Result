<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210507071122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pilote ADD team_id INT DEFAULT NULL, ADD country_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pilote ADD CONSTRAINT FK_6A3254DD296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE pilote ADD CONSTRAINT FK_6A3254DDF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_6A3254DD296CD8AE ON pilote (team_id)');
        $this->addSql('CREATE INDEX IDX_6A3254DDF92F3E70 ON pilote (country_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pilote DROP FOREIGN KEY FK_6A3254DD296CD8AE');
        $this->addSql('ALTER TABLE pilote DROP FOREIGN KEY FK_6A3254DDF92F3E70');
        $this->addSql('DROP INDEX IDX_6A3254DD296CD8AE ON pilote');
        $this->addSql('DROP INDEX IDX_6A3254DDF92F3E70 ON pilote');
        $this->addSql('ALTER TABLE pilote DROP team_id, DROP country_id');
    }
}
