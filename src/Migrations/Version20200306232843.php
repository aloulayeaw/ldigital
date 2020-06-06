<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306232843 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE creatif DROP FOREIGN KEY FK_F08699982A9051B5');
        $this->addSql('ALTER TABLE creatif ADD CONSTRAINT FK_F08699982A9051B5 FOREIGN KEY (crea_id) REFERENCES crea (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE creatif DROP FOREIGN KEY FK_F08699982A9051B5');
        $this->addSql('ALTER TABLE creatif ADD CONSTRAINT FK_F08699982A9051B5 FOREIGN KEY (crea_id) REFERENCES creatif (id)');
    }
}
