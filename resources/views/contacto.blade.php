@extends('layouts.frontend.app')

@section('title','Sobre nosotros')

@section('content')
<div class="container text-center">
    <h3><a href="mailto:ataxias@atar.org.ar">ataxias@atar.org.ar</a></h3>

    <h3>(011) 4585-1290</h3>
    <p>Horario de atención: lunes a viernes de 18 a 22hs</p>

    <h3>Tres Arroyos 1161 - dpto 4 (CP:1416). Ciudad Autónoma de Buenos Aires, Argentina.</h3>
    <div id="googleMap" style="width:100%;height:400px;"></div>


<!-- HAY QUE CONSEGUIR UNA API KEY DE GOOGLE -->
<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</div>
@endsection