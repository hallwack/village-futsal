@extends('layouts.main')

@section('content')
<div id="booking-content">
    {{-- <div class="flex flex-row w-full py-8 border-b-2 border-b-slate-200">
        {{ Breadcrumbs::render('booking') }}
</div> --}}
<div class="flex flex-row w-full justify-center container mx-auto my-12">
    <h1 class="text-primary text-4xl font-bold">Booking</h1>
</div>
<div class="flex flex-row w-full justify-center container mx-auto my-8 space-x-8">
    <form class="w-96 h-fit flex flex-col border p-8 space-y-8 rounded-lg" action="{{ route('booking.check') }}"
        method="POST" id="bookingCheck">
        <h2 class="font-semibold text-3xl text-slate-800">Cari Lapangan</h2>
        <div class="flex flex-col">
            <label for="dateNow" class="text-slate-800 mb-2">Tanggal</label>
            <input type="date" name="dateNow" id="dateNow"
                class="form-input rounded-md border-0 text-slate-800 text-lg p-0" value="{{ $timeNow->toDateString() }}"
                min="{{ $timeNow->toDateString() }}" />
        </div>
        <div class="flex flex-col">
            <label for="email" class="text-slate-800 mb-2" for="field">Lapangan</label>
            <select class="form-select border-0" name="field" id="field">
                @foreach ($fields as $field)
                <option value="{{ $field->id }}">{{ $field->field_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit"
            class="flex flex-row font-semibold text-xl bg-secondary rounded-lg py-3 px-6 h-fit text-white items-center justify-center">
            <span class="inline-block items-center mr-3">
                <img src="{{ asset('img/icon/search-icon.svg') }}" />
            </span>Cari
        </button>
    </form>
    <form class="w-3/4 h-fit flex flex-col border p-8 space-y-8 rounded-lg" id="bookingAvailable" method="POST"
        action="{{ route('booking.store') }}">
        <h2 class="font-semibold text-3xl text-slate-800" id="fieldName">Lapangan</h2>
        <div class="flex flex-row space-x-8 pb-8 border-b-2 border-b-slate-200">
            <div class="flex flex-row items-center space-x-4">
                <div class="h-8 w-8 border-2 border-primary"></div>
                <p>Tersedia</p>
            </div>
            <div class="flex flex-row items-center space-x-4">
                <div class="h-8 w-8 bg-gray-300"></div>
                <p>Sudah dibooking</p>
            </div>
            <div class="flex flex-row items-center space-x-4">
                <div class="h-8 w-8 bg-primary"></div>
                <p>Dipilih</p>
            </div>
        </div>
        <div id="booking">
        </div>

        <div class="flex flex-row space-x-4">
            <button
                class="font-semibold text-xl w-fit bg-secondary rounded-lg py-3 px-6 h-fit text-white items-center justify-center">
                Booking
            </button>
            <a href="#"
                class="font-semibold text-xl py-3 w-fit px-6 rounded-lg border-2 border-primary/40 text-primary/70">Kembali</a>
        </div>
    </form>

</div>
</div>
@endsection

@push('custom-script')
<script>
    const formatter = new Intl.NumberFormat('en', {
        notation: 'compact'
    });

    function toJSONLocal(date) {
        var local = new Date(date);
        return local.toISOString().slice(0, 10);
    }

    const today = new Date()

    const cardAvailable = (data, price) => {
        return `<label for="booking-${data.toString().padStart(2, "0")}" class="relative">
            <input type="radio" name="booking_hour" id="booking-${data.toString().padStart(2, "0")}" class="peer group sr-only"
                value="${data.toString().padStart(2, "0")}:00:00" />
            <input type="hidden" name="booking_price" value="${price}">
            <div
                class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                <p class="text-2xl font-medium">${data.toString().padStart(2, "0")}.00
                </p>
                <p class="">Rp ${formatter.format(price)}</p>
            </div>
        </label>`
    }

    const cardIdle = (data, price) => {
        return `<label for="booking-${data.toString().padStart(2, "0")}" class="relative">
            <input type="radio" name="booking_hour" id="booking-${data.toString().padStart(2, "0")}" class="peer group sr-only" value="${data.toString().padStart(2, "0")}:00:00" disabled />
            <input type="hidden" name="booking_price" value="${price}" disabled />
            <div class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 text-gray-500 peer-checked:text-white">
                <p class="text-2xl font-medium">${data.toString().padStart(2, "0")}.00
                </p>
                <p class="">Rp ${formatter.format(price)}</p>
            </div>
        </label>`
    }

    const form = document.getElementById("bookingCheck");
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        axios
            .post("{{ route('booking.check') }}", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            })
            .then((res) => {
                const {
                    dataHour,
                    dataDate,
                    timePart,
                    hourNow,
                    price
                } = res.data;
                var html = ``
                Object.keys(timePart).forEach(element => {
                    html += `<div class="flex flex-col py-4 border-b-2 border-b-slate-200">
                <h2 class="font-semibold text-2xl text-slate-800">${timePart[element]}</h2>
                <div class="grid grid-cols-6 gap-8 py-6">`
                    if (element == 'pagi') {
                        for (let i = 0; i <= 12; i++) {
                            if (dataDate.includes(toJSONLocal(today)) && dataHour.includes(String(
                                    i +
                                    ":00:00"))) {
                                html += cardIdle(i, price[0].price_pricing)
                            } else if (dataDate.includes(toJSONLocal(today)) && parseInt(hourNow) >=
                                parseInt(i + ":00:00")) {
                                html += cardIdle(i, price[0].price_pricing)
                            } else if (!(dataDate.includes(toJSONLocal(today))) && dataHour
                                .includes(
                                    String(i + ":00:00"))) {
                                html += cardAvailable(i, price[0].price_pricing)
                            } else {
                                html += cardAvailable(i, price[0].price_pricing)
                            }
                        }
                    }
                    if (element == 'sore') {
                        for (let i = 13; i <= 18; i++) {
                            if (dataDate.includes(toJSONLocal(today)) && dataHour.includes(String(
                                    i +
                                    ":00:00"))) {
                                html += cardIdle(i, price[1].price_pricing)
                            } else if (dataDate.includes(toJSONLocal(today)) && parseInt(hourNow) >=
                                parseInt(i + ":00:00")) {
                                html += cardIdle(i, price[1].price_pricing)
                            } else if (!(dataDate.includes(toJSONLocal(today))) && dataHour
                                .includes(
                                    String(i + ":00:00"))) {
                                html += cardIdle(i, price[1].price_pricing)
                            } else {
                                html += cardAvailable(i, price[1].price_pricing)
                            }
                        }
                    }
                    if (element == 'malam') {
                        for (let i = 19; i <= 23; i++) {
                            if (dataDate.includes(toJSONLocal(today)) && dataHour.includes(String(
                                    i +
                                    ":00:00"))) {
                                html += cardIdle(i, price[2].price_pricing)
                            } else if (dataDate.includes(toJSONLocal(today)) && parseInt(hourNow) >=
                                parseInt(i + ":00:00")) {
                                html += cardIdle(i, price[2].price_pricing)
                            } else if (!(dataDate.includes(toJSONLocal(today))) && dataHour
                                .includes(
                                    String(i + ":00:00"))) {
                                html += cardIdle(i, price[2].price_pricing)
                            } else {
                                html += cardAvailable(i, price[2].price_pricing)
                            }
                        }
                    }
                    html += `</div>
            </div>`
                });
                document.getElementById('booking').innerHTML = html
                const fieldName = document.getElementById('field').options[document.getElementById('field')
                    .selectedIndex].text;
                document.getElementById('fieldName').innerHTML = fieldName;
            })
            .catch((err) => {
                console.log(err)
            });
    });

</script>
@endpush
