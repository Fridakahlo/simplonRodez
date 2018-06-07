@extends('layouts.app_bo')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="">   <!-- ##### BEGIN FORM ##### -->

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article 1</div>
                    <div class="card-body">
                        <div class="form-group">
                            <input name="title1" id="title1" type="text" placeholder="Enter title" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <textarea name="content1" id="content1"  placeholder="Type some text" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">&nbsp;</div>



            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article 2</div>
                    <div class="card-body">
                        <div class="form-group">
                            <input name="title2" id="title2" type="text" placeholder="Enter title" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <textarea name="content2" id="content2"  placeholder="Type some text" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">&nbsp;</div>



            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article 3</div>
                    <div class="card-body">
                        <div class="form-group">
                            <input name="title3" id="title3" type="text" placeholder="Enter title" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <textarea name="content3" id="content3"  placeholder="Type some text" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">&nbsp;</div>



            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article 4</div>
                    <div class="card-body">
                        <div class="form-group">
                            <input name="title4" id="title4" type="text" placeholder="Enter title" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <textarea name="content4" id="content4"  placeholder="Type some text" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">&nbsp;</div>




            <div class="col-md-8 text-right">
                <input type="submit" value="Submit all articles" />
            </div>





        </form>   <!-- ##### END FORM ##### -->
    </div>
</div>


@endsection

