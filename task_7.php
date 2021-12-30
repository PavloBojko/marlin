<?php
$localhost = 'localhost';
$userName = 'root';
$pasvord = '';
$dbname = 'marlin';

$connect = mysqli_connect($localhost, $userName, $pasvord, $dbname);

$sqli = 'SELECT * FROM `users`';

$result = mysqli_query($connect, $sqli);

$colRows = mysqli_num_rows($result);

$i = 0;
$task_5 = [];
while ($i < $colRows) {
    $rows = mysqli_fetch_assoc($result);
    $task_5[] = $rows;
    $i++;
}

// echo('<pre>');
// var_dump($task_5);
// echo('</pre>');
?>
<?php
// $task_5 = [
//     [
//         "img_src" => "img/demo/authors/sunny.png",
//         'img_alt' => 'Sunny A.',
//         'person_inform' => 'Sunny A. (UI/UX Expert)',
//         'status_worc' => 'Lead Author',
//         'href_twit' => 'https://twitter.com/@myplaneticket',
//         'twit_value' => '@myplaneticket',
//         'href_email' => 'https://wrapbootstrap.com/user/myorange',
//         'a_title' => 'Contact Sunny',
//         'icon' => '<i class="fal fa-envelope"></i>',
//         'status' => true
//     ],
//     [
//         'img_src' => 'img/demo/authors/josh.png',
//         'img_alt' => 'Jos K.',
//         'person_inform' => 'Jos K. (ASP.NET Developer)',
//         'status_worc' => 'Partner &amp; Contributor',
//         'href_twit' => 'https://twitter.com/@atlantez',
//         'twit_value' => '@atlantez',
//         'href_email' => 'https://wrapbootstrap.com/user/Walapa',
//         'a_title' => 'Contact Jos',
//         'icon' => '<i class="fal fa-envelope"></i>',
//         'status' => false
//     ],
//     [
//         'img_src' => 'img/demo/authors/jovanni.png',
//         'img_alt' => 'Jovanni Lo',
//         'person_inform' => 'Jovanni L. (PHP Developer)',
//         'status_worc' => 'Partner &amp; Contributor',
//         'href_twit' => 'https://twitter.com/@lodev09',
//         'twit_value' => '@lodev09',
//         'href_email' => 'https://wrapbootstrap.com/user/lodev09',
//         'a_title' => 'Contact Jovanni',
//         'icon' => '<i class="fal fa-envelope"></i>',
//         'status' => false
//     ],
//     [
//         'img_src' => 'img/demo/authors/roberto.png',
//         'img_alt' => 'Jovanni Lo',
//         'person_inform' => 'Roberto R. (Rails Developer)',
//         'status_worc' => 'Partner &amp; Contributor',
//         'href_twit' => 'https://twitter.com/@sildur',
//         'twit_value' => '@sildur',
//         'href_email' => 'https://wrapbootstrap.com/user/sildur',
//         'a_title' => 'Contact Roberto',
//         'icon' => '<i class="fal fa-envelope"></i>',
//         'status' => true
//     ]
// ]
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
                        Задание № 5
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php foreach ($task_5 as $value) { ?>
                                <div class="<?php echo !$value['status'] ? 'banned' : ''; ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo $value['img_src']; ?>" alt="<?php echo $value['img_alt']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                    <div class="ml-2 mr-3">
                                        <h5 class="m-0">
                                            <?php echo $value['person_inform']; ?>
                                            <small class="m-0 fw-300">
                                                <?php echo $value['status_worc']; ?>
                                            </small>
                                        </h5>
                                        <a href=<?php echo $value['href_twit']; ?> class="text-info fs-sm" target="_blank"><?php echo $value['twit_value']; ?></a> -
                                        <a href=<?php echo $value['href_email']; ?> class="text-info fs-sm" target="_blank" title=<?php echo $value['a_title']; ?>><?php echo $value['icon']; ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
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