<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once "../class/Records.php";
include_once '../config/Database.php';

$database = new Database();
$db = $database->getConnection();

final class RecordsTest extends TestCase{
    public function testDBClassExists(): void {
        $this->assertTrue(class_exists('Records'));
    }

    public function testRecordsClassCreatesDefault(): void{
        $database = new Database();
        $db = $database->getConnection();
        $this->assertInstanceOf(Records::class,new Records($db));
    }

    public function testReturnOfListStaff(): void{
        $database = new Database();
        $db = $database->getConnection();
        $record = new Records($db);
        $this->assertJson( $record->listStaff());
    }

    public function testReturnOfListRecords(): void{
        $database = new Database();
        $db = $database->getConnection();
        $record = new Records($db);
        $this->assertJson( $record->listRecords());
    }

    public function testReturnOfListDonors(): void{
        $database = new Database();
        $db = $database->getConnection();
        $record = new Records($db);
        $this->assertJson( $record->listDonors());
    }

    public function testReturnOfListCognitive(): void{
        $database = new Database();
        $db = $database->getConnection();
        $record = new Records($db);
        $this->assertJson( $record->listCognitive());
    }

    public function testReturnOfListHealth(): void{
        $database = new Database();
        $db = $database->getConnection();
        $record = new Records($db);
        $this->assertJson( $record->listHealth());
    }
    public function testReturnOfListNutrition(): void{
        $database = new Database();
        $db = $database->getConnection();
        $record = new Records($db);
        $this->assertJson( $record->listNutrition());
    }
}

?>