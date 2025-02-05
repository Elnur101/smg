@extends('layouts.site')
@section('content')

    <!-- CONTACT DETAIL BLOCK -->
    <div class="section-full p-t80">
        <div class="container">
            <div class="section-head">
                <h4 class="text-uppercase">Выбраны следующие данные </h4>
                <div class="wt-separator-outer m-b30">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
            </div>
            <div class="section-content m-b30">
                <div class="row">

                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-white block-shadow radius-md">
                            <div class="icon-sm m-b10"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                            <div class="icon-content">
                                <h5>Услуга</h5>
                                <p>{{$service->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-white block-shadow radius-md">
                            <div class="icon-sm m-b10"><i class="fa fa-car" aria-hidden="true"></i></div>
                            <div class="icon-content">
                                <h5>Транспорт</h5>
                                <p>{{$category->name}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENTG START -->
    <div class="section-full">
        <div class="container">
            <div class="section-head">
                <h4 class="text-uppercase">Оставьте заявку </h4>
                <div class="wt-separator-outer m-b30">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
            </div>
            <!-- GOOGLE MAP & CONTACT FORM -->
            <div class="section-content m-b50">
                <!-- CONTACT FORM-->
                <div class="wt-box">
                    <div class="p-a30 bg-gray">
                        <form class="cons-contact-form" method="post" action="{{route('shop.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input name="name" type="text"  class="form-control" placeholder="Имя">
                                        </div>
                                        @error('name')
                                        <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                            <input name="phone" type="text" class="form-control" placeholder="Номер телефона">
                                        </div>
                                        @error('phone')
                                        <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email" type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                            <textarea name="description" rows="5" class="form-control "  placeholder="Сообщение"></textarea>
                                        </div>
                                    </div>
                                </div>
{{--                                <input type="hidden" name="category" value="{{$category->name}}">--}}
{{--                                <input type="hidden" name="service" value="{{$service->name}}">--}}

                                <div class="col-md-12">
                                    <button type="submit"  class="site-button-secondry  m-r15">Отправить </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

    <!-- SECTION CONTENTG START -->
    <div class="section-full">
        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="section-content">
            <!-- LOCATION BLOCK-->
            <div class="wt-box">
                <div class="gmap-outline">
                    <div  class="google-map-gray google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.6917309887396!2d76.94412331531728!3d43.25539227913532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e9531af49af%3A0x0!2z0J3QtdCy0L7RgNC40YbQsCDQv9GA0LXQtNGA0YHQutC40LkgNDc!5e0!3m2!1sru!2skz!4v1700000000000!5m2!1sru!2skz"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->
@endsection
