<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220704163850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (category_id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, category_image VARCHAR(255) NOT NULL, category_description TEXT NOT NULL, PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipments (equipment_id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, user_id INT NOT NULL, equipment_name VARCHAR(255) NOT NULL, equipment_status VARCHAR(255) NOT NULL, equipment_image VARCHAR(255) NOT NULL, equipment_description LONGTEXT NOT NULL, INDEX IDX_6F6C254412469DE2 (category_id), INDEX IDX_6F6C2544A76ED395 (user_id), PRIMARY KEY(equipment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (role_id INT AUTO_INCREMENT NOT NULL, role_name VARCHAR(255) NOT NULL, role_description LONGTEXT NOT NULL, PRIMARY KEY(role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (user_id INT AUTO_INCREMENT NOT NULL, role_id INT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_1483A5E9D60322AC (role_id), PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipments ADD CONSTRAINT FK_6F6C254412469DE2 FOREIGN KEY (category_id) REFERENCES categories (category_id)');
        $this->addSql('ALTER TABLE equipments ADD CONSTRAINT FK_6F6C2544A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9D60322AC FOREIGN KEY (role_id) REFERENCES roles (role_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipments DROP FOREIGN KEY FK_6F6C254412469DE2');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9D60322AC');
        $this->addSql('ALTER TABLE equipments DROP FOREIGN KEY FK_6F6C2544A76ED395');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE equipments');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE users');
    }
}
