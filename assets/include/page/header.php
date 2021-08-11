<?php

include('../sessions.php');

?>
<div class="navbar navbar-inverse center" role="navigation">
    <div class="container center">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand visible-xs">Selecciona un Entorno</div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              
              <li <?php if($environment == "room"){ echo 'class="active"'; } ?>>
                  <a href="#" class="dropdown=toggle" onclick="Change_environment('room')">
                  Habitación &nbsp;&nbsp;<i class="fa fa-bed" aria-hidden="true"></i>
                  </a>
              </li>
                
              <li <?php if($environment == "kitchen"){ echo 'class="active"'; } ?>>
                  <a href="#" class="dropdown-toggle" onclick="Change_environment('kitchen')">
                    Cocina &nbsp;&nbsp;<i class="fa fa-cutlery" aria-hidden="true"></i>
                  </a>
              </li>
              
              <li <?php if($environment == "personal"){ echo 'class="active"'; } ?>>
                  <a href="#" class="dropdown-toggle" onclick="Change_environment('personal')">
                    Personal&nbsp;&nbsp;<i class="fa fa-child" aria-hidden="true"></i>
                  </a>
              </li>
              <?php 
              /* CHILE  en esta parte se cambia la parte de los entornos que serán mostrados dependiendo cada pais*/
              if($country_abi !=10 )
              {
                ?>
              <li <?php if($environment == "office"){ echo 'class="active"'; } ?>>
                  <a href="#" class="dropdown-toggle" onclick="Change_environment('office')">
                    Oficina &nbsp;&nbsp;<i class="fa fa-briefcase" aria-hidden="true"></i>
                  </a>
              </li>
              <li <?php if($environment == "living-room"){ echo 'class="active"'; } ?>>
                  <a href="#" class="dropdown-toggle" onclick="Change_environment('living-room')">
                    Sala &nbsp;&nbsp;<i class="fa fa-television" aria-hidden="true"></i>
                  </a>
              </li>

              <li <?php if($environment == "escolar"){ echo 'class="active"'; } ?>>
                  <a href="#" class="dropdown-toggle" onclick="Change_environment('escolar')">
                    Escolar &nbsp;&nbsp;<i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  </a>
              </li>
              
                <?php
              }

              ?>
              <?php 
              /* CHILE  en esta parte se cambia la parte de los entornos que serán mostrados dependiendo cada pais*/
              if($country_abi == 1 || $country_abi == 2 || $country_abi == 3 || $country_abi == 4 || $country_abi == 5)
              {
                ?>
                <li <?php if($environment == "nutrition"){ echo 'class="active"'; } ?>>
                  <a href="#" class="dropdown-toggle" onclick="Change_environment('nutrition')">
                    Nutrición &nbsp;&nbsp;<i class="fa fa-heart" aria-hidden="true"></i>
                  </a>
                </li>
                <?php
              }

              ?>
              
            </ul>
        </div>
    </div>
</div>