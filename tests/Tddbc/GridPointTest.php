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
    public function X座標が4であるべき()
    {
        $this->assertEquals(4, $this->sut->getX());
    }
}
