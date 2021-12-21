<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="css/common.css">
<link href="css/jquery.classycountdown.css" rel="stylesheet" type="text/css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<div class="header">
    <div>
        <div class="left-part">
            <a href="/" style="text-decoration: none;">
                <img src="image/logo.png">
                <label>EtherYield</label>
            </a>
        </div>
        <div class="right-part">
            <button class="styled-button" id="connect-button" onclick="onConnect()">Connect</button>
            <label id="wallet-address">
            0xEF0...0A
            </label>
            <button class="styled-button" id="logout-button" onclick="onDisconnect()">Disconnect</button>
        </div>
    </div>
</div>