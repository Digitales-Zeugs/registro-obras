<div id="asideWrap" class=" px-sm-0 trans-05">
    <aside id="side_bar" class=" d-md-block">
        <nav id="navmain" data-simplebar>
            <ul class="menu">
                <li class="user sub-menu pl-4 pt-2">
                    <div
                        class="d-flex align-items-center justify-content-center justify-content-center justify-content-md-start ">

                        <div class="avatar mr-3 d-flex align-items-center">
                            <span class="circle d-flex align-items-center justify-content-center"> {{ strtoupper($nombre[0]) }} </span>
                        </div>

                        <div id="userWrap" class="d-flex flex-column"
                            style="width: 80%; white-space: normal; word-break: break-word;">
                            <div class="d-flex flex-column">
                                <span class=" d-lg-inline-block text-nav title-nav"> ¡Hola </span>
                                <span class="name-user d-lg-inline-block text-nav title-nav"> {{ ucwords($nombre) }}! </span>
                            </div>
                        </div>
                    </div>
                    <ul class="sub-items">
                        <li><a href="#">Editar Perfil</a></li>
                    </ul>
                </li>

                <li @if (Request::is('member')) class="active" @endif><a href="/member/"> <svg class="nav-icon mr-3" viewBox="0 0 90 90">
                            <use class="icon-svg" xlink:href="#inicio"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Inicio </span></a> </li>

                <li @if (Request::is('member/password/update')) class="active" @endif><a href="/member/password/update"> <svg class="nav-icon mr-3" viewBox="0 0 90 90">
                    <use class="icon-svg" xlink:href="#cuenta"></use>
                </svg> <span class=" text-nav d-md-inline-block"> Cambiar clave </span></a> </li>

                <li @if (Request::is('member/profile/list')) class="active" @endif><a href="/member/profile/list"> <svg class="nav-icon mr-3" viewBox="0 0 90 90">
                    <use class="icon-svg" xlink:href="#cuenta"></use>
                </svg> <span class=" text-nav d-md-inline-block"> Actualizar datos </span></a> </li>

                <li @if (Request::is('member/status')) class="active" @endif><a href="/member/status"> <svg class="nav-icon mr-3" viewBox="0 0 90 90">
                            <use class="icon-svg" xlink:href="#cuenta"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Estado de cuenta </span></a> </li>

                <li @if (Request::is('member/work/list-sadaic')) class="active" @endif><a href="/member/work/list-sadaic"> <svg class="nav-icon mr-3" viewBox="0 0 50 62.5">
                            <use class="icon-svg" xlink:href="#obras"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Mis obras </span></a> </li>

                <li @if (Request::is('member/work/list')) class="active" @endif><a href="/member/work/list"> <svg class="nav-icon mr-3" viewBox="0 0 512 640">
                            <use class="icon-svg" xlink:href="#registro"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Registro de Obras </span></a> </li>

                        <li @if (Request::is('member/jingles')) class="active" @endif><a href="/member/jingles"> <svg class="nav-icon mr-3" viewBox="0 0 512 640">
                            <use class="icon-svg" xlink:href="#registro"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Registro de Solicitud de Inclusión </span></a>
                </li>

                <li @if (Request::is('member/international-performance/report')) class="active" @endif><a href="/member/international-performance/report"> <svg class="nav-icon mr-3" viewBox="0 0 52 65">
                            <use class="icon-svg" xlink:href="#informe"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Informe de actuación en el exterior
                        </span></a> </li>

                <li @if (Request::is('member/payment-letters')) class="active" @endif><a href="/member/payment-letters"> <svg class="nav-icon mr-3" viewBox="0 0 90 90">
                            <use class="icon-svg" xlink:href="#aportes"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Cartas de pago </span></a> </li>

                <li @if (Request::is('member/payment-orders')) class="active" @endif><a href="/member/payment-orders"> <svg class="nav-icon mr-3" viewBox="0 0 90 90">
                            <use class="icon-svg" xlink:href="#aportes"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Ordenes de pago </span></a> </li>

                <li @if (Request::is('member/payment-request')) class="active" @endif><a href="/member/payment-request"> <svg class="nav-icon mr-3" viewBox="0 0 512 512">
                            <use class="icon-svg" xlink:href="#aportes"></use>
                        </svg> <span class=" text-nav d-md-inline-block"> Solicitud de Pago con Acreditación en Cta.
                            Bancaria </span></a> </li>
            </ul>
        </nav>
    </aside>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 317.84 252.05" width="100%" style="display:none;" >

<!--  Inicio -->

 <svg id="inicio" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 496 354.3" style="enable-background:new 0 0 496 354.3;" xml:space="preserve">
