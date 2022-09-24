<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210511053822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE classement_pilote');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classement_pilote (id INT AUTO_INCREMENT NOT NULL, pilote_id INT DEFAULT NULL, nb_point INT DEFAULT NULL, UNIQUE INDEX UNIQ_B3AF1DC8F510AAE9 (pilote_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE classement_pilote ADD CONSTRAINT FK_B3AF1DC8F510AAE9 FOREIGN KEY (pilote_id) REFERENCES pilote (id)');
    }
}
