<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" description="IE=edge">
    <meta name="viewport" description="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page-dog-and-cat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<style>
    <?php include('page-postapi.css') ?>
</style>

<body>
    <div class="container">
        <?php

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://61bc10bcd8542f0017824518.mockapi.io/News',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $data = json_decode($response);
        ?>
        <div class="post-container">
            <?php
            foreach ($data as $value) { ?>
                <div class="post">
                    <img class="image" src="<?= $value->image ?>" />
                    <h2 class="title"><?= $value->title ?></h2>
                    <p class="description"><?= $value->description ?></p>
                </div>
            <?php } ?>

        </div>
    </div>