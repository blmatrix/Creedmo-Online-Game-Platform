<?php
class Mg_api extends CI_Controller {

    public function api_test() {
        $this -> load -> library('microgame');
        //$result = $this -> microgame -> invoke('IsAuthenticate', array('loginName' => 'BaofaAPI174366','pinCode' =>'16db4d'));
        $result = $this -> microgame -> is_authenticate('MMCashier181029', 'ce6d8b');
        echo var_dump($result);
        if ($result -> IsAuthenticateResult -> ErrorCode == 0) {
            echo "#####  IsAthenticate OK" . "<br/>";
            echo var_dump($result);
            echo "<br/>" . "========================================================================" . "<br/>";
            echo "####  GetCurrenciesForAddAccount" . "<br/>";
            $result = $this -> microgame -> get_currencies_for_add_account();
            echo var_dump($result);
            print_r($result);
            echo "<br/>" . "========================================================================" . "<br/>";

            echo "#####  GetBettingProfileList" . "<br/>";
            $result = $this -> microgame -> get_betting_profile_list();
            echo var_dump($result);
            print_r($result);
            echo "<br/>" . "========================================================================" . "<br/>";
        }
    }

    public function api_call() {
        $this -> load -> library('microgame');
        $params = $this -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> microgame -> invoke('IsAuthenticate', $params);
        // $result = $this -> microgame -> is_authenticate('BaofaAPI174366', '16db4d');
        if ($result -> IsAuthenticateResult -> ErrorCode == 0) {
            echo "#####  IsAthenticate OK" . "<br/>";
            echo var_dump($result);
            echo "<br/>" . "========================================================================" . "<br/>";

            echo "####  GetCurrenciesForAddAccount" . "<br/>";
            $result = $this -> microgame -> invoke('GetCurrenciesForAddAccount');
            echo var_dump($result);
            print_r($result);
            echo "<br/>" . "========================================================================" . "<br/>";

            echo "#####  GetBettingProfileList" . "<br/>";
            $result = $this -> microgame -> invoke('GetBettingProfileList');
            echo var_dump($result);
            print_r($result);
            echo "<br/>" . "========================================================================" . "<br/>";

            echo "#####  GeAccountDetails" . "<br/>";
            $param = $params = $this -> microgame -> set_params(array('accountNumber' => 'panda_1'));
            $result = $this -> microgame -> invoke('GetAccountDetails', $params);
            echo var_dump($result);
            print_r($result);
            echo "<br/>" . "========================================================================" . "<br/>";
        }
    }

