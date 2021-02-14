@extends('layouts.start')

@section('content')
<div class="container">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
                <div class="table100-head">
                    <table>
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">Stunde</th>
                                <th class="cell100 column2">Lehrer</th>
                                <th class="cell100 column3">Raum</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>
                            <tr class="row100 body">
                                <td class="cell100 column1">1/2</td>
                                <td class="cell100 column2">Herr Kalkyl</td>
                                <td class="cell100 column3">P04</td>
                            </tr>
                            <tr class="row100 body">
                                <td class="cell100 column1">3/4</td>
                                <td class="cell100 column2">Herr Kalkyl</td>
                                <td class="cell100 column3">P03</td>
                            </tr>
                            <tr class="row100 body">
                                <td class="cell100 column1">5/6</td>
                                <td class="cell100 column2">Herr Kalkyl</td>
                                <td class="cell100 column3">P02</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection