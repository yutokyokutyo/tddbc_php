<?php
namespace Tddbc;

use Tddbc\Example;

class GridPoint58Test extends \PHPUnit_Framework_TestCase
{
    /** @var GridPoint */
    private $sut;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->sut = new GridPoint(5, 8);
    }

    /**
     * @test
     */
    public function X座標を取得したら5であるべき()
    {
        $this->assertEquals(5, $this->sut->getX());
    }


    /**
     * @test
     */
    public function y座標を取得したら8であるべき()
    {
        $this->assertEquals(8, $this->sut->getY());
    }

    /**
     * @test
     */
    public function 文字列表を取得したら5_8であるべき()
    {
        $this->assertEquals('(5,8)', $this->sut->getNotation());
    }

    /**
     * @test
     */
    // public function x座標4y座標7の格子点とx座標4y座標7の格子点を比較したら同じであるべき()
    // {
    //     $this->assertTrue($this->sut->hasSameCoordinatesWith(new GridPoint(4, 7)));
    // }
}
