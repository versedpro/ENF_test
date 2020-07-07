<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            label {
                padding-top: 7px;
            }
            label:after {
                content: ' ';
                padding: 0 10px 0 2px;
            }
            label.require:after {
                content: '*';
                color: red;
            }
            input {
                border-radius: 0 !important;
                margin-bottom: 20px !important;
            }
            select {
                border-radius: 0;
                width: 100%;
                font-size: 14px;
                height: 34px;
                padding: 6px 12px;
            }
            button[type="submit"] {
                float: right; background-color: rgb(239, 194, 30) !important; border-radius: 0 !important; border: none !important;
            }
            p {
                font-size: 25px;
                font-weight: 900;
            }
        </style>
    </head>
    <body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form class="" action="{{ route('submit') }}" method="post">
                <div class="modal-body">
                
                    @csrf
                    <p>Your Contact Details:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-5 text-right">
                                    <label class="require" for="">Name</label>
                                </div>
                                <div class="col-md-7">
                                    <input name="name" type="text" class="form-control mb-2 mr-sm-2" id="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5 text-right">
                                    <label class="require" for="">Company Name</label>
                                </div>
                                <div class="col-md-7">
                                    <input name="company_name" type="text" class="form-control mb-2 mr-sm-2" id="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5 text-right">
                                    <label class="require" for="">E-mail</label>
                                </div>
                                <div class="col-md-7">
                                    <input name="email" type="email" class="form-control mb-2 mr-sm-2" id="" required>
                                </div>
                            </div>

                            
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-5 text-right">
                                    <label class="require" for="">Phone</label>
                                </div>
                                <div class="col-md-7">
                                    <input name="phone" type="text" class="form-control mb-2 mr-sm-2" id="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5 text-right">
                                    <label class="" for="">Skype</label>
                                </div>
                                <div class="col-md-7">
                                    <input name="skype" type="text" class="form-control mb-2 mr-sm-2" id="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5 text-right">
                                    <label class="require" for="">Region</label>
                                </div>
                                <div class="col-md-7">
                                    <select name="region" id="" class="custom-select mr-sm-2">
                                        <option value="taiwan" selected>Taiwan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check mb-2 mr-sm-2" style="margin-left: 20px;">
                            <input name="newletter" class="form-check-input" type="checkbox" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                            Subscribe to ENF's Price Watch Newletter (Terms and Conditions)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mb-2" style=""><i class="material-icons">mail</i>Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
        <div class="flex-center position-ref full-height">
        
        </div>
        
    </body>
    
</html>
