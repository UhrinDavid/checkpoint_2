<?php
declare(strict_types=1);
namespace App\Models;

use App\Core\Model;
class HotelRoom extends Model
{
    private int $roomNumber;
    private string $roomTitle;
    private string $roomDescription;
    private int $capacity;
    private int $eds;
    private float $pricePerNight;
    private bool $breakfastIncluded;

    /**
     * HotelRoom constructor.
     * @param int $roomNumber
     */
    public function __construct()
    {
    }


    static public function setDbColumns()
    {
        return ["roomNumber", "roomTitle", "roomDescription",
                "capacity", "beds", "pricePerNight",
                "breakfastIncluded"];
    }

    static public function setTableName()
    {
        return ["hotelrooms"];
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @return string
     */
    public function getRoomTitle(): string
    {
        return $this->roomTitle;
    }

    /**
     * @return string
     */
    public function getRoomDescription(): string
    {
        return $this->roomDescription;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @return int
     */
    public function getEds(): int
    {
        return $this->eds;
    }

    /**
     * @return float
     */
    public function getPricePerNight(): float
    {
        return $this->pricePerNight;
    }

    /**
     * @return bool
     */
    public function isBreakfastIncluded(): bool
    {
        return $this->breakfastIncluded;
    }


}