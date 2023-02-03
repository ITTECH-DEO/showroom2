@if ($cars->count() >= 1)
    @foreach ($cars as $car)
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <div class="product-item  shadow rounded remove-padding">
                <a href="{{ route('car.detail', ['id' => $car['id']]) }}"><img class="rounded-lg"
                        src="{{ url($car->img_car) }}" alt="NGeng Ngeng1"></a>
                <div class="down-content">
                    <a href="{{ route('car.detail', ['id' => $car['id']]) }}">
                        <h4>{{ $car->name_car }}</h4>
                    </a>
                    @php
                        $hasil_rupiah = 'Rp ' . number_format($car->day_price, 2, ',', '.');
                    @endphp
                    <p class="harga-responsive"> {{ $hasil_rupiah }}</p>
                    <p>{{ $car->power }} &nbsp;/&nbsp; {{ $car->fuel }} &nbsp;/&nbsp; {{ $car->tahun }}
                        &nbsp;</p>
                    <small>
                        <strong title="Author"><i class="fa fa-dashboard"></i> {{ $car->millage }}</strong>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Author"><i class="fa fa-cube"></i>
                            {{ $car->engine_size }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Views"><i class="fa fa-cog"></i> {{ $car->type_car }}</strong>
                    </small>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="col-md-12 my-5 text-center">
        <h2>Nothing Found</h2>
    </div>
    <div>
@endif
</div>
