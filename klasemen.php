<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Standings</title>
    <style>
        .group-stage-container {
            /* border: solid 1px #00254A; */
            padding: 10px;
            margin-bottom: 10px;
        }

        .group-title {
            font-size: 1.2rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 5px;
            color: #ffffff;
            background-color: #F5B100 ;
        }

        .table-container {
            width: 100%;
            color: #00254A;
            border-color: #00254A;
        }

        .table-container td {
            background-color: #ffffff;
            /* Warna default untuk sel */
        }

        .table-container tbody tr:nth-child(even) td {
            background-color: #f2f2f2;
            /* Warna untuk sel pada baris genap */
        }
    </style>
</head>

<body>
    <?php
    include 'standings/data_smp.php';
    include 'standings/data_sma.php';
    include 'standings/data_fakultas.php';
    include 'generate_table.php';
    ?>

    <div class="tabs clearfix" id="tabs" data-active="3">
        <ul class="tab-nav tab-nav2 clearfix" style="display: flex; flex-direction: row; justify-content: center;">
            <li><a href="#group-stage">SMP</a></li>
            <li><a href="#progressive-round">SMA</a></li>
            <li><a href="#playoffs">FAKULTAS</a></li>
        </ul>
        <div class="tab-container" style="position: relative">
            <div class="bg-container2"></div>
            <div class="tab-content clearfix" id="group-stage" role="tab-panel">
                <?php generate_table($groups_smp); ?>
            </div>
            <div class="tab-content clearfix" id="progressive-round" role="tab-panel">
                <?php generate_table($groups_sma); ?>
            </div>
            <div class="tab-content clearfix" id="playoffs" role="tab-panel">
                <?php generate_table($groups_fakultas); ?>
            </div>
        </div>
    </div>
</body>

</html>