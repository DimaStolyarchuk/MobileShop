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
                            <th scope="col">Ціна</th>
                            <th scope="col">Опис</th>
                            <th scope="col">Бренд_Id</th>
                            <th scope="col">Категорія_Id</th>
                            <th scope="col">Слуг</th>
                            <th scope="col">Активність</th>
                            <th scope="col">Преорітет</th>
                            <th scope="col">Редагування/Видалення</th>
                            </thead>
                            @foreach($dataProducts as $dataProduct)
                                <tr>
                                    <th scope="row">{{$dataProduct->id}}</th>
                                    <td>{{$dataProduct->image}}</td>
                                    <td>{{$dataProduct->name}}</td>
                                    <td>{{$dataProduct->price}}</td>
                                    <td>{{$dataProduct->description}}</td>
                                    <td>{{$dataProduct->brand->name}}</td>
                                    <td>{{$dataProduct->category->name}}</td>
                                    <td>{{$dataProduct->slug}}</td>
                                    <td>{{$dataProduct->action}}</td>
                                    <td>{{$dataProduct->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_product', ['id' => $dataProduct->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_product', ['id' => $dataProduct->id]) }}">
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







