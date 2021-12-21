<div class="footer">
    <div class="d-flex">
        <a href="">
            <img src="image/haze.png">
        </a>
        <a href="">
            <img src="image/certik.svg" height="48">
        </a>
        <a href="">
            <img src="image/dapp.png" height="45">
        </a>
        <a href="">
            <img src="image/dappradar.svg">
        </a>
        <a href="">
            <img src="image/twitter.png" height=40>
        </a>
        <a href="">
            <img src="image/telegram.png" height=40>
        </a>
    </div>
</div>
<script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
<script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js">
</script>
<script>
$(window).scroll(function() {
    fadeInObject();
}).scroll(); //invoke scroll-handler on page-load
function fadeInObject() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade-object").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top /* + $(this).outerHeight() / 2*/ ;

        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
            if ($(this).css("opacity") == 0) {
                $(this).animate({
                    left: '0px',
                    opacity: 1
                }, 500);
            }
        } else { //object goes out of view (scrolling up)
            // if ($(this).css("opacity") == 1) { $(this).animate({ left: '-100%', opacity: 0 }, 500); }
        }
    });
}
$(function() {
    fadeInObject();
    init();
});
const scanUrl = "https://ropsten.etherscan.io/";
const address = '0x3515169e1ccb154139e5a7475e180ce0614a4531';
const httpWeb3 = new Web3("https://ropsten.infura.io/v3/9aa3d95b3bc440fa88ea12eaa4456161");
const abi = [{
    "constant": true,
    "inputs": [],
    "name": "PERCENTS_DIVIDER",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserDownlineCount",
    "outputs": [{
        "name": "referrals",
        "type": "uint256[3]"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserDividends",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "startDate",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserAvailable",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "TIME_STEP",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserReferrer",
    "outputs": [{
        "name": "",
        "type": "address"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": false,
    "inputs": [],
    "name": "withdraw",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "DEV_FEE",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserReferralTotalBonus",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "PROJECT_FEE",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "TOTAL_REF",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "getSiteInfo",
    "outputs": [{
        "name": "_totalInvested",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "totalInvested",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": false,
    "inputs": [{
        "name": "referrer",
        "type": "address"
    }, {
        "name": "plan",
        "type": "uint8"
    }],
    "name": "invest",
    "outputs": [],
    "payable": true,
    "stateMutability": "payable",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "",
        "type": "uint256"
    }],
    "name": "REFERRAL_PERCENTS",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserInfo",
    "outputs": [{
        "name": "totalDeposit",
        "type": "uint256"
    }, {
        "name": "totalWithdrawn",
        "type": "uint256"
    }, {
        "name": "totalReferrals",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "ceo1Wallet",
    "outputs": [{
        "name": "",
        "type": "address"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserReferralWithdrawn",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "ceo2Wallet",
    "outputs": [{
        "name": "",
        "type": "address"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "getContractBalance",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserTotalDeposits",
    "outputs": [{
        "name": "amount",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "devWallet",
    "outputs": [{
        "name": "",
        "type": "address"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserAmountOfDeposits",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "plan",
        "type": "uint8"
    }],
    "name": "getPlanInfo",
    "outputs": [{
        "name": "time",
        "type": "uint256"
    }, {
        "name": "percent",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }, {
        "name": "index",
        "type": "uint256"
    }],
    "name": "getUserDepositInfo",
    "outputs": [{
        "name": "plan",
        "type": "uint8"
    }, {
        "name": "percent",
        "type": "uint256"
    }, {
        "name": "amount",
        "type": "uint256"
    }, {
        "name": "start",
        "type": "uint256"
    }, {
        "name": "finish",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserCheckpoint",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [],
    "name": "INVEST_MIN_AMOUNT",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserReferralBonus",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserTotalWithdrawn",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "constant": true,
    "inputs": [{
        "name": "userAddress",
        "type": "address"
    }],
    "name": "getUserTotalReferrals",
    "outputs": [{
        "name": "",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [{
        "name": "ceo1Addr",
        "type": "address"
    }, {
        "name": "ceo2Addr",
        "type": "address"
    }, {
        "name": "devAddr",
        "type": "address"
    }, {
        "name": "start",
        "type": "uint256"
    }],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "constructor"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": false,
        "name": "user",
        "type": "address"
    }],
    "name": "Newbie",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": true,
        "name": "user",
        "type": "address"
    }, {
        "indexed": false,
        "name": "plan",
        "type": "uint8"
    }, {
        "indexed": false,
        "name": "amount",
        "type": "uint256"
    }, {
        "indexed": false,
        "name": "time",
        "type": "uint256"
    }],
    "name": "NewDeposit",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": true,
        "name": "user",
        "type": "address"
    }, {
        "indexed": false,
        "name": "amount",
        "type": "uint256"
    }],
    "name": "Withdrawn",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": true,
        "name": "referrer",
        "type": "address"
    }, {
        "indexed": true,
        "name": "referral",
        "type": "address"
    }, {
        "indexed": true,
        "name": "level",
        "type": "uint256"
    }, {
        "indexed": false,
        "name": "amount",
        "type": "uint256"
    }],
    "name": "RefBonus",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": true,
        "name": "user",
        "type": "address"
    }, {
        "indexed": false,
        "name": "totalAmount",
        "type": "uint256"
    }],
    "name": "FeePayed",
    "type": "event"
}]
const planStr = [100, 60, 40, 15];
// Unpkg imports
const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
const Fortmatic = window.Fortmatic;
const evmChains = window.evmChains;

// Web3modal instance
let web3Modal

// Chosen wallet provider given by the dialog window
let provider;

let contractForWrite;


// Address of the selected account
let selectedAccount;

// Referral link
let referralLink;


/**
 * Setup the orchestra
 */
function init() {
    console.log("WalletConnectProvider is", WalletConnectProvider);
    console.log("window.web3 is", window.web3, "window.ethereum is", window.ethereum);

    // Tell Web3modal what providers we have available.
    // Built-in web browser provider (only one can exist as a time)
    // like MetaMask, Brave or Opera is added automatically by Web3modal
    const providerOptions = {
        walletconnect: {
            package: WalletConnectProvider,
            options: {
                // Mikko's test key - don't copy as your mileage may vary
                infuraId: "8043bb2cf99347b1bfadfb233c5325c0",
            }
        }
    };

    web3Modal = new Web3Modal({
        cacheProvider: true, // optional
        providerOptions, // required
        disableInjectedProvider: false, // optional. For MetaMask / Brave / Opera.
    });

    console.log("Web3Modal instance is", web3Modal);
    onConnect();
}


/**
 * Kick in the UI action after Web3modal dialog has chosen a provider
 */
async function fetchAccountData() {

    // Get a Web3 instance for the wallet
    const web3 = new Web3(provider);

    console.log("Web3 instance is", web3);

    // Get connected chain id from Ethereum node
    const chainId = await web3.eth.getChainId();
    // Load chain information over an HTTP API
    const chainData = evmChains.getChain(chainId);

    // Get list of accounts of the connected wallet
    const accounts = await web3.eth.getAccounts();
    $(".harvest button").prop("disabled", true);
    if (accounts.length == 0) {
        onDisconnect();
        selectedAccount = null;
        return;
    }
    contractForWrite = new web3.eth.Contract(abi, address);

    // MetaMask does not give you all accounts, only the selected account
    console.log("Got accounts", accounts);
    selectedAccount = accounts[0];

    $(".your-link .link span").html(document.location.origin.concat("/?r=".concat(selectedAccount.substr(0, 6))));
    referralLink = document.location.origin.concat("/?r=".concat(selectedAccount));

    $("#wallet-address").html(selectedAccount.substr(0, 4).concat("...").concat(selectedAccount.substr(-4)));
    $("#wallet-address").show();
    $("#connect-button").hide();
    $("#logout-button").show();

    const balance = await web3.eth.getBalance(selectedAccount);
    // ethBalance is a BigNumber instance
    // https://github.com/indutny/bn.js/
    const ethBalance = web3.utils.fromWei(balance, "ether");
    //const humanFriendlyBalance = parseFloat(ethBalance).toLocaleString(undefined, { maximumFractionDigits: 8 });
    const humanFriendlyBalance = parseFloat(ethBalance).toPrecision(9);
    $(".history .amount span").html(humanFriendlyBalance);

    let price = await $.get({
        url: "https://api.binance.com/api/v3/ticker/price?symbol=ETHBUSD"
    });
    price = parseFloat(price.price);
    $(".history .amount-usd span").html((parseFloat(ethBalance) * price).toPrecision(9));

    let userInfo = await contractForRead.methods.getUserInfo(selectedAccount).call();
    $(".user-total-deposit").html(web3.utils.fromWei(userInfo.totalDeposit, "ether").substr(0, 10));
    $(".user-total-withdraw").html(web3.utils.fromWei(userInfo.totalWithdrawn, "ether").substr(0, 10));

    const invitedUser = await contractForRead.methods.getUserTotalReferrals(selectedAccount).call();
    $(".invited-users .amount").html(invitedUser);
    const totalEarnings = await contractForRead.methods.getUserReferralTotalBonus(selectedAccount).call();
    $(".total-earnings .amount").html(parseFloat(web3.utils.fromWei(totalEarnings, "ether")).toPrecision(9).substr(
        0, 10));

    historyTime = [];
    historyList = [];
    await getHistory(0, 500);
    let historyTable = '';
    if (historyList.length == 0) {
        historyTable += '';
    } else {
        for (let i = 0; i < historyList.length; i++) {
            historyTable += '<div class="row align-items-center">';
            historyTable += '<div class="col-3 text-center">' + historyList[i]['time'] + '</div>';
            historyTable += '<div class="col-3 text-center">' + historyList[i]['plan'] + '</div>';
            historyTable += '<div class="col-3 text-center">' + historyList[i]['status'] + '</div>';
            historyTable += '<div class="col-3 text-center">' + historyList[i]['amount'] + '</div>';
            historyTable += '</div>';
        }
    }

    $("#history-modal .table-body").eq(0).html(historyTable);
}



/**
 * Fetch account data for UI when
 * - User switches accounts in wallet
 * - User switches networks in wallet
 * - User connects wallet initially
 */
async function refreshAccountData() {
    await fetchAccountData(provider);
}


/**
 * Connect wallet button pressed.
 */
async function onConnect() {

    console.log("Opening a dialog", web3Modal);
    try {
        provider = await web3Modal.connect();
    } catch (e) {
        console.log("Could not get a wallet connection", e);
        return;
    }

    // Subscribe to accounts change
    provider.on("accountsChanged", (accounts) => {
        fetchAccountData();
    });

    // Subscribe to chainId change
    provider.on("chainChanged", (chainId) => {
        fetchAccountData();
    });

    // Subscribe to networkId change
    provider.on("networkChanged", (networkId) => {
        fetchAccountData();
    });

    await refreshAccountData();
}

/**
 * Disconnect wallet button pressed.
 */
async function onDisconnect() {
    console.log("Killing the wallet connection", provider);
    await web3Modal.clearCachedProvider();

    // TODO: Which providers have close method?
    if (provider.close) {
        await provider.close();

        // If the cached provider is not cleared,
        // WalletConnect will default to the existing session
        // and does not allow to re-scan the QR code with a new wallet.
        // Depending on your use case you may want or want not his behavir.
        // await web3Modal.clearCachedProvider();
        provider = null;
    }

    selectedAccount = null;

    $("#wallet-address").hide();
    $("#connect-button").show();
    $("#logout-button").hide();
}
const contractForRead = new httpWeb3.eth.Contract(abi, address);

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function handleCopy() {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(referralLink);
    }
}

let historyTime = [];
let historyList = [];

async function getHistory(start, limit) {
    var re1 = await $.ajax({
        url: 'https://deep-index.moralis.io/api/v2/' + address +
            '/events?chain=ropsten&topic=0x5998f12fe9332603ffeda0abbc2ea68418dfad46909149aa0f4fcbd1d8f7c620&offset=' +
            start + '&limit=' + limit,
        headers: {
            'X-API-Key': 'z0xPYexYO7lO1iyevGZGNkAfo4ijaVNHyd1BZLH3e6KRWqQ2WDhFrgre22QBodEr'
        },
        dataType: 'json',
        method: 'post',
        contentType: "application/json",
        data: JSON.stringify({
            "anonymous": false,
            "inputs": [{
                "indexed": true,
                "name": "user",
                "type": "address"
            }, {
                "indexed": false,
                "name": "plan",
                "type": "uint8"
            }, {
                "indexed": false,
                "name": "amount",
                "type": "uint256"
            }],
            "name": "NewDeposit",
            "type": "event"
        })
    });
    re1.result.forEach(function(el, idx) {
        if (el.data.user.toLowerCase() == selectedAccount.toLowerCase()) {
            let time = new Date(el.block_timestamp);
            //let blocktime = time.getTime();
            let localtime = time.toLocaleString();
            //let action = "Stake";
            let amount = parseFloat(httpWeb3.utils.fromWei(el.data.amount, "ether")).toPrecision(9).substr(
                0, 10);
            //historyTime.push(blocktime);
            historyList.push({
                "time": localtime,
                "status": "Completed",
                "plan": planStr[el.data.plan],
                "amount": amount
            });
        }
    });
    /*
    var re2 = await $.ajax({
        url: 'https://deep-index.moralis.io/api/v2/0x3e1fd26dbb0e095f665cfa3c12467cf855ef5e5e/events?chain=ropsten&topic=0x7084f5476618d8e60b11ef0d7d3f06914655adb8793e28ff7f018d4c76d505d5&offset=' +
            start + '&limit=' + limit,
        headers: {
            'X-API-Key': 'z0xPYexYO7lO1iyevGZGNkAfo4ijaVNHyd1BZLH3e6KRWqQ2WDhFrgre22QBodEr'
        },
        dataType: 'json',
        method: 'post',
        contentType: "application/json",
        data: JSON.stringify({
            "anonymous": false,
            "inputs": [{
                "indexed": true,
                "name": "user",
                "type": "address"
            }, {
                "indexed": false,
                "name": "amount",
                "type": "uint256"
            }],
            "name": "Withdrawn",
            "type": "event"
        })
    });
    re2.result.forEach(function(el, idx) {
        if (el.data.user.toLowerCase() == selectedAccount.toLowerCase()) {
            let time = new Date(el.block_timestamp);
            let blocktime = time.getTime();
            let localtime = time.toLocaleString();
            let action = "Withdraw";
            let amount = parseFloat(httpWeb3.utils.fromWei(el.data.amount, "ether")).toPrecision(9).substr(
                0, 10);
            historyTime.push(blocktime);
            historyList[blocktime] = {
                "time": localtime,
                "action": action,
                "amount": amount
            };
        }
    });
    if (re1.total > start + limit || re2.total > start + limit) {
        await getHistory(start + limit, limit);
    }*/
    if (re1.total > start + limit) {
        await getHistory(start + limit, limit);
    }
}

async function getRecentDeposit(start, limit) {
    var re1 = await $.ajax({
        url: 'https://deep-index.moralis.io/api/v2/' + address +
            '/events?chain=ropsten&topic=0x5998f12fe9332603ffeda0abbc2ea68418dfad46909149aa0f4fcbd1d8f7c620&offset=' +
            start + '&limit=' + limit,
        headers: {
            'X-API-Key': 'z0xPYexYO7lO1iyevGZGNkAfo4ijaVNHyd1BZLH3e6KRWqQ2WDhFrgre22QBodEr'
        },
        dataType: 'json',
        method: 'post',
        contentType: "application/json",
        data: JSON.stringify({
            "anonymous": false,
            "inputs": [{
                "indexed": true,
                "name": "user",
                "type": "address"
            }, {
                "indexed": false,
                "name": "plan",
                "type": "uint8"
            }, {
                "indexed": false,
                "name": "amount",
                "type": "uint256"
            }],
            "name": "NewDeposit",
            "type": "event"
        })
    });
    $(".history-list").html('');
    re1.result.forEach(function(el, idx) {
        let time = new Date(el.block_timestamp);
        let localtime = time.toLocaleString();
        let amount = parseFloat(httpWeb3.utils.fromWei(el.data.amount, "ether")).toPrecision(7).substr(0,
            7);

        let historyItem = '<div class="item bg-dark">' +
            '<div class="d-flex justify-content-between align-items-baseline">' +
            '<span class="lg-text">' +
            '<a class="text-warning" target="_blank" href="' + scanUrl + 'tx/' + el.transaction_hash +
            '">Transaction Hash: ' + el.transaction_hash.substr(0, 5) +
            '...' + el.transaction_hash.substr(-5) + '</a>' +
            '</span>' +
            '<div>Date: ' + localtime + '</div>' +
            '</div>' +
            '<div class="row d-flex justify-content-between align-items-baseline">' +
            '<div class="lg-text col-sm-4">Wallet: ' + el.data.user.substr(0, 5) + '...' + el.data.user
            .substr(-5) +
            '</div>' +
            '<div class="col-sm-4 text-center">Amount: <span class="text-warning">' + amount +
            'ETH</span></div>' +
            '<div class="col-sm-4 text-right">Plan: <span class="text-warning">' + planStr[el.data.plan] +
            ' days</span></div>' +
            '</div>' +
            '</div>';
        $(".history-list").append(historyItem);
    });
}
</script>