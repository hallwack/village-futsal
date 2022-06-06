@extends('layouts.main')

@section('content')
<div class="flex flex-row w-full py-8 border-b-2 border-b-slate-200">
    {{ Breadcrumbs::render('booking') }}
</div>
<div class="flex flex-row w-full justify-center container mx-auto my-12">
    <h1 class="text-primary text-4xl font-bold">Booking</h1>
</div>
<div class="flex flex-row w-full justify-center container mx-auto my-8 space-x-8">
    <form class="w-1/4 h-fit flex flex-col border p-8 space-y-8 rounded-lg" action="{{ route('booking.check') }}"
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
    <form class="w-3/4 h-fit flex flex-col border p-8 space-y-8 rounded-lg">
        <h2 class="font-semibold text-3xl text-slate-800">Lapangan 1</h2>
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
            @foreach ($timePart as $key => $value)
            <div class="flex flex-col py-4 border-b-2 border-b-slate-200">
                <h2 class="font-semibold text-2xl text-slate-800">{{$value}}</h2>
                <div class="grid grid-cols-6 gap-8 py-6">
                    @if ($key == "pagi")
                    @for ($i = 1; $i <= 12; $i++) @if (in_array(str_pad($i, 2, "0" , STR_PAD_LEFT). ":00:00" ,
                        $getDate->
                        toArray()))
                        <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                            <input type="radio" name="booking_hour" id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}"
                                class="peer group sr-only" value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00"
                                disabled />
                            <input type="hidden" name="booking_price" value="80000" disabled />
                            <div
                                class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 text-gray-500 peer-checked:text-white">
                                <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                <p class="">Rp 80K</p>
                            </div>
                        </label>
                        @elseif ($hourNow >= str_pad($i, 2, "0", STR_PAD_LEFT). ":00:00")
                        <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                            <input type="radio" name="booking_hour" id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}"
                                class="peer group sr-only" value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00"
                                disabled />
                            <input type="hidden" name="booking_price" value="80000" disabled />
                            <div
                                class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 text-gray-500 peer-checked:text-white">
                                <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                <p class="">Rp 80K</p>
                            </div>
                        </label>
                        @else
                        <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                            <input type="radio" name="booking_hour" id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}"
                                class="peer group sr-only" value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00" />
                            <input type="hidden" name="booking_price" value="80000">
                            <div
                                class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                                <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                <p class="">Rp 80K</p>
                            </div>
                        </label>
                        @endif
                        @endfor
                        @endif

                        @if ($key == "sore")
                        @for ($i = 13; $i <= 18; $i++) @if (in_array(str_pad($i, 2, "0" , STR_PAD_LEFT). ":00:00" ,
                            $getDate->toArray()))
                            <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                                <input type="radio" name="booking_hour"
                                    id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="peer group sr-only"
                                    value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00" disabled />
                                <input type="hidden" name="booking_price" value="100000" disabled />
                                <div
                                    class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 text-gray-500 peer-checked:text-white">
                                    <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                    <p class="">Rp 100K</p>
                                </div>
                            </label>
                            @elseif ($hourNow >= str_pad($i, 2, "0", STR_PAD_LEFT). ":00:00")
                            <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                                <input type="radio" name="booking_hour"
                                    id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="peer group sr-only"
                                    value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00" disabled />
                                <input type="hidden" name="booking_price" value="100000" disabled />
                                <div
                                    class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 text-gray-500 peer-checked:text-white">
                                    <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                    <p class="">Rp 100K</p>
                                </div>
                            </label>
                            @else
                            <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                                <input type="radio" name="booking_hour"
                                    id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="peer group sr-only"
                                    value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00" />
                                <input type="hidden" name="booking_price" value="100000">
                                <div
                                    class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                                    <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                    <p class="">Rp 100K</p>
                                </div>
                            </label>
                            @endif
                            @endfor
                            @endif

                            @if ($key == "malam")
                            @for ($i = 19; $i <= 21; $i++) @if (in_array(str_pad($i, 2, "0" , STR_PAD_LEFT). ":00:00" ,
                                $getDate->toArray()))
                                <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                                    <input type="radio" name="booking_hour"
                                        id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="peer group sr-only"
                                        value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00" disabled />
                                    <input type="hidden" name="booking_price" value="120000" disabled />
                                    <div
                                        class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 text-gray-500 peer-checked:text-white">
                                        <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                        <p class="">Rp 120K</p>
                                    </div>
                                </label>
                                @elseif ($hourNow >= str_pad($i, 2, "0", STR_PAD_LEFT). ":00:00")
                                <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                                    <input type="radio" name="booking_hour"
                                        id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="peer group sr-only"
                                        value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00" disabled />
                                    <input type="hidden" name="booking_price" value="120000" disabled />
                                    <div
                                        class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 text-gray-500 peer-checked:text-white">
                                        <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                        <p class="">Rp 120K</p>
                                    </div>
                                </label>
                                @else
                                <label for="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="relative">
                                    <input type="radio" name="booking_hour"
                                        id="booking-{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}" class="peer group sr-only"
                                        value="{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}:00:00" />
                                    <input type="hidden" name="booking_price" value="120000">
                                    <div
                                        class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                                        <p class="text-2xl font-medium">{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.00</p>
                                        <p class="">Rp 120K</p>
                                    </div>
                                </label>
                                @endif
                                @endfor
                                @endif
                </div>
            </div>
            @endforeach
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

    <div id="check-solid"></div>
</div>
@endsection

@push('custom-script')
<script>
    // const form = document.getElementById("bookingCheck");
    // form.addEventListener("submit", (e) => {
    //     e.preventDefault();
    //     const formData = new FormData(form);
    //     axios
    //         .post("{{ route('booking.check') }}", formData, {
    //             headers: {
    //                 "Content-Type": "multipart/form-data",
    //             },
    //         })
    //         .then((res) => {
    //             const {
    //                 data,
    //                 timePart,
    //                 getDate,
    //                 hourNow,
    //                 timeNow
    //             } = res.data;
    //             console.log(timePart);
    //             Object.keys(timePart).forEach((value) => {
    //                 console.log(value)
    //             })
    //         })
    //         .catch((err) => {
    //             alert(err)
    //         });
    // });

</script>
@endpush
