<script>
    @if($errors->any())
    @php $message = ''; @endphp
    @foreach ($errors->all() as $key => $error)
    @php $message .= $error.(count($errors->all())>$key+1?' And ':'.'); @endphp
    @endforeach
    saError('{{$message}}')
    @elseif(Session::has('success'))
    @php $message = ''; $item = ''; $time = 1500; @endphp
    @if (Session::has('exists'))
    @foreach (Session::get('exists') as $exist)
    @php $item .= $exist.','; @endphp
    @endforeach
    @php $message = ' But ' . $item . ' Already exist'; $time = 4000 @endphp
    @php session()->forget('exists') @endphp
    @endif
    saSuccess('{{Session::get('success') . $message}}', {{$time}})
    @php session()->forget('success') @endphp
    @elseif(Session::has('error'))
    @if(Config::get('app_settings.appEnv') === 'local')
    saError('{{Session::get('error')}}')
    @else
    saError('Something wrong !')
    @endif
    @php session()->forget('error') @endphp
    @endif
</script>
