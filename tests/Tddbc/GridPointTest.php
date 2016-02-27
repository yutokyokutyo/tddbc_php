<?php
namespace Tddbc;

use Tddbc\Example;

class GridPointTest extends \PHPUnit_Framework_TestCase
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
    public function X座標に4を渡してX座標を取得したら4であるべき()
    {
        $this->assertEquals(4, $this->sut->getX());
    }

    /**
     * @test
     */
    public function X座標に5を渡してX座標を取得したら5であるべき()
    {
        $this->sut = new GridPoint(5, 7);
        $this->assertEquals(5, $this->sut->getX());
    }

    /**
     * @test
     */
    public function y座標に7を渡してy座標を取得したら7であるべき()
    {
        $this->assertEquals(7, $this->sut->getY());
    }

    /**
     * @test
     */
    public function x座標に4_y座標に7を渡して文字列表を取得したら4_7であるべき()
    {
        $this->assertEquals('(4,7)', $this->sut->getNotation());
    }

    /**
     * @test
     */
    public function x座標4y座標7の格子点とx座標4y座標7の格子点を比較したら同じであるべき()
    {
        $this->assertTrue($this->sut->hasSameCoordinatesWith(new GridPoint(4, 7)));
    }
}
