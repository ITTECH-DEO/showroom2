<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h4 class="text-center mt-3">SHOWROOM DETAIL CAR</h4>
    <h3 class="text-center">Detail Car</h3>
    <table>
        <tr>
            <th>Image</th>
        </tr>
        @foreach ($cars as $car)
        <tr>
            <td>
                <img style="width: 320px;height: 160px;" src="{{ public_path($car->img_car) }}">
            </td>
            <td>
                <img style="width: 320px;height: 160px;" src="{{ public_path($car->img_car4) }}">
            </td>
        </tr>
        @endforeach
    </table>
        <table>
            <tr>
                <th>Criteria</th>
                <th>Value</th>
            </tr>
            @foreach ($cars as $car)
                <tr>
                    <td>Type</td>
                    <td>{{ strtoupper($car->type_car) }}</td>
                </tr>
                <tr>
                    <td>Vendor</td>
                    <td>{{ strtoupper($car->vendor->name_vendor) }}</td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td>{{ strtoupper($car->model) }}</td>
                </tr>
                <tr>
                    <td>First registration</td>
                    <td>{{ strtoupper($car->fisrt_registartion) }}</td>
                </tr>
                <tr>
                    <td>Mileage</td>
                    <td>{{ strtoupper($car->millage) }}</td>
                </tr>
                <tr>
                    <td>Fuel</td>
                    <td>{{ strtoupper($car->fuel) }}</td>
                </tr>
                <tr>
                    <td>Engine size</td>
                    <td>{{ strtoupper($car->engine_size) }}</td>
                </tr>
                <tr>
                    <td>Power</td>
                    <td>{{ strtoupper($car->power) }}</td>
                </tr>
                <tr>
                    <td>Number of seats</td>
                    <td>{{ strtoupper($car->seats) }}</td>
                </tr>
                <tr>
                    <td>Doors</td>
                    <td>{{ strtoupper($car->doors) }}</td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td>{{ strtoupper($car->color) }}</td>
                </tr>
                <tr>
                    <td>WhatsApp Number</td>
                    <td>{{ strtoupper($car->whatsapp->nama_cabang) }} : {{ strtoupper($car->whatsapp->wa) }}</td>
                </tr>
            @endforeach
        </table>

        {{-- <form action="#" method="post" class="form">
            <div class="row">
                    <div class="clearfix col-xs-4" style="margin-right: 20px; margin-left: 150px">
                    </div>
                    <div class="clearfix col-xs-4" style="margin-right: 20px">
                        <img class="pull-right" style="width: 320px;height: 160px;" src="{{ public_path($car->img_car) }}">
                    </div>
                    <div class="clearfix col-xs-4" style="margin-right: 20px">
                        <img class="pull-right" style="width: 320px;height: 160px;" src="{{ public_path($car->img_car4) }}">
                    </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Type</span>

                        <strong
                            class="pull-right">{{ strtoupper($car->type_car) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Vendor</span>

                        <strong
                            class="pull-right">{{ strtoupper($car->vendor->name_vendor) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left"> Model</span>

                        <strong class="pull-right">{{ strtoupper($car->model) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">First registration</span>

                        <strong
                            class="pull-right">{{ strtoupper($car->fisrt_registartion) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Mileage</span>

                        <strong
                            class="pull-right">{{ strtoupper($car->millage) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Fuel</span>

                        <strong class="pull-right">{{ strtoupper($car->fuel) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Engine size</span>

                        <strong
                            class="pull-right">{{ strtoupper($car->engine_size) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Power</span>

                        <strong class="pull-right">{{ strtoupper($car->power) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Number of seats</span>

                        <strong class="pull-right">{{ strtoupper($car->seats) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Doors</span>

                        <strong class="pull-right">{{ strtoupper($car->doors) }}</strong>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">Color</span>

                        <strong class="pull-right">{{ strtoupper($car->color) }}</strong>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="clearfix">
                        <span class="pull-left">WhatsApp Number</span>

                        <strong class="pull-right">{{ strtoupper($car->whatsapp->nama_cabang) }} : {{ strtoupper($car->whatsapp->wa) }}</strong>
                    </div>
                </li>
            </ul>
        </form> --}}

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
