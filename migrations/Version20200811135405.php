<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200811135405 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_fashionbundle (product_id INT NOT NULL, fashionbundle_id INT NOT NULL, INDEX IDX_5BB32EEC4584665A (product_id), INDEX IDX_5BB32EEC115A6349 (fashionbundle_id), PRIMARY KEY(product_id, fashionbundle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product_fashionbundle ADD CONSTRAINT FK_5BB32EEC4584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_fashionbundle ADD CONSTRAINT FK_5BB32EEC115A6349 FOREIGN KEY (fashionbundle_id) REFERENCES fashionbundle (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_fashionbundle DROP FOREIGN KEY FK_5BB32EEC4584665A');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_fashionbundle');
    }
}
