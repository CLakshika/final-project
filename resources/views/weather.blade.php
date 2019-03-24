<h5 style="color: dodgerblue ">Current Weather in {{ $city }} : {{ $weather }}&#8451</h5>


<img src="{{url('images/weather3.gif')}}">

<hr>

<div id="openweathermap-widget-15"></div>
<script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 15,cityid: '1251081',appid: '7c7e0e60a9a5f227b713c6c9d6dfe568',units: 'metric',containerid: 'openweathermap-widget-15',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>