    public function get_game_session_list() {
        $gmt = new DateTimeZone("GMT");
        $dateFrom = new DateTime("2015-11-03T04:00:00", $gmt);
        $dateTo = new DateTime("2015-11-03T06:00:00", $gmt);

        $this -> load -> library('microgame');
        $params = $this -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> microgame -> invoke('IsAuthenticate', $params);

        if ($result -> IsAuthenticateResult -> ErrorCode == 0) {
            $params = $this -> microgame -> set_params(array('dateFrom' => $dateFrom -> format('c'), 'dateTo' => $dateTo -> format('c'), 'maxNumRowsPage' => 100));

            $result = $this -> microgame -> invoke('GetBetInfoDetails', $params);
            // echo var_dump($result);
            // echo $dateFrom -> format('m/d/Y H:i:s').'</br>';
            //echo $dateTo -> format('m/d/Y H:i:s' ).'</br>';
            //$result = $this -> microgame -> invoke("GetBetInfoDetails",$params);
			echo '</br>';
            print_r($result);
            echo '</br>';

            $Guid = "";
            if ($result -> GetBetInfoDetailsResult) {
                $Guid = $result -> GetBetInfoDetailsResult;

                $params = $this -> microgame -> set_params(array('id' => $Guid, 'nPage' => 1));
                echo '</br>';
                echo '</br>';
                echo '</br>';
                echo '</br>';
                echo '</br>';
                $result = $this -> microgame -> invoke('GetReportResult', $params);
				echo "</br>";
                echo var_dump($result);
				echo "</br>";
                print_r($result);
                echo "</br>";
                echo var_dump($result);

                echo "================================</br>";
                echo "ErrorCode ===> " . 'report_name ' . $result -> GetReportResultResult -> ReportName;
                echo "</br>================================</br>";

                echo "[DataSet Dump]";
                echo "</br>";
                echo var_dump($result -> GetReportResultResult -> CurrentPageData);
                echo "</br>";
                echo "[DataSet Print_r]";
                echo "</br>";
                print_r($result -> GetReportResultResult -> CurrentPageData);

                echo "</br>";
                echo "</br>";
                echo "looping1 </br>";

                $xml = simplexml_load_string('<DataSet>'.$result -> GetReportResultResult -> CurrentPageData -> any . '</DataSet>');
                echo var_dump($xml);
                
                print_r($xml);
                $result = $xml -> xpath('//Table');
                echo 'WinAmount,LoseAmount 동시에 값이 채워질 수 없다. ---> 고객의 손실과 수익을 별도 필드로 제공';
                while (list(, $node) = each($result)) {
                     echo '</br>';
                     echo 'AccountNumber  :  ' . (string)$node -> AccountNumber;
                     echo '</br>';
                     echo 'Income (베팅금액)        :  ' . (string)$node -> Income;
                     echo '</br>';
                     echo 'Payout         :  ' . (string)$node -> Payout;
                     echo '</br>';
                     echo 'WinAmount(페이아웃이 베팅금액보다 클때, -> 고객 이득, baofa 손실)      :  ' . (string)$node -> WinAmount;
                     echo '</br>';
                     echo 'LoseAmount(페이아웃이 베팅금액보다 작을때 --> 고객 손실, baofa 수익)      :  ' . (string)$node -> LoseAmount;
                     echo '</br>';
                     echo 'Date           :  ' . (string)$node -> Date;
                     echo '</br>';
                     echo 'GameType       :  ' . (string)$node -> GameType;
                     echo '</br>';
                     echo 'NetCash        :  ' . (string)$node -> NetCash;
                     echo '</br>';
                     echo 'NetWin         :  ' . (string)$node -> NetWin;
                     echo '</br>';
                     echo 'ModuleId       :  ' . (string)$node -> ModuleId;
                     echo '</br>';
                     echo 'ClientId       :  ' . (string)$node -> ClientId;
                     echo '</br>';
                     echo '-------------------------------------------------------------------------------------------------------------------------';
                 }

             echo '</br>';
             echo  "GetPlayerFundsInPlayDetails";
             echo '</br>';
             
             $params = $this -> microgame -> set_params(array('accountNumber' => 'BFMGtopayc0011'));
             $result = $this -> microgame -> invoke("GetPlayerFundsInPlayDetails", $params);
             echo var_dump($result);
             print_r($result);
             
             foreach($result -> GetPlayerFundsInPlayDetailsResult -> Funds as $fund){
                  echo '</br>';
                  echo '-------------------------------------------------------------------------------------------------------------------------';
                  echo var_dump($fund);
                  print_r($fund);
                  echo 'Game Name      :'. $fund-> GameName;
                  echo 'PayoutsOnTable :'. $fund-> PayoutsOnTable;
                  echo 'BetsOnTable    :'. $fund-> BetsOnTable;
                 
             }
             echo '</br>';
             echo '-------------------------------------------------------------------------------------------------------------------------';
             echo '</br>';
             echo  "GameplayDetailedReport";
             echo '</br>';
             $params = $this -> microgame -> set_params(array('dateFrom' => $dateFrom -> format('c'),  'maxNumRowsPage' => 100));
             $result = $this -> microgame -> invoke("GameplayDetailedReport", $params);
             
             $Guid = $result -> GameplayDetailedReportResult;
             $params = $this -> microgame -> set_params(array('id' => $Guid, 'nPage' => 1));   

             $result = $this -> microgame -> invoke('GetReportResult', $params);
             $xml = simplexml_load_string('<DataSet>'.$result -> GetReportResultResult -> CurrentPageData -> any . '</DataSet>');
             print_r($result);
              $result = $xml -> xpath('//Table');
                while (list(, $node) = each($result)) {
                     echo '</br>';
                     echo 'AccountNumber  :  ' . (string)$node -> AccountNumber;
                     echo '</br>';
                     echo 'Game         :  ' . (string)$node -> game;
                     echo '</br>';
                     echo 'Currency         :  ' . (string)$node -> Currency;
                     echo '</br>';
                     echo 'NumberOfGames      :  ' . (string)$node -> NumberOfGames;
                     echo '</br>';
                     echo 'Date           :  ' . (string)$node -> Date;
                     echo '</br>';
                     echo 'NumberOfBet       :  ' . (string)$node -> NumberOfBet;
                     echo '</br>';
                     echo 'BetAmount        :  ' . (string)$node -> BetAmount;
                     echo '</br>';
                     echo 'PayoutAmount         :  ' . (string)$node ->PayoutAmount;
                     echo '</br>';
                     echo 'GGRAmoun         :  ' . (string)$node ->GGRAmount;
                     echo '</br>';
         
                     echo '-------------------------------------------------------------------------------------------------------------------------';
                 }
             print_r($result);
             
             
             
            }
        }
    }
    
