<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <style>
        .menu ul {
            list-style-type: none;
            display: flex;
            justify-content: space-around;
            padding: 0;
        }

        .menu ul li {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px solid;
            width: 120px;
            height: 120px;
            margin: 10px;
            padding: 10px;
        }

        .menu ul li:nth-child(1) {
            border-color: red;
        }

        .menu ul li:nth-child(2) {
            border-color: blue;
        }

        .menu ul li:nth-child(3) {
            border-color: green;
        }

        .menu ul li:nth-child(4) {
            border-color: orange;
        }

        .menu ul li i {
            font-size: 4rem;
        }

        .menu ul li p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>tienda</h1>
        <div class="menu">
            <ul>
                <a href="<?= base_url() ?>provider">
                    <li>
                        <div>
                            <i class="fa-solid fa-4x fa-building" style="color: red;"></i>
                            <p>Providers</p>
                        </div>
                    </li>
                </a>
                <a href="<?= base_url() ?>customer">
                    <li>
                        <div>
                            <i class="fa-solid fa-4x fa-circle-user" style="color: blue;"></i>
                            <p>Customer</p>
                        </div>
                    </li>
                </a>
                <a href="<?= base_url() ?>product">
                    <li>
                        <div>
                            <i class="fa-solid fa-4x fa-shop" style="color: green;"></i>
                            <p>Products</p>
                        </div>
                    </li>
                </a>
                <a href="<?= base_url() ?>sale">
                    <li>
                        <div>
                            <i class="fa-solid fa-4x fa-salesforce" style="color: orange;"></i>
                            <p>Sales</p>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</body>

</html>
