<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220518135425 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE borrowing (id INT AUTO_INCREMENT NOT NULL, lend_by_id INT DEFAULT NULL, borrowed_by_id INT DEFAULT NULL, equipment_id INT DEFAULT NULL, started_on DATETIME NOT NULL, ended_on DATETIME NOT NULL, allowed_days INT NOT NULL, remarks LONGTEXT DEFAULT NULL, INDEX IDX_226E58971520FF27 (lend_by_id), INDEX IDX_226E589739759382 (borrowed_by_id), INDEX IDX_226E5897517FE9FE (equipment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carte (id INT AUTO_INCREMENT NOT NULL, vie DOUBLE PRECISION NOT NULL, attaque DOUBLE PRECISION NOT NULL, nom VARCHAR(255) NOT NULL, cout DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_BAD4FFFD6C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, quantity INT NOT NULL, available_stock INT NOT NULL, allowed_days INT NOT NULL, uid VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_D338D583539B0606 (uid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, uid VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649539B0606 (uid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE borrowing ADD CONSTRAINT FK_226E58971520FF27 FOREIGN KEY (lend_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE borrowing ADD CONSTRAINT FK_226E589739759382 FOREIGN KEY (borrowed_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE borrowing ADD CONSTRAINT FK_226E5897517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE borrowing DROP FOREIGN KEY FK_226E5897517FE9FE');
        $this->addSql('ALTER TABLE borrowing DROP FOREIGN KEY FK_226E58971520FF27');
        $this->addSql('ALTER TABLE borrowing DROP FOREIGN KEY FK_226E589739759382');
        $this->addSql('DROP TABLE borrowing');
        $this->addSql('DROP TABLE carte');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE user');
    }
}
