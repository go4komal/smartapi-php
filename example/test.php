//include script.js in you current file
<script src="socket.js"></script>

<?php

require_once __DIR__ . '/vendor/autoload.php';

$smart_api  = new \AngelBroking\SmartApi();
	
$login = $smart_api ->GenerateSession("client-code","password");

echo $login;

//methods
   //  $token = $smart_api ->GenerateToken();  
    
   //  $profile = $smart_api ->GetProfile();
    
   //  $smart_api ->LogOut(array('clientcode'=>'your client-code'));
    
   //  $rms = $smart_api ->GetRMS();
    
   //  $order = $smart_api ->PlaceOrder(array('variety' => 'NORMAL',
   //                                  'tradingsymbol'  =>  'JINDALSTEL-EQ',
   //                                  'symboltoken' => '6733',
   //                                  'exchange' => 'NSE',
   //                                  'transactiontype' => 'SELL',
   //                                  'ordertype' => 'LIMIT',
   //                                  'quantity' => '1',
   //                                  'producttype' => 'INTRADAY',
   //                                  'price' => 312.65,
   //                                  'squareoff' => 0,
   //                                  'stoploss' => 0,
   //                                  'duration' => 'DAY'));
                                    
   //   $modifyOrder = $smart_api ->ModifyOrder(array('variety' => 'NORMAL',
   //                                  'tradingsymbol'  =>  'JINDALSTEL-EQ',
   //                                  'symboltoken' => '6733',
   //                                  'exchange' => 'NSE',
   //                                  'transactiontype' => 'BUY',
   //                                  'ordertype' => 'LIMIT',
   //                                  'quantity' => '1',
   //                                  'producttype' => 'INTRADAY',
   //                                  'price' => 200,
   //                                  'squareoff' => 0,
   //                                  'stoploss' => 0,
   //                                  'duration' => 'DAY',
   //                                  'orderid' =>210312000000394));
    
   //  $cancelOrder = $smart_api ->CancelOrder(array('variety' => 'NORMAL',
   //                                    'orderid' => '210312000000394'));
                                      
   //  $GetOrderBook = $smart_api ->GetOrderBook();
    
   //  $GetTradeBook = $smart_api ->GetTradeBook();
    
   //  $GetHoldings =  $smart_api ->GetHoldings();
    
   //  $GetPosition  = $smart_api ->GetPosition();
    
   //  $ConvertPosition  = $smart_api ->ConvertPosition(array("exchange"=>"NSE",
   //                                              "oldproducttype"=>"INTRADAY",
   //                                              "newproducttype"=>"MARGIN",
   //                                              "tradingsymbol"=>"JINDALSTEL-EQ",
   //                                              "transactiontype"=>"SELL",
   //                                              "quantity"=>"1",
   //                                              "type"=>"DAY"));
                                                
   // $CreateRule  = $smart_api ->CreateRule(array("tradingsymbol" => "SBIN-EQ", 
   //                                    "symboltoken" => "3045", 
   //                                    "exchange" => "NSE", 
   //                                    "producttype" => "MARGIN", 
   //                                    "transactiontype" => "BUY",
   //                                    "price" => 100000, 
   //                                    "qty" => 10, 
   //                                    "disclosedqty"=> 10, 
   //                                    "triggerprice" => 200000,
   //                                    "timeperiod" => 365));
                                       
   // $ModifyRule  = $smart_api ->ModifyRule(array('id' => '1000059',
   //                                     "tradingsymbol" => "SBIN-EQ", 
   //                                    "symboltoken" => "3045", 
   //                                    "exchange" => "NSE", 
   //                                    "producttype" => "MARGIN", 
   //                                    "transactiontype" => "BUY",
   //                                    "price" => 100000, 
   //                                    "qty" => 20, 
   //                                    "disclosedqty"=> 10, 
   //                                    "triggerprice" => 200000,
   //                                    "timeperiod" => 365));
                                      
   //  $CancelRule = $smart_api ->CancelRule(array('symboltoken'  => '3045'
   //                                     'exchange'   =>   'NSE' ,
   //                                    'id'  => '1000059'));
                                      
   //  $RuleDetails = $smart_api ->RuleDetails(array('id'=>'1000059'));
    
   //  $RuleList = $smart_api ->RuleList(array( "status"=> [
   //                                    "NEW",
   //                                    "CANCELLED",
   //                                    "ACTIVE",
   //                                    "SENTTOEXCHANGE",
   //                                    "FORALL"
   //                               ],
   //                               "page"=> 1,
   //                               "count"=> 10));
                                 
   //  $GetCandleData = $smart_api ->GetCandleData(array("exchange"=> "NSE",
   //                                           "symboltoken"=> "3045",
   //                                           "interval"=> "MINUTE",
   //                                           "fromdate"=> "2021-02-08 09:00",
   //                                           "todate"=> "2021-02-08 09:16"));

   

?>

<script type="text/javascript">
	
		var ws =new  websocket('clientCode', 'feedToken', 'scrip', 'task');
		
		//connect to server
		ws.connection().then(() => {
	        ws.runScript("nse_cm|2885", "mw");
	         // SCRIPT: exchange|token for multi stocks use & seperator, mcx_fo|222900  ### TASK: mw|sfi|dp

	        setTimeout(function () {
	            ws.close()
	        }, 3000)
	    });


	   //add callback method where you can manipulate socket data
		ws.on('tick', receiveTick);

		//user defined function
		function receiveTick(data) {
			
			console.log(data);			
		    // data =  JSON.parse(data);
		    // if (data!=='' ) {
		    // 	console.log(data.ltp);
		    // }	   
	  
		}
	</script>