    public function fetch_game_play(){
        $this -> load -> helper('url');
        $this -> load -> library('game_play_service');
        $condition['start_time'] = "2015-12-09T00:00:00"; 
        $condition['end_time']  =  "2015-12-10T06:00:00";
        $message = ''; 
        $re = $this -> game_play_service -> fetch_mg_game_play($condition,$message);
        if ($re && $message == ''){
            echo 'mg game play getch success';
        }
        
        //redirect(site_url('admin/'));
    }
    
     public function fetch_mg_game_play(){
        $this -> load -> helper('url');
        $this -> load -> library('game_play_service');
        $condition['start_time'] = "2015-10-01 00:00:00"; 
        $condition['end_time']  =  "2015-10-29 23:59:59";
        $message = ''; 
        $re = $this -> game_play_service -> fetch_mg_game_play($condition,$message);
        if ($re ){
            echo 'mg game play fetch success';
        }else {
            echo  $message ;
        }
        
        //redirect(site_url('admin/'));
    }
    
    
    
    public function get_report(){
        $this -> load -> library('microgame');
        $report_name = "GetBetInfoDetailsByAccount";
        
        $gmt = new DateTimeZone("GMT");
        $dateFrom = new DateTime("2015-11-03 03:00:00", $gmt);
        $dateTo = new DateTime("2015-11-03 05:00:00", $gmt);
        
        $params = $this -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> microgame -> invoke('IsAuthenticate', $params);
        
        //GetReportByName 메서드 파라미터 구성은 좀 복잡하니 잘 숙지
        $params = $this -> microgame -> set_params(array(
           'reportName' => $report_name,
           'parameters' => array(
               array(
                'ParameterName' => 'FromDate',
                'ParameterValue' => '08-01-2015'
               ),
                
               array(
                'ParameterName' => 'ToDate',
                'ParameterValue' => '08-13-2015'
               ),
               
               array(
                'ParameterName' => 'AccountNumber',
                'ParameterValue' => 'BFMGtopayc0011'
               )
           ),
           'maxNumRowsPage' => 100
        
        ));
        $result = $this -> microgame -> invoke('GetReportByName',$params);
        
        if($result -> GetReportByNameResult -> Status  == 'Pending'){
            sleep(2);
            $Guid = $result -> GetReportByNameResult -> Id;
            $params = $this -> microgame -> set_params(array('id' => $Guid, 'nPage' => 1));   
            $result = $this -> microgame -> invoke('GetReportResult', $params);
            
            echo var_dump($result);
            echo "</br>";
            echo "</br>";
            
        print_r($result);
        }
        
    }
    public function get_language_list() {
        $this -> load -> library('microgame');
        $params = $this -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> microgame -> invoke('IsAuthenticate', $params);
        $result = $this -> microgame -> invoke('GetLanguageList', array());
        
       
        print_r($result);

        echo "================================</br>";
        echo "================================</br>";
        echo var_dump($result);

    }

    //게임리스트 메서드 삭제됨.
    public function get_game_list() {
        $this -> load -> library('microgame');
        $params = $this -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> microgame -> invoke('IsAuthenticate', $params);

        $params = $this -> microgame -> set_params(array('accountNo' => 'BFtest333', 'languageId' => 1));
        $result = $this -> microgame -> invoke('GetGamesList', $params);
        print_r($result);

        echo "================================</br>";
        echo "================================</br>";
        echo var_dump($result);
    }
    
    public function get_player_info_from_pt(){
        $this -> load -> library('playtech');
        $result = $this -> playtech ->  get_player_info('BFPTround1010');
    }
    
    public function get_all_reports_from_pt (){
         $this -> load -> library('playtech');
        $result = $this -> playtech ->  get_all_custom_reports();
        
    }

}
