@include('admin.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">Зображення</th>
                            <th scope="col">Назва</th>
                            <th scope="col">Активність</th>
                            <th scope="col">Преорітет</th>
                            <th scope="col">Редагування/Видалення</th>
                            </thead>
                            @foreach($dataSamsungs as $dataSamsung)
                                <tr>
                                    <th scope="row">{{$dataSamsung->id}}</th>
                                    <td>{{$dataSamsung->image}}</td>
                                    <td>{{$dataSamsung->name}}</td>
                                    <td>{{$dataSamsung->action}}</td>
                                    <td>{{$dataSamsung->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_samsung', ['id' => $dataSamsung->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_samsung', ['id' => $dataSamsung->id]) }}">
                                            delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







