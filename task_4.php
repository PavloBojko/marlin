<?php
$task_4 = [
    [
        'title' => 'My Tasks',
        'value' => '130 / 500',
        'progress' => 'bg-fusion-400',
        'width' => 65,
        'value_now' => 65,
        'value_min' => 0,
        'value_max' => 100
    ],
    [
        'title' => 'Transfered',
        'value' => '440 TB',
        'progress' => 'bg-success-500',
        'width' => 34,
        'value_now' => 34,
        'value_min' => 0,
        'value_max' => 100
    ],
    [
        'title' => 'Bugs Squashed',
        'value' => '77%',
        'progress' => 'bg-fusion-400',
        'width' => 77,
        'value_now' => 77,
        'value_min' => 0,
        'value_max' => 100
    ],
    [
        'title' => 'User Testing',
        'value' => '7 days',
        'progress' => 'bg-primary-300',
        'width' => 84,
        'value_now' => 84,
        'value_min' => 0,
        'value_max' => 100
    ],

]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>

<body class="mod-bg-1 mod-nav-link ">
    <main id="js-page-content" role="main" class="page-content">
        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Задание № 4
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <?php
                        $mt_2 = function($var)
                        {
                            if ($var==0)return 'mt-2';
                        };
                        $mb_g = function($var, $task_4)
                        {
                            if ($var!==count($task_4)-1)return 'mb-3';
                            else return 'mb-g';
                            
                        };

                        foreach ($task_4 as $key => $value) {
                            echo "<div class='d-flex {$mt_2($key)}'>{$value['title']}
                                <span class='d-inline-block ml-auto'>{$value['value']}</span>
                                </div>";
                            echo "<div class='progress progress-sm {$mb_g($key, $task_4)}'>
                                <div class='progress-bar {$value['progress']}' role='progressbar' style='width: {$value['width']}%;' aria-valuenow='{$value['value_now']}' aria-valuemin='{$value['value_min']}' aria-valuemax='{$value['value_max']}'></div>
                                </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
        // default list filter
        initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
        // custom response message
        initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
    </script>
</body>

</html>