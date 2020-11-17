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
}