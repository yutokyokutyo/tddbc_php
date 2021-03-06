<?php
namespace Tddbc;


class GridPoint
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getNotation()
    {
        return '(' . $this->x . ',' . $this->y . ')';
    }

    public function hasSameCoordinatesWith($gridPoint)
    {
        return $gridPoint->getX() == $this->x && $gridPoint->getY() == $this->y;
    }

    public function isNeighborOf($gridPoint)
    {
        return $this->isNeighborPointOf($gridPoint->getX(), $this->x);
    }

    private function isNeighborPointOf($other,$self)
    {
        return $other == $self - 1 
            || $other == $self + 1;
    }
}
