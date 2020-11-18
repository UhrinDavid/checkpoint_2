<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\HotelRoom;
class RoomsPreviewController extends AControllerBase
{

    public function index()
    {
        return [ 'hotelrooms' => HotelRoom::getAll() ];
    }

    public function delete() {
        $id = $_GET['id'];
        $hotelroom = new HotelRoom();
        $hotelroom = $hotelroom->getOne($id);
        $hotelroom->delete();
        header("Location: ?c=roomspreview");
        exit();
    }
}