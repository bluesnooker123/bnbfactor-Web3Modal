<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="image/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Yield Farm" />
    <link rel="apple-touch-icon" href="image/logo.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="image/logo.png" />
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>ETH Factor</title>
</head>
<?php
$ref = '';
if(array_key_exists("r",$_GET))
{
  $ref = $_GET['r'];
}
?>

<body>
    <?php include('header.php');?>
    <div class="main-container">
        <div class="startdate-countdown text-center">
            <h3 class="start-date">
            </h3>
            <div class="count-down ClassyCountdownDemo">
            </div>
        </div>
        <div class="heading-1 fade-object">
            <p>
                EtherYield
            </p>
            <p>
                #1 Community Experimental yield farm on Binance Smart Chain with<br>
                Fully Decentralized yield farm on Ethereum Main-Net.
            </p>
        </div>
        <div class="d-flex flex-wrap justify-content-evenly align-items-baseline">
            <div class="d-flex flex-column justify-content-center flex-wrap total-value">
                <div class="shadow-div fade-object bg-dark" id="total-deposit">
                    <div class="description text-white">
                        Total Value Deposited
                    </div>
                    <div class="amount text-warning">
                        <span>0</span> ETH
                    </div>
                    <div class="amount-usd text-muted">
                        $ <span>0</span>
                    </div>
                </div>
                <div class="shadow-div fade-object bg-dark" id="total-referral">
                    <div class="description text-white">
                        Total Contract Balance
                    </div>
                    <div class="amount text-warning">
                        <span>0</span> ETH
                    </div>
                    <div class="amount-usd text-muted">
                        $ <span>0</span>
                    </div>
                </div>
                <div class="buttons fade-object">
                    <a class="styled-button" href="#affiliate-program">Affiliate Program</a>
                    <a class="styled-button" href="">Information</a>
                    <a class="styled-button" href="">Information</a>
                    <a class="styled-button" href="">Verified Contract</a>
                    <a class="styled-button" href="">Telegram</a>
                </div>
            </div>
            <div class="d-flex flex-column your-farm-container">
                <div class="shadow-div fade-object bg-warning">
                    <div class="panel-title-black">
                        Your Farm
                    </div>
                    <div class="d-flex flex-row justify-content-between harvest-history flex-wrap">
                        <div class="d-flex align-items-center harvest justify-content-between">
                            <div>
                                <div>
                                    ETH to Harvest
                                </div>
                                <div class="amount">
                                    <span>0.00000000</span> ETH
                                </div>
                                <div class="amount-usd">
                                    $ <span>0.00000000</span>
                                </div>
                            </div>
                            <button class="styled-button bg-white" disabled onclick="harvest(this)">Withdraw</button>
                        </div>
                        <div class="d-flex align-items-center history justify-content-between">
                            <div>
                                <div>
                                    ETH in Wallet:
                                </div>
                                <div class="amount">
                                    <span>0.00000000</span> ETH
                                </div>
                                <div class="amount-usd">
                                    $ <span>0.00000000</span>
                                </div>
                            </div>
                            <button class="styled-button bg-white" data-toggle="modal"
                                data-target="#history-modal">History</button>
                        </div>
                    </div>
                </div>

                <div class="shadow-div wrapper center-block fade-object farm-list bg-dark">
                    <div class="panel-title-black text-warning" style="padding-left:16px;">
                        Stake ETH
                        <div class="text-white">
                            Minimum Stake Amount: 0.05 BNB
                        </div>
                    </div>
                    <div class="row heading text-warning">
                        <div class="col-3">
                            Days
                        </div>
                        <div class="col-3">
                            %Daily
                        </div>
                        <div class="col-3">
                            Total
                        </div>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading text-white" role="tab" id="heading1">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#farm1" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="row">
                                            <div class="col-3">
                                                100
                                            </div>
                                            <div class="col-3">
                                                2%
                                            </div>
                                            <div class="col-3">
                                                200%
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="farm1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body">
                                    <div class="stake-div">
                                        <div>
                                            Total Earn: <span class="total-earn">0</span>ETH
                                        </div>
                                        <input class="amount" placeholder="Enter ETH amount">
                                        <button class="styled-button" onclick="stake(this,0)">Stake</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading text-white" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#farm2" aria-expanded="false">
                                        <div class="row">
                                            <div class="col-3">
                                                60
                                            </div>
                                            <div class="col-3">
                                                3%
                                            </div>
                                            <div class="col-3">
                                                180%
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="farm2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body">
                                    <div class="stake-div">
                                        <div>
                                            Total Earn: <span class="total-earn">0</span>ETH
                                        </div>
                                        <input class="amount" placeholder="Enter ETH amount">
                                        <button class="styled-button" onclick="stake(this,1)">Stake</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading text-white" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#farm3" aria-expanded="false">
                                        <div class="row">
                                            <div class="col-3">
                                                40
                                            </div>
                                            <div class="col-3">
                                                4%
                                            </div>
                                            <div class="col-3">
                                                160%
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="farm3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body">
                                    <div class="stake-div">
                                        <div>
                                            Total Earn: <span class="total-earn">0</span>ETH
                                        </div>
                                        <input class="amount" placeholder="Enter ETH amount">
                                        <button class="styled-button" onclick="stake(this,2)">Stake</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading text-white" role="tab" id="heading4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#farm4" aria-expanded="false">
                                        <div class="row">
                                            <div class="col-3">
                                                15
                                            </div>
                                            <div class="col-3">
                                                8%
                                            </div>
                                            <div class="col-3">
                                                120%
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="farm4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="panel-body">
                                    <div class="stake-div">
                                        <div>
                                            Total Earn: <span class="total-earn">0</span>ETH
                                        </div>
                                        <input class="amount" placeholder="Enter ETH amount">
                                        <button class="styled-button" onclick="stake(this,3)">Stake</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row flex-wrap program-recent">
            <div class="affiliate-program">
                <div id="affiliate-program" class="shadow-div fade-object">
                    <div class="panel-title-black">
                        Affiliate Program
                    </div>
                    <div style="padding-bottom: 50px;">
                        Referral Bonus: %10
                    </div>
                    <div class="rule d-flex justify-content-center">
                        <div>
                            <div class="d-flex flex-column justify-content-between text-center">
                                <div>
                                    LEVEL 1
                                </div>
                                <div class="percent">
                                    5%
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex flex-column justify-content-between text-center">
                                <div>
                                    LEVEL 2
                                </div>
                                <div class="percent">
                                    3%
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex flex-column justify-content-between text-center">
                                <div>
                                    LEVEL 3
                                </div>
                                <div class="percent">
                                    2%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="your-link">
                        <div>
                            Your personal link:
                        </div>
                        <div class="link">
                            <span>
                                &nbsp;
                            </span>
                            <button class="styled-button" onclick="handleCopy()">Copy</button>
                        </div>
                    </div>
                    <div class="invited-users">
                        Invited users: <span class="amount">0</span>
                    </div>
                    <div class="total-earnings">
                        Total earnings: <span class="amount">0</span> ETH
                    </div>
                </div>
            </div>
            <div class="recent-deposit">
                <div class="shadow-div fade-object bg-dark">
                    <div class="panel-title-black text-white">
                        Last Deposits
                    </div>
                    <div class="history-list bg-dark-2">
                    </div>
                </div>

                <div class="read-before shadow-div fade-object">
                    <div class="panel-title-black">
                        Read before use
                    </div>
                    <div>
                        The principal deposit cannot be withdrawn, the only return users can get are daily dividends and
                        referral rewards. Payments is possible only if contract balance have enough ETH. Please analyze
                        the
                        transaction history and balance of the smart contract before investing. High risk - high profit,
                        DYOR
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-warning">
        <div class="farm-description fade-object">
            <p>Simply stake ETH to earn more ETH.</p>
            <p>Invite your friends to earn even more !</p>
        </div>
        <div class="about fade-object">
            <div>
                <div class="icon bg-dark">
                    <img src="image/security.png">
                </div>
                <div class="title">
                    Decentralized and Trustless
                </div>
                <div class="text">
                    The smart contract is completely decentralized and unchangeable,all functions are public there are
                    no private or external functions can be called and audits with multiple independent auditors are in
                    progress.
                </div>
            </div>
            <div>
                <div class="icon bg-dark">
                    <img src="image/apr.png">
                </div>
                <div class="title">
                    High APRs and easy to use
                </div>
                <div class="text">
                    Simply choose the plan that fits you best, choose the amount you want to invest (minimum 0.05 EHT)
                    Click stake and start earning, refer your friends to earn even more !
                </div>
            </div>
            <div>
                <div class="icon bg-dark">
                    <img src="image/support.png">
                </div>
                <div class="title">
                    EtherYield Ecosystem
                </div>
                <div clas="text">
                    EtherYield team plans to develop more trustless DeFi products enabling the community to generate
                    passive income all over the world in the most frictionless manner.
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php');?>
    <div class="modals">
        <div class="modal roi-modal" id="history-modal">
            <div class="modal-dialog d-flex flex-row justify-content-center flex-wrap">
                <div class="deposit-withdraw d-flex flex-column justify-content-between">
                    <div class="text-center">
                        <img src="image/deposit.png" />
                        <div class="text-white">
                            TOTAL DEPOSIT
                        </div>
                        <div class="text-warning">
                            <span class="user-total-deposit">0.0000</span> ETH
                        </div>
                    </div>

                    <div class="text-center">
                        <img src="image/withdraw.png" />
                        <div class="text-white">
                            TOTAL WITHDRAW
                        </div>
                        <div class="text-warning">
                            <span class="user-total-withdraw">0.0000</span> ETH
                        </div>
                    </div>
                </div>
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">History</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="table-div">
                            <div class="row">
                                <div class="col-3 text-center">
                                    Date
                                </div>
                                <div class="col-3 text-center">
                                    Plan
                                </div>
                                <div class="col-3 text-center">
                                    Status
                                </div>
                                <div class="col-3 text-center">
                                    Amount
                                </div>
                            </div>
                            <div class="table-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.throttle.js"></script>
