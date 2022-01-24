@extends('app')

@section('content')
<?php
echo'

<head>
<script>
openNewWindow = function()
    {
     window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley", "_blank");
    };

openNewWindow2 = function()
    {
     window.open("https://www.youtube.com/watch?v=pb2lo5sOc6M&ab_channel=ChucklesTv", "_blank");
    };
</script>

</head>
<p class="lead pl-5"> Click a button! </p>

<script> 
</script>

<div class="btn-group ml=0" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary"> <a style="color:white;" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"> HTML </a> </button>
  <button type="button" onclick="openNewWindow()" class="btn btn-secondary"> JAVASCRIPT </button>
  <button type="button" onclick="openNewWindow2()" class="btn btn-secondary"> HOMELESS? </button>
</div>
';

?>
@endsection('content')