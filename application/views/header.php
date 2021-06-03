<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- 

    head

-->

<head>
    <!-- Required meta tags -->
    <!-- (meta: infrormation about the document) -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- 
        base_url:
        Create a local URL based on your basepath. 
        Segments can be passed in as a string or an array,
    -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rer="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <title>List of Users</title>

</head>

<body class="d-flex flex-column h-100">

    <div class="container pt-4 pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <!-- href="#" indicates scrolling to the top of the same page. -->
            <a class="navbar-brand" href="#">CI First App</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <spann class="navbar-toggler-icon"></spann>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('users/create'); ?>">Create An User</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