<path d="M481.1,147.2L253,9.7c-0.1-0.1-0.3-0.1-0.4-0.2c-0.3-0.2-0.6-0.3-0.9-0.4c-0.3-0.1-0.6-0.2-0.9-0.3
c-0.3-0.1-0.6-0.2-0.9-0.2c-0.3-0.1-0.6-0.1-0.9-0.1c-0.3,0-0.6,0-1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.7,0.1-1,0.1
c-0.3,0.1-0.6,0.1-0.9,0.2c-0.3,0.1-0.6,0.2-0.9,0.3c-0.3,0.1-0.6,0.3-0.9,0.4c-0.1,0.1-0.3,0.1-0.4,0.2L14.9,147.2
c-4.6,2.8-6.1,8.8-3.3,13.4c1.8,3,5,4.7,8.3,4.7c1.7,0,3.4-0.5,5-1.4l63.8-38.4v199.9c0,11.4,9.3,20.7,20.7,20.7h277.2
c11.4,0,20.7-9.3,20.7-20.7V125.4l63.8,38.4c1.6,0.9,3.3,1.4,5,1.4c3.3,0,6.5-1.7,8.3-4.7C487.2,155.9,485.7,149.9,481.1,147.2z
M289.4,326.5h-82.7V186.8h82.7V326.5z M387.8,325.3c0,0.7-0.5,1.2-1.2,1.2h-77.8V186.8c0-10.7-8.7-19.5-19.5-19.5h-82.7
c-10.7,0-19.5,8.7-19.5,19.5v139.6h-77.8c-0.7,0-1.2-0.5-1.2-1.2V113.7L248,29.4l139.8,84.3V325.3z"/>
</svg>

<!-- Aportes -->
<svg id="aportes" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 464 464" style="enable-background:new 0 0 464 464;" xml:space="preserve">

<g>
<path class="st1" d="M209.2,329.9c-4.2,0-7.6-3.4-7.6-7.6c0-46.1,37.4-83.5,83.5-83.5c4.2,0,7.6,3.4,7.6,7.6c0,4.2-3.4,7.6-7.6,7.6
 c-37.7,0-68.3,30.6-68.3,68.3C216.8,326.5,213.4,329.9,209.2,329.9z"/>
<path class="st1" d="M209.2,329.9c-4.2,0-7.6-3.4-7.6-7.6c0-46.1,37.4-83.5,83.5-83.5c4.2,0,7.6,3.4,7.6,7.6c0,4.2-3.4,7.6-7.6,7.6
 c-37.7,0-68.3,30.6-68.3,68.3C216.8,326.5,213.4,329.9,209.2,329.9z"/>
<path class="st1" d="M209.2,329.9c-4.2,0-7.6-3.4-7.6-7.6c0-46.1,37.4-83.5,83.5-83.5c4.2,0,7.6,3.4,7.6,7.6c0,4.2-3.4,7.6-7.6,7.6
 c-37.7,0-68.3,30.6-68.3,68.3C216.8,326.5,213.4,329.9,209.2,329.9z"/>
<path class="st1" d="M232,193.2c-29.3,0-53.2-27.3-53.2-60.7s23.8-60.7,53.2-60.7s53.2,27.3,53.2,60.7S261.3,193.2,232,193.2z
  M232,86.9c-21,0-38,20.4-38,45.6s17,45.6,38,45.6s38-20.4,38-45.6S253,86.9,232,86.9z"/>
<path class="st1" d="M406.6,254h-60.7c-4.2,0-7.6-3.4-7.6-7.6V216c0-4.2,3.4-7.6,7.6-7.6h23.5c3-14.9,14.7-26.6,29.6-29.6V86.2
 c-14.9-3-26.6-14.7-29.6-29.6H94.6c-3,14.9-14.7,26.6-29.6,29.6v92.6c14.9,3,26.6,14.7,29.6,29.6h190.6c4.2,0,7.6,3.4,7.6,7.6v30.4
 c0,4.2-3.4,7.6-7.6,7.6H57.4c-21,0-38-17-38-38V49c0-17.1,11.4-32.1,27.9-36.6c3.3-0.9,6.6-1.4,10-1.4h349.3c21,0,38,17,38,38V216
 c0,17.1-11.4,32.1-27.9,36.6C413.4,253.5,410,254,406.6,254z M353.5,238.8h53.2c2,0,4-0.3,5.9-0.8c9.9-2.7,16.8-11.7,16.9-21.9V49
 c0-12.6-10.2-22.8-22.8-22.8H57.4c-2,0-4,0.3-5.9,0.8C41.5,29.7,34.6,38.7,34.6,49V216c0,12.6,10.2,22.8,22.8,22.8h220.2v-15.2
 H87.7c-4.2,0-7.6-3.4-7.6-7.6c0-12.6-10.2-22.8-22.8-22.8c-4.2,0-7.6-3.4-7.6-7.6V79.3c0-4.2,3.4-7.6,7.6-7.6
 c12.6,0,22.8-10.2,22.8-22.8c0-4.2,3.4-7.6,7.6-7.6h288.5c4.2,0,7.6,3.4,7.6,7.6c0,12.6,10.2,22.8,22.8,22.8c4.2,0,7.6,3.4,7.6,7.6
 v106.3c0,4.2-3.4,7.6-7.6,7.6c-12.6,0-22.8,10.2-22.8,22.8c0,4.2-3.4,7.6-7.6,7.6h-22.8V238.8z"/>
<path class="st1" d="M292.7,383.1H178.8c-33.5,0-60.7-27.2-60.7-60.7v-75.9c0-4.2,3.4-7.6,7.6-7.6h151.9v-53.2
 c0-20.3,15.9-37,36.1-38c10.1-0.4,19.9,3.3,27.2,10.4c8,7.6,12.6,18.2,12.6,29.3v134.9C353.5,355.9,326.3,383.1,292.7,383.1z
  M133.3,254v68.3c0,25.2,20.4,45.6,45.6,45.6h113.9c25.2,0,45.6-20.4,45.6-45.6V187.4c0-6.9-2.7-13.5-7.6-18.3
 c-4.2-4.2-10-6.5-15.9-6.2c-12.3,0.4-22,10.5-22,22.8v60.7c0,4.2-3.4,7.6-7.6,7.6H133.3z"/>
<path class="st1" d="M376.3,223.6h-30.4c-4.2,0-7.6-3.4-7.6-7.6v-28.6c0-6.9-2.7-13.5-7.6-18.3c-4.2-4.2-10-6.5-15.9-6.2
 c-12.3,0.4-22,10.5-22,22.8V216c0,4.2-3.4,7.6-7.6,7.6H87.7c-4.2,0-7.6-3.4-7.6-7.6c0-12.6-10.2-22.8-22.8-22.8
 c-4.2,0-7.6-3.4-7.6-7.6V79.3c0-4.2,3.4-7.6,7.6-7.6c12.6,0,22.8-10.2,22.8-22.8c0-4.2,3.4-7.6,7.6-7.6h288.5
 c4.2,0,7.6,3.4,7.6,7.6c0,12.6,10.2,22.8,22.8,22.8c4.2,0,7.6,3.4,7.6,7.6v106.3c0,4.2-3.4,7.6-7.6,7.6
 c-12.6,0-22.8,10.2-22.8,22.8C383.9,220.2,380.5,223.6,376.3,223.6z M353.5,208.4h15.9c3-14.9,14.7-26.6,29.6-29.6V86.2
 c-14.9-3-26.6-14.7-29.6-29.6H94.6c-3,14.9-14.7,26.6-29.6,29.6v92.6c14.9,3,26.6,14.7,29.6,29.6h183v-22.8c0-20.3,15.9-37,36.1-38
 c10.1-0.4,19.9,3.3,27.2,10.4c8,7.6,12.6,18.2,12.6,29.3V208.4z"/>
<path class="st1" d="M307.9,459H163.7c-16.8,0-30.4-13.6-30.4-30.4v-30.4c0-16.8,13.6-30.4,30.4-30.4h144.3
 c16.8,0,30.4,13.6,30.4,30.4v30.4C338.3,445.4,324.7,459,307.9,459z M163.7,383.1c-8.4,0-15.2,6.8-15.2,15.2v30.4
 c0,8.4,6.8,15.2,15.2,15.2h144.3c8.4,0,15.2-6.8,15.2-15.2v-30.4c0-8.4-6.8-15.2-15.2-15.2H163.7z"/>
</g>
</svg>


<!-- Préstamos -->
<svg id="prestamos" version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

<g>
<path class="st0" d="M406.3,45.1v5.3L278.8,10.1C263.6,5.3,247,7.5,233.6,16l-52.8,33.6c-13.1,8.3-22,21.9-24.3,37.2H38.9
 c-4.6,0-8.4,3.7-8.4,8.4v183.7c0,4.6,3.7,8.4,8.4,8.4h350.8c4.6,0,8.4-3.7,8.4-8.4v-89.2c1.1-0.8,2.2-1.7,3.3-2.7h5.1v16.7
 c0,4.6,3.7,8.4,8.4,8.4h91.9v-16.7H423v-142h83.5V36.7h-91.9C410.1,36.7,406.3,40.5,406.3,45.1z M274.7,228.8
 c3.3,0,6.6-0.4,9.9-1.1c-11,11.8-18,26.8-19.8,42.9h-42.2v-167h6.3c15,0,27.1,12.1,27.1,27.1c0,7.2-2.9,14.1-7.9,19.1l-4.3,4.3
 c-17.1,17.1-17.1,44.8,0,61.9C252,224.2,263.1,228.8,274.7,228.8z M331.2,204.2c-6.2,0.7-12.2,2.1-18,4.3l18-18V204.2z
  M331.2,221.1v49.5h-49.5C285.4,244.9,305.5,224.8,331.2,221.1z M205.9,270.6h-33.4v-167h33.4V270.6z M155.8,270.6h-42.2
 c-4-34.9-31.5-62.4-66.3-66.3v-34.4c34.9-4,62.4-31.5,66.3-66.3h42.2V270.6z M96.7,103.5C93,129.2,72.8,149.3,47.2,153v-49.5H96.7z
  M47.2,221.1c25.6,3.7,45.8,23.9,49.5,49.5H47.2V221.1z M381.3,270.6h-33.4v-72.3c10.9,3.4,22.5,3.4,33.4,0V270.6z M398,170.3
 c-2.2,0-4.3,0.9-5.9,2.4c-15.2,15.2-39.8,15.2-55,0c-3.3-3.3-8.5-3.3-11.8,0l-31.4,31.4c-10.6,10.6-27.7,10.6-38.3,0
 c-10.6-10.6-10.6-27.7,0-38.3c0,0,0,0,0,0l4.3-4.3h0c17.1-17.1,17.1-44.8,0-61.9c-8.2-8.2-19.3-12.8-31-12.8h-55.5
 c2.2-9.6,8.1-17.9,16.3-23.1l52.8-33.6c9.3-5.9,20.7-7.4,31.2-4.1l132.6,41.9v102.5H398z"/>
