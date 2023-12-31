<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE WEB DEV - GROUP 5B</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .button {
            margin: 0 10px;
        }

        .table-container {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        @media (max-width: 576px) {
            .container {
                padding: 20px;
            }
        }
    </style>
     <!-- Add the manifest file for PWA -->
    <link rel="manifest" href="manifest.json">
    <!-- Add the service worker script -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('service-worker.js')
                    .then(function (registration) {
                        console.log('Service Worker registered with scope:', registration.scope);
                    }).catch(function (error) {
                        console.log('Service Worker registration failed:', error);
                    });
            });
        }
    </script>
</head>

<body>
    <div class="container">
        <h1 class="title">A WEB APP TO SEND SMS</h1>

        <div class="section">
            <h2 class="section-heading">CE Group 5B Project</h2>
            <div class="button-container">
                <a href="https://site.kingsdevelopers.org/sms.php" class="btn btn-primary button">SEND SINGLE SMS</a>
                <a href="https://site.kingsdevelopers.org/bulk.php" class="btn btn-secondary button">SEND BULK SMS</a>
            </div>
        </div>

        <div class="section">
            <h2 class="section-heading">Group Members</h2>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Index No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kingsley Aduhene</td>
                            <td>FOE.41.008.009.22</td>
                        </tr>
                        <tr>
                            <td>Awini Emmanuel Awintis</td>
                            <td>FOE.41.008.049.22</td>
                        </tr>
                        <tr>
                            <td>Akotey Stephen Adigi</td>
                            <td>FOE.41.008.019.22</td>
                        </tr>
                        <tr>
                            <td>Opoku Tracy Frema</td>
                            <td>FOE.41.008.121.22</td>
                        </tr>
                        <tr>
                            <td>Frempong Michael</td>
                            <td>FOE.41.008.078.22</td>
                        </tr>
                        <tr>
                            <td>Kelwini Vine Volsugka</td>
                            <td>FOE.41.008.089.22</td>
                        </tr>
                        <tr>
                            <td>ARHIN DAVID KWABENA</td>
                            <td>FOE.41.008.039.22</td>
                        </tr>
                        <tr>
                            <td>Nana Owusu-Ansah Ntodi</td>
                            <td>FOE.41.008.109.22</td>
                        </tr>
                        <tr>
                            <td>Sokatsi Edem</td>
                            <td>FOE.41.008.142.22</td>
                        </tr>
                        <tr>
                            <td>Boafo Ellen Blessing</td>
                            <td>FOE.41.008.059.22</td>
                        </tr>
                        <tr>
                            <td>Wobi Emily Wepiah</td>
                            <td>FOE.41.008.152.22</td>
                        </tr>
                        <tr>
                            <td>Jerry Oscar Quayson</td>
                            <td>FOE.41.008.132.22</td>
                        </tr>
                        <tr>
                            <td>Danso Emmanuel Yaw</td>
                            <td>FOE.41.008.069.22</td>
                        </tr>
                         <tr>
                            <td>Frimpong Festus Kwaku</td>
                            <td>FOE.41.008.079.22</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="section">
            <h2 class="section-heading">Our API Credit Balance</h2>
            <div class="balance-container">
                <?php
                    $apiUrl = 'http://sms.gonlinesites.com/app/sms/api?action=check-balance&api_key=REVJbHJiT2ZGeEt4SUpsS2JyZGs=&response=json';
                    $response = file_get_contents($apiUrl);
                    $data = json_decode($response, true);
                    if ($data['balance']) {
                        echo '<div class="balance">Balance: ' . $data['balance'] . '</div>';
                        echo '<div class="user">User: ' . $data['user'] . '</div>';
                        echo '<div class="country">Country: ' . $data['country'] . '</div>';
                    } else {
                        echo '<div class="balance-error">Failed to retrieve balance.</div>';
                    }
                ?>
            </div>
        </div>
        <div class="button-container">
                <a href="https://p.hbtl.co/ccJFy2" class="btn btn-primary button">Buy Us Credit</a>
                <a href="https://site.kingsdevelopers.org/custom.php" class="btn btn-secondary button">Custom SMS</a>
            </div>
    </div>
</body>

</html>
