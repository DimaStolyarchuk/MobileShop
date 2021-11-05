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
                            @foreach($dataAsuse as $dataAsus)
                                <tr>
                                    <th scope="row">{{$dataAsus->id}}</th>
                                    <td>{{$dataAsus->image}}</td>
                                    <td>{{$dataAsus->name}}</td>
                                    <td>{{$dataAsus->action}}</td>
                                    <td>{{$dataAsus->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_asus', ['id' => $dataAsus->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_asus', ['id' => $dataAsus->id]) }}">
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






