<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\HotelRoom;

class RoomFormController extends AControllerBase
{

    public function index()
    {
        if (isset($_POST['id'])) {
            echo($_POST['id']);
            $hotelroom = new HotelRoom();
            $hotelroom->setId($_POST['id']);
            $hotelroom->setRoomTitle("sd");
            $hotelroom->setRoomDescription("sd");
            $hotelroom->setCapacity(1);
            $hotelroom->setBeds(1);
            $hotelroom->setPricePerNight(1);
            $hotelroom->setBreakfastIncluded(false);
            $hotelroom->save();
        }
        return [];
    }

    public function edit()
    {
        if (isset($_POST['id'])) {
            $id = $_GET('id');
            $hotelroom = new HotelRoom();
            $hotelroom->getOne($id);
            $hotelroom->setRoomTitle($_POST['id']);
            $hotelroom->setRoomDescription($_POST['roomDescription']);
            $hotelroom->setCapacity($_POST['capacity']);
            $hotelroom->setBeds($_POST['beds']);
            $hotelroom->setPricePerNight($_POST['pricePerNight']);
            $hotelroom->setBreakfastIncluded($_POST['breakFastIncluded']);
            $hotelroom->save();
            header("Location: ?c=roomspreview");
        }
        return [ "hotelroom"=> $hotelroom ];
    }
}