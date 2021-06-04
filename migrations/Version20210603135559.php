<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210603135559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment ADD pro_id INT NOT NULL');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F844C3B7E4BA FOREIGN KEY (pro_id) REFERENCES pro (id)');
        $this->addSql('CREATE INDEX IDX_FE38F844C3B7E4BA ON appointment (pro_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F844C3B7E4BA');
        $this->addSql('DROP INDEX IDX_FE38F844C3B7E4BA ON appointment');
        $this->addSql('ALTER TABLE appointment DROP pro_id');
    }
}