<path class="st0" d="M55.6,496.1v-8.4h25.1c4.6,0,8.4-3.7,8.4-8.4v-8.8l0.8,0.6c71.2,50.8,168.6,42.8,230.4-19.1l62.8-62.8
 c14.8-14.8,14.8-38.8,0-53.6c-12.9-12.9-33.2-14.8-48.2-4.4c-7.4-16-26.4-22.9-42.3-15.5c-4.2,1.9-7.9,4.8-10.9,8.3
 c-15.4-9.2-35.4-4.2-44.7,11.2c-1.6,2.7-2.9,5.7-3.7,8.8l-8.8,35.1h-48.5l-5.9-5.9c-21.5-21.5-54.7-25.9-81.1-10.9v-8.3
 c0-4.6-3.7-8.4-8.4-8.4H55.6c0-4.6-3.7-8.4-8.4-8.4H5.5v16.7h33.4v133.6H5.5v16.7h41.8C51.8,504.4,55.6,500.7,55.6,496.1z
  M302.1,329.9c8.1-2,16.4,2.9,18.4,11.1c0.3,1,0.4,2.1,0.4,3.1l-58.3,58.3c-1-3-2.4-5.9-4.2-8.5l34.2-57
 C294.9,333.4,298.2,330.9,302.1,329.9z M249.4,348.1c2.1-8.5,10.7-13.7,19.2-11.5c0.4,0.1,0.8,0.2,1.2,0.3c1,0.3,1.9,0.7,2.7,1.2
 l-26.7,44.6c-1.5-0.7-3-1.4-4.6-1.9L249.4,348.1z M122.4,370.2c13.5,0,26.4,5.3,35.9,14.9l8.4,8.4c1.6,1.6,3.7,2.4,5.9,2.4h58.5
 c9.2,0,16.7,7.5,16.7,16.7s-7.5,16.7-16.7,16.7h-75.2v16.7h75.2c12.3,0,23.6-6.8,29.4-17.6l80.9-80.9c8.3-8.3,21.7-8.3,29.9,0
 c8.3,8.3,8.3,21.7,0,29.9l-62.8,62.8c-56.1,56.1-144.4,63.4-208.9,17.3L89,450v-67.2C98.2,374.6,110.1,370.2,122.4,370.2z
  M72.3,362.4V471H55.6V362.4H72.3z"/>
</g>
</svg>


