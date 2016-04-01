<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160330025324 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE system_config (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, value LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql("INSERT INTO `system_config` VALUES (1, 'URL_CONFIRM', 'http://localhost/pam/hotelescubanacan.com/receiving_tpv')");
        $this->addSql("INSERT INTO `system_config` VALUES (2, 'URL_CONFIRMATION_HERMES', 'http://www.hotelescubanacan.com/')");
        $this->addSql("INSERT INTO `system_config` VALUES (3, 'CUSTOMER_KEY', 'qwertyasdf0123456789')");
        $this->addSql("INSERT INTO `system_config` VALUES (4, 'PAYMENT_METHOD', 'CREDIT_CARD')");
        $this->addSql("INSERT INTO `system_config` VALUES (5, 'URL_WS_CENTRAL_BOOKING', 'http://localhost:8080/travels/webservices/WebservicesInterface.action')");
        $this->addSql("INSERT INTO `system_config` VALUES (6, 'WS_USER', 'pam')");
        $this->addSql("INSERT INTO `system_config` VALUES (7, 'WS_PASS', 'pam')");
        $this->addSql("INSERT INTO `system_config` VALUES (8, 'CONTACT_EMAILS', 'devce@pamint.co.cu')");
        $this->addSql("INSERT INTO `system_config` VALUES (9, 'FROM_EMAIL', 'soporte@pamint.co.cu')");

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE lexik_currency');
        $this->addSql('DROP TABLE system_config');
    }
}