<script src="js/jquery.classycountdown.js"></script>
<script>
let ref = '<?php echo $ref;?>';
if (ref.length > 0) {
    setCookie("factor-ref", ref, 365);
}
$(async function() {
    const startDate = await contractForRead.methods.startDate().call();
    if (startDate*1000 > new Date().getTime()) {
        $(".start-date").html(new Date(startDate*1000).toLocaleString());

        $('.count-down').ClassyCountdown({
            theme: "black-very-wide",
            end: startDate*1000,
            onEndCallback: function() {
                $(".stake-div button").prop("disabled", false);
                $(".startdate-countdown").hide();
            }
        });

        $(".stake-div button").prop("disabled", true);
    } else {
        $(".startdate-countdown").hide();
    }

    $('.panel-collapse').on('show.bs.collapse', function() {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function() {
        $(this).siblings('.panel-heading').removeClass('active');
    });

    let rate = [2, 1.8, 1.6, 1.2];

    $(".stake-div input").each((idx, el) => {
        if (idx >= 0) {
            $(el).on('keyup', () => {
                let val = $(el).val() * 10000000 * rate[idx] / 10000000;
                $(".total-earn").eq(idx).html(val);
            })
        }
    });

    $('#history-modal').on('shown.bs.modal', function() {
        $("body>.header").addClass("blur-component");
        $("body>.main-container").addClass("blur-component");
        $("body> .bg-warning").addClass("blur-component");
        $("body>.footer").addClass("blur-component");
    });
    $('#history-modal').on('hidden.bs.modal', function() {
        $("body>.header").removeClass("blur-component");
        $("body>.main-container").removeClass("blur-component");
        $("body> .bg-warning").removeClass("blur-component");
        $("body>.footer").removeClass("blur-component");
    });
    getHarvest();
    getRecentDeposit(0, 20);
    setInterval(() => {
        getSiteInfo();
        getHarvest();
        getRecentDeposit(0, 20);
    }, 30000);
    getSiteInfo();
});

async function getSiteInfo() {
    let price = await $.get({
        url: "https://api.binance.com/api/v3/ticker/price?symbol=ETHBUSD"
    });
    price = parseFloat(price.price);
    let totalDeposit = await contractForRead.methods.totalInvested().call();
    totalDeposit = httpWeb3.utils.fromWei(totalDeposit, "ether");
    totalDeposit = parseFloat(totalDeposit);
    let totalDepositUsd = (totalDeposit * price).toFixed(2);
    totalDeposit = totalDeposit.toFixed(3);
    $("#total-deposit .amount span").html(totalDeposit);
    $("#total-deposit .amount-usd span").html(totalDepositUsd);

    let totalReferralEarning = await httpWeb3.eth.getBalance(address);
    totalReferralEarning = httpWeb3.utils.fromWei(totalReferralEarning, "ether");
    totalReferralEarning = parseFloat(totalReferralEarning);
    let totalReferralEarningUsd = (totalReferralEarning * price).toFixed(2);
    totalReferralEarning = totalReferralEarning.toFixed(3);
    $("#total-referral .amount span").html(totalReferralEarning);
    $("#total-referral .amount-usd span").html(totalReferralEarningUsd);
}

async function harvest(btn) {
    $(btn).prop("disabled", true);
    try {
        await contractForWrite.methods.withdraw().send({
            from: selectedAccount
        });
        fetchAccountData();
    } catch (ex) {

    }
    $(btn).prop("disabled", false);
    getSiteInfo();
}

async function stake(btn, plan) {
    let amount = $("input", $(btn).parent()).val();
    if (!amount || amount == 0) {
        Toastify({
            text: "Please input amount to stake.",
            duration: 10000,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            className: "warning"
        }).showToast();
        return;
    }
    $(btn).prop("disabled", true);
    let ref = getCookie("factor-ref");
    if (!ref) {
        ref = selectedAccount;
    }
    try {
        await contractForWrite.methods.invest(ref, plan).send({
            from: selectedAccount,
            value: httpWeb3.utils.toWei(amount, "ether")
        });
        fetchAccountData();
        getSiteInfo();
    } catch (ex) {

    }
    $(btn).prop("disabled", false);
}

async function getHarvest() {
    let price = await $.get({
        url: "https://api.binance.com/api/v3/ticker/price?symbol=ETHBUSD"
    });
    price = parseFloat(price.price);
    let cliamableAmount;
    if (selectedAccount != null)
        cliamableAmount = await contractForRead.methods.getUserAvailable(selectedAccount).call();
    else
        cliamableAmount = 0;
    cliamableAmount = parseFloat(httpWeb3.utils.fromWei(cliamableAmount, "ether"));
    $(".harvest button").prop("disabled", cliamableAmount == 0);
    $(".harvest .amount span").html(cliamableAmount.toPrecision(9).substr(0, 10));
    $(".harvest .amount-usd span").html((cliamableAmount * price).toPrecision(9));
}
</script>