<!-- Prestaciones -->
<svg id="prestaciones" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 604.9"
    style="enable-background:new 0 0 496 604.9;" xml:space="preserve">

    <g>
        <g>
            <path class="st0" d="M212.3,215.2c0,55.1,44.6,99.7,99.7,99.7s99.7-44.6,99.7-99.7S367,115.5,312,115.5
   C256.9,115.6,212.4,160.2,212.3,215.2z M312,132.1c45.9,0,83.1,37.2,83.1,83.1s-37.2,83.1-83.1,83.1s-83.1-37.2-83.1-83.1
   C229,169.3,266.1,132.2,312,132.1z" />
            <path class="st0" d="M120.9,256.7c41.3,0,74.8-33.5,74.8-74.8s-33.5-74.8-74.8-74.8S46.1,140.7,46.1,182l0,0
   C46.2,223.2,79.6,256.7,120.9,256.7z M120.9,123.8c32.1,0,58.2,26,58.2,58.2s-26,58.2-58.2,58.2s-58.2-26-58.2-58.2
   C62.8,149.9,88.8,123.8,120.9,123.8z" />
            <path class="st0" d="M307.8,223.5h8.3c6.9,0,12.5,5.6,12.5,12.5s-5.6,12.5-12.5,12.5h-20.8c-4.6,0-8.3,3.7-8.3,8.3
   c0,4.6,3.7,8.3,8.3,8.3h8.3v8.3c0,4.6,3.7,8.3,8.3,8.3c4.6,0,8.3-3.7,8.3-8.3v-8.6c15.9-2.3,26.9-17.1,24.6-32.9
   c-2.1-14.3-14.3-24.9-28.8-24.9h-8.3c-6.9,0-12.5-5.6-12.5-12.5s5.6-12.5,12.5-12.5h20.8c4.6,0,8.3-3.7,8.3-8.3
   c0-4.6-3.7-8.3-8.3-8.3h-8.3V157c0-4.6-3.7-8.3-8.3-8.3c-4.6,0-8.3,3.7-8.3,8.3v8.6c-15.9,2.3-26.9,17.1-24.6,32.9
   C281.1,212.9,293.4,223.5,307.8,223.5z" />
            <path class="st0" d="M120.9,206.9h-16.6c-4.6,0-8.3,3.7-8.3,8.3c0,4.6,3.7,8.3,8.3,8.3h16.6c13.8,0,24.9-11.2,24.9-24.9
   c0-13.8-11.2-24.9-24.9-24.9c-4.6,0-8.3-3.7-8.3-8.3s3.7-8.3,8.3-8.3h16.6c4.6,0,8.3-3.7,8.3-8.3s-3.7-8.3-8.3-8.3h-16.6
   c-13.8,0-24.9,11.2-24.9,24.9c0,13.8,11.2,24.9,24.9,24.9c4.6,0,8.3,3.7,8.3,8.3S125.5,206.9,120.9,206.9z" />
            <path class="st0" d="M182,72l49.8,41.5c3.1,2.6,7.6,2.6,10.6,0L292.4,72c3.5-2.9,4-8.2,1.1-11.7c-1.6-1.9-3.9-3-6.4-3h-16.6V15.8
   c0-4.6-3.7-8.3-8.3-8.3h-49.8c-4.6,0-8.3,3.7-8.3,8.3v41.5h-16.6c-4.6,0-8.3,3.7-8.3,8.3C179.1,68.1,180.2,70.5,182,72z M212.3,74
   c4.6,0,8.3-3.7,8.3-8.3V24.1h33.2v41.5c0,4.6,3.7,8.3,8.3,8.3h2l-26.9,22.4L210.3,74H212.3z" />
        </g>
        <path class="st0" d="M71.4,584.7v-10.2h30.7c5.6,0,10.2-4.6,10.2-10.2v-10.8l1,0.7c87.1,62.2,206.5,52.4,282.2-23.4l76.9-76.9
 c18.1-18.1,18.1-47.5,0-65.6c-15.8-15.8-40.6-18.1-59.1-5.4c-9.1-19.6-32.3-28.1-51.9-19c-5.1,2.4-9.7,5.8-13.3,10.1
 c-18.9-11.3-43.4-5.2-54.7,13.7c-2,3.4-3.5,7-4.5,10.8l-10.8,43h-59.4l-7.2-7.2c-26.3-26.3-66.9-31.8-99.3-13.3v-10.1
 c0-5.6-4.6-10.2-10.2-10.2H71.4c0-5.6-4.6-10.2-10.2-10.2H10.1v20.5H51v163.6H10.1v20.5h51.1C66.8,594.9,71.4,590.3,71.4,584.7z
  M373.3,381.2c10-2.5,20.1,3.6,22.6,13.5c0.3,1.2,0.5,2.5,0.5,3.8l-71.4,71.4c-1.2-3.7-2.9-7.2-5.1-10.4l41.9-69.8
 C364.4,385.4,368.6,382.4,373.3,381.2z M308.8,403.5c2.6-10.4,13.1-16.7,23.6-14.1c0.5,0.1,1,0.3,1.4,0.4c1.2,0.4,2.3,0.9,3.4,1.5
 l-32.7,54.6c-1.8-0.9-3.7-1.7-5.6-2.3L308.8,403.5z M153.2,430.5c16.5,0,32.3,6.5,43.9,18.2l10.2,10.2c1.9,1.9,4.5,3,7.2,3h71.6
 c11.3,0,20.5,9.2,20.5,20.5s-9.2,20.5-20.5,20.5h-92v20.5h92c15.1,0,28.9-8.3,36-21.6l99-99c10.1-10.1,26.5-10.1,36.7,0
 c10.1,10.1,10.1,26.5,0,36.7L381,516.3c-68.6,68.6-176.8,77.6-255.8,21.2l-12.9-9.2v-82.3C123.6,436,138.2,430.5,153.2,430.5z
  M91.9,421V554H71.4V421H91.9z" />
    </g>
</svg>

