<?php
namespace Tddbc;

use Tddbc\Example;

class GivenXequal4andYequal7GridPointTest extends \PHPUnit_Framework_TestCase
{
    /** @var GridPoint */
    private $sut;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->sut = new GridPoint(4, 7);
    }

    /**
     * @test
     */
    public function X座標を取得したら4であるべき()
    {
        $this->assertEquals(4, $this->sut->getX());
    }


    /**
     * @test
     */
    public function y座標を取得したら7であるべき()
    {
        $this->assertEquals(7, $this->sut->getY());
    }

    /**
     * @test
     */
    public function 文字列表を取得したら4_7であるべき()
    {
        $this->assertEquals('(4,7)', $this->sut->getNotation());
    }

    /**
     * @test
     */
    public function x座標4y座標7の格子点を比較したら同じであるべき()
    {
        $this->assertTrue($this->sut->hasSameCoordinatesWith(new GridPoint(4, 7)));
    }

    /**
     * @test
     */
    public function x座標5y座標8の格子点を比較したら異なるべき()
    {
        $this->assertFalse($this->sut->hasSameCoordinatesWith(new GridPoint(5, 8)));
    }
}
