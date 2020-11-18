<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\HotelRoom;

class RoomFormController extends AControllerBase
{

    public function index()
    {
        if (isset($_POST['id'])) {
            $hotelroom = new HotelRoom();
            $hotelroom->setId($_POST['id']);
            $hotelroom->setRoomTitle($_POST['roomTitle']);
            $hotelroom->setRoomDescription($_POST['roomDescription']);
            $hotelroom->setCapacity($_POST['capacity']);
            $hotelroom->setBeds($_POST['beds']);
            $hotelroom->setPricePerNight($_POST['pricePerNight']);
            $hotelroom->setBreakfastIncluded($_POST['breakfastIncluded'] == "on");
            $hotelroom->save();
        }
        return [];
    }

    public function edit() {
        $id = $_GET['id'];
        $hotelroom = new HotelRoom();
        $hotelroom->getOne($id);

        if (isset($_POST['id'])) {
            $hotelroom->setId($_POST['id']);
            $hotelroom->setRoomTitle($_POST['roomTitle']);
            $hotelroom->setRoomDescription($_POST['roomDescription']);
            $hotelroom->setCapacity($_POST['capacity']);
            $hotelroom->setBeds($_POST['beds']);
            $hotelroom->setPricePerNight($_POST['pricePerNight']);
            $hotelroom->setBreakfastIncluded($_POST['breakfastIncluded'] == "on");
            $hotelroom->save();
            header("Location: ?c=roomspreview");

        }
        return [ "hotelroom" => $hotelroom ];
    }
}