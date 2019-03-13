$(function(){
  $("#register_dialog").dialog({
    autoOpen: false
  });
  $("#register").click(function(){
    $("#register_dialog").dialog("open");
  });
  $("#loguj_dialog").dialog({
    autoOpen: false
  });
  $("#logowanie").click(function(){
    $("#loguj_dialog").dialog("open");
  });

//rumble
  $('#rumble').jrumble({
  	x: 1,
  	y: 0,
  	rotation: 4,
    speed: 20
  });
  $('#rumble').hover(function(){
  	$(this).trigger('startRumble');
  }, function(){
  	$(this).trigger('stopRumble');
  });
});
