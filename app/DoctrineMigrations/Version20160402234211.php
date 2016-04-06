<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160402234211 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE motivos ADD Imagenid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE motivos ADD CONSTRAINT FK_BFC6F25EE17AC89C FOREIGN KEY (Imagenid) REFERENCES imagen (id)');
        $this->addSql('CREATE INDEX IDX_BFC6F25EE17AC89C ON motivos (Imagenid)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE motivos DROP FOREIGN KEY FK_BFC6F25EE17AC89C');
        $this->addSql('DROP INDEX IDX_BFC6F25EE17AC89C ON motivos');
        $this->addSql('ALTER TABLE motivos DROP Imagenid');
    }
}
