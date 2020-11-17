<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Room preview</h1>
            <ul class="list-group">
                <?php
                foreach ($data["hotelrooms"] as $hotelroom) {
                ?>
                <li class="list-group-item">
                    <div>
                        <b>Room <?= $hotelroom->getRoomNumber()?></b>
                        <br>
                        <?= $hotelroom->getRoomTitle() ?>
                    </div></li>
                <?php
                }
                ?>
            </ul>

        </div>
    </div>
</div>