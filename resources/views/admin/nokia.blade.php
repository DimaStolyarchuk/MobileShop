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
                            @foreach($dataNokias as $dataNokia)
                                <tr>
                                    <th scope="row">{{$dataNokia->id}}</th>
                                    <td>{{$dataNokia->image}}</td>
                                    <td>{{$dataNokia->name}}</td>
                                    <td>{{$dataNokia->action}}</td>
                                    <td>{{$dataNokia->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_nokia', ['id' => $dataNokia->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_nokia', ['id' => $dataNokia->id]) }}">
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







