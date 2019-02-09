<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: white;
            font-family: "Times New Roman", Times, serif;
            font-size: 19px;
        }

        .footer-left {
            font-size: 9px;
            display: none;
        }

        .footer-right {
            font-size: 9px;
            display: none;
        }

        .lowercase {
            text-transform: lowercase;
        }

        .signature {
            position: absolute;
            z-index: 1100;
            width: 40mm;
            top: -25px;
            opacity: 0.90;
        }

        .stamp {
            position: absolute;
            z-index: 1000;
            width: 65mm;
            top: -50px;
            opacity: 0.60;
        }

        .signature-top {
            position: absolute;
            z-index: 1100;
            width: 40mm;
            top: -50px;
            opacity: 0.90;
        }

        .stamp-top {
            position: absolute;
            z-index: 1000;
            width: 65mm;
            top: -60px;
            opacity: 0.60;
        }

        @media print {
            @page {
                margin: 10mm;
            }

            .footer-left {
                display: block;
                position: fixed;
                bottom: 0;
                left: 20mm;
                font-size: 10pt;
            }

            .footer-right {
                display: block;
                position: fixed;
                bottom: 0;
                right: 20mm;
                font-size: 10pt;
            }

            li {
                page-break-inside: avoid;
            }

            .table .thead-light th {
                background-color: #e9ecef !important;
            }

            .pagebreak {
                page-break-before: always;
            }
        }
    </style>
    <title>Билет на поезд {{$ticket->route->name}}</title>
</head>
<body>

<div class="container">
    <div class="row">
        Билет на поезд {{$ticket->route->name}}<br>
        На имя {{$ticket->name}}<br>

    </div>
</div>
</body>
<script>
    window.print();
</script>
</html>
