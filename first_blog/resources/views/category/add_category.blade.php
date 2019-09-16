@extends('admin.admin')

@section('body')
    <html>
    <head>




        <script src="{{asset('/')}}myhome/ckeditor/ckeditor.js"></script>
        <script src="{{asset('/')}}myhome/ckeditor/samples/js/sample.js"></script>
        <link rel="stylesheet" href="{{asset('/')}}myhome/ckeditor/samples/css/samples.css">
        <link rel="stylesheet" href="{{asset('/')}}myhome/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    </head>
    <body>


    <div class="row">
        <div  class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>

                    <form method="POST" action="{{route('new_category')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" name="category_name" class="form-control"/>
                                <span class="text-denger"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Category Description</label>
                            <div class="col-md-9">
                                <input type="text" name="category_description" class="form-control"/>
                                <span class="text-denger"></span>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3">long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor" name="long_description"></textarea>
                                <span class="text-denger"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9">
                                <input type="submit" name="btn" value="Save Category Info">

                            </div>
                        </div>



                    </form>


                </div>
            </div>
        </div>
    </div>
    <script>
        initSample();
    </script>
    </body>
    </html>

@endsection