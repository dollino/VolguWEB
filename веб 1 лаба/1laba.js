/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  
})()

let check=false

$(".galochka").click(function(){
  if (!check){
  $(".sidebar").css("left","-240px")
check=true}
  else{
    $(".sidebar").css("left","0")
    check=false
  }
})
