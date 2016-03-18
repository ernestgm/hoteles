<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160318034933 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D64992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_8D93D649A0D96FBF (email_canonical), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comentarios (id INT AUTO_INCREMENT NOT NULL, respuestaid INT DEFAULT NULL, userid INT DEFAULT NULL, titulo VARCHAR(255) DEFAULT NULL, descripcion VARCHAR(255) DEFAULT NULL, fecha DATE DEFAULT NULL, aprobado TINYINT(1) DEFAULT NULL, INDEX IDX_F54B3FC094CAE363 (respuestaid), INDEX IDX_F54B3FC0F132696E (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faq (id INT AUTO_INCREMENT NOT NULL, pregunta VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gastronomia (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL, horario VARCHAR(255) DEFAULT NULL, dias_habiles VARCHAR(255) DEFAULT NULL, tipo INT DEFAULT NULL, orden INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitacion (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitacion_hafacilidades (habitacionid INT NOT NULL, hafacilidadesid INT NOT NULL, INDEX IDX_12A8CA2C2176B2F0 (habitacionid), INDEX IDX_12A8CA2CB32C1688 (hafacilidadesid), PRIMARY KEY(habitacionid, hafacilidadesid)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hafacilidades (id INT AUTO_INCREMENT NOT NULL, icono VARCHAR(255) DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hofacilidades (id INT AUTO_INCREMENT NOT NULL, icono VARCHAR(255) DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facilidades_hotel (hofacilidadesid INT NOT NULL, hotelcodigo INT NOT NULL, INDEX IDX_78E84AB178B74308 (hofacilidadesid), INDEX IDX_78E84AB149DF0FC1 (hotelcodigo), PRIMARY KEY(hofacilidadesid, hotelcodigo)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel (codigo INT AUTO_INCREMENT NOT NULL, marcaid INT DEFAULT NULL, motivosid INT DEFAULT NULL, redes_socialesid INT DEFAULT NULL, gastronomiaid INT DEFAULT NULL, faqid INT DEFAULT NULL, comentariosid INT DEFAULT NULL, url VARCHAR(255) NOT NULL, geolocalizacion VARCHAR(255) DEFAULT NULL, INDEX IDX_3535ED9A9D1115E (marcaid), INDEX IDX_3535ED9C8B23B7C (motivosid), INDEX IDX_3535ED91ED0097A (redes_socialesid), INDEX IDX_3535ED932ADA74D (gastronomiaid), INDEX IDX_3535ED9F819925E (faqid), INDEX IDX_3535ED9C2A56868 (comentariosid), PRIMARY KEY(codigo)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marca (id INT AUTO_INCREMENT NOT NULL, estilo VARCHAR(255) DEFAULT NULL, hotelcodigo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE motivos (id INT AUTO_INCREMENT NOT NULL, ws_id INT NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL, orden INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE redes_sociales (id INT AUTO_INCREMENT NOT NULL, Nombre VARCHAR(255) DEFAULT NULL, valor VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reserva (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE respuesta (id INT AUTO_INCREMENT NOT NULL, userid INT DEFAULT NULL, descripcion VARCHAR(255) DEFAULT NULL, INDEX IDX_6C6EC5EEF132696E (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicios (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL, horario VARCHAR(255) DEFAULT NULL, dias_habiles VARCHAR(255) DEFAULT NULL, orden INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicios_hotel (serviciosid INT NOT NULL, hotelcodigo INT NOT NULL, INDEX IDX_D438F4DB409D1C63 (serviciosid), INDEX IDX_D438F4DB49DF0FC1 (hotelcodigo), PRIMARY KEY(serviciosid, hotelcodigo)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comentarios ADD CONSTRAINT FK_F54B3FC094CAE363 FOREIGN KEY (respuestaid) REFERENCES respuesta (id)');
        $this->addSql('ALTER TABLE comentarios ADD CONSTRAINT FK_F54B3FC0F132696E FOREIGN KEY (userid) REFERENCES user (id)');
        $this->addSql('ALTER TABLE habitacion_hafacilidades ADD CONSTRAINT FK_12A8CA2C2176B2F0 FOREIGN KEY (habitacionid) REFERENCES habitacion (id)');
        $this->addSql('ALTER TABLE habitacion_hafacilidades ADD CONSTRAINT FK_12A8CA2CB32C1688 FOREIGN KEY (hafacilidadesid) REFERENCES hafacilidades (id)');
        $this->addSql('ALTER TABLE facilidades_hotel ADD CONSTRAINT FK_78E84AB178B74308 FOREIGN KEY (hofacilidadesid) REFERENCES hofacilidades (id)');
        $this->addSql('ALTER TABLE facilidades_hotel ADD CONSTRAINT FK_78E84AB149DF0FC1 FOREIGN KEY (hotelcodigo) REFERENCES hotel (codigo)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED9A9D1115E FOREIGN KEY (marcaid) REFERENCES marca (id)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED9C8B23B7C FOREIGN KEY (motivosid) REFERENCES motivos (id)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED91ED0097A FOREIGN KEY (redes_socialesid) REFERENCES redes_sociales (id)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED932ADA74D FOREIGN KEY (gastronomiaid) REFERENCES gastronomia (id)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED9F819925E FOREIGN KEY (faqid) REFERENCES faq (id)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED9C2A56868 FOREIGN KEY (comentariosid) REFERENCES comentarios (id)');
        $this->addSql('ALTER TABLE respuesta ADD CONSTRAINT FK_6C6EC5EEF132696E FOREIGN KEY (userid) REFERENCES user (id)');
        $this->addSql('ALTER TABLE servicios_hotel ADD CONSTRAINT FK_D438F4DB409D1C63 FOREIGN KEY (serviciosid) REFERENCES servicios (id)');
        $this->addSql('ALTER TABLE servicios_hotel ADD CONSTRAINT FK_D438F4DB49DF0FC1 FOREIGN KEY (hotelcodigo) REFERENCES hotel (codigo)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comentarios DROP FOREIGN KEY FK_F54B3FC0F132696E');
        $this->addSql('ALTER TABLE respuesta DROP FOREIGN KEY FK_6C6EC5EEF132696E');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED9C2A56868');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED9F819925E');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED932ADA74D');
        $this->addSql('ALTER TABLE habitacion_hafacilidades DROP FOREIGN KEY FK_12A8CA2C2176B2F0');
        $this->addSql('ALTER TABLE habitacion_hafacilidades DROP FOREIGN KEY FK_12A8CA2CB32C1688');
        $this->addSql('ALTER TABLE facilidades_hotel DROP FOREIGN KEY FK_78E84AB178B74308');
        $this->addSql('ALTER TABLE facilidades_hotel DROP FOREIGN KEY FK_78E84AB149DF0FC1');
        $this->addSql('ALTER TABLE servicios_hotel DROP FOREIGN KEY FK_D438F4DB49DF0FC1');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED9A9D1115E');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED9C8B23B7C');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED91ED0097A');
        $this->addSql('ALTER TABLE comentarios DROP FOREIGN KEY FK_F54B3FC094CAE363');
        $this->addSql('ALTER TABLE servicios_hotel DROP FOREIGN KEY FK_D438F4DB409D1C63');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE comentarios');
        $this->addSql('DROP TABLE faq');
        $this->addSql('DROP TABLE gastronomia');
        $this->addSql('DROP TABLE habitacion');
        $this->addSql('DROP TABLE habitacion_hafacilidades');
        $this->addSql('DROP TABLE hafacilidades');
        $this->addSql('DROP TABLE hofacilidades');
        $this->addSql('DROP TABLE facilidades_hotel');
        $this->addSql('DROP TABLE hotel');
        $this->addSql('DROP TABLE marca');
        $this->addSql('DROP TABLE motivos');
        $this->addSql('DROP TABLE redes_sociales');
        $this->addSql('DROP TABLE reserva');
        $this->addSql('DROP TABLE respuesta');
        $this->addSql('DROP TABLE servicios');
        $this->addSql('DROP TABLE servicios_hotel');
    }
}
