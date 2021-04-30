<style>
         ul {
         display:block;
         background:#45619D;
         list-style:none;
         margin:0;
         padding:12px 10px;
         height:45px;
         }
         ul li {
         float:left;
         font:13px helvetica;
         margin:3px 0;
         }
         ul li a {
         color:#FFF;
         text-decoration:none;
         padding:6px 15px;
         cursor:pointer;
         }
         ul li a:hover {
         background:#425B90;
         text-decoration:none;
         cursor:pointer;
         }
         .text-info {
         color: #000 !important;
         }
         #post .container #post-row #post-column #post-box {
         margin-top: 120px;
         max-width: 600px;
         height: 360px;
         border: 1px solid #9C9C9C;
         background-color: #fff;
         }
         #post .container #post-row #post-column #post-box #post-form {
         padding: 20px;
         }
         #post .container #post-row #post-column #post-box #post-form #register-link {
         margin-top: -85px;
         }    
         .container h2{
         margin-bottom:25px;
         }
         #notification_box{
         margin-bottom:10px;
         }
         #notifications_container {
         position:relative;
         }
         #notifications_button {
         width:22px;
         height:22px;
         line-height:22px;
         border-radius:50%;
         -moz-border-radius:50%; 
         -webkit-border-radius:50%;
         margin:-3px 10px 0 10px;
         cursor:pointer;
         }
         #notifications_counter {
         display:block;
         position:absolute;
         background:#E1141E;
         color:#FFF;
         font-size:12px;
         font-weight:normal;
         padding:1px 3px;
         margin:-10px 0 0 40px;
         border-radius:2px;
         -moz-border-radius:2px; 
         -webkit-border-radius:2px;
         z-index:1;
         }
         #notifications {
         display:none;
         width:430px;
         position:absolute;
         top:30px;
         left:0;
         background:#FFF;
         border:solid 1px rgba(100, 100, 100, .20);
         -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
         z-index: 0;
         }
         #notifications:before {         
         content: '';
         display:block;
         width:0;
         height:0;
         color:transparent;
         border:10px solid #CCC;
         border-color:transparent transparent #FFF;
         margin-top:-20px;
         margin-left:10px;
         }
         h3 {
         display:block;
         color:#333; 
         background:#FFF;
         font-weight:bold;
         font-size:13px;    
         padding:8px;
         margin:0;
         border-bottom:solid 1px rgba(100, 100, 100, .30);
         }
         #notifications_button .notifications_bell{
         background-image: url(bell.png);
         background-repeat: no-repeat;
         background-size: auto;
         background-position: 0 -712px;
         height: 24px;
         width: 24px;
         }
         #show_notification p{
         margin-left:10px;
		 margin-top:10px;
         }
      </style>