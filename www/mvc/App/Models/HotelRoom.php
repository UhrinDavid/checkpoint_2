<?php
declare(strict_types=1);
namespace App\Models;

use App\Core\Model;
class HotelRoom extends Model
{
    protected int $id;
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
    public function getId(): int
    {
        return $this->id;
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

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $roomTitle
     */
    public function setRoomTitle(string $roomTitle): void
    {
        $this->roomTitle = $roomTitle;
    }

    /**
     * @param string $roomDescription
     */
    public function setRoomDescription(string $roomDescription): void
    {
        $this->roomDescription = $roomDescription;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @param int $beds
     */
    public function setBeds(int $beds): void
    {
        $this->beds = $beds;
    }

    /**
     * @param float $pricePerNight
     */
    public function setPricePerNight(float $pricePerNight): void
    {
        $this->pricePerNight = $pricePerNight;
    }

    /**
     * @param bool $breakfastIncluded
     */
    public function setBreakfastIncluded(bool $breakfastIncluded): void
    {
        $this->breakfastIncluded = $breakfastIncluded;
    }



    static public function setDbColumns()
    {
        return ["id", "roomTitle", "roomDescription",
                "capacity", "beds", "pricePerNight",
                "breakfastIncluded"];
    }

    static public function setTableName()
    {
        return "hotelrooms";
    }

}