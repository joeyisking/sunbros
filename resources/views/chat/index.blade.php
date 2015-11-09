@extends('app')

@section('content')



    <div class="container">

        <div class="row">
            <div class="col-xs-3 col-md-3"></div>
            <div class="col-xs-6 col-md-6">
                <h3>Sunbros Live Chat</h3>
                <div class="panel panel-default">
                    <div class="panel-body" id="chat_window" style="height:300px; overflow-y:scroll; max-height: 300px;">
                        <?php
                            foreach($chatmessages as $message){

                                echo "<b>" . $message->name . ":</b> " . $message->message . "<br />";
                            }
                        ?>
                    </div>
                </div>
                <form id="chat_message" action="">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <textarea id = "message_field" class="form-control" rows="2" placeholder="Text goes here"></textarea>
                <div style="padding-top: 10px; float: right;">
                    <button id = 'clear_field' type="button" class="btn btn-danger">Clear</button>
                    <button id = 'chat_submit' type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            <div class="col-xs-3 col-md-3"></div>
        </div>
    </div>
@endsection