<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160331222826 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE servicios_hotel');
        $this->addSql('ALTER TABLE servicios ADD hotelcodigo INT DEFAULT NULL');
        $this->addSql('ALTER TABLE servicios ADD CONSTRAINT FK_C07E802F49DF0FC1 FOREIGN KEY (hotelcodigo) REFERENCES hotel (codigo)');
        $this->addSql('CREATE INDEX IDX_C07E802F49DF0FC1 ON servicios (hotelcodigo)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE servicios_hotel (serviciosid INT NOT NULL, hotelcodigo INT NOT NULL, INDEX IDX_D438F4DB409D1C63 (serviciosid), INDEX IDX_D438F4DB49DF0FC1 (hotelcodigo), PRIMARY KEY(serviciosid, hotelcodigo)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE servicios_hotel ADD CONSTRAINT FK_D438F4DB409D1C63 FOREIGN KEY (serviciosid) REFERENCES servicios (id)');
        $this->addSql('ALTER TABLE servicios_hotel ADD CONSTRAINT FK_D438F4DB49DF0FC1 FOREIGN KEY (hotelcodigo) REFERENCES hotel (codigo)');
        $this->addSql('DROP TABLE lexik_currency');
        $this->addSql('ALTER TABLE servicios DROP FOREIGN KEY FK_C07E802F49DF0FC1');
        $this->addSql('DROP INDEX IDX_C07E802F49DF0FC1 ON servicios');
        $this->addSql('ALTER TABLE servicios DROP hotelcodigo');
    }
}
