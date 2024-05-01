@extends('layouts.client.app')

@section('title', 'Detail Booking')

@section('textBooking', 'bg-dark rounded')

@section('content')

    <div class="container my-5 py-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('studio.checkout') }}" method="POST" class="row">
                        @csrf
                        <h3 class="text-center mb-3">{{ $package->name }}</h3>
                        <input type="hidden" name="package_id" id="package_id" value="{{ $package->id }}">
                        <div class="col-md-4">
                            <div class="card-header text-center mb-2">
                                <div class="fw-bold">{{ __('Tentukan Tanggal') }}</div>
                            </div>
                            <div class="card bg-gradient-dark">
                                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Calendar
                                    </h3>
                                    <div class="card-tools">

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle"
                                                data-toggle="dropdown" data-offset="-52">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a href="#" class="dropdown-item">Add new event</a>
                                                <a href="#" class="dropdown-item">Clear events</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">View calendar</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-dark btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="calendar" style="width: 100%">
                                        <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                            <ul class="list-unstyled">
                                                <li class="show">
                                                    <div class="datepicker">
                                                        <div class="datepicker-days" style="">
                                                            <table class="table table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span
                                                                                class="fa fa-chevron-left"
                                                                                title="Previous Month"></span></th>
                                                                        <th class="picker-switch" data-action="pickerSwitch"
                                                                            colspan="5" title="Select Month">April 2024
                                                                        </th>
                                                                        <th class="next" data-action="next"><span
                                                                                class="fa fa-chevron-right"
                                                                                title="Next Month"></span></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="dow">Su</th>
                                                                        <th class="dow">Mo</th>
                                                                        <th class="dow">Tu</th>
                                                                        <th class="dow">We</th>
                                                                        <th class="dow">Th</th>
                                                                        <th class="dow">Fr</th>
                                                                        <th class="dow">Sa</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="03/31/2024"
                                                                            class="day old weekend">31</td>
                                                                        <td data-action="selectDay" data-day="04/01/2024"
                                                                            class="day">1</td>
                                                                        <td data-action="selectDay" data-day="04/02/2024"
                                                                            class="day">2</td>
                                                                        <td data-action="selectDay" data-day="04/03/2024"
                                                                            class="day">3</td>
                                                                        <td data-action="selectDay" data-day="04/04/2024"
                                                                            class="day">4</td>
                                                                        <td data-action="selectDay" data-day="04/05/2024"
                                                                            class="day">5</td>
                                                                        <td data-action="selectDay" data-day="04/06/2024"
                                                                            class="day weekend">6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="04/07/2024"
                                                                            class="day weekend">7</td>
                                                                        <td data-action="selectDay" data-day="04/08/2024"
                                                                            class="day">8</td>
                                                                        <td data-action="selectDay" data-day="04/09/2024"
                                                                            class="day">9</td>
                                                                        <td data-action="selectDay" data-day="04/10/2024"
                                                                            class="day">10</td>
                                                                        <td data-action="selectDay" data-day="04/11/2024"
                                                                            class="day">11</td>
                                                                        <td data-action="selectDay" data-day="04/12/2024"
                                                                            class="day">12</td>
                                                                        <td data-action="selectDay" data-day="04/13/2024"
                                                                            class="day weekend">13</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="04/14/2024"
                                                                            class="day weekend">14</td>
                                                                        <td data-action="selectDay" data-day="04/15/2024"
                                                                            class="day">15</td>
                                                                        <td data-action="selectDay" data-day="04/16/2024"
                                                                            class="day">16</td>
                                                                        <td data-action="selectDay" data-day="04/17/2024"
                                                                            class="day">17</td>
                                                                        <td data-action="selectDay" data-day="04/18/2024"
                                                                            class="day">18</td>
                                                                        <td data-action="selectDay" data-day="04/19/2024"
                                                                            class="day">19</td>
                                                                        <td data-action="selectDay" data-day="04/20/2024"
                                                                            class="day weekend">20</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="04/21/2024"
                                                                            class="day weekend">21</td>
                                                                        <td data-action="selectDay" data-day="04/22/2024"
                                                                            class="day">22</td>
                                                                        <td data-action="selectDay" data-day="04/23/2024"
                                                                            class="day">23</td>
                                                                        <td data-action="selectDay" data-day="04/24/2024"
                                                                            class="day">24</td>
                                                                        <td data-action="selectDay" data-day="04/25/2024"
                                                                            class="day">25</td>
                                                                        <td data-action="selectDay" data-day="04/26/2024"
                                                                            class="day active today">26</td>
                                                                        <td data-action="selectDay" data-day="04/27/2024"
                                                                            class="day weekend">27</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="04/28/2024"
                                                                            class="day weekend">28</td>
                                                                        <td data-action="selectDay" data-day="04/29/2024"
                                                                            class="day">29</td>
                                                                        <td data-action="selectDay" data-day="04/30/2024"
                                                                            class="day">30</td>
                                                                        <td data-action="selectDay" data-day="05/01/2024"
                                                                            class="day new">1</td>
                                                                        <td data-action="selectDay" data-day="05/02/2024"
                                                                            class="day new">2</td>
                                                                        <td data-action="selectDay" data-day="05/03/2024"
                                                                            class="day new">3</td>
                                                                        <td data-action="selectDay" data-day="05/04/2024"
                                                                            class="day new weekend">4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="05/05/2024"
                                                                            class="day new weekend">5</td>
                                                                        <td data-action="selectDay" data-day="05/06/2024"
                                                                            class="day new">6</td>
                                                                        <td data-action="selectDay" data-day="05/07/2024"
                                                                            class="day new">7</td>
                                                                        <td data-action="selectDay" data-day="05/08/2024"
                                                                            class="day new">8</td>
                                                                        <td data-action="selectDay" data-day="05/09/2024"
                                                                            class="day new">9</td>
                                                                        <td data-action="selectDay" data-day="05/10/2024"
                                                                            class="day new">10</td>
                                                                        <td data-action="selectDay" data-day="05/11/2024"
                                                                            class="day new weekend">11</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="datepicker-months" style="display: none;">
                                                            <table class="table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span
                                                                                class="fa fa-chevron-left"
                                                                                title="Previous Year"></span></th>
                                                                        <th class="picker-switch"
                                                                            data-action="pickerSwitch" colspan="5"
                                                                            title="Select Year">2024</th>
                                                                        <th class="next" data-action="next"><span
                                                                                class="fa fa-chevron-right"
                                                                                title="Next Year"></span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span data-action="selectMonth"
                                                                                class="month">Jan</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Feb</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Mar</span><span
                                                                                data-action="selectMonth"
                                                                                class="month active">Apr</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">May</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Jun</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Jul</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Aug</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Sep</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Oct</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Nov</span><span
                                                                                data-action="selectMonth"
                                                                                class="month">Dec</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="datepicker-years" style="display: none;">
                                                            <table class="table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span
                                                                                class="fa fa-chevron-left"
                                                                                title="Previous Decade"></span></th>
                                                                        <th class="picker-switch"
                                                                            data-action="pickerSwitch" colspan="5"
                                                                            title="Select Decade">2020-2029</th>
                                                                        <th class="next" data-action="next"><span
                                                                                class="fa fa-chevron-right"
                                                                                title="Next Decade"></span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span data-action="selectYear"
                                                                                class="year old">2019</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2020</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2021</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2022</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2023</span><span
                                                                                data-action="selectYear"
                                                                                class="year active">2024</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2025</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2026</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2027</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2028</span><span
                                                                                data-action="selectYear"
                                                                                class="year">2029</span><span
                                                                                data-action="selectYear"
                                                                                class="year old">2030</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="datepicker-decades" style="display: none;">
                                                            <table class="table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span
                                                                                class="fa fa-chevron-left"
                                                                                title="Previous Century"></span></th>
                                                                        <th class="picker-switch"
                                                                            data-action="pickerSwitch" colspan="5">
                                                                            2000-2090</th>
                                                                        <th class="next" data-action="next"><span
                                                                                class="fa fa-chevron-right"
                                                                                title="Next Century"></span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span
                                                                                data-action="selectDecade"
                                                                                class="decade old"
                                                                                data-selection="2006">1990</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2006">2000</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2016">2010</span><span
                                                                                data-action="selectDecade"
                                                                                class="decade active"
                                                                                data-selection="2026">2020</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2036">2030</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2046">2040</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2056">2050</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2066">2060</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2076">2070</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2086">2080</span><span
                                                                                data-action="selectDecade" class="decade"
                                                                                data-selection="2096">2090</span><span
                                                                                data-action="selectDecade"
                                                                                class="decade old"
                                                                                data-selection="2106">2100</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="picker-switch accordion-toggle"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label class="form-label">{{ __('Nama') }}</label>
                                <input type="text" class="form-control" placeholder="name" name="name"
                                    id="name" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Waktu') }}</label>
                                <input type="text" class="form-control" placeholder="12.00" name="time"
                                    value="123" id="time">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Lokasi') }}</label>
                                <input type="text" class="form-control" placeholder="Jl. Garuda" name="location"
                                    value="{{ auth()->user()->alamat }}" id="location">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('No. HP') }}</label>
                                <input type="text" class="form-control" placeholder="0812345678" name="no_hp"
                                    value="{{ auth()->user()->no_hp }}" id="no_hp">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Available Photograper : ') }}
                                    {{ $available }}</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label class="form-label">{{ __('Jumlah Wisudawan') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_1"
                                    value="123" id="price_1">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Lokasi') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_2"
                                    value="123" id="price_2">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Durasi') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_3"
                                    value="123" id="price_3">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">{{ __('Foto Edit') }}</label>
                                <input type="text" class="form-control" placeholder="10000" name="price_4"
                                    value="123" id="price_4">
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" name="price_5" id="price_5" value="550000">
                                <label class="form-label">{{ __('Video Cinematic') }}</label>
                            </div>
                        </div>
                        <button class="btn btn-dark" type="submit">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
