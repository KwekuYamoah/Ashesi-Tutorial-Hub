<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once "../config/db.php";

final class dbTest extends TestCase{
    public function testDBClassExists(): void {
        $this->assertTrue(class_exists('DB'));
    }

    public function testDBClassCreatesDefault(): void{
        $this->assertInstanceOf(DB::class,new DB());
    }

    public function testReturnOfBeneInsight(): void{
        $db = new DB();
        $parent = $db->get_bene_insight();
        $this->assertIsNumeric($parent);
    }

    public function testReturnOfStaffInsight(): void{
        $db = new DB();
        $staff = $db->get_staff_insight();
        $this->assertIsNumeric($staff);
    }
    public function testReturnOfDonorInsight(): void{
        $db = new DB();
        $donor = $db->get_donor_insight();
        $this->assertIsNumeric($donor);
    }

    public function testReturnOfDevInsight(): void{
        $db = new DB();
        $dev_gap = $db->get_dev_insight();
        $this->assertIsNumeric($dev_gap);
    }
}