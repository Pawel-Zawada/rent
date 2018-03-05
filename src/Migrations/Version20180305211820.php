<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180305211820 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE factuur DROP FOREIGN KEY FK_32147710FA473ED3');
        $this->addSql('ALTER TABLE factuur DROP FOREIGN KEY FK_32147710DB621B75');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, voorletters VARCHAR(11) NOT NULL, tussenvoegsels VARCHAR(11) NOT NULL, achternaam VARCHAR(45) NOT NULL, adres VARCHAR(45) NOT NULL, postcode VARCHAR(7) NOT NULL, woonplaats VARCHAR(45) NOT NULL, gebruikersnaam VARCHAR(45) NOT NULL, wachtwoord VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE klant');
        $this->addSql('DROP TABLE medewerker');
        $this->addSql('DROP INDEX IDX_32147710FA473ED3 ON factuur');
        $this->addSql('DROP INDEX IDX_32147710DB621B75 ON factuur');
        $this->addSql('ALTER TABLE factuur ADD user_id INT DEFAULT NULL, DROP klantcode, DROP medewerkerscode');
        $this->addSql('ALTER TABLE factuur ADD CONSTRAINT FK_32147710A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_32147710A76ED395 ON factuur (user_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE factuur DROP FOREIGN KEY FK_32147710A76ED395');
        $this->addSql('CREATE TABLE klant (klantcode INT AUTO_INCREMENT NOT NULL, voorletters VARCHAR(11) NOT NULL COLLATE utf8_unicode_ci, tussenvoegsels VARCHAR(11) NOT NULL COLLATE utf8_unicode_ci, achternaam VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, adres VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, postcode VARCHAR(7) NOT NULL COLLATE utf8_unicode_ci, woonplaats VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, gebruikersnaam VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, wachtwoord VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(klantcode)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medewerker (medewerkerscode INT AUTO_INCREMENT NOT NULL, voorletters VARCHAR(11) NOT NULL COLLATE utf8_unicode_ci, tussenvoegsels VARCHAR(11) NOT NULL COLLATE utf8_unicode_ci, achternaam VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, gebruikersnaam VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, wachtwoord VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(medewerkerscode)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_32147710A76ED395 ON factuur');
        $this->addSql('ALTER TABLE factuur ADD medewerkerscode INT DEFAULT NULL, CHANGE user_id klantcode INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur ADD CONSTRAINT FK_32147710DB621B75 FOREIGN KEY (medewerkerscode) REFERENCES medewerker (medewerkerscode)');
        $this->addSql('ALTER TABLE factuur ADD CONSTRAINT FK_32147710FA473ED3 FOREIGN KEY (klantcode) REFERENCES klant (klantcode)');
        $this->addSql('CREATE INDEX IDX_32147710FA473ED3 ON factuur (klantcode)');
        $this->addSql('CREATE INDEX IDX_32147710DB621B75 ON factuur (medewerkerscode)');
    }
}
