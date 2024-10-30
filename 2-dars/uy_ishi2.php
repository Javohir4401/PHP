<?php
if (isset($_GET['arrived_at']) && isset($_GET['leaved_at'])) {

    $arrived_at = new DateTime($_GET['arrived_at']);
    $leaved_at = new DateTime($_GET['leaved_at']);

    if ($leaved_at < $arrived_at) {
        $leaved_at->modify('+1 day');
    }

    $diff = $arrived_at->diff($leaved_at);

    $hours = $diff->h + ($diff->days * 24);
    $minutes = $diff->i;

    echo "
    <h3>Natija:</h3>
    <p>Kelgan vaqti:<br>{$_GET['arrived_at']}</p>
    <p>Ketgan vaqti:<br>{$_GET['leaved_at']}</p>
    <p>Umumiy ishlagan vaqt:<br> $hours soat va $minutes daqiqa</p>
    ";
}
?>