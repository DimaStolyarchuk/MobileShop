@include('admin.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <div class="container-fluid">
                                <form class="form-horizontal" role="form" action="{{ route('save_samsung') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$dataSamsungs->id}}">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="fname" >Зображення</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image" class="form-control" id="fname" value="{{$dataSamsungs->image ?? ''}}">
                                                <input type="hidden" name="image_2" value="{{$dataSamsungs->image}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1">Назва</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control" id="email1" value="{{$dataSamsungs->name ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1">Активність</label>
                                            <div class="col-sm-9">
                                                <select name="action">
                                                    <option value="0" @if( isset($dataSamsungs->action) && $dataSamsungs->action == 0) selected @endif>No</option>
                                                    <option value="1" @if( isset($dataSamsungs->action) && $dataSamsungs->action == 1) selected @endif>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1">Преорітет</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="priority" value="{{ $dataSamsungs->priority ?? '' }}" class="form-control" id="cono1"
                                                       placeholder="Для кого?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary">Відправити</button>
                                        </div>
                                    </div>
                                </form>
                                <a href="{{ route('admin_samsung') }}" >НАЗАД</a>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








