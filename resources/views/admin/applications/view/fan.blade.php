@extends("admin.layout")

@section("title")
    Заявка №{{ $item->id }}
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/applications/">Все статьи</a></li>
                        <li class="active">{{ $item->surname." ".$item->name." ".$item->patronymic }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/applications/" method="get">
                            <div class="input-group">
                                <input type="text" name="term" class="form-control" placeholder="Поиск">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Найти</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                @if(session("status"))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session("status") }}</strong>
                        </div>
                    </div>
                @endif
                <form action="/admin/application/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Заявка пользователя</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label>Тип</label>
                                    <input type="text" class="form-control" value="Болельщик" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Фамилия</label>
                                    <input type="text" class="form-control" value="{{ $item->surname }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input type="text" class="form-control" value="{{ $item->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Отчество</label>
                                    <input type="text" class="form-control" value="{{ $item->patronymic }}" disabled>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label>Email</label>--}}
                                    {{--<input type="text" class="form-control" value="{{ $item->email }}" disabled>--}}
                                {{--</div>--}}

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{ $item->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Email подтвержден: </label>
                                    @if($item->is_verified)
                                        <span class="label label-success">Да</span>
                                    @else
                                        <span class="label label-danger">Нет</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Номер телефона</label>
                                    <input type="text" class="form-control" value="{{ $item->phone }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Место работы/учебы</label>
                                    <input type="text" class="form-control" value="{{ $item->organization }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Статус</label>
                                    <select name="status" class="form-control">
                                        <option value="0" @if($item->status == 0) selected @endif>На рассмотрении</option>
                                        <option value="1" @if($item->status == 1) selected @endif>Одобрено</option>
                                        <option value="2" @if($item->status == 2) selected @endif>Отклонено</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-success" value="Сохранить">
                            </div>
                        </div>
                    </div>
                </form>
                @if(!empty($item->id))
                    {{--<form action="/admin/application/{{ $item->id }}" method="POST">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--{{ method_field("DELETE") }}--}}
                        {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                            {{--<div class="panel panel-default">--}}
                                {{--<div class="panel-heading">Удаление</div>--}}
                                {{--<div class="panel-body">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon" style="width: 100%">При удалении, все данные будут удалены</span>--}}
                                        {{--<span class="input-group-btn">--}}
                                                {{--<button class="btn btn-danger">Удалить</button>--}}
                                            {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                @endif
            </div>
        </div>
    </div>

@endsection

@section("scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $("select").select2();
        });
    </script>
@endsection
