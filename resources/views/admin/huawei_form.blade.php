@include('admin.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <div class="container-fluid">
                                <form class="form-horizontal" role="form" action="{{ route('save_huawei') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ isset($dataHuaweis->id) ? $dataHuaweis->id : '' }}">

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="fname" >Зображення</label>
                                            <div class="col-sm-9">
                                                <input name="image" type="file" class="form-control" id="fname"
                                                       placeholder="Зображення">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1">Назва</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control" id="email1"
                                                       placeholder="Назва">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1">Активність</label>
                                            <div class="col-sm-9">
                                                <select name="action">
                                                    <option value="0" @if( isset($dataHuaweis->action) && $dataHuaweis->action == 0) selected @endif>No</option>
                                                    <option value="1" @if( isset($dataHuaweis->action) && $dataHuaweis->action == 1) selected @endif>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1">Преорітет</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="priority" value="{{ $dataHuaweis->priority ?? '' }}" class="form-control" id="cono1"
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
                                <a href="{{ route('admin_huawei') }}" >НАЗАД</a>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








