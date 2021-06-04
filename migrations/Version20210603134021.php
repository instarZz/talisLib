<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210603134021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pro CHANGE profession_id job_id INT NOT NULL');
        $this->addSql('ALTER TABLE pro ADD CONSTRAINT FK_6BB4D6FFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE pro ADD CONSTRAINT FK_6BB4D6FFBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6BB4D6FFA76ED395 ON pro (user_id)');
        $this->addSql('CREATE INDEX IDX_6BB4D6FFBE04EA9 ON pro (job_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pro DROP FOREIGN KEY FK_6BB4D6FFA76ED395');
        $this->addSql('ALTER TABLE pro DROP FOREIGN KEY FK_6BB4D6FFBE04EA9');
        $this->addSql('DROP INDEX UNIQ_6BB4D6FFA76ED395 ON pro');
        $this->addSql('DROP INDEX IDX_6BB4D6FFBE04EA9 ON pro');
        $this->addSql('ALTER TABLE pro CHANGE job_id profession_id INT NOT NULL');
    }
}