<!-- Medios de pago -->
<svg id="medios-pago" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 331.9"
    style="enable-background:new 0 0 496 331.9;" xml:space="preserve">
    <g>
        <g>
            <path d="M105.5,213.4h24.7v29.9h-29.9v-29.9H105.5z M119.9,223.8h-9.1v9h9.1V223.8z" />
            <path d="M230.9,213.4h24.7v29.9h-29.8v-29.9H230.9z M245.2,223.8h-9.1v9h9.1V223.8z" />
            <path d="M165.9,213.4h24.7v29.9h-29.9v-29.9H165.9z M180.3,223.8h-9.1v9h9.1V223.8z" />
            <polygon points="98.9,284.5 229.7,284.5 229.7,294.4 98.9,294.4    " />
            <path d="M56.7,305.7c-14-64.4-29.5-130-42.1-194.5c-2.2-11.2,5.2-22.1,16.3-24.5C155.9,59.9,283,36.2,408.6,11
   c11.4-2.3,22.6,5.2,24.8,16.5L444.4,82h18.1c11.6,0,21.1,9.5,21.1,21.1v198.8c0,11.6-9.5,21.1-21.1,21.1h-385
   C67.2,323,58.5,315.6,56.7,305.7z M66.3,121.1h407.3v-17.9c0-6.1-5-11.2-11.2-11.2h-385c-6.1,0-11.1,5-11.1,11.2V121.1z
    M473.6,158.3H66.3v143.6c0,6.1,5,11.1,11.1,11.1h385c6.1,0,11.2-5,11.2-11.1V158.3z M473.6,131H66.3v17.3h407.3V131z M434.2,82
   l-10.5-52.5c-1.2-6-7.1-9.9-13.1-8.7L104.9,82H434.2z M60.2,91l-27.3,5.5c-5.8,1.2-9.8,7-8.6,12.8l32.1,147.8V103.2
   C56.3,98.6,57.8,94.4,60.2,91z" />
            <path d="M412.5,244.2c13.2,0,24,10.8,24,24c0,13.3-10.8,24-24,24c-4.8,0-9.3-1.4-13-3.8c-9.4,6.1-22,4.8-29.9-3.2
   c-4.4-4.4-7.1-10.4-7.1-17c0-6.6,2.7-12.6,7-16.9c8-8,20.5-9.3,30-3.2C403.2,245.5,407.7,244.2,412.5,244.2z M391.9,280.7
   c-2.2-3.7-3.5-8-3.5-12.5c0-4.5,1.3-8.8,3.5-12.5c-9.2-3.8-19.1,2.6-19.1,12.5c0,9.6,9.7,16.3,18.7,12.7L391.9,280.7z
    M412.5,254.5c-7.6,0-13.7,6.1-13.7,13.6s6.1,13.7,13.7,13.7c7.6,0,13.6-6.1,13.6-13.7S420,254.5,412.5,254.5z" />
        </g>
    </g>
</svg>

<!-- Salir -->
<svg id="icon-salir" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
    y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
    <path class="" d="M17.8,20H2.2C1,20,0,19,0,17.8v-4.4h2.2v4.4h15.6V2.2H2.2v4.4H0V2.2C0,1,1,0,2.2,0h15.6C19,0,20,1,20,2.2v15.6
C20,19,19,20,17.8,20z M7.9,6l1.6-1.6L15,10l-5.6,5.6L7.9,14l2.9-2.9H0V8.9h10.8L7.9,6z" />
</svg>


<!-- Obras -->
<svg id="obras" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
    y="0px" viewBox="0 0 50 62.5" enable-background="new 0 0 50 50" xml:space="preserve">
    <path
        d="M41.976,30.261c0,0.553-0.447,1-1,1l0,0c-0.553,0-1-0.447-1-1V5.595c0-0.552,0.447-1,1-1l0,0c0.553,0,1,0.448,1,1V30.261z" />
    <path
        d="M41.901,5.22c0.208,0.512-0.039,1.095-0.551,1.303l-22.703,9.203c-0.512,0.207-1.095-0.039-1.303-0.552l0,0  c-0.207-0.512,0.04-1.095,0.551-1.302L40.6,4.669C41.111,4.461,41.694,4.708,41.901,5.22L41.901,5.22z" />
    <path
        d="M41.901,9.877c0.208,0.512-0.039,1.095-0.551,1.303l-22.703,9.202c-0.512,0.208-1.095-0.039-1.303-0.551l0,0  c-0.207-0.512,0.04-1.095,0.551-1.303L40.6,9.326C41.111,9.118,41.694,9.365,41.901,9.877L41.901,9.877z" />
    <path
        d="M38.146,35.235c-2.981,1.558-6.105,1.271-7.112-0.655s0.541-4.655,3.522-6.214c2.981-1.558,6.106-1.27,7.112,0.655  C42.676,30.947,41.128,33.677,38.146,35.235z M35.483,30.139c-2.029,1.061-3.087,2.73-2.677,3.515s2.385,0.869,4.413-0.19  c2.029-1.061,3.087-2.73,2.677-3.515C39.487,29.164,37.512,29.079,35.483,30.139z" />
    <path
        d="M15.443,44.402c-2.981,1.558-6.105,1.271-7.112-0.655s0.541-4.655,3.522-6.214c2.981-1.558,6.106-1.271,7.112,0.655  C19.972,40.114,18.424,42.844,15.443,44.402z M12.78,39.306c-2.029,1.061-3.087,2.73-2.677,3.515s2.385,0.869,4.413-0.19  c2.029-1.061,3.087-2.73,2.677-3.515C16.784,38.331,14.808,38.246,12.78,39.306z" />
    <path
        d="M19.271,39.511c0,0.553-0.447,1-1,1l0,0c-0.553,0-1-0.447-1-1V14.845c0-0.552,0.447-1,1-1l0,0c0.553,0,1,0.448,1,1V39.511z" />
    </svg>

