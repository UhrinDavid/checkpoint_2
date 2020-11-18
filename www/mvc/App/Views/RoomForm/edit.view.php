<?php /** @var Array $data */
    /** @var \App\Models\HotelRoom $hotelroom */
    $hotelroom = $data["hotelroom"];
?>

<div class="container">
<form  method="post">
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="id">Room number</label>
            <input type="number" class="form-control" name="id"  readonly value="<?= $hotelroom->getId() ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="roomTitle">Room title</label>
            <input type="text" class="form-control" name="roomTitle" value="<?= $hotelroom->getRoomTitle() ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="roomDescription">Enter short room description</label>
            <textarea type="textarea" class="form-control"  name="roomDescription">
                <?= $hotelroom->getRoomDescription() ?>
            </textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="capacity">Enter room capacity</label>
            <input type="number" class="form-control" name="capacity" value="<?= $hotelroom->getCapacity() ?>">
        </div>
        <div class="col-md-3 mb-3">
            <label for="beds">Enter number of beds</label>
            <input type="number" class="form-control" name="beds" value="<?= $hotelroom->getBeds() ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="pricePerNight">Price per night</label>
            <input type="number" class="form-control" name="pricePerNight" value="<?= $hotelroom->getPricePerNight() ?>">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Add room</button>
</form>
</div>

