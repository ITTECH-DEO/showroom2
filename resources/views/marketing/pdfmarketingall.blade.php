<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<style>
    .page-break {
        page-break-after: always
    }
</style>
<body>
    <h4 class="text-center mt-3">SHOWROOM DETAIL CAR</h4>
    <h3 class="text-center">Detail Car</h3>

    <table class="table table-bordered mt-3">
        @foreach ($cars as $car)
            <form action="#" method="post" class="form">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="clearfix">
                            <center>
                                <br>
                                <img class="pull-right" style="width: 200px;height: 90px;" src="{{ url($car->img_car) }}">
                                <img class="pull-right" style="width: 200px;height: 90px;" src="{{ url($car->img_car2) }}">
                                <img class="pull-right" style="width: 200px;height: 90px;" src="{{ url($car->img_car3) }}">   
                            </center>
                            <br>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">Type</span>

                            <strong class="pull-right">{{ strtoupper($car->type_car) }}</strong>
                        </div>
                    </li>


                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">Vendor</span>

                            <strong class="pull-right">{{ strtoupper($car->vendor->name_vendor) }}</strong>
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

                            <strong class="pull-right">{{ strtoupper($car->fisrt_registartion) }}</strong>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">Mileage</span>

                            <strong class="pull-right">{{ strtoupper($car->millage) }}</strong>
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

                            <strong class="pull-right">{{ strtoupper($car->engine_size) }}</strong>
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

                            <strong class="pull-right">{{ strtoupper($car->whatsapp->nama_cabang) }} :
                                {{ strtoupper($car->whatsapp->wa) }}</strong>
                        </div>
                    </li>
                </ul>
            </form>
        <div class="page-break"></div>
        @endforeach

    </table>

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