<!-- Registro -->
<svg id="registro" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 640" x="0px" y="0px">
    <path
        d="M32,96H96v16a16.02085,16.02085,0,0,0,16,16H272a16.02085,16.02085,0,0,0,16-16V96h64V200h16V96a16.02085,16.02085,0,0,0-16-16H282.07129a15.77035,15.77035,0,0,0-1.19629-1.03125l-20.4375-13.625A8.00771,8.00771,0,0,0,256,64H240V52a16.04729,16.04729,0,0,0-6.40625-12.79688l-26.65625-20A16.11552,16.11552,0,0,0,197.33594,16H186.66406a16.07518,16.07518,0,0,0-9.59375,3.20312L150.41406,39.19531A16.05841,16.05841,0,0,0,144,52V64H128a8.00771,8.00771,0,0,0-4.4375,1.34375l-20.4375,13.625A15.77035,15.77035,0,0,0,101.92871,80H32A16.02085,16.02085,0,0,0,16,96V480a16.02085,16.02085,0,0,0,16,16H312V480H32Zm80-3.71875L130.42188,80H152a7.99539,7.99539,0,0,0,8-8V52l26.66406-20h10.67188L224,52V72a7.99539,7.99539,0,0,0,8,8h21.57812L272,92.28125V112l-160,.01562Z" />
    <circle cx="192" cy="56" r="8" />
    <path
        d="M130.875,297.85156l-19.34424,16.12012A15.79119,15.79119,0,0,0,104,312H72a16.02085,16.02085,0,0,0-16,16v32a16.02085,16.02085,0,0,0,16,16h32a16.02085,16.02085,0,0,0,16-16V328c0-.07812-.022-.15039-.02295-.228L141.125,310.14844ZM104,360H72V328H94.69678L82.875,337.85156l10.25,12.29688L104,341.08594Z" />
    <path
        d="M130.875,385.85156l-19.34424,16.12012A15.79119,15.79119,0,0,0,104,400H72a16.02085,16.02085,0,0,0-16,16v32a16.02085,16.02085,0,0,0,16,16h32a16.02085,16.02085,0,0,0,16-16V416c0-.07812-.022-.15039-.02295-.228L141.125,398.14844ZM104,448H72V416H94.69678L82.875,425.85156l10.25,12.29688L104,429.08594Z" />
    <rect x="168" y="320" width="16" height="16" />
    <rect x="200" y="320" width="104" height="16" />
    <rect x="152" y="352" width="56" height="16" />
    <rect x="224" y="352" width="80" height="16" />
    <rect x="168" y="408" width="16" height="16" />
    <rect x="200" y="408" width="112" height="16" />
    <rect x="152" y="440" width="56" height="16" />
    <rect x="224" y="440" width="88" height="16" />
    <path
        d="M328,200V168a16.02085,16.02085,0,0,0-16-16H72a16.02085,16.02085,0,0,0-16,16v96a16.02085,16.02085,0,0,0,16,16H264V264H152V216H272V200H152V168H312v32ZM136,264H72V216h64ZM72,200V168h64v32Z" />
    <path
        d="M495.5625,309.39844a7.99629,7.99629,0,0,0-4.125-4.625L456,287.89844V273.28906a24.0689,24.0689,0,0,0-12.09375-20.84375l-41.22656-23.55469a23.8759,23.8759,0,0,0-20.82031-1.45312l-28.709,11.48486L323.4375,224.77344a7.90536,7.90536,0,0,0-5.96875-.35938l-24,8a7.99315,7.99315,0,0,0-5.05469,10.11719l8,24a7.994,7.994,0,0,0,4.14844,4.69531l29.96338,14.26758A23.71272,23.71272,0,0,0,328,296v54.10938a16.14018,16.14018,0,0,0,1.6875,7.15624L344,385.89062V496h16V385.89062a16.14018,16.14018,0,0,0-1.6875-7.15624L344,350.10938V296a8,8,0,0,1,16,0v27.3125l26.34375,26.34375,11.3125-11.3125L376,316.6875v-9.53809l64,30.47608v7.95263a39.52769,39.52769,0,0,1-6.65625,21.98438A55.49954,55.49954,0,0,0,424,398.42188V496h16V398.42188a39.52769,39.52769,0,0,1,6.65625-21.98438A55.49954,55.49954,0,0,0,456,345.57812v-.33349l12.5625,5.98193a8.00806,8.00806,0,0,0,10.59375-3.64844l16-32A7.97885,7.97885,0,0,0,495.5625,309.39844ZM387.79688,242.29688a8.01072,8.01072,0,0,1,6.94531.48437l41.22656,23.55469A8.0305,8.0305,0,0,1,440,273.28906v6.99024l-67.18066-31.99073Zm80.55468,91.10937-93.562-44.56006a23.75878,23.75878,0,0,0-31.69141-15.0918l-32.58252-15.5122-4.39843-13.17969,13.35156-4.45312,157.72656,75.10937Z" />
    </svg>

