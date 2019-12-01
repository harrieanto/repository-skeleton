<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width,initial-scale=1.0" name="viewport">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<link rel="stylesheet" href="/resources/views/error/layout.css"/>
</head>
<body>
    <div class="container-313354">
    <?php
        $code = $responses['code'];
        $message = $responses['message'];
    ?>
        <div class="row-313354">
            <div class="col-12-313354">
                <div class="row-313354" style="margin-top:20%;overflow:hidden;">
                    <div class="col-2-313354"><h1 class="number-313354" style="text-align:center;"><?= $code ?></h1></div>
                    <div class="col-8-313354"><h2 class="content-313354" style="left:0.2em;top:0.2em;"><?= $message ?></h2></div>
                </div>
            </div>
        </div>
    </div>
</body>
</head>