<h2>Вы: <?= $_SESSION['chatAuth']['nick'] ?> <small><a href="/asd/logout">Выйти</a></small></h2>
<div id="allUsersMap" style="height: 400px"></div>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<script>
  <? if (!$_SESSION['chatAuth']) { ?>
  new Ngn.Dialog.RequestForm({
    width: 200,
    url: '/asd/json_login',
    onSubmitSuccess: function() {
      window.location.reload();
    }
  });
  <? } else { ?>
  new Ngn.YaMapChat($('allUsersMap'));
  <? } ?>
//  (function() {
//    var init = function() {
//      var addTitle = function(coords, userId, login) {
//        ymaps.geocode(coords).then(function(res) {
//          var names = [];
//          res.geoObjects.each(function(obj) {
//            names.push(obj.properties.get('name'));
//          });
//          names = names.reverse();
//          names = names.slice(5, names.length);
//          var user = '<li><a href="' + '//www.s52.d/user.php?user_id=' + userId + '" target="_blank">' + login + '</a></li>';
//          $('#allUsersMapStatus').append(user + ' ' + names.join(', ') + '<br>');
//        });
//      };
//
//      var center = [56.2865295174786, 43.9868629932313];
//      console.debug(center);
//      var allUsersMap = new ymaps.Map('allUsersMap', {
//        //center: [56.314552, 43.958721], zoom: 11, behaviors: ["default", "scrollZoom"]
//        center: center,
//        zoom: 11,
//        behaviors: ["default", "scrollZoom"]
//      });
//      addMarkerA(center);
//      allUsersMap.controls.remove('trafficControl');
//      allUsersMap.controls.remove('searchControl');
//      allUsersMap.controls.remove('typeSelector');
//      ymaps.geolocation.get({
//        provider: 'auto',
//        mapStateAutoApply: true
//      }).then(function(result) {
//        if (result.geoObjects.position[0] == 56.326887 && result.geoObjects.position[1] == 44.005986) {
//          return;
//        }
//        //c(result.geoObjects.position);
//        //setMarkerAndSave(result.geoObjects.position);
//        //allUsersMap.setCenter(result.geoObjects.position, 17);
//      });
//
//      //allUsersMap.controls.remove('geolocationControl');
////      $.ajax({
////        dataType: 'json',
////        url: 'http://www.nn.ru/common/user/getLocations.php?latitude='+center[0]+'&longtitude='+center[1]
////      }).done(function(result) {
////        console.debug(result.length);
////        for (var i = 0; i < result.length; i++) {
////          //console.debug(result[i]);
////          addMarker([result[i].x, result[i].y], result[i].login);
////          addTitle([result[i].x, result[i].y], result[i].us_id, result[i].login);
////        }
////      });
//    };
//    ymaps.ready(init);
//  })();
</script>
