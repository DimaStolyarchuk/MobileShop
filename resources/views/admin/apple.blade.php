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
                            @foreach($dataApples as $dataApple)
                                <tr>
                                    <th scope="row">{{$dataApple->id}}</th>
                                    <td>{{$dataApple->image}}</td>
                                    <td>{{$dataApple->name}}</td>
                                    <td>{{$dataApple->action}}</td>
                                    <td>{{$dataApple->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_apple', ['id' => $dataApple->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_apple', ['id' => $dataApple->id]) }}">
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






