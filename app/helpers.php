<?php
  function setActive($path) {

    return (request()->routeIs($path) ? 'active right fas fa-angle-left' : '');
    
  }
?>