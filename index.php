
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/lunaradio-sincors.js"></script>

<div id="lunaradio" style="width:100%; height:100%;background: #000000 url(js/fondo.png) bottom / cover no-repeat;">loading...</div>			

<script>
$("#lunaradio").lunaradio({
userinterface: "big", 
backgroundcolor: "",
fontcolor: "#ffffff",
hightlightcolor: "#00aae4", 
fontname: "Unica One", 
googlefont: "Unica+One&display=swap", 
fontratio: "0.4", 
radioname: "RadioAm610", 
scroll: "true", 
coverimage: "js/logo.png",
onlycoverimage: "false",
coverstyle: "animated",
usevisualizer: "real", 
visualizertype: "4", 
metadatatechnic: "",
ownmetadataurl: "", 
streamurl: "https://server.ohradio.com.ar/8014/stream", 
streamtype: "shoutcast2", 
icecastmountpoint: "",
shoutcastpath: "/stream",
shoutcastid: "1", 
streamsuffix: "", 
radionomyid: "", 
radionomyapikey: "",
radiojarid: "",  
radiocoid: "",
itunestoken: "1000lIPN", 
metadatainterval: "5000", 
volume: "100",
debug: "false",
autoplay: "true"
});
</script>