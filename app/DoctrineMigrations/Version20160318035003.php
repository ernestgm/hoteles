<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160318035003 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        /*Insert role admin*/
        $this->addSql("INSERT INTO `role` (`id`, `name`, `description` ) VALUES
(1, 'ROLE_USER', 'Rol del CBS'),
(2, 'ROLE_ADMIN', 'Rol administrador')");

        /*Insert admin user*/
        $salt=base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
        $password=md5('admin');
        $roles='a:1:{i:0;s:10:"ROLE_ADMIN";}';
        $this->addSql("INSERT INTO `user` (`username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
('admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, 'rgr463gv90gkoo4g4cgo04o40wc4w4g', 'HRiCjhTryt8hGQwSfgO4pGrvd5JSfVf2d+t7rw8Vcgy2xBwj8mTnCoM7N3VmeF5CE3fCwWuvl8WunQMJsAPXfQ==', NULL, 0, 0, NULL, NULL, NULL,'$roles', 0, NULL)");


    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
