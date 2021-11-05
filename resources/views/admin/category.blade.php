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
                            @foreach($dataCategorys as $dataCategory)
                                <tr>
                                    <th scope="row">{{$dataCategory->id}}</th>
                                    <td>{{$dataCategory->image}}</td>
                                    <td>{{$dataCategory->name}}</td>
                                    <td>{{$dataCategory->action}}</td>
                                    <td>{{$dataCategory->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_category', ['id' => $dataCategory->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_category', ['id' => $dataCategory->id]) }}">
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





