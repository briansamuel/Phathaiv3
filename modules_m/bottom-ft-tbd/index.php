<style>
#footer {
    /* background-color: #ee4037; */
    /* width: 100%; */
    position: fixed;
    bottom: -3px;
    color: white;
    left: 0px;
    right: 0px;
    z-index: 20;
    width: 100%;
}
#footer table {
    margin: auto;
    width: 100% !important;
    max-width: 650px;
    white-space: nowrap;
}
#footer table td {
    border: none;
}
.link_title, .link_title:hover, .link_title:visited {
    color: white !important;
}
.blink_me {
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-name: blinker;
    -moz-animation-duration: 1s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    animation-name: blinker;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}
#footer a {width: 100%}
#footer img {
    width: 100%;
}
@-moz-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

.in-phone {

        -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    @-moz-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-webkit-keyframes coccoc-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-o-keyframes coccoc-alo-circle-img-anim {
        0% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
    }
    
    .center-border:before {
        content: "";
        position: absolute;
        top:0;
        right: 0;
        width: 2px;
        height: 40px;
        background: white;
    }
    .center-border:after {
        content: "";
        position: absolute;
        top:0;
        left: 0;
        width: 2px;
        height: 40px;
        background: white;
    }
    #LRMINIBar {bottom: 70px !important;}
</style>
<div id="footer">
      <table cellpadding="0" cellspacing="0" >
        <tbody><tr>
          
          <td  ><a target="_blank"  href="tel:<?=$tel_number;?>"><img  src="modules_m/bottom-ft-tbd/img/dien-thoaigif.gif"></a></td>
          <td ><a class="link_title" target="_blank" href="<?=$link_chat;?>"><img src="modules_m/bottom-ft-tbd/img/line-chatgif.gif"></a></td>
          
        </tr>
      </tbody></table>
    </div>
    