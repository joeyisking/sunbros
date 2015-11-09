@extends('app')

@section('content')
<h1>EMAIL</h1>
<p>
    Enter the Text on the right and it will be display how it will show in the email on the left
</p>
<div class="row">
    <div class="col-md-4" id="leftdiv">
        Subject:
        <div class="panel panel-default" style="height:30px;">
            <div id="subject" ></div>
        </div>
        Body:
        <div class="panel panel-default" style="height:250px;">
            <div id="output" ></div>
        </div>
        Attachment:
        <div class="panel panel-default">
            <br />
            <input type="file">
            <br />
        </div>
    </div>

    <div class="col-md-5" id="right div">
        Enter Subject Matter here:<br />
        <input id="subject_text" type="text" style="width:435px;" /><br /><br />
        Input:<br />
        <div>
            <button id="heading_1" class="btn btn-default" type="submit"><b>H1</b></button>
            <button id="heading_2" class="btn btn-default" type="submit"><b>H2</b></button>
            <button id="heading_3" class="btn btn-default" type="submit"><b>H3</b></button>
            <button id="bold" class="btn btn-default glyphicon glyphicon-bold" type="submit"/>
            <button id="italic" class="btn btn-default glyphicon glyphicon-italic" type="submit"/>
            <button id="underline" class="btn btn-default glyphicon glyphicon-magnet" type="submit"/>
            <button id="align_left" class="btn btn-default glyphicon glyphicon-align-left" type="submit"/>
            <button id="align_middle" class="btn btn-default glyphicon glyphicon-align-center" type="submit"/>
            <button id="align_right" class="btn btn-default glyphicon glyphicon-align-right" type="submit"/>
            <button id="align_right" class="btn btn-default glyphicon glyphicon-picture" type="submit"></button>
        </div>

        <textarea id="input" rows="10" cols="50"></textarea>
    </div>

</div>
<div>
    <button id="heading_1" class="btn btn-danger" type="submit"><b>Go Back</b></button>
    <button id="heading_1" class="btn btn-primary" type="submit"><b>Submit</b></button>
</div>
@endsection


