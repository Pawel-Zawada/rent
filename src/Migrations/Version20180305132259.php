<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180305132259 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE auto (kenteken VARCHAR(45) NOT NULL, merk VARCHAR(45) NOT NULL, type VARCHAR(45) NOT NULL, dagprijs INT NOT NULL, PRIMARY KEY(kenteken)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE factuur (factuurnummer INT AUTO_INCREMENT NOT NULL, klantcode INT DEFAULT NULL, medewerkerscode INT DEFAULT NULL, factuurdatum DATE NOT NULL, INDEX IDX_32147710FA473ED3 (klantcode), INDEX IDX_32147710DB621B75 (medewerkerscode), PRIMARY KEY(factuurnummer)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE factuurregel (factuurregelcode INT AUTO_INCREMENT NOT NULL, factuurnummer INT DEFAULT NULL, kenteken VARCHAR(45) DEFAULT NULL, begindatum DATE NOT NULL, einddatum DATE NOT NULL, UNIQUE INDEX UNIQ_38897CCD2D7C971B (factuurnummer), UNIQUE INDEX UNIQ_38897CCDF57BD8AE (kenteken), PRIMARY KEY(factuurregelcode)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE klant (klantcode INT AUTO_INCREMENT NOT NULL, voorletters VARCHAR(11) NOT NULL, tussenvoegsels VARCHAR(11) NOT NULL, achternaam VARCHAR(45) NOT NULL, adres VARCHAR(45) NOT NULL, postcode VARCHAR(7) NOT NULL, woonplaats VARCHAR(45) NOT NULL, gebruikersnaam VARCHAR(45) NOT NULL, wachtwoord VARCHAR(45) NOT NULL, PRIMARY KEY(klantcode)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medewerker (medewerkerscode INT AUTO_INCREMENT NOT NULL, voorletters VARCHAR(11) NOT NULL, tussenvoegsels VARCHAR(11) NOT NULL, achternaam VARCHAR(45) NOT NULL, gebruikersnaam VARCHAR(45) NOT NULL, wachtwoord VARCHAR(45) NOT NULL, PRIMARY KEY(medewerkerscode)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE factuur ADD CONSTRAINT FK_32147710FA473ED3 FOREIGN KEY (klantcode) REFERENCES klant (klantcode)');
        $this->addSql('ALTER TABLE factuur ADD CONSTRAINT FK_32147710DB621B75 FOREIGN KEY (medewerkerscode) REFERENCES medewerker (medewerkerscode)');
        $this->addSql('ALTER TABLE factuurregel ADD CONSTRAINT FK_38897CCD2D7C971B FOREIGN KEY (factuurnummer) REFERENCES factuur (factuurnummer)');
        $this->addSql('ALTER TABLE factuurregel ADD CONSTRAINT FK_38897CCDF57BD8AE FOREIGN KEY (kenteken) REFERENCES auto (kenteken)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE factuurregel DROP FOREIGN KEY FK_38897CCDF57BD8AE');
        $this->addSql('ALTER TABLE factuurregel DROP FOREIGN KEY FK_38897CCD2D7C971B');
        $this->addSql('ALTER TABLE factuur DROP FOREIGN KEY FK_32147710FA473ED3');
        $this->addSql('ALTER TABLE factuur DROP FOREIGN KEY FK_32147710DB621B75');
        $this->addSql('DROP TABLE auto');
        $this->addSql('DROP TABLE factuur');
        $this->addSql('DROP TABLE factuurregel');
        $this->addSql('DROP TABLE klant');
        $this->addSql('DROP TABLE medewerker');
    }
}
