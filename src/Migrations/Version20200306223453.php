<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306223453 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE crea (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE creatif ADD crea_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE creatif ADD CONSTRAINT FK_F08699982A9051B5 FOREIGN KEY (crea_id) REFERENCES creatif (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F08699982A9051B5 ON creatif (crea_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE crea');
        $this->addSql('ALTER TABLE creatif DROP FOREIGN KEY FK_F08699982A9051B5');
        $this->addSql('DROP INDEX UNIQ_F08699982A9051B5 ON creatif');
        $this->addSql('ALTER TABLE creatif DROP crea_id');
    }
}
