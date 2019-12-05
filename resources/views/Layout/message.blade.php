@if(session('success'))


    <div class="alert alert-success " >
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>شكرا!</strong>  {{session('success')}}.
    </div>

@endif

@if(session('errors'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>عذرا !</strong>   لم تتم العملية بنجاح .
        @if ($errors->has('room_type'))
            <strong>{{ $errors->first('room_type') }}</strong>
        @endif
        @if ($errors->has('name'))

            <strong>{{ $errors->first('name') }}</strong>

        @endif
        @if ($errors->has('email'))

            <strong>{{ $errors->first('email') }}</strong>

        @endif
        @if ($errors->has('password'))

            <strong>{{ $errors->first('password') }}</strong>

        @endif
        @if ($errors->has('password'))

            <strong>{{ $errors->first('password') }}</strong>

        @endif
        @if ($errors->has('start_date'))
                                        <strong>{{ $errors->first('start_date') }}</strong>

        @endif

        @if ($errors->has('end_date'))

                                        <strong>{{ $errors->first('end_date') }}</strong>

        @endif
        @if ($errors->has('payment_state'))
                                        <strong>{{ $errors->first('payment_state') }}</strong>
        @endif

    </div>

@endif

