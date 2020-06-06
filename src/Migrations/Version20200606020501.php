<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200606020501 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE video_ld ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video_ld ADD CONSTRAINT FK_54B6F40B3DA5256D FOREIGN KEY (image_id) REFERENCES video (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_54B6F40B3DA5256D ON video_ld (image_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE video_ld DROP FOREIGN KEY FK_54B6F40B3DA5256D');
        $this->addSql('DROP TABLE video');
        $this->addSql('DROP INDEX UNIQ_54B6F40B3DA5256D ON video_ld');
        $this->addSql('ALTER TABLE video_ld DROP image_id');
    }
}
