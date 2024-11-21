<?php

use yii\helpers\Html;

$style = <<<CSS
 body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px auto;
            max-width: 1200px;
        }
        .board-section {
            background-color: #02418C;
            color: white;
            border: 2px solid white;
            border-radius: 10px;
            width: 250px;
            height: 200px;
            margin: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .board-section h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .board-section a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
        }
        .board-section a:hover {
            color: #ffc107;
            text-decoration: underline;
        }
CSS;

$this->registerCss($style);

?>

<div class="dashboard">
    <!-- Section 1 -->
    <div class="board-section">
        <h3>Mastering & 4S</h3>
        <a href="#">View Details</a>
    </div>

    <!-- Section 2 -->
    <div class="board-section">
        <h3>Cycle Time Monitoring</h3>
        <a href="#">View Details</a>
    </div>

    <!-- Section 3 -->
    <div class="board-section">
        <h3>Bekido - Chokko Sheet</h3>
        <?=Html::a("View Details",Yii::$app->urlManager->createUrl("grinding-assembly-line/create"))?>
    </div>

    <!-- Section 4 -->
    <div class="board-section">
        <h3>Oracle Status Checksheet</h3>
        <a href="#">View Details</a>
    </div>

    <!-- Section 5 -->
    <div class="board-section">
        <h3>Abnormality Sheet</h3>
        <a href="#">View Details</a>
    </div>

    <!-- Section 6 -->
    <div class="board-section">
        <h3>NG Sheet</h3>
        <a href="#">View Details</a>
    </div>

    <!-- Section 7 -->
    <div class="board-section">
        <h3>4M Sheet</h3>
        <a href="#">View Details</a>
    </div>

    <!-- Section 8 -->
    <div class="board-section">
        <h3>Production Sheet</h3>
        <a href="#">View Details</a>
    </div>
</div>