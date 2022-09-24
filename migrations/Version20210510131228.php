<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210510131228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classement_pilote ADD pilote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE classement_pilote ADD CONSTRAINT FK_B3AF1DC8F510AAE9 FOREIGN KEY (pilote_id) REFERENCES pilote (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B3AF1DC8F510AAE9 ON classement_pilote (pilote_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classement_pilote DROP FOREIGN KEY FK_B3AF1DC8F510AAE9');
        $this->addSql('DROP INDEX UNIQ_B3AF1DC8F510AAE9 ON classement_pilote');
        $this->addSql('ALTER TABLE classement_pilote DROP pilote_id');
    }
}
