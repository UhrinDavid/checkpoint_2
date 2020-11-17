<?php
declare(strict_types=1);
namespace App\Models;

use App\Core\Model;
class HotelRoom extends Model
{
    protected int $roomNumber;
    protected string $roomTitle;
    protected string $roomDescription;
    protected int $capacity;
    protected int $beds;
    protected float $pricePerNight;
    protected bool $breakfastIncluded;

    /**
     * HotelRoom constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @return string|null
     */
    public function getRoomTitle(): ?string
    {
        return $this->roomTitle;
    }

    /**
     * @return string|null
     */
    public function getRoomDescription(): ?string
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
    public function getBeds(): int
    {
        return $this->beds;
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
    public function getBreakfastIncluded(): bool
    {
        return $this->breakfastIncluded;
    }



    static public function setDbColumns()
    {
        return ["roomNumber", "roomTitle", "roomDescription",
                "capacity", "beds", "pricePerNight",
                "breakfastIncluded"];
    }

    static public function setTableName()
    {
        return "hotelrooms";
    }

}