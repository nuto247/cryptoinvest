@include('head')

    <!-- Welcome Message -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="custom-card mb-3">
                    <h2>Investments</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card mb-3">
                    <!-- Placeholder for future content -->
                </div>
            </div>
        </div>
    </div>

    <!-- Content with Form in Card -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                        <form id="investmentForm" action="store" method="POST">
                            @csrf

                            <input type="hidden" class="form-control"  name="transtype" value="Investment">
                            <input type="hidden" class="form-control"  name="status" value="Pending">
                        
                            <div class="form-group">
                                <label for="investmentPlan">Select Investment Plan</label>
                                <select class="form-control" id="investmentPlan" name="investment_plan">
                                    <option>Bronze Plan-|15 Days|8.6% Profit Daily|Min deposit-$100-Max deposit-$2,000|</option>
                                    <option>Silver Plan-|21 Days|10.8% Profit Daily|Min deposit-$1,000-Max deposit-$4,900|</option>
                                    <option>Gold Plan-|30 days|12.6% Profit Daily|Min deposit-$5,000-Max deposit-$10,000|</option>
                                    <option>Platinum Plan-|15 Days|15.6% Profit Daily|Min deposit-$10,000-Max deposit-$200,000|</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cryptoNetwork">Select Crypto Network</label>
                                <select class="form-control" id="cryptoNetwork" name="crypto_network">
                                    <option value="bitcoin">Bitcoin</option>
                                    <option value="usdt-trc20">USDT TRC20</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="investmentAmount">Investment Amount (USD)</label>
                                <input type="number" class="form-control" id="investmentAmount" name="amount" placeholder="Enter amount" oninput="convertToBTC()">
                            </div>
                            <div class="form-group">
                                <label for="btcAmount">Equivalent Amount (BTC)</label>
                                <input type="text" class="form-control" id="btcAmount" placeholder="BTC amount" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Invest Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright">
            <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                <span class="blue-text">Track all markets on TradingView</span>
            </a>
        </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
        "symbols": [
            {
            "proName": "FOREXCOM:SPXUSD",
            "title": "S&P 500 Index"
            },
            {
            "proName": "FOREXCOM:NSXUSD",
            "title": "US 100 Cash CFD"
            },
            {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR to USD"
            },
            {
            "proName": "BITSTAMP:BTCUSD",
            "title": "Bitcoin"
            },
            {
            "proName": "BITSTAMP:ETHUSD",
            "title": "Ethereum"
            }
        ],
        "showSymbolLogo": true,
        "isTransparent": false,
        "displayMode": "adaptive",
        "colorTheme": "light",
        "locale": "en"
        }
        </script>
    </div>
    <!-- TradingView Widget END -->

    <!-- Footer -->
    @include('footer')