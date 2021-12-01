@extends('layouts.app')

@section('dashboard')
    <div class="tabs">
        <input type="radio" id="tab1" name="tab-control" checked>
        <input type="radio" id="tab2" name="tab-control">
        <input type="radio" id="tab3" name="tab-control">
        <input type="radio" id="tab4" name="tab-control">
        <ul>
            <li title="Features"><label for="tab1" role="button">
                    <br><span>BH Trademarket</span></label></li>
            <li title="Delivery Contents"><label for="tab2" role="button">
                    <br><span>Promolife</span></label></li>
            <li title="Shipping"><label for="tab3" role="button">
                    <br><span>PromoDreams</span></label></li>
            <li title="Returns"><label for="tab4" role="button">
                    <br><span>TradeMarket 57</span></label></li>
        </ul>
        <div class="slider">
            <div class="indicator"></div>
        </div>
        <div class="content">
            <section>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccionar area</option>
                                <option value="1">Ventas</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Administradores</option>
                                <option value="4">Contable</option>
                                <option value="5">Marketing</option>
                                <option value="6">Desarrollo</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="contenedor">
                            <ul class="access_list" style="padding: 0;">
                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section>

                <div class="row">
                    <div class="col-4">
                        <div class="mb-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccionar area</option>
                                <option value="1">Ventas</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Administradores</option>
                                <option value="4">Contable</option>
                                <option value="5">Marketing</option>
                                <option value="6">Desarrollo</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="contenedor">
                            <ul class="access_list" style="padding: 0;">
                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section>

                <div class="row">
                    <div class="col-4">
                        <div class="mb-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccionar area</option>
                                <option value="1">Ventas</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Administradores</option>
                                <option value="4">Contable</option>
                                <option value="5">Marketing</option>
                                <option value="6">Desarrollo</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="contenedor">
                            <ul class="access_list" style="padding: 0;">
                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>


                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section>

                <div class="row">
                    <div class="col-4">
                        <div class="mb-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccionar area</option>
                                <option value="1">Ventas</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Administradores</option>
                                <option value="4">Contable</option>
                                <option value="5">Marketing</option>
                                <option value="6">Desarrollo</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="contenedor">
                            <ul class="access_list" style="padding: 0;">
                                <li class="access_item">
                                    <div class="card" style="width: 200px; height:210px;">
                                        <img src="https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg"
                                            style="width: 100%; height:140px;  object-fit: contain;" class="card-img-top"
                                            alt="imagen">
                                        <div class="card-body" style="padding-top:0; padding-bottom:0">
                                            <p class="card-title" style=" white-space: nowrap; margin-bottom:5px;">
                                                Nombre</p>
                                            <p class="card-text" style=" white-space: nowrap; margin-bottom:5px;">
                                                Puesto</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop

