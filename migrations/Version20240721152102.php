<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240721152102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, street VARCHAR(150) DEFAULT NULL, number VARCHAR(20) DEFAULT NULL, neighborhood VARCHAR(100) DEFAULT NULL, city VARCHAR(100) DEFAULT NULL, state VARCHAR(150) DEFAULT NULL, cep VARCHAR(100) DEFAULT NULL, complement VARCHAR(150) DEFAULT NULL, latitude NUMERIC(10, 2) DEFAULT NULL, longitude NUMERIC(10, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(100) DEFAULT NULL, file_path VARCHAR(255) DEFAULT NULL, upload_date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occurrence (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, admin_id INT DEFAULT NULL, type_occurrence_id INT NOT NULL, occurrence_code VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, status VARCHAR(50) NOT NULL, occurred_date DATE NOT NULL, general_observation LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', priority VARCHAR(50) NOT NULL, estimated_resolution DATE DEFAULT NULL, additional_comments LONGTEXT DEFAULT NULL, evidence_documents LONGTEXT DEFAULT NULL, sla_due_date DATE DEFAULT NULL, occurrence_closed TINYINT(1) NOT NULL, INDEX IDX_BEFD81F3A76ED395 (user_id), INDEX IDX_BEFD81F3642B8210 (admin_id), INDEX IDX_BEFD81F340BA9899 (type_occurrence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occurrence_media (id INT AUTO_INCREMENT NOT NULL, occurrence_id INT NOT NULL, media_id INT NOT NULL, INDEX IDX_4458A26530572FAC (occurrence_id), INDEX IDX_4458A265EA9FDD75 (media_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occurrence_subtype (id INT AUTO_INCREMENT NOT NULL, occurrence_type_id INT NOT NULL, name VARCHAR(150) NOT NULL, INDEX IDX_785D8A82E87A23B3 (occurrence_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occurrence_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occurrences_address (id INT AUTO_INCREMENT NOT NULL, occurrence_id INT NOT NULL, address_id INT NOT NULL, INDEX IDX_2680E92C30572FAC (occurrence_id), INDEX IDX_2680E92CF5B7AF75 (address_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occurrences_comment (id INT AUTO_INCREMENT NOT NULL, occurrence_id INT NOT NULL, admin_user_id INT NOT NULL, description LONGTEXT DEFAULT NULL, comment_date DATE DEFAULT NULL, notification_sent TINYINT(1) NOT NULL, INDEX IDX_BFBAD4C130572FAC (occurrence_id), INDEX IDX_BFBAD4C16352511C (admin_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, enable TINYINT(1) NOT NULL, last_login DATE DEFAULT NULL, long_login NUMERIC(10, 2) DEFAULT NULL, agree_terms TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_address (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, address_id INT NOT NULL, INDEX IDX_5543718BA76ED395 (user_id), INDEX IDX_5543718BF5B7AF75 (address_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_profile (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(150) NOT NULL, cpf VARCHAR(11) NOT NULL, rg VARCHAR(10) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, birthday DATE DEFAULT NULL, gender VARCHAR(25) DEFAULT NULL, INDEX IDX_D95AB405A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_telephone (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, telephone VARCHAR(35) DEFAULT NULL, type_telephone VARCHAR(20) DEFAULT NULL, INDEX IDX_45EF7DF4A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE occurrence ADD CONSTRAINT FK_BEFD81F3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE occurrence ADD CONSTRAINT FK_BEFD81F3642B8210 FOREIGN KEY (admin_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE occurrence ADD CONSTRAINT FK_BEFD81F340BA9899 FOREIGN KEY (type_occurrence_id) REFERENCES occurrence_type (id)');
        $this->addSql('ALTER TABLE occurrence_media ADD CONSTRAINT FK_4458A26530572FAC FOREIGN KEY (occurrence_id) REFERENCES occurrence (id)');
        $this->addSql('ALTER TABLE occurrence_media ADD CONSTRAINT FK_4458A265EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE occurrence_subtype ADD CONSTRAINT FK_785D8A82E87A23B3 FOREIGN KEY (occurrence_type_id) REFERENCES occurrence_type (id)');
        $this->addSql('ALTER TABLE occurrences_address ADD CONSTRAINT FK_2680E92C30572FAC FOREIGN KEY (occurrence_id) REFERENCES occurrence (id)');
        $this->addSql('ALTER TABLE occurrences_address ADD CONSTRAINT FK_2680E92CF5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE occurrences_comment ADD CONSTRAINT FK_BFBAD4C130572FAC FOREIGN KEY (occurrence_id) REFERENCES occurrence (id)');
        $this->addSql('ALTER TABLE occurrences_comment ADD CONSTRAINT FK_BFBAD4C16352511C FOREIGN KEY (admin_user_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE user_address ADD CONSTRAINT FK_5543718BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_address ADD CONSTRAINT FK_5543718BF5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE user_profile ADD CONSTRAINT FK_D95AB405A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_telephone ADD CONSTRAINT FK_45EF7DF4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE occurrence DROP FOREIGN KEY FK_BEFD81F3A76ED395');
        $this->addSql('ALTER TABLE occurrence DROP FOREIGN KEY FK_BEFD81F3642B8210');
        $this->addSql('ALTER TABLE occurrence DROP FOREIGN KEY FK_BEFD81F340BA9899');
        $this->addSql('ALTER TABLE occurrence_media DROP FOREIGN KEY FK_4458A26530572FAC');
        $this->addSql('ALTER TABLE occurrence_media DROP FOREIGN KEY FK_4458A265EA9FDD75');
        $this->addSql('ALTER TABLE occurrence_subtype DROP FOREIGN KEY FK_785D8A82E87A23B3');
        $this->addSql('ALTER TABLE occurrences_address DROP FOREIGN KEY FK_2680E92C30572FAC');
        $this->addSql('ALTER TABLE occurrences_address DROP FOREIGN KEY FK_2680E92CF5B7AF75');
        $this->addSql('ALTER TABLE occurrences_comment DROP FOREIGN KEY FK_BFBAD4C130572FAC');
        $this->addSql('ALTER TABLE occurrences_comment DROP FOREIGN KEY FK_BFBAD4C16352511C');
        $this->addSql('ALTER TABLE user_address DROP FOREIGN KEY FK_5543718BA76ED395');
        $this->addSql('ALTER TABLE user_address DROP FOREIGN KEY FK_5543718BF5B7AF75');
        $this->addSql('ALTER TABLE user_profile DROP FOREIGN KEY FK_D95AB405A76ED395');
        $this->addSql('ALTER TABLE user_telephone DROP FOREIGN KEY FK_45EF7DF4A76ED395');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE occurrence');
        $this->addSql('DROP TABLE occurrence_media');
        $this->addSql('DROP TABLE occurrence_subtype');
        $this->addSql('DROP TABLE occurrence_type');
        $this->addSql('DROP TABLE occurrences_address');
        $this->addSql('DROP TABLE occurrences_comment');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_address');
        $this->addSql('DROP TABLE user_profile');
        $this->addSql('DROP TABLE user_telephone');
    }
}
