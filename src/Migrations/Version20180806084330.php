<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180806084330 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A9CD0792D');
        $this->addSql('DROP INDEX IDX_5F9E962A9CD0792D ON comments');
        $this->addSql('ALTER TABLE comments CHANGE application_id_id application_id INT NOT NULL');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A3E030ACD FOREIGN KEY (application_id) REFERENCES applications (id)');
        $this->addSql('CREATE INDEX IDX_5F9E962A3E030ACD ON comments (application_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A3E030ACD');
        $this->addSql('DROP INDEX IDX_5F9E962A3E030ACD ON comments');
        $this->addSql('ALTER TABLE comments CHANGE application_id application_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A9CD0792D FOREIGN KEY (application_id_id) REFERENCES applications (id)');
        $this->addSql('CREATE INDEX IDX_5F9E962A9CD0792D ON comments (application_id_id)');
    }
}