<!-- Informe -->
<svg id="informe" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
    y="0px" viewBox="0 0 52 65" style="enable-background:new 0 0 52 52;" xml:space="preserve">
    <style type="text/css">
        .st0 {
            fill: none;
            stroke: #000000;
            stroke-width: 2;
            stroke-miterlimit: 10;
        }
    </style>
    <g>
        <g>
            <polygon points="40.1,17 31.1,17 31.1,8 33.1,8 33.1,15 40.1,15   " />
        </g>
        <g>
            <rect x="15.1" y="12" width="14" height="2" />
        </g>
        <g>
            <rect x="15.1" y="17" width="14" height="2" />
        </g>
        <g>
            <rect x="15.1" y="22" width="21" height="2" />
        </g>
        <g>
            <rect x="15.1" y="27" width="21" height="2" />
        </g>
        <g>
            <rect x="15.1" y="32" width="21" height="2" />
        </g>
        <g>
            <rect x="21.1" y="37" width="15" height="2" />
        </g>
        <g>
            <polygon
                points="41.2,50 10.1,50 10.1,47.2 12.1,47.2 12.1,48 39.2,48 39.2,16.4 35.9,12.3 33,9 12.1,9 12.1,34.7 10.1,34.7     10.1,7 33.9,7 37.4,11 41.2,15.6   " />
        </g>
        <g>
            <polygon points="46.1,45 40.3,45 40.3,43 44.1,43 44.1,4 17.2,4 17.2,7.9 15.2,7.9 15.2,2 46.1,2   " />
        </g>
        <g>
            <path
                d="M7.6,47.5C7.6,47.5,7.6,47.5,7.6,47.5c-0.6,0-1-0.2-1.3-0.6s-0.5-0.8-0.4-1.3C6,44.7,6.8,44,7.7,44c0.5,0,0.9,0.2,1.2,0.6    c0.3,0.3,0.5,0.8,0.4,1.3l0,0c0,0.5-0.2,0.9-0.6,1.2C8.5,47.3,8.1,47.5,7.6,47.5z M7.4,45.7c0,0.1,0,0.1,0.1,0.2    C7.5,46,7.6,46,7.6,46c0.2,0,0.3-0.1,0.3-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0.1S7.4,45.7,7.4,45.7    L7.4,45.7z" />
        </g>
        <g>
            <polygon points="9.5,46.2 7.5,46.1 7.9,37.8 16,34.8 15.8,45.6 13.8,45.6 14,37.7 9.9,39.2   " />
        </g>
        <g>
            <path
                d="M14,46.8C14,46.8,13.9,46.8,14,46.8L14,46.8c-1.1-0.1-1.8-0.9-1.7-1.8c0.1-1,0.9-1.7,1.8-1.6c1,0.1,1.7,0.9,1.6,1.8    C15.7,46.1,14.9,46.8,14,46.8z M14,45.4c0.1,0,0.3-0.1,0.3-0.2c0-0.1-0.1-0.3-0.2-0.3L14,45.4z M14,44.8c-0.1,0-0.3,0.1-0.3,0.2    c0,0.1,0.1,0.3,0.2,0.3c0,0,0,0,0,0L14,44.8C14,44.8,14,44.8,14,44.8z" />
        </g>
    </g>
</svg>


<!-- Estado cuenta -->
<svg id="cuenta" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
    version="1.1"
    style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;"
    viewBox="0 0 172 215" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd">
    <defs>
        <style type="text/css">

        </style>
    </defs>
    <g>
        <path class="fil0"
            d="M86 32c14,0 25,11 25,25 0,14 -11,25 -25,25 -14,0 -25,-11 -25,-25 0,-14 11,-25 25,-25zm0 10c-8,0 -15,7 -15,15 0,8 7,15 15,15 8,0 15,-7 15,-15 0,-8 -7,-15 -15,-15z" />
        <path class="fil0"
            d="M136 133c0,9 -10,9 -10,1 -1,-22 -19,-38 -40,-38 -22,0 -39,16 -40,38 0,8 -10,7 -10,-1 2,-27 24,-47 50,-47 27,0 49,20 50,47z" />
        <path class="fil0"
            d="M86 0c47,0 86,38 86,86 0,47 -38,86 -86,86 -47,0 -86,-38 -86,-86 0,-47 38,-86 86,-86zm0 10c-42,0 -76,34 -76,75 0,42 34,76 76,76 42,0 75,-34 75,-76 0,-42 -34,-75 -75,-75z" />
    </g>
</svg>

</svg>