@section('styles')
    <style>
        html {
            width: 100%;
            height: 100%;
        }

        body {
            color: #333;
            font-family: "Raleway";
            height: 100%;
        }

        body h1 {
            text-align: center;
            color: #428bff;
            font-weight: 300;
            padding: 40px 0 20px 0;
            margin: 0;
        }

        .row {
            background-color: #ffffff
        }

        .tabs {
            left: 50%;
            transform: translateX(-50%);
            position: relative;
            background: white;
            padding: 50px;
            padding-bottom: 80px;
            width: 100%;
            height: auto;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            border-radius: 5px;
            min-width: 240px;
        }

        .tabs input[name=tab-control] {
            display: none;
        }

        .tabs .content section h2,
        .tabs ul li label {

            font-weight: bold;
            font-size: 18px;
            color: #428bff;
        }

        .tabs ul {
            list-style-type: none;
            padding-left: 0;
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
        }

        .tabs ul li {
            box-sizing: border-box;
            flex: 1;
            width: 25%;
            padding: 0 10px;
            text-align: center;
        }

        .tabs ul li label {
            transition: all 0.3s ease-in-out;
            color: #929daf;
            padding: 5px auto;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            white-space: nowrap;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .tabs ul li label br {
            display: none;
        }

        .tabs ul li label svg {
            fill: #929daf;
            height: 1.2em;
            vertical-align: bottom;
            margin-right: 0.2em;
            transition: all 0.2s ease-in-out;
        }

        .tabs ul li label:hover,
        .tabs ul li label:focus,
        .tabs ul li label:active {
            outline: 0;
            color: #bec5cf;
        }

        .tabs ul li label:hover svg,
        .tabs ul li label:focus svg,
        .tabs ul li label:active svg {
            fill: #bec5cf;
        }

        .tabs .slider {
            position: relative;
            width: 25%;
            transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
        }

        .tabs .slider .indicator {
            position: relative;
            width: 50px;
            max-width: 100%;
            margin: 0 auto;
            height: 4px;
            background: #1A74BB;
            border-radius: 1px;
        }

        .tabs .content {
            margin-top: 30px;
        }

        .tabs .content section {
            display: none;
            -webkit-animation-name: content;
            animation-name: content;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            line-height: 1.4;
        }

        .tabs .content section h2 {
            color: #1A74BB;
            display: none;
        }

        .tabs .content section h2::after {
            content: "";
            position: relative;
            display: block;
            width: 30px;
            height: 3px;
            background: #1A74BB;
            margin-top: 5px;
            left: 1px;
        }

        .tabs input[name=tab-control]:nth-of-type(1):checked~ul>li:nth-child(1)>label {
            cursor: default;
            color: #1A74BB;
        }

        .tabs input[name=tab-control]:nth-of-type(1):checked~ul>li:nth-child(1)>label svg {
            fill: #1A74BB;
        }

        @media (max-width: 600px) {
            .tabs input[name=tab-control]:nth-of-type(1):checked~ul>li:nth-child(1)>label {
                background: rgba(0, 0, 0, 0.08);
            }
        }

        .tabs input[name=tab-control]:nth-of-type(1):checked~.slider {
            transform: translateX(0%);
        }

        .tabs input[name=tab-control]:nth-of-type(1):checked~.content>section:nth-child(1) {
            display: block;
        }

        .tabs input[name=tab-control]:nth-of-type(2):checked~ul>li:nth-child(2)>label {
            cursor: default;
            color: #1A74BB;
        }

        .tabs input[name=tab-control]:nth-of-type(2):checked~ul>li:nth-child(2)>label svg {
            fill: #1A74BB;
        }

        @media (max-width: 600px) {
            .tabs input[name=tab-control]:nth-of-type(2):checked~ul>li:nth-child(2)>label {
                background: rgba(0, 0, 0, 0.08);
            }
        }

        .tabs input[name=tab-control]:nth-of-type(2):checked~.slider {
            transform: translateX(100%);
        }

        .tabs input[name=tab-control]:nth-of-type(2):checked~.content>section:nth-child(2) {
            display: block;
        }

        .tabs input[name=tab-control]:nth-of-type(3):checked~ul>li:nth-child(3)>label {
            cursor: default;
            color: #1A74BB;
        }

        .tabs input[name=tab-control]:nth-of-type(3):checked~ul>li:nth-child(3)>label svg {
            fill: #435EBE;
        }

        @media (max-width: 600px) {
            .tabs input[name=tab-control]:nth-of-type(3):checked~ul>li:nth-child(3)>label {
                background: rgba(0, 0, 0, 0.08);
            }
        }

        .tabs input[name=tab-control]:nth-of-type(3):checked~.slider {
            transform: translateX(200%);
        }

        .tabs input[name=tab-control]:nth-of-type(3):checked~.content>section:nth-child(3) {
            display: block;
        }

        .tabs input[name=tab-control]:nth-of-type(4):checked~ul>li:nth-child(4)>label {
            cursor: default;
            color: #1A74BB;
        }

        .tabs input[name=tab-control]:nth-of-type(4):checked~ul>li:nth-child(4)>label svg {
            fill: #1A74BB;
        }

        @media (max-width: 600px) {
            .tabs input[name=tab-control]:nth-of-type(4):checked~ul>li:nth-child(4)>label {
                background: rgba(0, 0, 0, 0.08);
            }
        }

        .tabs input[name=tab-control]:nth-of-type(4):checked~.slider {
            transform: translateX(300%);
        }

        .tabs input[name=tab-control]:nth-of-type(4):checked~.content>section:nth-child(4) {
            display: block;
        }

        @-webkit-keyframes content {
            from {
                opacity: 0;
                transform: translateY(5%);
            }

            to {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @keyframes content {
            from {
                opacity: 0;
                transform: translateY(5%);
            }

            to {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @media (max-width: 1000px) {
            .tabs ul li label {
                white-space: initial;
            }

            .tabs ul li label br {
                display: initial;
            }

            .tabs ul li label svg {
                height: 1.5em;
            }
        }

        @media (max-width: 600px) {
            .tabs ul li label {
                padding: 5px;
                border-radius: 5px;
            }

            .tabs ul li label span {
                display: none;
            }

            .tabs .slider {
                display: none;
            }

            .tabs .content {
                margin-top: 20px;
            }

            .tabs .content section h2 {
                display: block;
            }
        }

    </style>


@stop
