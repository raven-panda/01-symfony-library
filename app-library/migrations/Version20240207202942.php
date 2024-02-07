<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207202942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, country VARCHAR(50) NOT NULL, biography LONGTEXT NOT NULL, is_date_known TINYINT(1) NOT NULL, birthyear INT NOT NULL, birthdate DATE NOT NULL, added_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(60) NOT NULL, isbn VARCHAR(13) NOT NULL, language VARCHAR(50) NOT NULL, is_date_known TINYINT(1) NOT NULL, publication_year INT NOT NULL, publication_date DATE DEFAULT NULL, summary LONGTEXT NOT NULL, added_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, UNIQUE INDEX UNIQ_CBE5A331CC1CF4E6 (isbn), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE book_book_genre (book_id INT NOT NULL, book_genre_id INT NOT NULL, INDEX IDX_123F6C3216A2B381 (book_id), INDEX IDX_123F6C325B69C546 (book_genre_id), PRIMARY KEY(book_id, book_genre_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE book_genre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(45) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, price INT NOT NULL, duration INT NOT NULL, end_date DATETIME NOT NULL, user_id INT NOT NULL, UNIQUE INDEX UNIQ_F5299398AEA34913 (reference), INDEX IDX_F5299398A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE order_book (order_id INT NOT NULL, book_id INT NOT NULL, INDEX IDX_861499268D9F6D38 (order_id), INDEX IDX_8614992616A2B381 (book_id), PRIMARY KEY(order_id, book_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(45) NOT NULL, phone VARCHAR(20) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE book_book_genre ADD CONSTRAINT FK_123F6C3216A2B381 FOREIGN KEY (book_id) REFERENCES book (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE book_book_genre ADD CONSTRAINT FK_123F6C325B69C546 FOREIGN KEY (book_genre_id) REFERENCES book_genre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE order_book ADD CONSTRAINT FK_861499268D9F6D38 FOREIGN KEY (order_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE order_book ADD CONSTRAINT FK_8614992616A2B381 FOREIGN KEY (book_id) REFERENCES book (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_book_genre DROP FOREIGN KEY FK_123F6C3216A2B381');
        $this->addSql('ALTER TABLE book_book_genre DROP FOREIGN KEY FK_123F6C325B69C546');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398A76ED395');
        $this->addSql('ALTER TABLE order_book DROP FOREIGN KEY FK_861499268D9F6D38');
        $this->addSql('ALTER TABLE order_book DROP FOREIGN KEY FK_8614992616A2B381');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE book_book_genre');
        $this->addSql('DROP TABLE book_genre');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE order_book');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
