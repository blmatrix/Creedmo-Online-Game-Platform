ERROR - 2015-12-17 14:04:01 --> [2015-12-17 14:04:01] Execute Cron Test 
ERROR - 2015-12-17 14:04:01 --> Severity: Notice --> Undefined index: REMOTE_ADDR /www/game_offline/application/controllers/batch/Cli_cron.php 12
ERROR - 2015-12-17 14:04:01 --> REOMOTE_ADDR ======> 
ERROR - 2015-12-17 14:04:01 --> code igniter ip_address  ======> 0.0.0.0
ERROR - 2015-12-17 14:05:01 --> [2015-12-17 14:05:01] Execute Cron Test 
ERROR - 2015-12-17 14:05:01 --> Severity: Notice --> Undefined index: REMOTE_ADDR /www/game_offline/application/controllers/batch/Cli_cron.php 12
ERROR - 2015-12-17 14:05:01 --> REOMOTE_ADDR ======> 
ERROR - 2015-12-17 14:05:01 --> code igniter ip_address  ======> 0.0.0.0
ERROR - 2015-12-17 14:06:01 --> [2015-12-17 14:06:01] Execute Cron Test 
ERROR - 2015-12-17 14:06:01 --> Severity: Notice --> Undefined index: REMOTE_ADDR /www/game_offline/application/controllers/batch/Cli_cron.php 12
ERROR - 2015-12-17 14:06:01 --> REOMOTE_ADDR ======> 
ERROR - 2015-12-17 14:06:01 --> code igniter ip_address  ======> 0.0.0.0
ERROR - 2015-12-17 14:07:01 --> [2015-12-17 14:07:01] Execute Cron Test 
ERROR - 2015-12-17 14:07:01 --> Severity: Notice --> Undefined index: REMOTE_ADDR /www/game_offline/application/controllers/batch/Cli_cron.php 12
ERROR - 2015-12-17 14:07:01 --> REOMOTE_ADDR ======> 
ERROR - 2015-12-17 14:07:01 --> code igniter ip_address  ======> 0.0.0.0
ERROR - 2015-12-17 14:08:01 --> [2015-12-17 14:08:01] Execute Cron Test 
ERROR - 2015-12-17 14:09:01 --> [2015-12-17 14:09:01] Execute Cron Test 
ERROR - 2015-12-17 14:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 14:10:01 --> [2015-12-17 14:10:01] Execute Cron Test 
ERROR - 2015-12-17 14:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T08:00:00
            [end_time] => 2015-12-17T11:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 08:00:00
            [end_time] => 2015-12-17 11:00:00
        )

)

ERROR - 2015-12-17 14:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 14:10:01 --> MG start_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:10:01 --> MG end_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 14:10:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 160576d6-53aa-4fc6-bf42-4c158d2e711d
        )

)

ERROR - 2015-12-17 14:10:02 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 160576d6-53aa-4fc6-bf42-4c158d2e711d
        )

)

ERROR - 2015-12-17 14:10:02 --> Response Code  : Normal
ERROR - 2015-12-17 14:10:02 --> cur_page
ERROR - 2015-12-17 14:10:02 --> 2
ERROR - 2015-12-17 14:10:02 --> MG Game fetch .....11111
ERROR - 2015-12-17 14:10:02 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450329002
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450329002
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450329002
        )

)

ERROR - 2015-12-17 14:10:02 --> comp start1111!!!!!!
ERROR - 2015-12-17 14:10:02 --> comp start1111:Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
        )

)

ERROR - 2015-12-17 14:10:02 --> ==============================>1 ==>Array
(
    [0] => stdClass Object
        (
            [user_no] => 681
            [language_no] => 2
            [country_no] => 53607
            [user_nick] => 
            [user_level_no] => 1
            [user_id] => MAXLIVE4
            [user_password] => 96e79218965eb72c92a549dd5a330112
            [user_name] => 맥스4
            [user_email] => 
            [user_phone] => 01055559999
            [user_type] => 2
            [affiliate_code] => B70865
            [affiliate_ref] => 672
            [is_affiliate] => Y
            [via_url] => 
            [join_url] => 
            [user_locale] => 
            [login_status] => N
            [user_gender] => 
            [user_status] => 4
            [deps1_child_count] => 4
            [deps2_child_count] => 0
            [agree_adult] => Y
            [language_name] => 
            [im_type] => 
            [im_id] => 
            [city] => 
            [user_des] => 
            [affiliate_des] => 
            [lft] => 
            [rgt] => 
            [mg_id] => BFMGMAXLIVE4
            [mg_password] => NHbp6BnYL5
            [mg_game_status] => Y
            [pt_id] => BFPTMAXLIVE4
            [pt_password] => NHbp6BnYL5
            [pt_game_status] => Y
            [first_deposit] => N
            [join_ip] => 175.195.11.15
            [join_date] => 1449746869
            [reg_date] => 1449746869
            [confirm_date] => 1449746869
            [agree_term] => Y
        )

)

ERROR - 2015-12-17 14:10:02 --> ==============================>2 ==>1
ERROR - 2015-12-17 14:10:02 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 14:10:02 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 14:10:02 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 14:10:02 --> arr_length ------> 1
ERROR - 2015-12-17 14:10:02 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 14:10:02 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 14:10:02 --> comp point update batch query
ERROR - 2015-12-17 14:10:02 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 14:10:02 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 14:10:02 --> MG Game play update result
ERROR - 2015-12-17 14:10:02 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450306800
    [update_end_time] => 1450317600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450329002
    [reg_date] => 1450329002
)

ERROR - 2015-12-17 14:11:01 --> [2015-12-17 14:11:01] Execute Cron Test 
ERROR - 2015-12-17 14:12:02 --> [2015-12-17 14:12:02] Execute Cron Test 
ERROR - 2015-12-17 14:13:01 --> [2015-12-17 14:13:01] Execute Cron Test 
ERROR - 2015-12-17 14:14:01 --> [2015-12-17 14:14:01] Execute Cron Test 
ERROR - 2015-12-17 14:15:01 --> [2015-12-17 14:15:01] Execute Cron Test 
ERROR - 2015-12-17 14:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 14:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T08:00:00
            [end_time] => 2015-12-17T11:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 08:00:00
            [end_time] => 2015-12-17 11:00:00
        )

)

ERROR - 2015-12-17 14:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 14:30:01 --> MG start_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:30:01 --> MG end_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:30:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 14:30:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 7a9c0b45-4516-49df-b4d7-8801f02eb7b3
        )

)

ERROR - 2015-12-17 14:30:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 7a9c0b45-4516-49df-b4d7-8801f02eb7b3
        )

)

ERROR - 2015-12-17 14:30:07 --> Response Code  : Normal
ERROR - 2015-12-17 14:30:07 --> cur_page
ERROR - 2015-12-17 14:30:07 --> 2
ERROR - 2015-12-17 14:30:07 --> MG Game fetch .....11111
ERROR - 2015-12-17 14:30:07 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450330207
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450330207
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450330207
        )

)

ERROR - 2015-12-17 14:30:07 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 14:30:07 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 14:30:07 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 14:30:07 --> arr_length ------> 1
ERROR - 2015-12-17 14:30:07 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 14:30:07 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 14:30:07 --> comp point update batch query
ERROR - 2015-12-17 14:30:07 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 14:30:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 14:30:07 --> MG Game play update result
ERROR - 2015-12-17 14:30:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450306800
    [update_end_time] => 1450317600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450330207
    [reg_date] => 1450330207
)

ERROR - 2015-12-17 14:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 14:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T08:00:00
            [end_time] => 2015-12-17T11:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 08:00:00
            [end_time] => 2015-12-17 11:00:00
        )

)

ERROR - 2015-12-17 14:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 14:40:01 --> MG start_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:40:01 --> MG end_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:40:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 14:40:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 38d82709-92d7-4fd6-98ba-206d96359ccb
        )

)

ERROR - 2015-12-17 14:40:02 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 38d82709-92d7-4fd6-98ba-206d96359ccb
        )

)

ERROR - 2015-12-17 14:40:02 --> Response Code  : Normal
ERROR - 2015-12-17 14:40:02 --> cur_page
ERROR - 2015-12-17 14:40:02 --> 2
ERROR - 2015-12-17 14:40:02 --> MG Game fetch .....11111
ERROR - 2015-12-17 14:40:02 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450330802
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450330802
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450330802
        )

)

ERROR - 2015-12-17 14:40:02 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 14:40:02 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 14:40:02 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 14:40:02 --> arr_length ------> 1
ERROR - 2015-12-17 14:40:02 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 14:40:02 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 14:40:02 --> comp point update batch query
ERROR - 2015-12-17 14:40:02 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 14:40:02 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 14:40:02 --> MG Game play update result
ERROR - 2015-12-17 14:40:02 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450306800
    [update_end_time] => 1450317600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450330802
    [reg_date] => 1450330802
)

ERROR - 2015-12-17 14:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 14:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T08:00:00
            [end_time] => 2015-12-17T11:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 08:00:00
            [end_time] => 2015-12-17 11:00:00
        )

)

ERROR - 2015-12-17 14:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 14:50:01 --> MG start_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:50:01 --> MG end_date ===> 2015-12-17T08:00:00
ERROR - 2015-12-17 14:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 14:50:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 179c7855-04af-480d-808c-7eb16757eb01
        )

)

ERROR - 2015-12-17 14:50:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 179c7855-04af-480d-808c-7eb16757eb01
        )

)

ERROR - 2015-12-17 14:50:03 --> Response Code  : Normal
ERROR - 2015-12-17 14:50:03 --> cur_page
ERROR - 2015-12-17 14:50:03 --> 2
ERROR - 2015-12-17 14:50:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 14:50:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450331403
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450331403
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450331403
        )

)

ERROR - 2015-12-17 14:50:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 14:50:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 14:50:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 14:50:03 --> arr_length ------> 1
ERROR - 2015-12-17 14:50:03 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 14:50:03 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 14:50:03 --> comp point update batch query
ERROR - 2015-12-17 14:50:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 14:50:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 14:50:03 --> MG Game play update result
ERROR - 2015-12-17 14:50:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450306800
    [update_end_time] => 1450317600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450331403
    [reg_date] => 1450331403
)

ERROR - 2015-12-17 15:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 15:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T09:00:00
            [end_time] => 2015-12-17T12:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 09:00:00
            [end_time] => 2015-12-17 12:00:00
        )

)

ERROR - 2015-12-17 15:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 15:00:01 --> MG start_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:00:01 --> MG end_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 776e36e6-c2d3-4360-8da8-f7be0a8cc140
        )

)

ERROR - 2015-12-17 15:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 776e36e6-c2d3-4360-8da8-f7be0a8cc140
        )

)

ERROR - 2015-12-17 15:00:04 --> Response Code  : Normal
ERROR - 2015-12-17 15:00:04 --> cur_page
ERROR - 2015-12-17 15:00:04 --> 2
ERROR - 2015-12-17 15:00:04 --> MG Game fetch .....11111
ERROR - 2015-12-17 15:00:04 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450332004
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450332004
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450332004
        )

)

ERROR - 2015-12-17 15:00:04 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 15:00:04 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 15:00:04 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 15:00:04 --> arr_length ------> 1
ERROR - 2015-12-17 15:00:04 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 15:00:04 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 15:00:04 --> comp point update batch query
ERROR - 2015-12-17 15:00:04 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 15:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 15:00:04 --> MG Game play update result
ERROR - 2015-12-17 15:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450310400
    [update_end_time] => 1450321200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450332004
    [reg_date] => 1450332004
)

ERROR - 2015-12-17 15:00:10 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 15:01:36 --> 404 Page Not Found: Wp/index
ERROR - 2015-12-17 15:01:40 --> 404 Page Not Found: Wordpress/index
ERROR - 2015-12-17 15:01:41 --> 404 Page Not Found: Blog/index
ERROR - 2015-12-17 15:01:41 --> 404 Page Not Found: Blogs/index
ERROR - 2015-12-17 15:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 15:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T09:00:00
            [end_time] => 2015-12-17T12:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 09:00:00
            [end_time] => 2015-12-17 12:00:00
        )

)

ERROR - 2015-12-17 15:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 15:10:01 --> MG start_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:10:01 --> MG end_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:10:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 08db92d2-3e95-41d3-a823-574698bd048c
        )

)

ERROR - 2015-12-17 15:10:02 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 08db92d2-3e95-41d3-a823-574698bd048c
        )

)

ERROR - 2015-12-17 15:10:02 --> Response Code  : Normal
ERROR - 2015-12-17 15:10:02 --> cur_page
ERROR - 2015-12-17 15:10:02 --> 2
ERROR - 2015-12-17 15:10:02 --> MG Game fetch .....11111
ERROR - 2015-12-17 15:10:02 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450332602
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450332602
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450332602
        )

)

ERROR - 2015-12-17 15:10:02 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 15:10:02 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 15:10:02 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 15:10:02 --> arr_length ------> 1
ERROR - 2015-12-17 15:10:02 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 15:10:02 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 15:10:02 --> comp point update batch query
ERROR - 2015-12-17 15:10:02 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 15:10:02 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 15:10:02 --> MG Game play update result
ERROR - 2015-12-17 15:10:02 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450310400
    [update_end_time] => 1450321200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450332602
    [reg_date] => 1450332602
)

ERROR - 2015-12-17 15:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 15:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T09:00:00
            [end_time] => 2015-12-17T12:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 09:00:00
            [end_time] => 2015-12-17 12:00:00
        )

)

ERROR - 2015-12-17 15:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 15:20:01 --> MG start_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:20:01 --> MG end_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:20:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:20:06 --> Severity: Warning --> SoapClient::__doRequest(): SSL: Connection reset by peer /www/game_offline/application/libraries/Microgame.php 63
ERROR - 2015-12-17 15:20:06 --> Exception.method_name => GetReportByName ===>
ERROR - 2015-12-17 15:20:06 --> Exception.method_name => GetReportByName ===>
ERROR - 2015-12-17 15:20:06 --> Exception.method_name => GetReportByName ===>SoapFault Object
(
    [message:protected] => Error Fetching http headers
    [string:Exception:private] => 
    [code:protected] => 0
    [file:protected] => /www/game_offline/application/libraries/Microgame.php
    [line:protected] => 63
    [trace:Exception:private] => Array
        (
            [0] => Array
                (
                    [function] => __doRequest
                    [class] => SoapClient
                    [type] => ->
                    [args] => Array
                        (
                            [0] => <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="https://entservices.totalegame.net"><SOAP-ENV:Header>
              <AgentSession xmlns="https://entservices.totalegame.net">
                  <SessionGUID>70cb8e81-d575-4274-b884-a30038452985</SessionGUID>
                  <IPAddress>52.69.174.246</IPAddress>
              </AgentSession></SOAP-ENV:Header><SOAP-ENV:Body><ns1:GetReportByName><ns1:reportName>PlayerGamePlayReport</ns1:reportName><ns1:parameters><ns1:item><ns1:ParameterName>FromDate</ns1:ParameterName><ns1:ParameterValue>2015-12-17T09:00:00</ns1:ParameterValue></ns1:item><ns1:item><ns1:ParameterName>ToDate</ns1:ParameterName><ns1:ParameterValue>2015-12-17T12:00:00</ns1:ParameterValue></ns1:item><ns1:item><ns1:ParameterName>PlayerGrossWinSummaryLevel</ns1:ParameterName><ns1:ParameterValue>Detailed</ns1:ParameterValue></ns1:item><ns1:item><ns1:ParameterName>TimeZoneType</ns1:ParameterName><ns1:ParameterValue>parent</ns1:ParameterValue></ns1:item><ns1:item><ns1:ParameterName>EntityList_XML</ns1:ParameterName><ns1:ParameterValue></ns1:ParameterValue></ns1:item></ns1:parameters><ns1:maxNumRowsPage>100</ns1:maxNumRowsPage></ns1:GetReportByName></SOAP-ENV:Body></SOAP-ENV:Envelope>

                            [1] => https://entservices.totalegame.net/EntServices.asmx
                            [2] => https://entservices.totalegame.net/GetReportByName
                            [3] => 1
                            [4] => 0
                        )

                )

            [1] => Array
                (
                    [function] => __call
                    [class] => SoapClient
                    [type] => ->
                    [args] => Array
                        (
                            [0] => GetReportByName
                            [1] => Array
                                (
                                    [0] => Array
                                        (
                                            [reportName] => PlayerGamePlayReport
                                            [parameters] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [ParameterName] => FromDate
                                                            [ParameterValue] => 2015-12-17T09:00:00
                                                        )

                                                    [1] => Array
                                                        (
                                                            [ParameterName] => ToDate
                                                            [ParameterValue] => 2015-12-17T12:00:00
                                                        )

                                                    [2] => Array
                                                        (
                                                            [ParameterName] => PlayerGrossWinSummaryLevel
                                                            [ParameterValue] => Detailed
                                                        )

                                                    [3] => Array
                                                        (
                                                            [ParameterName] => TimeZoneType
                                                            [ParameterValue] => parent
                                                        )

                                                    [4] => Array
                                                        (
                                                            [ParameterName] => EntityList_XML
                                                            [ParameterValue] => 
                                                        )

                                                )

                                            [maxNumRowsPage] => 100
                                        )

                                )

                        )

                )

            [2] => Array
                (
                    [function] => GetReportByName
                    [class] => SoapClient
                    [type] => ->
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [reportName] => PlayerGamePlayReport
                                    [parameters] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [ParameterName] => FromDate
                                                    [ParameterValue] => 2015-12-17T09:00:00
                                                )

                                            [1] => Array
                                                (
                                                    [ParameterName] => ToDate
                                                    [ParameterValue] => 2015-12-17T12:00:00
                                                )

                                            [2] => Array
                                                (
                                                    [ParameterName] => PlayerGrossWinSummaryLevel
                                                    [ParameterValue] => Detailed
                                                )

                                            [3] => Array
                                                (
                                                    [ParameterName] => TimeZoneType
                                                    [ParameterValue] => parent
                                                )

                                            [4] => Array
                                                (
                                                    [ParameterName] => EntityList_XML
                                                    [ParameterValue] => 
                                                )

                                        )

                                    [maxNumRowsPage] => 100
                                )

                        )

                )

            [3] => Array
                (
                    [file] => /www/game_offline/application/libraries/Microgame.php
                    [line] => 63
                    [function] => call_user_func_array
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [0] => SoapClient Object
                                        (
                                            [compression] => 32
                                            [_soap_version] => 1
                                            [sdl] => Resource id #65
                                            [httpurl] => Resource id #72
                                            [__default_headers] => Array
                                                (
                                                    [0] => SoapHeader Object
                                                        (
                                                            [namespace] => https://entservices.totalegame.net
                                                            [name] => AgentSession
                                                            [data] => SoapVar Object
                                                                (
                                                                    [enc_type] => 147
                                                                    [enc_value] => 
              <AgentSession xmlns="https://entservices.totalegame.net">
                  <SessionGUID>70cb8e81-d575-4274-b884-a30038452985</SessionGUID>
                  <IPAddress>52.69.174.246</IPAddress>
              </AgentSession>
                                                                )

                                                            [mustUnderstand] => 
                                                        )

                                                )

                                            [__soap_fault] => SoapFault Object
 *RECURSION*
                                        )

                                    [1] => GetReportByName
                                )

                            [1] => Array
                                (
                                    [0] => Array
                                        (
                                            [reportName] => PlayerGamePlayReport
                                            [parameters] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [ParameterName] => FromDate
                                                            [ParameterValue] => 2015-12-17T09:00:00
                                                        )

                                                    [1] => Array
                                                        (
                                                            [ParameterName] => ToDate
                                                            [ParameterValue] => 2015-12-17T12:00:00
                                                        )

                                                    [2] => Array
                                                        (
                                                            [ParameterName] => PlayerGrossWinSummaryLevel
                                                            [ParameterValue] => Detailed
                                                        )

                                                    [3] => Array
                                                        (
                                                            [ParameterName] => TimeZoneType
                                                            [ParameterValue] => parent
                                                        )

                                                    [4] => Array
                                                        (
                                                            [ParameterName] => EntityList_XML
                                                            [ParameterValue] => 
                                                        )

                                                )

                                            [maxNumRowsPage] => 100
                                        )

                                )

                        )

                )

            [4] => Array
                (
                    [file] => /www/game_offline/application/libraries/Game_play_service.php
                    [line] => 174
                    [function] => invoke
                    [class] => Microgame
                    [type] => ->
                    [args] => Array
                        (
                            [0] => GetReportByName
                            [1] => Array
                                (
                                    [0] => Array
                                        (
                                            [reportName] => PlayerGamePlayReport
                                            [parameters] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [ParameterName] => FromDate
                                                            [ParameterValue] => 2015-12-17T09:00:00
                                                        )

                                                    [1] => Array
                                                        (
                                                            [ParameterName] => ToDate
                                                            [ParameterValue] => 2015-12-17T12:00:00
                                                        )

                                                    [2] => Array
                                                        (
                                                            [ParameterName] => PlayerGrossWinSummaryLevel
                                                            [ParameterValue] => Detailed
                                                        )

                                                    [3] => Array
                                                        (
                                                            [ParameterName] => TimeZoneType
                                                            [ParameterValue] => parent
                                                        )

                                                    [4] => Array
                                                        (
                                                            [ParameterName] => EntityList_XML
                                                            [ParameterValue] => 
                                                        )

                                                )

                                            [maxNumRowsPage] => 100
                                        )

                                )

                        )

                )

            [5] => Array
                (
                    [file] => /www/game_offline/application/controllers/batch/Batch_process.php
                    [line] => 46
                    [function] => fetch_mg_game_play
                    [class] => Game_play_service
                    [type] => ->
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [mg] => Array
                                        (
                                            [start_time] => 2015-12-17T09:00:00
                                            [end_time] => 2015-12-17T12:00:00
                                        )

                                    [pt] => Array
                                        (
                                            [start_time] => 2015-12-17 09:00:00
                                            [end_time] => 2015-12-17 12:00:00
                                        )

                                )

                            [1] => db
                        )

                )

            [6] => Array
                (
                    [function] => fetch_game_play
                    [class] => Batch_process
                    [type] => ->
                    [args] => Array
                        (
                        )

                )

            [7] => Array
                (
                    [file] => /www/game_offline/system/core/CodeIgniter.php
                    [line] => 508
                    [function] => call_user_func_array
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [0] => Batch_process Object
                                        (
                                            [benchmark] => CI_Benchmark Object
                                                (
                                                    [marker] => Array
                                                        (
                                                            [total_execution_time_start] => 1450333201.8747
                                                            [loading_time:_base_classes_start] => 1450333201.8747
                                                            [loading_time:_base_classes_end] => 1450333201.8802
                                                            [controller_execution_time_( Batch_process / fetch_game_play )_start] => 1450333201.8806
                                                        )

                                                )

                                            [hooks] => CI_Hooks Object
                                                (
                                                    [enabled] => 1
                                                    [hooks] => Array
                                                        (
                                                            [post_controller_constructor] => Array
                                                                (
                                                                    [0] => Array
                                                                        (
                                                                            [class] => SessionInitializer
                                                                            [function] => initialize
                                                                            [filename] => SessionInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                    [1] => Array
                                                                        (
                                                                            [class] => LanguageInitializer
                                                                            [function] => initialize
                                                                            [filename] => LanguageInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                    [2] => Array
                                                                        (
                                                                            [class] => CookieInitializer
                                                                            [function] => initialize
                                                                            [filename] => CookieInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                    [3] => Array
                                                                        (
                                                                            [class] => LoggingInitializer
                                                                            [function] => initialize
                                                                            [filename] => LoggingInitializer.php
                                                                            [filepath] => hooks
                                                                        )

                                                                )

                                                        )

                                                    [_objects:protected] => Array
                                                        (
                                                            [SessionInitializer] => SessionInitializer Object
                                                                (
                                                                    [CI] => Batch_process Object
 *RECURSION*
                                                                )

                                                            [LanguageInitializer] => LanguageInitializer Object
                                                                (
                                                                )

                                                            [CookieInitializer] => CookieInitializer Object
                                                                (
                                                                )

                                                            [LoggingInitializer] => LoggingInitializer Object
                                                                (
                                                                )

                                                        )

                                                    [_in_progress:protected] => 
                                                )

                                            [config] => CI_Config Object
                                                (
                                                    [config] => Array
                                                        (
                                                            [base_url] => http://localhost/
                                                            [index_page] => 
                                                            [uri_protocol] => AUTO
                                                            [url_suffix] => 
                                                            [language] => english
                                                            [charset] => UTF-8
                                                            [enable_hooks] => 1
                                                            [subclass_prefix] => MY_
                                                            [composer_autoload] => 
                                                            [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                            [allow_get_array] => 1
                                                            [enable_query_strings] => 
                                                            [controller_trigger] => c
                                                            [function_trigger] => m
                                                            [directory_trigger] => d
                                                            [log_threshold] => 1
                                                            [log_path] => 
                                                            [log_file_extension] => 
                                                            [log_file_permissions] => 420
                                                            [log_date_format] => Y-m-d H:i:s
                                                            [error_views_path] => 
                                                            [cache_path] => 
                                                            [cache_query_string] => 
                                                            [encryption_key] => asdedefrgfrtg1212fefkhh
                                                            [sess_driver] => files
                                                            [sess_cookie_name] => ci_session
                                                            [sess_expiration] => 7200
                                                            [sess_save_path] => 
                                                            [sess_match_ip] => 
                                                            [sess_time_to_update] => 300
                                                            [sess_expire_on_close] => 1
                                                            [cookie_prefix] => 
                                                            [cookie_domain] => 
                                                            [cookie_path] => /
                                                            [cookie_secure] => 
                                                            [cookie_httponly] => 
                                                            [standardize_newlines] => 
                                                            [global_xss_filtering] => 
                                                            [csrf_protection] => 
                                                            [csrf_token_name] => csrf_test_name
                                                            [csrf_cookie_name] => csrf_cookie_name
                                                            [csrf_expire] => 7200
                                                            [csrf_regenerate] => 1
                                                            [csrf_exclude_uris] => Array
                                                                (
                                                                )

                                                            [compress_output] => 
                                                            [time_reference] => local
                                                            [rewrite_short_tags] => 1
                                                            [proxy_ips] => 
                                                        )

                                                    [is_loaded] => Array
                                                        (
                                                        )

                                                    [_config_paths] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                        )

                                                )

                                            [log] => CI_Log Object
                                                (
                                                    [_log_path:protected] => /www/game_offline/application/logs/
                                                    [_file_permissions:protected] => 420
                                                    [_threshold:protected] => 1
                                                    [_threshold_max:protected] => 0
                                                    [_threshold_array:protected] => Array
                                                        (
                                                        )

                                                    [_date_fmt:protected] => Y-m-d H:i:s
                                                    [_file_ext:protected] => php
                                                    [_enabled:protected] => 1
                                                    [_levels:protected] => Array
                                                        (
                                                            [ERROR] => 1
                                                            [DEBUG] => 2
                                                            [INFO] => 3
                                                            [ALL] => 4
                                                        )

                                                )

                                            [utf8] => CI_Utf8 Object
                                                (
                                                )

                                            [uri] => CI_URI Object
                                                (
                                                    [keyval] => Array
                                                        (
                                                        )

                                                    [uri_string] => batch/batch_process/fetch_game_play
                                                    [segments] => Array
                                                        (
                                                            [1] => batch
                                                            [2] => batch_process
                                                            [3] => fetch_game_play
                                                        )

                                                    [rsegments] => Array
                                                        (
                                                            [1] => batch_process
                                                            [2] => fetch_game_play
                                                        )

                                                    [_permitted_uri_chars:protected] => a-z 0-9~%.:_\-
                                                    [config] => CI_Config Object
                                                        (
                                                            [config] => Array
                                                                (
                                                                    [base_url] => http://localhost/
                                                                    [index_page] => 
                                                                    [uri_protocol] => AUTO
                                                                    [url_suffix] => 
                                                                    [language] => english
                                                                    [charset] => UTF-8
                                                                    [enable_hooks] => 1
                                                                    [subclass_prefix] => MY_
                                                                    [composer_autoload] => 
                                                                    [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                                    [allow_get_array] => 1
                                                                    [enable_query_strings] => 
                                                                    [controller_trigger] => c
                                                                    [function_trigger] => m
                                                                    [directory_trigger] => d
                                                                    [log_threshold] => 1
                                                                    [log_path] => 
                                                                    [log_file_extension] => 
                                                                    [log_file_permissions] => 420
                                                                    [log_date_format] => Y-m-d H:i:s
                                                                    [error_views_path] => 
                                                                    [cache_path] => 
                                                                    [cache_query_string] => 
                                                                    [encryption_key] => asdedefrgfrtg1212fefkhh
                                                                    [sess_driver] => files
                                                                    [sess_cookie_name] => ci_session
                                                                    [sess_expiration] => 7200
                                                                    [sess_save_path] => 
                                                                    [sess_match_ip] => 
                                                                    [sess_time_to_update] => 300
                                                                    [sess_expire_on_close] => 1
                                                                    [cookie_prefix] => 
                                                                    [cookie_domain] => 
                                                                    [cookie_path] => /
                                                                    [cookie_secure] => 
                                                                    [cookie_httponly] => 
                                                                    [standardize_newlines] => 
                                                                    [global_xss_filtering] => 
                                                                    [csrf_protection] => 
                                                                    [csrf_token_name] => csrf_test_name
                                                                    [csrf_cookie_name] => csrf_cookie_name
                                                                    [csrf_expire] => 7200
                                                                    [csrf_regenerate] => 1
                                                                    [csrf_exclude_uris] => Array
                                                                        (
                                                                        )

                                                                    [compress_output] => 
                                                                    [time_reference] => local
                                                                    [rewrite_short_tags] => 1
                                                                    [proxy_ips] => 
                                                                )

                                                            [is_loaded] => Array
                                                                (
                                                                )

                                                            [_config_paths] => Array
                                                                (
                                                                    [0] => /www/game_offline/application/
                                                                )

                                                        )

                                                )

                                            [router] => CI_Router Object
                                                (
                                                    [config] => CI_Config Object
                                                        (
                                                            [config] => Array
                                                                (
                                                                    [base_url] => http://localhost/
                                                                    [index_page] => 
                                                                    [uri_protocol] => AUTO
                                                                    [url_suffix] => 
                                                                    [language] => english
                                                                    [charset] => UTF-8
                                                                    [enable_hooks] => 1
                                                                    [subclass_prefix] => MY_
                                                                    [composer_autoload] => 
                                                                    [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                                    [allow_get_array] => 1
                                                                    [enable_query_strings] => 
                                                                    [controller_trigger] => c
                                                                    [function_trigger] => m
                                                                    [directory_trigger] => d
                                                                    [log_threshold] => 1
                                                                    [log_path] => 
                                                                    [log_file_extension] => 
                                                                    [log_file_permissions] => 420
                                                                    [log_date_format] => Y-m-d H:i:s
                                                                    [error_views_path] => 
                                                                    [cache_path] => 
                                                                    [cache_query_string] => 
                                                                    [encryption_key] => asdedefrgfrtg1212fefkhh
                                                                    [sess_driver] => files
                                                                    [sess_cookie_name] => ci_session
                                                                    [sess_expiration] => 7200
                                                                    [sess_save_path] => 
                                                                    [sess_match_ip] => 
                                                                    [sess_time_to_update] => 300
                                                                    [sess_expire_on_close] => 1
                                                                    [cookie_prefix] => 
                                                                    [cookie_domain] => 
                                                                    [cookie_path] => /
                                                                    [cookie_secure] => 
                                                                    [cookie_httponly] => 
                                                                    [standardize_newlines] => 
                                                                    [global_xss_filtering] => 
                                                                    [csrf_protection] => 
                                                                    [csrf_token_name] => csrf_test_name
                                                                    [csrf_cookie_name] => csrf_cookie_name
                                                                    [csrf_expire] => 7200
                                                                    [csrf_regenerate] => 1
                                                                    [csrf_exclude_uris] => Array
                                                                        (
                                                                        )

                                                                    [compress_output] => 
                                                                    [time_reference] => local
                                                                    [rewrite_short_tags] => 1
                                                                    [proxy_ips] => 
                                                                )

                                                            [is_loaded] => Array
                                                                (
                                                                )

                                                            [_config_paths] => Array
                                                                (
                                                                    [0] => /www/game_offline/application/
                                                                )

                                                        )

                                                    [routes] => Array
                                                        (
                                                            [404_override] => 
                                                            [admin] => admin/index/index
                                                        )

                                                    [class] => batch_process
                                                    [method] => fetch_game_play
                                                    [directory] => batch/
                                                    [default_controller] => Index
                                                    [translate_uri_dashes] => 
                                                    [enable_query_strings] => 
                                                    [uri] => CI_URI Object
                                                        (
                                                            [keyval] => Array
                                                                (
                                                                )

                                                            [uri_string] => batch/batch_process/fetch_game_play
                                                            [segments] => Array
                                                                (
                                                                    [1] => batch
                                                                    [2] => batch_process
                                                                    [3] => fetch_game_play
                                                                )

                                                            [rsegments] => Array
                                                                (
                                                                    [1] => batch_process
                                                                    [2] => fetch_game_play
                                                                )

                                                            [_permitted_uri_chars:protected] => a-z 0-9~%.:_\-
                                                            [config] => CI_Config Object
                                                                (
                                                                    [config] => Array
                                                                        (
                                                                            [base_url] => http://localhost/
                                                                            [index_page] => 
                                                                            [uri_protocol] => AUTO
                                                                            [url_suffix] => 
                                                                            [language] => english
                                                                            [charset] => UTF-8
                                                                            [enable_hooks] => 1
                                                                            [subclass_prefix] => MY_
                                                                            [composer_autoload] => 
                                                                            [permitted_uri_chars] => a-z 0-9~%.:_\-
                                                                            [allow_get_array] => 1
                                                                            [enable_query_strings] => 
                                                                            [controller_trigger] => c
                                                                            [function_trigger] => m
                                                                            [directory_trigger] => d
                                                                            [log_threshold] => 1
                                                                            [log_path] => 
                                                                            [log_file_extension] => 
                                                                            [log_file_permissions] => 420
                                                                            [log_date_format] => Y-m-d H:i:s
                                                                            [error_views_path] => 
                                                                            [cache_path] => 
                                                                            [cache_query_string] => 
                                                                            [encryption_key] => asdedefrgfrtg1212fefkhh
                                                                            [sess_driver] => files
                                                                            [sess_cookie_name] => ci_session
                                                                            [sess_expiration] => 7200
                                                                            [sess_save_path] => 
                                                                            [sess_match_ip] => 
                                                                            [sess_time_to_update] => 300
                                                                            [sess_expire_on_close] => 1
                                                                            [cookie_prefix] => 
                                                                            [cookie_domain] => 
                                                                            [cookie_path] => /
                                                                            [cookie_secure] => 
                                                                            [cookie_httponly] => 
                                                                            [standardize_newlines] => 
                                                                            [global_xss_filtering] => 
                                                                            [csrf_protection] => 
                                                                            [csrf_token_name] => csrf_test_name
                                                                            [csrf_cookie_name] => csrf_cookie_name
                                                                            [csrf_expire] => 7200
                                                                            [csrf_regenerate] => 1
                                                                            [csrf_exclude_uris] => Array
                                                                                (
                                                                                )

                                                                            [compress_output] => 
                                                                            [time_reference] => local
                                                                            [rewrite_short_tags] => 1
                                                                            [proxy_ips] => 
                                                                        )

                                                                    [is_loaded] => Array
                                                                        (
                                                                        )

                                                                    [_config_paths] => Array
                                                                        (
                                                                            [0] => /www/game_offline/application/
                                                                        )

                                                                )

                                                        )

                                                )

                                            [output] => CI_Output Object
                                                (
                                                    [final_output] => 
                                                    [cache_expiration] => 0
                                                    [headers] => Array
                                                        (
                                                        )

                                                    [mimes] => Array
                                                        (
                                                            [hqx] => Array
                                                                (
                                                                    [0] => application/mac-binhex40
                                                                    [1] => application/mac-binhex
                                                                    [2] => application/x-binhex40
                                                                    [3] => application/x-mac-binhex40
                                                                )

                                                            [cpt] => application/mac-compactpro
                                                            [csv] => Array
                                                                (
                                                                    [0] => text/x-comma-separated-values
                                                                    [1] => text/comma-separated-values
                                                                    [2] => application/octet-stream
                                                                    [3] => application/vnd.ms-excel
                                                                    [4] => application/x-csv
                                                                    [5] => text/x-csv
                                                                    [6] => text/csv
                                                                    [7] => application/csv
                                                                    [8] => application/excel
                                                                    [9] => application/vnd.msexcel
                                                                    [10] => text/plain
                                                                )

                                                            [bin] => Array
                                                                (
                                                                    [0] => application/macbinary
                                                                    [1] => application/mac-binary
                                                                    [2] => application/octet-stream
                                                                    [3] => application/x-binary
                                                                    [4] => application/x-macbinary
                                                                )

                                                            [dms] => application/octet-stream
                                                            [lha] => application/octet-stream
                                                            [lzh] => application/octet-stream
                                                            [exe] => Array
                                                                (
                                                                    [0] => application/octet-stream
                                                                    [1] => application/x-msdownload
                                                                )

                                                            [class] => application/octet-stream
                                                            [psd] => Array
                                                                (
                                                                    [0] => application/x-photoshop
                                                                    [1] => image/vnd.adobe.photoshop
                                                                )

                                                            [so] => application/octet-stream
                                                            [sea] => application/octet-stream
                                                            [dll] => application/octet-stream
                                                            [oda] => application/oda
                                                            [pdf] => Array
                                                                (
                                                                    [0] => application/pdf
                                                                    [1] => application/force-download
                                                                    [2] => application/x-download
                                                                    [3] => binary/octet-stream
                                                                )

                                                            [ai] => Array
                                                                (
                                                                    [0] => application/pdf
                                                                    [1] => application/postscript
                                                                )

                                                            [eps] => application/postscript
                                                            [ps] => application/postscript
                                                            [smi] => application/smil
                                                            [smil] => application/smil
                                                            [mif] => application/vnd.mif
                                                            [xls] => Array
                                                                (
                                                                    [0] => application/vnd.ms-excel
                                                                    [1] => application/msexcel
                                                                    [2] => application/x-msexcel
                                                                    [3] => application/x-ms-excel
                                                                    [4] => application/x-excel
                                                                    [5] => application/x-dos_ms_excel
                                                                    [6] => application/xls
                                                                    [7] => application/x-xls
                                                                    [8] => application/excel
                                                                    [9] => application/download
                                                                    [10] => application/vnd.ms-office
                                                                    [11] => application/msword
                                                                )

                                                            [ppt] => Array
                                                                (
                                                                    [0] => application/powerpoint
                                                                    [1] => application/vnd.ms-powerpoint
                                                                    [2] => application/vnd.ms-office
                                                                    [3] => application/msword
                                                                )

                                                            [pptx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.presentationml.presentation
                                                                    [1] => application/x-zip
                                                                    [2] => application/zip
                                                                )

                                                            [wbxml] => application/wbxml
                                                            [wmlc] => application/wmlc
                                                            [dcr] => application/x-director
                                                            [dir] => application/x-director
                                                            [dxr] => application/x-director
                                                            [dvi] => application/x-dvi
                                                            [gtar] => application/x-gtar
                                                            [gz] => application/x-gzip
                                                            [gzip] => application/x-gzip
                                                            [php] => Array
                                                                (
                                                                    [0] => application/x-httpd-php
                                                                    [1] => application/php
                                                                    [2] => application/x-php
                                                                    [3] => text/php
                                                                    [4] => text/x-php
                                                                    [5] => application/x-httpd-php-source
                                                                )

                                                            [php4] => application/x-httpd-php
                                                            [php3] => application/x-httpd-php
                                                            [phtml] => application/x-httpd-php
                                                            [phps] => application/x-httpd-php-source
                                                            [js] => Array
                                                                (
                                                                    [0] => application/x-javascript
                                                                    [1] => text/plain
                                                                )

                                                            [swf] => application/x-shockwave-flash
                                                            [sit] => application/x-stuffit
                                                            [tar] => application/x-tar
                                                            [tgz] => Array
                                                                (
                                                                    [0] => application/x-tar
                                                                    [1] => application/x-gzip-compressed
                                                                )

                                                            [z] => application/x-compress
                                                            [xhtml] => application/xhtml+xml
                                                            [xht] => application/xhtml+xml
                                                            [zip] => Array
                                                                (
                                                                    [0] => application/x-zip
                                                                    [1] => application/zip
                                                                    [2] => application/x-zip-compressed
                                                                    [3] => application/s-compressed
                                                                    [4] => multipart/x-zip
                                                                )

                                                            [rar] => Array
                                                                (
                                                                    [0] => application/x-rar
                                                                    [1] => application/rar
                                                                    [2] => application/x-rar-compressed
                                                                )

                                                            [mid] => audio/midi
                                                            [midi] => audio/midi
                                                            [mpga] => audio/mpeg
                                                            [mp2] => audio/mpeg
                                                            [mp3] => Array
                                                                (
                                                                    [0] => audio/mpeg
                                                                    [1] => audio/mpg
                                                                    [2] => audio/mpeg3
                                                                    [3] => audio/mp3
                                                                )

                                                            [aif] => Array
                                                                (
                                                                    [0] => audio/x-aiff
                                                                    [1] => audio/aiff
                                                                )

                                                            [aiff] => Array
                                                                (
                                                                    [0] => audio/x-aiff
                                                                    [1] => audio/aiff
                                                                )

                                                            [aifc] => audio/x-aiff
                                                            [ram] => audio/x-pn-realaudio
                                                            [rm] => audio/x-pn-realaudio
                                                            [rpm] => audio/x-pn-realaudio-plugin
                                                            [ra] => audio/x-realaudio
                                                            [rv] => video/vnd.rn-realvideo
                                                            [wav] => Array
                                                                (
                                                                    [0] => audio/x-wav
                                                                    [1] => audio/wave
                                                                    [2] => audio/wav
                                                                )

                                                            [bmp] => Array
                                                                (
                                                                    [0] => image/bmp
                                                                    [1] => image/x-bmp
                                                                    [2] => image/x-bitmap
                                                                    [3] => image/x-xbitmap
                                                                    [4] => image/x-win-bitmap
                                                                    [5] => image/x-windows-bmp
                                                                    [6] => image/ms-bmp
                                                                    [7] => image/x-ms-bmp
                                                                    [8] => application/bmp
                                                                    [9] => application/x-bmp
                                                                    [10] => application/x-win-bitmap
                                                                )

                                                            [gif] => image/gif
                                                            [jpeg] => Array
                                                                (
                                                                    [0] => image/jpeg
                                                                    [1] => image/pjpeg
                                                                )

                                                            [jpg] => Array
                                                                (
                                                                    [0] => image/jpeg
                                                                    [1] => image/pjpeg
                                                                )

                                                            [jpe] => Array
                                                                (
                                                                    [0] => image/jpeg
                                                                    [1] => image/pjpeg
                                                                )

                                                            [png] => Array
                                                                (
                                                                    [0] => image/png
                                                                    [1] => image/x-png
                                                                )

                                                            [tiff] => image/tiff
                                                            [tif] => image/tiff
                                                            [css] => Array
                                                                (
                                                                    [0] => text/css
                                                                    [1] => text/plain
                                                                )

                                                            [html] => Array
                                                                (
                                                                    [0] => text/html
                                                                    [1] => text/plain
                                                                )

                                                            [htm] => Array
                                                                (
                                                                    [0] => text/html
                                                                    [1] => text/plain
                                                                )

                                                            [shtml] => Array
                                                                (
                                                                    [0] => text/html
                                                                    [1] => text/plain
                                                                )

                                                            [txt] => text/plain
                                                            [text] => text/plain
                                                            [log] => Array
                                                                (
                                                                    [0] => text/plain
                                                                    [1] => text/x-log
                                                                )

                                                            [rtx] => text/richtext
                                                            [rtf] => text/rtf
                                                            [xml] => Array
                                                                (
                                                                    [0] => application/xml
                                                                    [1] => text/xml
                                                                    [2] => text/plain
                                                                )

                                                            [xsl] => Array
                                                                (
                                                                    [0] => application/xml
                                                                    [1] => text/xsl
                                                                    [2] => text/xml
                                                                )

                                                            [mpeg] => video/mpeg
                                                            [mpg] => video/mpeg
                                                            [mpe] => video/mpeg
                                                            [qt] => video/quicktime
                                                            [mov] => video/quicktime
                                                            [avi] => Array
                                                                (
                                                                    [0] => video/x-msvideo
                                                                    [1] => video/msvideo
                                                                    [2] => video/avi
                                                                    [3] => application/x-troff-msvideo
                                                                )

                                                            [movie] => video/x-sgi-movie
                                                            [doc] => Array
                                                                (
                                                                    [0] => application/msword
                                                                    [1] => application/vnd.ms-office
                                                                )

                                                            [docx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                                                    [1] => application/zip
                                                                    [2] => application/msword
                                                                    [3] => application/x-zip
                                                                )

                                                            [dot] => Array
                                                                (
                                                                    [0] => application/msword
                                                                    [1] => application/vnd.ms-office
                                                                )

                                                            [dotx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                                                    [1] => application/zip
                                                                    [2] => application/msword
                                                                )

                                                            [xlsx] => Array
                                                                (
                                                                    [0] => application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
                                                                    [1] => application/zip
                                                                    [2] => application/vnd.ms-excel
                                                                    [3] => application/msword
                                                                    [4] => application/x-zip
                                                                )

                                                            [word] => Array
                                                                (
                                                                    [0] => application/msword
                                                                    [1] => application/octet-stream
                                                                )

                                                            [xl] => application/excel
                                                            [eml] => message/rfc822
                                                            [json] => Array
                                                                (
                                                                    [0] => application/json
                                                                    [1] => text/json
                                                                )

                                                            [pem] => Array
                                                                (
                                                                    [0] => application/x-x509-user-cert
                                                                    [1] => application/x-pem-file
                                                                    [2] => application/octet-stream
                                                                )

                                                            [p10] => Array
                                                                (
                                                                    [0] => application/x-pkcs10
                                                                    [1] => application/pkcs10
                                                                )

                                                            [p12] => application/x-pkcs12
                                                            [p7a] => application/x-pkcs7-signature
                                                            [p7c] => Array
                                                                (
                                                                    [0] => application/pkcs7-mime
                                                                    [1] => application/x-pkcs7-mime
                                                                )

                                                            [p7m] => Array
                                                                (
                                                                    [0] => application/pkcs7-mime
                                                                    [1] => application/x-pkcs7-mime
                                                                )

                                                            [p7r] => application/x-pkcs7-certreqresp
                                                            [p7s] => application/pkcs7-signature
                                                            [crt] => Array
                                                                (
                                                                    [0] => application/x-x509-ca-cert
                                                                    [1] => application/x-x509-user-cert
                                                                    [2] => application/pkix-cert
                                                                )

                                                            [crl] => Array
                                                                (
                                                                    [0] => application/pkix-crl
                                                                    [1] => application/pkcs-crl
                                                                )

                                                            [der] => application/x-x509-ca-cert
                                                            [kdb] => application/octet-stream
                                                            [pgp] => application/pgp
                                                            [gpg] => application/gpg-keys
                                                            [sst] => application/octet-stream
                                                            [csr] => application/octet-stream
                                                            [rsa] => application/x-pkcs7
                                                            [cer] => Array
                                                                (
                                                                    [0] => application/pkix-cert
                                                                    [1] => application/x-x509-ca-cert
                                                                )

                                                            [3g2] => video/3gpp2
                                                            [3gp] => video/3gp
                                                            [mp4] => video/mp4
                                                            [m4a] => audio/x-m4a
                                                            [f4v] => video/mp4
                                                            [webm] => video/webm
                                                            [aac] => audio/x-acc
                                                            [m4u] => application/vnd.mpegurl
                                                            [m3u] => text/plain
                                                            [xspf] => application/xspf+xml
                                                            [vlc] => application/videolan
                                                            [wmv] => Array
                                                                (
                                                                    [0] => video/x-ms-wmv
                                                                    [1] => video/x-ms-asf
                                                                )

                                                            [au] => audio/x-au
                                                            [ac3] => audio/ac3
                                                            [flac] => audio/x-flac
                                                            [ogg] => audio/ogg
                                                            [kmz] => Array
                                                                (
                                                                    [0] => application/vnd.google-earth.kmz
                                                                    [1] => application/zip
                                                                    [2] => application/x-zip
                                                                )

                                                            [kml] => Array
                                                                (
                                                                    [0] => application/vnd.google-earth.kml+xml
                                                                    [1] => application/xml
                                                                    [2] => text/xml
                                                                )

                                                            [ics] => text/calendar
                                                            [ical] => text/calendar
                                                            [zsh] => text/x-scriptzsh
                                                            [7zip] => Array
                                                                (
                                                                    [0] => application/x-compressed
                                                                    [1] => application/x-zip-compressed
                                                                    [2] => application/zip
                                                                    [3] => multipart/x-zip
                                                                )

                                                            [cdr] => Array
                                                                (
                                                                    [0] => application/cdr
                                                                    [1] => application/coreldraw
                                                                    [2] => application/x-cdr
                                                                    [3] => application/x-coreldraw
                                                                    [4] => image/cdr
                                                                    [5] => image/x-cdr
                                                                    [6] => zz-application/zz-winassoc-cdr
                                                                )

                                                            [wma] => Array
                                                                (
                                                                    [0] => audio/x-ms-wma
                                                                    [1] => video/x-ms-asf
                                                                )

                                                            [jar] => Array
                                                                (
                                                                    [0] => application/java-archive
                                                                    [1] => application/x-java-application
                                                                    [2] => application/x-jar
                                                                    [3] => application/x-compressed
                                                                )

                                                            [svg] => Array
                                                                (
                                                                    [0] => image/svg+xml
                                                                    [1] => application/xml
                                                                    [2] => text/xml
                                                                )

                                                            [vcf] => text/x-vcard
                                                        )

                                                    [mime_type:protected] => text/html
                                                    [enable_profiler] => 
                                                    [_zlib_oc:protected] => 
                                                    [_compress_output:protected] => 
                                                    [_profiler_sections:protected] => Array
                                                        (
                                                        )

                                                    [parse_exec_vars] => 1
                                                )

                                            [security] => CI_Security Object
                                                (
                                                    [filename_bad_chars] => Array
                                                        (
                                                            [0] => ../
                                                            [1] => <!--
                                                            [2] => -->
                                                            [3] => <
                                                            [4] => >
                                                            [5] => '
                                                            [6] => "
                                                            [7] => &
                                                            [8] => $
                                                            [9] => #
                                                            [10] => {
                                                            [11] => }
                                                            [12] => [
                                                            [13] => ]
                                                            [14] => =
                                                            [15] => ;
                                                            [16] => ?
                                                            [17] => %20
                                                            [18] => %22
                                                            [19] => %3c
                                                            [20] => %253c
                                                            [21] => %3e
                                                            [22] => %0e
                                                            [23] => %28
                                                            [24] => %29
                                                            [25] => %2528
                                                            [26] => %26
                                                            [27] => %24
                                                            [28] => %3f
                                                            [29] => %3b
                                                            [30] => %3d
                                                        )

                                                    [charset] => UTF-8
                                                    [_xss_hash:protected] => 
                                                    [_csrf_hash:protected] => 
                                                    [_csrf_expire:protected] => 7200
                                                    [_csrf_token_name:protected] => ci_csrf_token
                                                    [_csrf_cookie_name:protected] => ci_csrf_token
                                                    [_never_allowed_str:protected] => Array
                                                        (
                                                            [document.cookie] => [removed]
                                                            [document.write] => [removed]
                                                            [.parentNode] => [removed]
                                                            [.innerHTML] => [removed]
                                                            [-moz-binding] => [removed]
                                                            [<!--] => &lt;!--
                                                            [-->] => --&gt;
                                                            [<![CDATA[] => &lt;![CDATA[
                                                            [<comment>] => &lt;comment&gt;
                                                        )

                                                    [_never_allowed_regex:protected] => Array
                                                        (
                                                            [0] => javascript\s*:
                                                            [1] => (document|(document\.)?window)\.(location|on\w*)
                                                            [2] => expression\s*(\(|&\#40;)
                                                            [3] => vbscript\s*:
                                                            [4] => wscript\s*:
                                                            [5] => jscript\s*:
                                                            [6] => vbs\s*:
                                                            [7] => Redirect\s+30\d
                                                            [8] => (["'])?data\s*:[^\1]*?base64[^\1]*?,[^\1]*?\1?
                                                        )

                                                )

                                            [input] => CI_Input Object
                                                (
                                                    [ip_address] => 
                                                    [_allow_get_array:protected] => 1
                                                    [_standardize_newlines:protected] => 
                                                    [_enable_xss:protected] => 
                                                    [_enable_csrf:protected] => 
                                                    [headers:protected] => Array
                                                        (
                                                        )

                                                    [_input_stream:protected] => 
                                                    [security] => CI_Security Object
                                                        (
                                                            [filename_bad_chars] => Array
                                                                (
                                                                    [0] => ../
                                                                    [1] => <!--
                                                                    [2] => -->
                                                                    [3] => <
                                                                    [4] => >
                                                                    [5] => '
                                                                    [6] => "
                                                                    [7] => &
                                                                    [8] => $
                                                                    [9] => #
                                                                    [10] => {
                                                                    [11] => }
                                                                    [12] => [
                                                                    [13] => ]
                                                                    [14] => =
                                                                    [15] => ;
                                                                    [16] => ?
                                                                    [17] => %20
                                                                    [18] => %22
                                                                    [19] => %3c
                                                                    [20] => %253c
                                                                    [21] => %3e
                                                                    [22] => %0e
                                                                    [23] => %28
                                                                    [24] => %29
                                                                    [25] => %2528
                                                                    [26] => %26
                                                                    [27] => %24
                                                                    [28] => %3f
                                                                    [29] => %3b
                                                                    [30] => %3d
                                                                )

                                                            [charset] => UTF-8
                                                            [_xss_hash:protected] => 
                                                            [_csrf_hash:protected] => 
                                                            [_csrf_expire:protected] => 7200
                                                            [_csrf_token_name:protected] => ci_csrf_token
                                                            [_csrf_cookie_name:protected] => ci_csrf_token
                                                            [_never_allowed_str:protected] => Array
                                                                (
                                                                    [document.cookie] => [removed]
                                                                    [document.write] => [removed]
                                                                    [.parentNode] => [removed]
                                                                    [.innerHTML] => [removed]
                                                                    [-moz-binding] => [removed]
                                                                    [<!--] => &lt;!--
                                                                    [-->] => --&gt;
                                                                    [<![CDATA[] => &lt;![CDATA[
                                                                    [<comment>] => &lt;comment&gt;
                                                                )

                                                            [_never_allowed_regex:protected] => Array
                                                                (
                                                                    [0] => javascript\s*:
                                                                    [1] => (document|(document\.)?window)\.(location|on\w*)
                                                                    [2] => expression\s*(\(|&\#40;)
                                                                    [3] => vbscript\s*:
                                                                    [4] => wscript\s*:
                                                                    [5] => jscript\s*:
                                                                    [6] => vbs\s*:
                                                                    [7] => Redirect\s+30\d
                                                                    [8] => (["'])?data\s*:[^\1]*?base64[^\1]*?,[^\1]*?\1?
                                                                )

                                                        )

                                                    [uni] => CI_Utf8 Object
                                                        (
                                                        )

                                                )

                                            [lang] => CI_Lang Object
                                                (
                                                    [language] => Array
                                                        (
                                                            [slot_main_category_title] => 슬롯 게임 리스트
                                                            [profile_category_title] => 내 정보
                                                            [e_wallet_category_title] => 전자지갑
                                                            [comp_category_title] => 콤프 포인트
                                                            [coupons_category_title] => 쿠폰
                                                            [affiliate_category_title] => 파트너
                                                            [about_us_category_title] => About Us
                                                            [help_category_title] => HELP
                                                            [terms_of_service_category_title] => Terms of Service
                                                            [privacy_policy_category_title] => Privacy Policy
                                                            [promotion_category_title] => 이벤트
                                                            [vip_club_category_title] => VIP Club
                                                            [site_map_category_title] => Site Map
                                                            [contact_us_category_title] => Contact Us
                                                            [bao8bet_casino] => Max Live
                                                            [live_casino] => 라이브 게임
                                                            [mg_slot] => MG 슬롯
                                                            [pt_slot] => PT 슬롯
                                                            [log_in] => 로그인
                                                            [log_out] => 로그아웃
                                                            [join_now] => 회원가입
                                                            [promotion] => 이벤트
                                                            [vip_club] => VIP Club
                                                            [help] => help
                                                            [lost_login] => Lost Login?
                                                            [e_wallet] => 전자지갑
                                                            [wallet] => 전자지갑
                                                            [mg] => MG Casino
                                                            [pt] => PT Casino
                                                            [deposit] => 입금신청
                                                            [withdraw] => 출금신청
                                                            [withdrawal] => 출금
                                                            [transfer] => 머니이동
                                                            [cny] => 원
                                                            [amount] => 금액
                                                            [member] => Member
                                                            [my_profile] => 내정보
                                                            [coupons] => 쿠폰
                                                            [affiliate] => 파트너
                                                            [jackpots] => JACKPOTS
                                                            [play_now] => 플레이
                                                            [need_help] => 도움이 필요하세요?
                                                            [call_us] => 전화
                                                            [about_us] => About Us
                                                            [banking] => 은행
                                                            [affiliate_program] => 파트너 프로그램
                                                            [contact_us] => Contact Us
                                                            [qq] => 라인
                                                            [skype] => SKYPE
                                                            [live_chat] => 실시간 채팅
                                                            [copyright] => Copyright 2015 © <strong>MAX Live.</strong> All Rights Reserved.
                                                            [terms_of_service] => Terms of Service
                                                            [privacy_policy] => Privacy Policy
                                                            [site_map] => Site Map
                                                            [bronze] => 브론즈
                                                            [silver] => 실버
                                                            [gold] => 골드
                                                            [platinum] => 플레티넘
                                                            [level] => 레벨
                                                            [level_point] => 레벨 포인트
                                                            [comp_point] => 콤프 포인트
                                                            [country] => Country
                                                            [member_since] => Member Since
                                                            [last_log_in] => Last log in
                                                            [email] => e-mail
                                                            [user_name] => 유저 ID
                                                            [gender] => 성별
                                                            [messenger] => 메신저
                                                            [mobile_number] => 휴대폰번호
                                                            [cancel] => 취소
                                                            [history] => 히스토리
                                                            [view_all] => 전체보기
                                                            [type] => 타입
                                                            [bonus] => 보너스
                                                            [date] => Date
                                                            [status] => 상태
                                                            [action] => Action
                                                            [your_balance] => 보유금액
                                                            [tos_contents] => 
								
								
								<h2>Welcome to BaoFa Casino. </h2>
								
								<br>We want you to enjoy the time you spend here. As this is an online gaming and gambling website, there are a number of laws and regulations that regulate our activities. <br>
								These rules are explained as clearly as possible in these Terms of Service (‘the Rules’).<br>
								This is how we let you know what you can and can&#39;t do on BaoFa Entertainment Limited, how we will use your personal information and how we manage the Site. <br>
								
								<h3>The Basics</h3>
								The Rules are a binding agreement between us and by clicking that you accept the Rules when creating your account you agree that you have read and accepted the Rules. If you do not agree with the Rules, you should not register or continue to use the Website. <br>
								Everything changes and we may change these Rules at any time. Where that change limits your current rights we will contact you and inform you of the new Rules. <br>
								If the change does not limit your current rights then we will make the change to the Rules on the Site and if you keep using the Site after that change, this provides your deemed acceptance of the new Rules.
								<br><br>

								<h4>1. Definitions</h4>
								You will see the following terms used throughout the Rules:<br>

								<table width="720" id="tabledText" class="table_bottom" border="0" cellspacing="0" cellpadding="0">
									<tbody><tr>
										<td width="180" align="left" valign="top">Games</td> 
										<td align="left" valign="top">are Casino, Live Casino, any other game on our Site (including mobile or any other platform) and ’Game’ can mean any one of them. We can remove or add Games to the Site at any time;</td> 
									</tr>									
									<tr>
										<td align="left" valign="top">Rules</td>	
										<td align="left" valign="top">are these terms, conditions and rules which you agree to when using the Site;</td>			
									</tr>									
									<tr>
										<td align="left" valign="top">Site</td>
										<td align="left" valign="top">Our any other website;</td>
									</tr>									
									<tr>	
										<td align="left" valign="top">Username and Password</td>
										<td align="left" valign="top">&nbsp;the username and password which you choose on registration with the Online Casino;</td>
									</tr>									
									<tr>	
										<td align="left" valign="top">We</td>
										<td align="left" valign="top">The Site is run by BaoFa Group Limited, a company registered in Cambodia;</td>
									</tr>									
									<tr> 
										<td align="left" valign="top">You</td>
										<td align="left" valign="top">is you using the Site. “Your” has its usual meaning in relation to you;</td> 
									</tr>									
									<tr> 
										<td align="left" valign="top">Your Account</td>
										<td align="left" valign="top"> is your player account on the Sit;</td> 
									</tr>									
									</tbody></table>
								
								<h4>2. Licenses</h4>
								
								As we provide online gaming, by law, we need to tell you the following:<br>
								We are licensed and regulated in Philippine and Cambodia<br><br>

								<h4>3. Who Can Play</h4>
								To play the Games on the Site, you must be:<br><br>

								•	over 18 years of age or above the legal age for gambling in the country you are playing from;<br>
								•	an actual person. You cannot be a company or other legal entity;<br>
								•	playing the Games for yourself and in a non-professional capacity;<br>
								•	legally allowed to play Games on the Site;<br>
								•	not resident in USA, Korea, Philippine, Cambodia, Thailand <br><br>
								
								<h4>4. How you can play</h4>
								4.1 Register<br><br>

								4.1.1 Click on the “Register” tab.<br><br>

								4.1.2 Accurately complete the registration form including:<br>
								✔ Your User ID;<br>
								✔ Your full name;<br>
								✔ Your valid e-mail address;<br>
								✔ Your mobile number;<br>
								✔ Your gender;<br>
								✔ Select and confirm password; and<br><br>

								4.1.3 Click on “Open Account” tab to confirm that the registration information in the form is the correct information and that you agree to the Rules.<br><br>

								4.1.4 You will then have to verify your e-mail address by clicking on the link received in your registration e-mail inbox.<br><br>

								4.1.5 You can now log-in using your registered log-in details.<br><br>

								4.2 Pay<br><br>

								When you are ready to play, you need to deposit money into Your Account. You do this by:<br>
								✔ Clicking on “Deposit” on the Site;<br>
								✔ Selecting Your payment method;<br>
								✔ Completing the information required for that payment method;<br>
								✔ Confirming that information is accurate by clicking on “Deposit”.<br><br>

								4.3 Play<br><br>

								4.3.1 We have a lot of games on the Site. Simply go to the games lobby and start playing by clicking on the game of your choice.<br><br>

								4.3.2 You must always play the Games on the Site in line with these Rules and any special Rules that apply to Games offered on the Site. <br>
								Different Rules apply to different Games…. (Where such Rules apply, please click on the link for each Game to see to the rules that apply to that Game):<br>
								✔ Casino https://www.baofa88.com/<br>
								✔ Live casino https://www.baofa88.com/live/<br><br>

								4.4 Cancellation<br><br>

								4.4.1 We do not accept cancellations of bets or stakes on any Games except for in exceptional circumstances. Such cancellation is solely at our discretion.<br><br>

								4.4.2 We do not issue refunds except for in exceptional circumstances. This is solely at our discretion.<br><br>
								
								<h4>5. General Rules for You</h4>
								
								5.1 You must register and play on your own behalf only and not on behalf of anyone else.<br><br>

								5.2 You must keep your login details secure and not share them with anyone. If you share them, even unintentionally, you are responsible for any abuse or misuse of your account.<br><br>

								5.3 You must keep you registration information up to date at all times.<br><br>

								5.4 If you realise that the information provided at registration is incorrect, you must tell us immediately or immediately amend your information.<br><br>

								5.5 It is your responsibility to know if your activity on the Site is legal in the country from which you are playing.<br><br>

								5.6 You are only allowed one account on this Site. If you have more than one account you must immediately tell us.<br><br>

								5.7 Only one account for each household is allowed. If you realise that there is more than one account at your household, you must immediately tell us.<br><br>

								5.8 You may play any game on the Site, as long as you have enough money on your account.<br><br>

								5.9 You are not allowed to transfer or receive funds from one account to another and /or to transfer, sell or buy accounts.<br><br>

								5.10 You agree that we can check you are who you claim to be. You agree to give us all documents we request to prove your registration information and payment details, such as (by way of example only) a copy of your passport, utility bills or bank statements.<br><br>

								5.11 You cannot use any technical error or vulnerability to your advantage. We will be entitled to cancel and reclaim all winnings gained in this manner.<br><br>

								5.12 You will not be involved in any fraudulent, collusive, fixing or other unlawful activity in relation to your (or third party) use of the Site. You shall not use any software assisted methods or techniques or hardware devices in aid of your participation of the Games on the Site.<br><br>

								5.13 You agree that we may also share your information with other people or businesses in order to carry out our business and deliver the Site to you.<br><br>
								
								<h4>6. What we can do</h4>
								
								6.1 We can refuse to open an account for any reason.

								6.2 We can suspend or close your account for any breach or suspected breach of this Agreement or other valid reason. Upon closure of Your Account, the full balance in Your Account will be paid to you unless there is a reason for such funds to be confiscated.<br><br>

								Whilst we understand that mistakes and typos happen, if we find the information given at the time of registration to be incorrect, this gives us the right to close Your Account and keep any funds in it. Likewise, if you fail to pass any personal identification verification procedures we will also close your account and withhold any winnings.<br><br>

								6.4 If we find there is more than one account registered for your household we will block or close any accounts for that household.<br><br>

								<h4>7. Payment Rules</h4>
								
								7.1 Making Deposits<br><br>

								Payment methods can be found under both “My Account” and “Deposit” pages of the Site. The payment methods made available to you may change. Some payment methods may not be available in all countries.<br>

								When choosing a payment method you agree to the terms of that payment method and agree to any charges that apply and that the payment method is valid and that the payment account or card belongs to you and you have the right to use the payment method.<br>

								We do not accept cash directly or cash delivered to any payment solution provider.<br><br>

								7.2 Payouts<br><br>

								When the outcome of a Game you take part in is determined or, when we confirm the result of an event, any winnings will be made available to you on Your Account.<br>

								If we mistakenly credit Your Account with winnings that do not belong to you for any reason, these will be taken back from Your Account. 
								If you have withdrawn these winnings before we become aware of this error, you must immediately inform us and will be required to pay this back. If you do not we will take all legal action available to us to recover this debt.<br><br>

								7.3 Withdrawals<br><br>

								You may withdraw any amount up to the “Available to Bet” balance in Your Account by issuing a valid notice of withdrawal. Notices for withdrawals must be made on the Site only.<br>

								If you want to withdraw all your funds, you must first cancel any outstanding stakes.<br>

								You agree that funds in Your Account must only be used for playing the Games found on the Site. If you request a withdrawal without turning over an amount that is equal or more than the amount deposited we can charge a fee on this withdrawal.<br>
								We can reject a withdrawal request if we suspect that funds are being withdrawn for any fraudulent or money laundering reasons.<br>

								We may request that you redirect your withdrawal or cancel it or request that it is redirected to a different method of withdrawal in accordance with anti-money laundering polices and/or regulation.<br>
								Cancellation of a withdrawal (whether this was made by you or us) does not entitle you to any compensation should you choose to play with the funds in Your Account before any withdrawal is completed.<br><br>

								7.4 Chargebacks<br><br>

								If a chargeback on a card or depositing method you have used is requested by the payment method provider, we may take the following steps:<br>
								✔ We may block Your Account;<br>
								✔ We may take any such action as we are entitled to by law;<br>
								✔ A chargeback notice may be issued and sent to you, using your registration details;<br>
								✔ We will use the same payment method as chosen by you when placing a deposit in order to issue the chargeback;<br><br>
								If we are unable to confirm your identity and the payment method used in order to credit the account in question, we will send out two reminder emails and these will be subject to an administrative fee of hundred (100) CNY each, withdrawn from Your Account funds which are unrelated to the chargeback.
								The balance of Your Account may turn negative in cases of chargeback.<br><br>
								
								<h4>8. Closing Your Account</h4>
								
								8.1 You can close Your Account at any time, by contacting support directly on support@baofa88.com<br><br>

								8.2 When you close our Account:<br>
								✔ You must first cancel any outstanding offers for stakes that you have made;<br>
								✔ You must contact support and specifically request for the closing of Your Account;<br>
								✔ We will transfer all funds from Your Account (subject to the deduction of relevant withdrawal charges).<br><br>

								8.3 If you want to recover funds from closed, blocked or excluded accounts, you need to contact support.<br><br>

								8.4 If you are closing Your Account because you have a problem with gambling addiction please refer to our responsible gamingrules.<br><br>
								
								<h4>9. Dormant & Inactive Accounts</h4>
								
								9.1 An inactive account is an account, having a real money balance that has not been accessed for an uninterrupted period of 12 months.<br><br>

								9.2 A dormant account is an account, having a real money balance that has not been accessed for an uninterrupted period of 30 Months.<br><br>

								9.3 If, after we began charging Your Account with the administrative fee, you log-in before Your Account becomes dormant, Your Account will no longer be charged the administrative fee. You may also request a full refund of the administrative fees charged up until then by contacting support. The period of inactivity starts to run again from your last log-in date.<br><br>

								9.4 If, Your Account becomes dormant, and we are still unable to reach you, we, if required in accordance with the applicable law (depending on where you are resident), shall transfer your remaining balance to the relevant regulatory body.<br><br>
								
								<h4>10. Bonuses and Freespins</h4>
								
								10.1 You can only receive one Bonuses/Freespins per person, family, household,  e-mail address, credit card number and / or IP address.<br><br>

								10.2 Deposit and reload bonuses must be manually activated by you in Your Account. You can do this after logging into Your Account and depositing the amount required to access the bonus. <br>
								Reload or deposit bonuses can only be activated when real money is available in Your Account. If you wager any real money deposited prior to activating the bonus it will no longer be possible to activate the bonus.<br><br>

								10.3 When you claim any Bonus or Free spins any deposit, the Bonus and / or Free Spins and all winnings generated from them will remain as bonus money and may not be withdrawn or wagered on other products until wagering requirements are met.<br>
								All Bonus and / or Free Spins must be wagered a minimum of 35 times within 7 days of the Bonus and / or Free spins being claimed unless stated otherwise in the terms related to that bonus. Risk-free bets on any Game (i.e. betting in proportions on different outcomes in the same hand to create "action" without risk) do not qualify for this wagering requirement. <br>
								Examples of risk-free bets include betting on red and black simultaneously in Roulette, and betting player and banker simultaneously in Baccarat. Any players found to be colluding, for example, one person betting on the player, the other betting on the banker will have their accounts closed indefinitely, and all money frozen. Failure to meet these wagering requirements will result in the forfeit of the Bonus and any winnings that have resulted from the Bonus.<br><br>

								10.4 If you cancel the Bonus / Free Spins you will lose the Bonus / Free spins and all winnings generated from the Bonus / Free Spins.<br><br>

								10.5 We have the right to refuse any player the right to Bonus or to alter the Bonus (including cancellation), if we believe that:<br>
								• the Bonus is being abused (our definition of abuse includes a player making use of promotional offers without ever risking their own funds);<br>
								• technical issues have occurred in relation to the Bonus;<br>
								• the Bonus is, for any reason, not able to be conducted as planned.<br><br>

								10.6 If there is any evidence of abuse or fraud, we will close Your Account and confiscate any existing funds.<br><br>
								
								<h4>11. How to Complain</h4>
								
								11.1 Our aim is to give the best customer experience in the industry, therefore we hope that you should have no complaints. However, if in the off chance that you do, this is the way to do it.<br>
								✔ E-mail us on: support@baofa88.com;<br><br>

								11.2 So that we can deal with your complaint quickly, the complaint must contain clear information about your identity as well as all relevant details giving rise to the complaint. We will use best efforts to promptly resolve a reported matter and reach an amicable settlement.<br><br>

								11.3 Any claim you might have regarding any transaction must be made within six months after the transaction, payment and/or settlement took place/should have taken place; otherwise we will not consider the claim. Once a claim is received, we will review any queried or disputed transactions and let you know the outcome. Our decision on this is final, in simple terms, what we say goes.<br><br>

								11.4 If for some reason you don’t like what we say in relation to your complaint:<br><br>
								
								<h4>12. Privacy Policy</h4>
								
								You can read our Privacy Statement here. You should be aware that by acceptance of the Rules includes full acceptance of the terms of our Privacy Statement. We therefore ask that you read the Privacy Statement carefully.<br><br>
								
								<h4>13. Your Liability to Us</h4>
								
								13.1 You enter the Site and participate in the Games at your own risk. The Site and the Games are provided ’as is’. The only promises we make in relation to the Site are detailed in these rules. We do not warrant (in simple language, we do not legally promise) that:<br>

								✔ The software or the Site is fit for purpose and free from errors;<br>
								✔ The Site and/or Games will be accessible without interruptions;<br><br>

								13.2 We shall not be liable for anything, this includes any loss, costs, expenses or damages, whether direct, indirect, special, consequential, incidental or otherwise arising in relation to your use of the Site or your participation in the Games.<br><br>

								13.3 You hereby agree to fully indemnify us (in simple language, compensate us for any loss) and directors, employees, partners, and service providers for any cost, expense, loss, damages, claims and liabilities howsoever caused that may arise in relation to your use of the Site or participation in the Games. If you don’t agree to this, you should not use the Site.
								
								<h4>14. Breaches, penalties and termination</h4>
								
								14.1 If we suspect that you have breached these Rules, we may refuse to open, suspend or close Your Account. We may also withhold any money in Your Account (including the deposit) and set off any money or damages due to us against the money in Your Account.<br><br>

								14.2 We also have the right to freeze or terminate Your Account or cancel any stakes if:<br>

								• We suspect that you are engaged in illegal or fraudulent activities;<br>
								• You are having problems with creditors or otherwise which are detrimental to our business.<br><br>

								14.3 Our decision is final.<br><br>
								
								<h4>15. NOTICES</h4>
								
								You agree to receive communications from us in an electronic form. Electronic communications may be posted on the pages within the Website and/or the messages/help files of your client application, and/or delivered to your e-mail address. All communications in either electronic or paper format will be considered to be in "writing" and to have been received no later than five business days after posting or dissemination, whether or not you have received or retrieved the Communication. We reserve the right, but assume no obligation, to provide communications in paper format. 

								
								
								
								
								

								<br><br>
								
								

								<br><br>




                                                        )

                                                    [is_loaded] => Array
                                                        (
                                                            [message_lang.php] => english
                                                            [terms_of_service_lang.php] => english
                                                        )

                                                )

                                            [load] => CI_Loader Object
                                                (
                                                    [_ci_ob_level:protected] => 0
                                                    [_ci_view_paths:protected] => Array
                                                        (
                                                            [/www/game_offline/application/views/] => 1
                                                        )

                                                    [_ci_library_paths:protected] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                            [1] => /www/game_offline/system/
                                                        )

                                                    [_ci_model_paths:protected] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                        )

                                                    [_ci_helper_paths:protected] => Array
                                                        (
                                                            [0] => /www/game_offline/application/
                                                            [1] => /www/game_offline/system/
                                                        )

                                                    [_ci_cached_vars:protected] => Array
                                                        (
                                                        )

                                                    [_ci_classes:protected] => Array
                                                        (
                                                            [benchmark] => Benchmark
                                                            [hooks] => Hooks
                                                            [config] => Config
                                                            [log] => Log
                                                            [utf8] => Utf8
                                                            [uri] => URI
                                                            [router] => Router
                                                            [output] => Output
                                                            [security] => Security
                                                            [input] => Input
                                                            [lang] => Lang
                                                            [loader] => Loader
                                                            [session] => Session
                                                            [session_manager] => Session_manager
                                                            [agent] => User_agent
                                                            [model] => Model
                                                            [game_play_service] => Game_play_service
                                                            [microgame] => Microgame
                                                            [exceptions] => Exceptions
                                                        )

                                                    [_ci_models:protected] => Array
                                                        (
                                                            [0] => game_play_update_log
                                                            [1] => user
                                                            [2] => game_play
                                                            [3] => wallet
                                                            [4] => CCP
                                                        )

                                                    [_ci_helpers:protected] => Array
                                                        (
                                                            [baofa_helper] => 1
                                                            [cookie_helper] => 1
                                                            [language_helper] => 1
                                                            [url_helper] => 1
                                                            [file_helper] => 1
                                                        )

                                                    [_ci_varmap:protected] => Array
                                                        (
                                                            [unit_test] => unit
                                                            [user_agent] => agent
                                                        )

                                                )

                                            [session] => CI_Session Object
                                                (
                                                    [userdata] => 
                                                    [_driver:protected] => files
                                                    [_config:protected] => 
                                                )

                                            [session_manager] => Session_manager Object
                                                (
                                                    [CI:Session_manager:private] => Batch_process Object
 *RECURSION*
                                                    [user_session_keys] => Array
                                                        (
                                                            [0] => user_no
                                                            [1] => user_id
                                                            [2] => user_name
                                                            [3] => user_level
                                                            [4] => user_type
                                                            [5] => ip
                                                            [6] => login_time
                                                            [7] => login_status
                                                            [8] => lang
                                                            [9] => pt_login_session
                                                            [10] => mg_login_session
                                                            [11] => session_id
                                                        )

                                                    [admin_session_keys] => Array
                                                        (
                                                            [0] => admin_id
                                                            [1] => admin_name
                                                            [2] => ip
                                                            [3] => login_time
                                                            [4] => login_status
                                                        )

                                                    [game_session_keys] => Array
                                                        (
                                                            [0] => mg_session_status
                                                            [1] => pt_session_status
                                                        )

                                                )

                                            [agent] => CI_User_agent Object
                                                (
                                                    [agent] => 
                                                    [is_browser] => 
                                                    [is_robot] => 
                                                    [is_mobile] => 
                                                    [languages] => Array
                                                        (
                                                            [0] => Undefined
                                                        )

                                                    [charsets] => Array
                                                        (
                                                        )

                                                    [platforms] => Array
                                                        (
                                                        )

                                                    [browsers] => Array
                                                        (
                                                        )

                                                    [mobiles] => Array
                                                        (
                                                        )

                                                    [robots] => Array
                                                        (
                                                        )

                                                    [platform] => 
                                                    [browser] => 
                                                    [version] => 
                                                    [mobile] => 
                                                    [robot] => 
                                                    [referer] => 
                                                )

                                            [db] => CI_DB_mysqli_driver Object
                                                (
                                                    [dbdriver] => mysqli
                                                    [compress] => 
                                                    [delete_hack] => 1
                                                    [stricton] => 
                                                    [_escape_char:protected] => `
                                                    [return_delete_sql:protected] => 
                                                    [reset_delete_data:protected] => 
                                                    [qb_select:protected] => Array
                                                        (
                                                        )

                                                    [qb_distinct:protected] => 
                                                    [qb_from:protected] => Array
                                                        (
                                                        )

                                                    [qb_join:protected] => Array
                                                        (
                                                        )

                                                    [qb_where:protected] => Array
                                                        (
                                                        )

                                                    [qb_groupby:protected] => Array
                                                        (
                                                        )

                                                    [qb_having:protected] => Array
                                                        (
                                                        )

                                                    [qb_keys:protected] => Array
                                                        (
                                                        )

                                                    [qb_limit:protected] => 
                                                    [qb_offset:protected] => 
                                                    [qb_orderby:protected] => Array
                                                        (
                                                        )

                                                    [qb_set:protected] => Array
                                                        (
                                                        )

                                                    [qb_aliased_tables:protected] => Array
                                                        (
                                                        )

                                                    [qb_where_group_started:protected] => 
                                                    [qb_where_group_count:protected] => 0
                                                    [qb_caching:protected] => 
                                                    [qb_cache_exists:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_select:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_from:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_join:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_where:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_groupby:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_having:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_orderby:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_set:protected] => Array
                                                        (
                                                        )

                                                    [qb_no_escape:protected] => Array
                                                        (
                                                        )

                                                    [qb_cache_no_escape:protected] => Array
                                                        (
                                                        )

                                                    [dsn] => 
                                                    [username] => root
                                                    [password] => DF0Oc$as8H
                                                    [hostname] => 52.193.101.231
                                                    [database] => db_offline
                                                    [subdriver] => 
                                                    [dbprefix] => 
                                                    [char_set] => utf8
                                                    [dbcollat] => utf8_general_ci
                                                    [autoinit] => 1
                                                    [encrypt] => 
                                                    [swap_pre] => 
                                                    [port] => 
                                                    [pconnect] => 
                                                    [conn_id] => mysqli Object
                                                        (
                                                            [affected_rows] => -1
                                                            [client_info] => 5.5.41-MariaDB
                                                            [client_version] => 50541
                                                            [connect_errno] => 0
                                                            [connect_error] => 
                                                            [errno] => 0
                                                            [error] => 
                                                            [error_list] => Array
                                                                (
                                                                )

                                                            [field_count] => 0
                                                            [host_info] => 52.193.101.231 via TCP/IP
                                                            [info] => 
                                                            [insert_id] => 0
                                                            [server_info] => 5.6.28
                                                            [server_version] => 50628
                                                            [stat] => Uptime: 72338  Threads: 3  Questions: 87296  Slow queries: 0  Opens: 373  Flush tables: 1  Open tables: 111  Queries per second avg: 1.206
                                                            [sqlstate] => 00000
                                                            [protocol_version] => 10
                                                            [thread_id] => 17879
                                                            [warning_count] => 0
                                                        )

                                                    [result_id] => mysqli_result Object
                                                        (
                                                            [current_field] => 0
                                                            [field_count] => 5
                                                            [lengths] => 
                                                            [num_rows] => 1
                                                            [type] => 0
                                                        )

                                                    [db_debug] => 1
                                                    [benchmark] => 0.012561082839966
                                                    [query_count] => 1
                                                    [bind_marker] => ?
                                                    [save_queries] => 1
                                                    [queries] => Array
                                                        (
                                                            [0] => SELECT *
FROM `comp_conversion_policy`
                                                        )

                                                    [query_times] => Array
                                                        (
                                                            [0] => 0.012561082839966
                                                        )

                                                    [data_cache] => Array
                                                        (
                                                        )

                                                    [trans_enabled] => 1
                                                    [trans_strict] => 1
                                                    [_trans_depth:protected] => 1
                                                    [_trans_status:protected] => 1
                                                    [_trans_failure:protected] => 
                                                    [cache_on] => 
                                                    [cachedir] => 
                                                    [cache_autodel] => 
                                                    [CACHE] => CI_DB_Cache Object
                                                        (
                                                            [CI] => Batch_process Object
 *RECURSION*
                                                            [db] => CI_DB_mysqli_driver Object
 *RECURSION*
                                                        )

                                                    [_protect_identifiers:protected] => 1
                                                    [_reserved_identifiers:protected] => Array
                                                        (
                                                            [0] => *
                                                        )

                                                    [_like_escape_str:protected] =>  ESCAPE '%s' 
                                                    [_like_escape_chr:protected] => !
                                                    [_random_keyword:protected] => Array
                                                        (
                                                            [0] => RAND()
                                                            [1] => RAND(%d)
                                                        )

                                                    [_count_string:protected] => SELECT COUNT(*) AS 
                                                    [failover] => Array
                                                        (
                                                        )

                                                )

                                            [game_play_update_log] => Game_play_update_log Object
                                                (
                                                    [table] => game_play_update_log
                                                )

                                            [user] => User Object
                                                (
                                                    [table] => user
                                                )

                                            [game_play] => Game_play Object
                                                (
                                                    [table] => game_play
                                                )

                                            [wallet] => Wallet Object
                                                (
                                                    [table] => wallet
                                                )

                                            [CCP] => Comp_conversion_policy Object
                                                (
                                                    [table] => comp_conversion_policy
                                                )

                                            [game_play_service] => Game_play_service Object
                                                (
                                                    [CI] => Batch_process Object
 *RECURSION*
                                                    [message] => 
                                                    [update_row_count] => 0
                                                    [comp_conversion_policy] => stdClass Object
                                                        (
                                                            [comp_conversion_policy_no] => 6
                                                            [slot_conversion_1p] => 1
                                                            [non_slot_conversion_1p] => 1.1
                                                            [live_conversion_1p] => 1
                                                            [reg_date] => 1449989040
                                                        )

                                                )

                                            [microgame] => Microgame Object
                                                (
                                                    [url] => https://entservices.totalegame.net?wsdl
                                                    [client] => SoapClient Object
                                                        (
                                                            [compression] => 32
                                                            [_soap_version] => 1
                                                            [sdl] => Resource id #65
                                                            [httpurl] => Resource id #72
                                                            [__default_headers] => Array
                                                                (
                                                                    [0] => SoapHeader Object
                                                                        (
                                                                            [namespace] => https://entservices.totalegame.net
                                                                            [name] => AgentSession
                                                                            [data] => SoapVar Object
                                                                                (
                                                                                    [enc_type] => 147
                                                                                    [enc_value] => 
              <AgentSession xmlns="https://entservices.totalegame.net">
                  <SessionGUID>70cb8e81-d575-4274-b884-a30038452985</SessionGUID>
                  <IPAddress>52.69.174.246</IPAddress>
              </AgentSession>
                                                                                )

                                                                            [mustUnderstand] => 
                                                                        )

                                                                )

                                                            [__soap_fault] => SoapFault Object
 *RECURSION*
                                                        )

                                                    [is_set_header] => 1
                                                    [sessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
                                                    [remote_addr] => 52.69.174.246
                                                    [CI] => Batch_process Object
 *RECURSION*
                                                    [error_code] => 
                                                    [result] => 
                                                    [exception] => 
                                                    [agent_accunt] => 
                                                    [agent_account] => Array
                                                        (
                                                            [0] => Array
                                                                (
                                                                    [loginName] => MMCashier181029
                                                                    [pinCode] => ce6d8b
                                                                )

                                                        )

                                                    [params] => Array
                                                        (
                                                            [0] => Array
                                                                (
                                                                    [reportName] => PlayerGamePlayReport
                                                                    [parameters] => Array
                                                                        (
                                                                            [0] => Array
                                                                                (
                                                                                    [ParameterName] => FromDate
                                                                                    [ParameterValue] => 2015-12-17T09:00:00
                                                                                )

                                                                            [1] => Array
                                                                                (
                                                                                    [ParameterName] => ToDate
                                                                                    [ParameterValue] => 2015-12-17T12:00:00
                                                                                )

                                                                            [2] => Array
                                                                                (
                                                                                    [ParameterName] => PlayerGrossWinSummaryLevel
                                                                                    [ParameterValue] => Detailed
                                                                                )

                                                                            [3] => Array
                                                                                (
                                                                                    [ParameterName] => TimeZoneType
                                                                                    [ParameterValue] => parent
                                                                                )

                                                                            [4] => Array
                                                                                (
                                                                                    [ParameterName] => EntityList_XML
                                                                                    [ParameterValue] => 
                                                                                )

                                                                        )

                                                                    [maxNumRowsPage] => 100
                                                                )

                                                        )

                                                )

                                        )

                                    [1] => fetch_game_play
                                )

                            [1] => Array
                                (
                                )

                        )

                )

            [8] => Array
                (
                    [file] => /www/game_offline/index.php
                    [line] => 292
                    [args] => Array
                        (
                            [0] => /www/game_offline/system/core/CodeIgniter.php
                        )

                    [function] => require_once
                )

        )

    [previous:Exception:private] => 
    [faultstring] => Error Fetching http headers
    [faultcode] => HTTP
)

ERROR - 2015-12-17 15:20:06 --> MG API error -------------------------------------------------------------------------------------->
ERROR - 2015-12-17 15:20:06 --> Server Error. No Response Object
ERROR - 2015-12-17 15:20:06 --> Severity: Notice --> Undefined variable: count /www/game_offline/application/controllers/batch/Batch_process.php 49
ERROR - 2015-12-17 15:20:08 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 15:20:08 --> MG start_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:20:08 --> MG end_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:20:17 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:20:21 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 217da680-36f9-48d0-9289-fac5222a0214
        )

)

ERROR - 2015-12-17 15:20:22 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 217da680-36f9-48d0-9289-fac5222a0214
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 15:20:22 --> Response Code  : NotInCache
ERROR - 2015-12-17 15:20:23 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => cc878f88-8fa5-400d-aad6-353ae5c79620
        )

)

ERROR - 2015-12-17 15:20:24 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => cc878f88-8fa5-400d-aad6-353ae5c79620
        )

)

ERROR - 2015-12-17 15:20:24 --> Response Code  : Normal
ERROR - 2015-12-17 15:20:24 --> cur_page
ERROR - 2015-12-17 15:20:24 --> 2
ERROR - 2015-12-17 15:20:24 --> MG Game fetch .....11111
ERROR - 2015-12-17 15:20:24 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450333224
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450333224
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450333224
        )

)

ERROR - 2015-12-17 15:20:24 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 15:20:24 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 15:20:24 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 15:20:24 --> arr_length ------> 1
ERROR - 2015-12-17 15:20:24 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 15:20:24 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 15:20:24 --> comp point update batch query
ERROR - 2015-12-17 15:20:24 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 15:20:24 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 15:20:24 --> MG Game play update result
ERROR - 2015-12-17 15:20:24 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450310400
    [update_end_time] => 1450321200
    [update_status] => Y
    [auto_attempt_count] => 2
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450333224
    [reg_date] => 1450333224
)

ERROR - 2015-12-17 15:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 15:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T09:00:00
            [end_time] => 2015-12-17T12:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 09:00:00
            [end_time] => 2015-12-17 12:00:00
        )

)

ERROR - 2015-12-17 15:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 15:30:01 --> MG start_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:30:01 --> MG end_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:30:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:30:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 0cede21a-6fc7-4823-aa58-7da2b80a67d3
        )

)

ERROR - 2015-12-17 15:30:02 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 0cede21a-6fc7-4823-aa58-7da2b80a67d3
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 15:30:02 --> Response Code  : NotInCache
ERROR - 2015-12-17 15:30:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 13de3f09-e94b-461f-9583-c216665fd5c6
        )

)

ERROR - 2015-12-17 15:30:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 13de3f09-e94b-461f-9583-c216665fd5c6
        )

)

ERROR - 2015-12-17 15:30:04 --> Response Code  : Normal
ERROR - 2015-12-17 15:30:04 --> cur_page
ERROR - 2015-12-17 15:30:04 --> 2
ERROR - 2015-12-17 15:30:04 --> MG Game fetch .....11111
ERROR - 2015-12-17 15:30:04 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450333804
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450333804
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450333804
        )

)

ERROR - 2015-12-17 15:30:04 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 15:30:04 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 15:30:04 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 15:30:04 --> arr_length ------> 1
ERROR - 2015-12-17 15:30:04 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 15:30:04 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 15:30:04 --> comp point update batch query
ERROR - 2015-12-17 15:30:04 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 15:30:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 15:30:04 --> MG Game play update result
ERROR - 2015-12-17 15:30:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450310400
    [update_end_time] => 1450321200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450333804
    [reg_date] => 1450333804
)

ERROR - 2015-12-17 15:32:09 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:32:09 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T06:32:09
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 15:32:10 --> PT_request info
ERROR - 2015-12-17 15:32:10 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTWORLDLY9999/with3RDPData/1
ERROR - 2015-12-17 15:32:10 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17894670","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptworldly9999@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"62EB339D710466A45E67877B9AE83A5CEF554C4B","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTWORLDLY9999","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449751123","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 20:38:43","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-17 15:32:10 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-17 15:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 15:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T09:00:00
            [end_time] => 2015-12-17T12:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 09:00:00
            [end_time] => 2015-12-17 12:00:00
        )

)

ERROR - 2015-12-17 15:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 15:40:01 --> MG start_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:40:01 --> MG end_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:40:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 9fef78cb-2328-438f-a41a-6e501476effa
        )

)

ERROR - 2015-12-17 15:40:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 9fef78cb-2328-438f-a41a-6e501476effa
        )

)

ERROR - 2015-12-17 15:40:03 --> Response Code  : Normal
ERROR - 2015-12-17 15:40:03 --> cur_page
ERROR - 2015-12-17 15:40:03 --> 2
ERROR - 2015-12-17 15:40:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 15:40:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450334403
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450334403
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450334403
        )

)

ERROR - 2015-12-17 15:40:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 15:40:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 15:40:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 15:40:03 --> arr_length ------> 1
ERROR - 2015-12-17 15:40:03 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 15:40:03 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 15:40:03 --> comp point update batch query
ERROR - 2015-12-17 15:40:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 15:40:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 15:40:03 --> MG Game play update result
ERROR - 2015-12-17 15:40:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450310400
    [update_end_time] => 1450321200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450334403
    [reg_date] => 1450334403
)

ERROR - 2015-12-17 15:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 15:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T09:00:00
            [end_time] => 2015-12-17T12:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 09:00:00
            [end_time] => 2015-12-17 12:00:00
        )

)

ERROR - 2015-12-17 15:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 15:50:01 --> MG start_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:50:01 --> MG end_date ===> 2015-12-17T09:00:00
ERROR - 2015-12-17 15:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 15:50:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 06e9f0ad-d6f2-410c-9812-db96a52a10c8
        )

)

ERROR - 2015-12-17 15:50:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 3
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T09:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>50000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 06e9f0ad-d6f2-410c-9812-db96a52a10c8
        )

)

ERROR - 2015-12-17 15:50:03 --> Response Code  : Normal
ERROR - 2015-12-17 15:50:03 --> cur_page
ERROR - 2015-12-17 15:50:03 --> 2
ERROR - 2015-12-17 15:50:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 15:50:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450310400
            [play_date_str] => 2015-12-17T09:00:00
            [game_play_count] => -1
            [bet_amount] => 50000
            [payout_amount] => 20000
            [win_amount] => -30000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 500
            [reg_date] => 1450335003
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450335003
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450335003
        )

)

ERROR - 2015-12-17 15:50:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 15:50:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 15:50:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 11400
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 15:50:03 --> arr_length ------> 1
ERROR - 2015-12-17 15:50:03 --> tmp_amount ------------------>11400
ERROR - 2015-12-17 15:50:03 --> tmp_comp ------------------>11400
ERROR - 2015-12-17 15:50:03 --> comp point update batch query
ERROR - 2015-12-17 15:50:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 11400 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 15:50:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 15:50:03 --> MG Game play update result
ERROR - 2015-12-17 15:50:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450310400
    [update_end_time] => 1450321200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1450335003
    [reg_date] => 1450335003
)

ERROR - 2015-12-17 16:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 16:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T10:00:00
            [end_time] => 2015-12-17T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 10:00:00
            [end_time] => 2015-12-17 13:00:00
        )

)

ERROR - 2015-12-17 16:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 16:00:01 --> MG start_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:00:01 --> MG end_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 16:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4724508b-dc2e-4a3d-b8bb-f6ac5ceb9452
        )

)

ERROR - 2015-12-17 16:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 4724508b-dc2e-4a3d-b8bb-f6ac5ceb9452
        )

)

ERROR - 2015-12-17 16:00:04 --> Response Code  : Normal
ERROR - 2015-12-17 16:00:04 --> cur_page
ERROR - 2015-12-17 16:00:04 --> 2
ERROR - 2015-12-17 16:00:04 --> MG Game fetch .....11111
ERROR - 2015-12-17 16:00:04 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450335604
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450335604
        )

)

ERROR - 2015-12-17 16:00:04 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 16:00:04 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 16:00:04 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 10900
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 16:00:04 --> arr_length ------> 1
ERROR - 2015-12-17 16:00:04 --> tmp_amount ------------------>10900
ERROR - 2015-12-17 16:00:04 --> tmp_comp ------------------>10900
ERROR - 2015-12-17 16:00:04 --> comp point update batch query
ERROR - 2015-12-17 16:00:04 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 10900 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 16:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 16:00:04 --> MG Game play update result
ERROR - 2015-12-17 16:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450314000
    [update_end_time] => 1450324800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450335604
    [reg_date] => 1450335604
)

ERROR - 2015-12-17 16:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 16:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T10:00:00
            [end_time] => 2015-12-17T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 10:00:00
            [end_time] => 2015-12-17 13:00:00
        )

)

ERROR - 2015-12-17 16:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 16:10:01 --> MG start_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:10:01 --> MG end_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 16:10:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b5b21d10-8322-43cf-a01e-ddfdba52f3ae
        )

)

ERROR - 2015-12-17 16:10:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => b5b21d10-8322-43cf-a01e-ddfdba52f3ae
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 16:10:05 --> Response Code  : NotInCache
ERROR - 2015-12-17 16:10:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4d174ffa-65d2-45c6-9a60-9999938f841f
        )

)

ERROR - 2015-12-17 16:10:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 4d174ffa-65d2-45c6-9a60-9999938f841f
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 16:10:07 --> Response Code  : NotInCache
ERROR - 2015-12-17 16:10:12 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 417950c3-fbe2-4cbb-ad87-6aa92450c1d3
        )

)

ERROR - 2015-12-17 16:10:12 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 417950c3-fbe2-4cbb-ad87-6aa92450c1d3
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 16:10:12 --> Response Code  : NotInCache
ERROR - 2015-12-17 16:10:17 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => de5f4fb6-885e-4981-8f4e-b60c9ecb5610
        )

)

ERROR - 2015-12-17 16:10:18 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => de5f4fb6-885e-4981-8f4e-b60c9ecb5610
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 16:10:18 --> Response Code  : NotInCache
ERROR - 2015-12-17 16:10:23 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 116b386d-8611-4131-bce9-24b871437e49
        )

)

ERROR - 2015-12-17 16:10:24 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 116b386d-8611-4131-bce9-24b871437e49
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 16:10:24 --> Response Code  : NotInCache
ERROR - 2015-12-17 16:10:29 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b02418cd-42e8-49e2-91fd-5cdded6d88dc
        )

)

ERROR - 2015-12-17 16:10:29 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => b02418cd-42e8-49e2-91fd-5cdded6d88dc
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 16:10:29 --> Response Code  : NotInCache
ERROR - 2015-12-17 16:10:34 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 2e56a3df-3cae-49bf-aca0-2d7d56f4e7dd
        )

)

ERROR - 2015-12-17 16:10:34 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 2e56a3df-3cae-49bf-aca0-2d7d56f4e7dd
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 16:10:34 --> Response Code  : NotInCache
ERROR - 2015-12-17 16:10:35 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 46fb23b5-ac60-4591-bc00-2687bf94687a
        )

)

ERROR - 2015-12-17 16:10:35 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 46fb23b5-ac60-4591-bc00-2687bf94687a
        )

)

ERROR - 2015-12-17 16:10:35 --> Response Code  : Normal
ERROR - 2015-12-17 16:10:35 --> cur_page
ERROR - 2015-12-17 16:10:35 --> 2
ERROR - 2015-12-17 16:10:35 --> MG Game fetch .....11111
ERROR - 2015-12-17 16:10:35 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450336235
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450336235
        )

)

ERROR - 2015-12-17 16:10:35 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 16:10:35 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 16:10:35 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 10900
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 16:10:35 --> arr_length ------> 1
ERROR - 2015-12-17 16:10:35 --> tmp_amount ------------------>10900
ERROR - 2015-12-17 16:10:35 --> tmp_comp ------------------>10900
ERROR - 2015-12-17 16:10:35 --> comp point update batch query
ERROR - 2015-12-17 16:10:35 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 10900 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 16:10:35 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 16:10:35 --> MG Game play update result
ERROR - 2015-12-17 16:10:35 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450314000
    [update_end_time] => 1450324800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450336235
    [reg_date] => 1450336235
)

ERROR - 2015-12-17 16:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 16:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T10:00:00
            [end_time] => 2015-12-17T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 10:00:00
            [end_time] => 2015-12-17 13:00:00
        )

)

ERROR - 2015-12-17 16:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 16:20:01 --> MG start_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:20:01 --> MG end_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:20:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 16:20:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 86eb6fe8-7954-4733-adc0-111e0683ccf2
        )

)

ERROR - 2015-12-17 16:20:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 86eb6fe8-7954-4733-adc0-111e0683ccf2
        )

)

ERROR - 2015-12-17 16:20:04 --> Response Code  : Normal
ERROR - 2015-12-17 16:20:04 --> cur_page
ERROR - 2015-12-17 16:20:04 --> 2
ERROR - 2015-12-17 16:20:04 --> MG Game fetch .....11111
ERROR - 2015-12-17 16:20:04 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450336804
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450336804
        )

)

ERROR - 2015-12-17 16:20:04 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 16:20:04 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 16:20:04 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 10900
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 16:20:04 --> arr_length ------> 1
ERROR - 2015-12-17 16:20:04 --> tmp_amount ------------------>10900
ERROR - 2015-12-17 16:20:04 --> tmp_comp ------------------>10900
ERROR - 2015-12-17 16:20:04 --> comp point update batch query
ERROR - 2015-12-17 16:20:04 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 10900 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 16:20:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 16:20:04 --> MG Game play update result
ERROR - 2015-12-17 16:20:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450314000
    [update_end_time] => 1450324800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450336804
    [reg_date] => 1450336804
)

ERROR - 2015-12-17 16:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 16:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T10:00:00
            [end_time] => 2015-12-17T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 10:00:00
            [end_time] => 2015-12-17 13:00:00
        )

)

ERROR - 2015-12-17 16:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 16:30:01 --> MG start_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:30:01 --> MG end_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:30:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 16:30:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4880ebd8-1375-4efe-863c-5be21d430b30
        )

)

ERROR - 2015-12-17 16:30:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 4880ebd8-1375-4efe-863c-5be21d430b30
        )

)

ERROR - 2015-12-17 16:30:03 --> Response Code  : Normal
ERROR - 2015-12-17 16:30:03 --> cur_page
ERROR - 2015-12-17 16:30:03 --> 2
ERROR - 2015-12-17 16:30:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 16:30:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450337403
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450337403
        )

)

ERROR - 2015-12-17 16:30:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 16:30:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 16:30:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 10900
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 16:30:03 --> arr_length ------> 1
ERROR - 2015-12-17 16:30:03 --> tmp_amount ------------------>10900
ERROR - 2015-12-17 16:30:03 --> tmp_comp ------------------>10900
ERROR - 2015-12-17 16:30:03 --> comp point update batch query
ERROR - 2015-12-17 16:30:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 10900 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 16:30:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 16:30:03 --> MG Game play update result
ERROR - 2015-12-17 16:30:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450314000
    [update_end_time] => 1450324800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450337403
    [reg_date] => 1450337403
)

ERROR - 2015-12-17 16:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 16:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T10:00:00
            [end_time] => 2015-12-17T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 10:00:00
            [end_time] => 2015-12-17 13:00:00
        )

)

ERROR - 2015-12-17 16:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 16:40:01 --> MG start_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:40:01 --> MG end_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 16:40:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 7fe941f4-6165-444d-bb1a-a4c28da0ab5d
        )

)

ERROR - 2015-12-17 16:40:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 7fe941f4-6165-444d-bb1a-a4c28da0ab5d
        )

)

ERROR - 2015-12-17 16:40:03 --> Response Code  : Normal
ERROR - 2015-12-17 16:40:03 --> cur_page
ERROR - 2015-12-17 16:40:03 --> 2
ERROR - 2015-12-17 16:40:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 16:40:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450338003
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450338003
        )

)

ERROR - 2015-12-17 16:40:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 16:40:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 16:40:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 10900
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 16:40:03 --> arr_length ------> 1
ERROR - 2015-12-17 16:40:03 --> tmp_amount ------------------>10900
ERROR - 2015-12-17 16:40:03 --> tmp_comp ------------------>10900
ERROR - 2015-12-17 16:40:03 --> comp point update batch query
ERROR - 2015-12-17 16:40:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 10900 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 16:40:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 16:40:03 --> MG Game play update result
ERROR - 2015-12-17 16:40:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450314000
    [update_end_time] => 1450324800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450338003
    [reg_date] => 1450338003
)

ERROR - 2015-12-17 16:47:16 --> 404 Page Not Found: Wp/index
ERROR - 2015-12-17 16:47:17 --> 404 Page Not Found: Wordpress/index
ERROR - 2015-12-17 16:47:17 --> 404 Page Not Found: Blog/index
ERROR - 2015-12-17 16:47:18 --> 404 Page Not Found: Blogs/index
ERROR - 2015-12-17 16:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 16:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T10:00:00
            [end_time] => 2015-12-17T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 10:00:00
            [end_time] => 2015-12-17 13:00:00
        )

)

ERROR - 2015-12-17 16:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 16:50:01 --> MG start_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:50:01 --> MG end_date ===> 2015-12-17T10:00:00
ERROR - 2015-12-17 16:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 16:50:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => fd0cea56-969d-46f6-ae25-ef0f3d61fead
        )

)

ERROR - 2015-12-17 16:50:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T10:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1007000.0000</BetAmount><PayoutAmount>950000.0000</PayoutAmount><GrossWin>57000.0000</GrossWin><NumBets>75</NumBets><PayoutCount>38</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>97500.0000</MaxPayoutAmount><AveragePayoutAmount>21190.4762</AveragePayoutAmount><AverageBetAmount>11371.4285</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => fd0cea56-969d-46f6-ae25-ef0f3d61fead
        )

)

ERROR - 2015-12-17 16:50:03 --> Response Code  : Normal
ERROR - 2015-12-17 16:50:03 --> cur_page
ERROR - 2015-12-17 16:50:03 --> 2
ERROR - 2015-12-17 16:50:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 16:50:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450314000
            [play_date_str] => 2015-12-17T10:00:00
            [game_play_count] => -1
            [bet_amount] => 1007000
            [payout_amount] => 950000
            [win_amount] => -57000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10070
            [reg_date] => 1450338603
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450338603
        )

)

ERROR - 2015-12-17 16:50:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 16:50:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 16:50:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 10900
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 16:50:03 --> arr_length ------> 1
ERROR - 2015-12-17 16:50:03 --> tmp_amount ------------------>10900
ERROR - 2015-12-17 16:50:03 --> tmp_comp ------------------>10900
ERROR - 2015-12-17 16:50:03 --> comp point update batch query
ERROR - 2015-12-17 16:50:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 10900 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 16:50:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 16:50:03 --> MG Game play update result
ERROR - 2015-12-17 16:50:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450314000
    [update_end_time] => 1450324800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450338603
    [reg_date] => 1450338603
)

ERROR - 2015-12-17 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T11:00:00
            [end_time] => 2015-12-17T14:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 11:00:00
            [end_time] => 2015-12-17 14:00:00
        )

)

ERROR - 2015-12-17 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 17:00:01 --> MG start_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:00:01 --> MG end_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 17:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b4a0caf3-2b66-403d-9788-3a7f37292e09
        )

)

ERROR - 2015-12-17 17:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 1
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => b4a0caf3-2b66-403d-9788-3a7f37292e09
        )

)

ERROR - 2015-12-17 17:00:03 --> Response Code  : Normal
ERROR - 2015-12-17 17:00:03 --> cur_page
ERROR - 2015-12-17 17:00:03 --> 2
ERROR - 2015-12-17 17:00:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 17:00:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450339203
        )

)

ERROR - 2015-12-17 17:00:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 17:00:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 17:00:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 830
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 17:00:03 --> arr_length ------> 1
ERROR - 2015-12-17 17:00:03 --> tmp_amount ------------------>830
ERROR - 2015-12-17 17:00:03 --> tmp_comp ------------------>830
ERROR - 2015-12-17 17:00:03 --> comp point update batch query
ERROR - 2015-12-17 17:00:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 830 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 17:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 17:00:03 --> MG Game play update result
ERROR - 2015-12-17 17:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450317600
    [update_end_time] => 1450328400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1450339203
    [reg_date] => 1450339203
)

ERROR - 2015-12-17 17:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 17:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T11:00:00
            [end_time] => 2015-12-17T14:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 11:00:00
            [end_time] => 2015-12-17 14:00:00
        )

)

ERROR - 2015-12-17 17:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 17:10:01 --> MG start_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:10:01 --> MG end_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 17:10:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => afd21593-1601-4d56-9771-7d4f569f23a4
        )

)

ERROR - 2015-12-17 17:10:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 1
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => afd21593-1601-4d56-9771-7d4f569f23a4
        )

)

ERROR - 2015-12-17 17:10:03 --> Response Code  : Normal
ERROR - 2015-12-17 17:10:03 --> cur_page
ERROR - 2015-12-17 17:10:03 --> 2
ERROR - 2015-12-17 17:10:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 17:10:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450339803
        )

)

ERROR - 2015-12-17 17:10:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 17:10:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 17:10:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 830
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 17:10:03 --> arr_length ------> 1
ERROR - 2015-12-17 17:10:03 --> tmp_amount ------------------>830
ERROR - 2015-12-17 17:10:03 --> tmp_comp ------------------>830
ERROR - 2015-12-17 17:10:03 --> comp point update batch query
ERROR - 2015-12-17 17:10:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 830 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 17:10:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 17:10:03 --> MG Game play update result
ERROR - 2015-12-17 17:10:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450317600
    [update_end_time] => 1450328400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1450339803
    [reg_date] => 1450339803
)

ERROR - 2015-12-17 17:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 17:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T11:00:00
            [end_time] => 2015-12-17T14:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 11:00:00
            [end_time] => 2015-12-17 14:00:00
        )

)

ERROR - 2015-12-17 17:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 17:20:01 --> MG start_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:20:01 --> MG end_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:20:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 17:20:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f4fab5c3-18a4-45a0-b82f-5bf3bd8c03c5
        )

)

ERROR - 2015-12-17 17:20:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => f4fab5c3-18a4-45a0-b82f-5bf3bd8c03c5
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 17:20:07 --> Response Code  : NotInCache
ERROR - 2015-12-17 17:20:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => aaa3df60-724a-4370-821c-1f9ff187aa17
        )

)

ERROR - 2015-12-17 17:20:09 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => aaa3df60-724a-4370-821c-1f9ff187aa17
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 17:20:09 --> Response Code  : NotInCache
ERROR - 2015-12-17 17:20:11 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c0717590-7e00-41cd-88ec-f5edfe156479
        )

)

ERROR - 2015-12-17 17:20:11 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 1
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => c0717590-7e00-41cd-88ec-f5edfe156479
        )

)

ERROR - 2015-12-17 17:20:11 --> Response Code  : Normal
ERROR - 2015-12-17 17:20:11 --> cur_page
ERROR - 2015-12-17 17:20:11 --> 2
ERROR - 2015-12-17 17:20:11 --> MG Game fetch .....11111
ERROR - 2015-12-17 17:20:11 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450340411
        )

)

ERROR - 2015-12-17 17:20:11 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 17:20:11 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 17:20:11 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 830
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 17:20:11 --> arr_length ------> 1
ERROR - 2015-12-17 17:20:11 --> tmp_amount ------------------>830
ERROR - 2015-12-17 17:20:11 --> tmp_comp ------------------>830
ERROR - 2015-12-17 17:20:11 --> comp point update batch query
ERROR - 2015-12-17 17:20:11 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 830 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 17:20:11 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 17:20:11 --> MG Game play update result
ERROR - 2015-12-17 17:20:11 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450317600
    [update_end_time] => 1450328400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1450340411
    [reg_date] => 1450340411
)

ERROR - 2015-12-17 17:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 17:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T11:00:00
            [end_time] => 2015-12-17T14:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 11:00:00
            [end_time] => 2015-12-17 14:00:00
        )

)

ERROR - 2015-12-17 17:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 17:30:01 --> MG start_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:30:01 --> MG end_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:30:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 17:30:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f755d2a4-9532-4090-af47-f7be6b225a19
        )

)

ERROR - 2015-12-17 17:30:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => f755d2a4-9532-4090-af47-f7be6b225a19
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 17:30:05 --> Response Code  : NotInCache
ERROR - 2015-12-17 17:30:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 679c0cc7-6d18-4169-a729-258b6936d2e3
        )

)

ERROR - 2015-12-17 17:30:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 1
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 679c0cc7-6d18-4169-a729-258b6936d2e3
        )

)

ERROR - 2015-12-17 17:30:08 --> Response Code  : Normal
ERROR - 2015-12-17 17:30:08 --> cur_page
ERROR - 2015-12-17 17:30:08 --> 2
ERROR - 2015-12-17 17:30:08 --> MG Game fetch .....11111
ERROR - 2015-12-17 17:30:08 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450341008
        )

)

ERROR - 2015-12-17 17:30:08 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 17:30:08 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 17:30:08 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 830
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 17:30:08 --> arr_length ------> 1
ERROR - 2015-12-17 17:30:08 --> tmp_amount ------------------>830
ERROR - 2015-12-17 17:30:08 --> tmp_comp ------------------>830
ERROR - 2015-12-17 17:30:08 --> comp point update batch query
ERROR - 2015-12-17 17:30:08 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 830 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 17:30:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 17:30:08 --> MG Game play update result
ERROR - 2015-12-17 17:30:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450317600
    [update_end_time] => 1450328400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1450341008
    [reg_date] => 1450341008
)

ERROR - 2015-12-17 17:39:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 17:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 17:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T11:00:00
            [end_time] => 2015-12-17T14:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 11:00:00
            [end_time] => 2015-12-17 14:00:00
        )

)

ERROR - 2015-12-17 17:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 17:40:01 --> MG start_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:40:01 --> MG end_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 17:40:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 2822b946-23c6-4a1c-9bc1-4f86992b2c16
        )

)

ERROR - 2015-12-17 17:40:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 1
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 2822b946-23c6-4a1c-9bc1-4f86992b2c16
        )

)

ERROR - 2015-12-17 17:40:03 --> Response Code  : Normal
ERROR - 2015-12-17 17:40:03 --> cur_page
ERROR - 2015-12-17 17:40:03 --> 2
ERROR - 2015-12-17 17:40:03 --> MG Game fetch .....11111
ERROR - 2015-12-17 17:40:03 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450341603
        )

)

ERROR - 2015-12-17 17:40:03 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 17:40:03 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 17:40:03 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 830
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 17:40:03 --> arr_length ------> 1
ERROR - 2015-12-17 17:40:03 --> tmp_amount ------------------>830
ERROR - 2015-12-17 17:40:03 --> tmp_comp ------------------>830
ERROR - 2015-12-17 17:40:03 --> comp point update batch query
ERROR - 2015-12-17 17:40:03 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 830 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 17:40:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 17:40:03 --> MG Game play update result
ERROR - 2015-12-17 17:40:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450317600
    [update_end_time] => 1450328400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1450341603
    [reg_date] => 1450341603
)

ERROR - 2015-12-17 17:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 17:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T11:00:00
            [end_time] => 2015-12-17T14:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 11:00:00
            [end_time] => 2015-12-17 14:00:00
        )

)

ERROR - 2015-12-17 17:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 17:50:01 --> MG start_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:50:01 --> MG end_date ===> 2015-12-17T11:00:00
ERROR - 2015-12-17 17:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 17:50:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d3a24c78-f987-49bd-80ea-fd34530ad252
        )

)

ERROR - 2015-12-17 17:50:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 1
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-17T11:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>83000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>83000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>0</PayoutCount><MaxBet>33000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>20750.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => d3a24c78-f987-49bd-80ea-fd34530ad252
        )

)

ERROR - 2015-12-17 17:50:05 --> Response Code  : Normal
ERROR - 2015-12-17 17:50:05 --> cur_page
ERROR - 2015-12-17 17:50:05 --> 2
ERROR - 2015-12-17 17:50:05 --> MG Game fetch .....11111
ERROR - 2015-12-17 17:50:05 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450317600
            [play_date_str] => 2015-12-17T11:00:00
            [game_play_count] => -1
            [bet_amount] => 83000
            [payout_amount] => 0
            [win_amount] => -83000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 830
            [reg_date] => 1450342205
        )

)

ERROR - 2015-12-17 17:50:05 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-17 17:50:05 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-17 17:50:05 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 830
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-17 17:50:05 --> arr_length ------> 1
ERROR - 2015-12-17 17:50:05 --> tmp_amount ------------------>830
ERROR - 2015-12-17 17:50:05 --> tmp_comp ------------------>830
ERROR - 2015-12-17 17:50:05 --> comp point update batch query
ERROR - 2015-12-17 17:50:05 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 830 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-17 17:50:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 17:50:05 --> MG Game play update result
ERROR - 2015-12-17 17:50:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450317600
    [update_end_time] => 1450328400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1450342205
    [reg_date] => 1450342205
)

ERROR - 2015-12-17 18:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 18:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T12:00:00
            [end_time] => 2015-12-17T15:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 12:00:00
            [end_time] => 2015-12-17 15:00:00
        )

)

ERROR - 2015-12-17 18:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 18:00:01 --> MG start_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:00:01 --> MG end_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6a923384-6c05-4d68-83c1-f4ac4d3d577b
        )

)

ERROR - 2015-12-17 18:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 6a923384-6c05-4d68-83c1-f4ac4d3d577b
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 18:00:04 --> Response Code  : NotInCache
ERROR - 2015-12-17 18:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 3274ef70-067a-464d-88d6-938ae7ee0c09
        )

)

ERROR - 2015-12-17 18:00:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 3274ef70-067a-464d-88d6-938ae7ee0c09
        )

)

ERROR - 2015-12-17 18:00:07 --> Response Code  : Normal
ERROR - 2015-12-17 18:00:07 --> cur_page
ERROR - 2015-12-17 18:00:07 --> 2
ERROR - 2015-12-17 18:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 18:00:07 --> MG Game play update result
ERROR - 2015-12-17 18:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450321200
    [update_end_time] => 1450332000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450342807
    [reg_date] => 1450342807
)

ERROR - 2015-12-17 18:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 18:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T12:00:00
            [end_time] => 2015-12-17T15:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 12:00:00
            [end_time] => 2015-12-17 15:00:00
        )

)

ERROR - 2015-12-17 18:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 18:10:01 --> MG start_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:10:01 --> MG end_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:10:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => aa51f5f0-39ac-41db-95a2-2b302f981bf2
        )

)

ERROR - 2015-12-17 18:10:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => aa51f5f0-39ac-41db-95a2-2b302f981bf2
        )

)

ERROR - 2015-12-17 18:10:04 --> Response Code  : Normal
ERROR - 2015-12-17 18:10:04 --> cur_page
ERROR - 2015-12-17 18:10:04 --> 2
ERROR - 2015-12-17 18:10:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 18:10:04 --> MG Game play update result
ERROR - 2015-12-17 18:10:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450321200
    [update_end_time] => 1450332000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450343404
    [reg_date] => 1450343404
)

ERROR - 2015-12-17 18:18:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 18:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 18:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T12:00:00
            [end_time] => 2015-12-17T15:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 12:00:00
            [end_time] => 2015-12-17 15:00:00
        )

)

ERROR - 2015-12-17 18:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 18:20:01 --> MG start_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:20:01 --> MG end_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:20:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:20:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 58d5b37d-be2e-47c5-9984-350344c1dd71
        )

)

ERROR - 2015-12-17 18:20:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 58d5b37d-be2e-47c5-9984-350344c1dd71
        )

)

ERROR - 2015-12-17 18:20:04 --> Response Code  : Normal
ERROR - 2015-12-17 18:20:04 --> cur_page
ERROR - 2015-12-17 18:20:04 --> 2
ERROR - 2015-12-17 18:20:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 18:20:04 --> MG Game play update result
ERROR - 2015-12-17 18:20:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450321200
    [update_end_time] => 1450332000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450344004
    [reg_date] => 1450344004
)

ERROR - 2015-12-17 18:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 18:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T12:00:00
            [end_time] => 2015-12-17T15:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 12:00:00
            [end_time] => 2015-12-17 15:00:00
        )

)

ERROR - 2015-12-17 18:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 18:30:01 --> MG start_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:30:01 --> MG end_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:30:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:30:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f0c4c449-a7ca-464e-aac7-7e78e4e41910
        )

)

ERROR - 2015-12-17 18:30:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => f0c4c449-a7ca-464e-aac7-7e78e4e41910
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 18:30:04 --> Response Code  : NotInCache
ERROR - 2015-12-17 18:30:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 8fd4275d-e42a-4a9c-a384-99f2893dbbbb
        )

)

ERROR - 2015-12-17 18:30:06 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 8fd4275d-e42a-4a9c-a384-99f2893dbbbb
        )

)

ERROR - 2015-12-17 18:30:06 --> Response Code  : Normal
ERROR - 2015-12-17 18:30:06 --> cur_page
ERROR - 2015-12-17 18:30:06 --> 2
ERROR - 2015-12-17 18:30:06 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 18:30:06 --> MG Game play update result
ERROR - 2015-12-17 18:30:06 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450321200
    [update_end_time] => 1450332000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450344606
    [reg_date] => 1450344606
)

ERROR - 2015-12-17 18:38:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 18:38:36 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:38:36 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFtest333
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFtest333
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T09:38:36
            [EMail] => 
            [CreditBalance] => 155.5
            [Balance] => 155500
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 18:38:37 --> PT_request info
ERROR - 2015-12-17 18:38:37 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTTEST333/with3RDPData/1
ERROR - 2015-12-17 18:38:37 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"50.3","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":"baofa","CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"15595349","COMMENTS":"Created through Public API. ","COMPPOINTS":"24.491999999999998","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfpttest333@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":"2015-11-25 16:36:31","LASTLOGINDATE":"2015-11-03 12:59:27","LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"100","NETLOSS":"69.7","NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"E3FA4EAFBBC44952EE05617249551DCE7591C2AA","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTTEST333","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1442394936","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-09-16 17:15:35","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"24.491999999999998","TOTALDEPOSITS":"120","TOTALWITHDRAWALS":"0","TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-17 18:38:37 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-17 18:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 18:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T12:00:00
            [end_time] => 2015-12-17T15:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 12:00:00
            [end_time] => 2015-12-17 15:00:00
        )

)

ERROR - 2015-12-17 18:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 18:40:01 --> MG start_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:40:01 --> MG end_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:40:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 1f9dc4cd-69ea-477b-a831-11a19fb8bbd6
        )

)

ERROR - 2015-12-17 18:40:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 1f9dc4cd-69ea-477b-a831-11a19fb8bbd6
        )

)

ERROR - 2015-12-17 18:40:03 --> Response Code  : Normal
ERROR - 2015-12-17 18:40:03 --> cur_page
ERROR - 2015-12-17 18:40:03 --> 2
ERROR - 2015-12-17 18:40:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 18:40:03 --> MG Game play update result
ERROR - 2015-12-17 18:40:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450321200
    [update_end_time] => 1450332000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450345203
    [reg_date] => 1450345203
)

ERROR - 2015-12-17 18:41:06 --> stdClass Object
(
    [user_no] => 681
    [language_no] => 2
    [country_no] => 53607
    [user_nick] => 
    [user_level_no] => 1
    [user_id] => MAXLIVE4
    [user_password] => 96e79218965eb72c92a549dd5a330112
    [user_name] => 맥스4
    [user_email] => 
    [user_phone] => 01055559999
    [user_type] => 2
    [affiliate_code] => B70865
    [affiliate_ref] => 672
    [is_affiliate] => Y
    [via_url] => 
    [join_url] => 
    [user_locale] => 
    [login_status] => N
    [user_gender] => 
    [user_status] => 4
    [deps1_child_count] => 4
    [deps2_child_count] => 0
    [agree_adult] => Y
    [language_name] => 
    [im_type] => 
    [im_id] => 
    [city] => 
    [user_des] => 
    [affiliate_des] => 
    [lft] => 
    [rgt] => 
    [mg_id] => BFMGMAXLIVE4
    [mg_password] => NHbp6BnYL5
    [mg_game_status] => Y
    [pt_id] => BFPTMAXLIVE4
    [pt_password] => NHbp6BnYL5
    [pt_game_status] => Y
    [first_deposit] => N
    [join_ip] => 175.195.11.15
    [join_date] => 1449746869
    [reg_date] => 1449746869
    [confirm_date] => 1449746869
    [agree_term] => Y
)

ERROR - 2015-12-17 18:41:06 --> MAXLIVE4
ERROR - 2015-12-17 18:41:07 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 2a60aee0-f13d-47b6-8c7c-a8c340ab16ac
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:41:08 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
)

ERROR - 2015-12-17 18:41:08 --> MG_play_check_url
ERROR - 2015-12-17 18:41:08 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
ERROR - 2015-12-17 18:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 18:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T12:00:00
            [end_time] => 2015-12-17T15:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 12:00:00
            [end_time] => 2015-12-17 15:00:00
        )

)

ERROR - 2015-12-17 18:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 18:50:01 --> MG start_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:50:01 --> MG end_date ===> 2015-12-17T12:00:00
ERROR - 2015-12-17 18:50:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 18:50:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 2a81c02a-b094-490b-8a29-26975737b0cc
        )

)

ERROR - 2015-12-17 18:50:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 2a81c02a-b094-490b-8a29-26975737b0cc
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 18:50:03 --> Response Code  : NotInCache
ERROR - 2015-12-17 18:50:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => dd832134-1170-4bcb-9d1d-ffc1155bc4b1
        )

)

ERROR - 2015-12-17 18:50:06 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => dd832134-1170-4bcb-9d1d-ffc1155bc4b1
        )

)

ERROR - 2015-12-17 18:50:06 --> Response Code  : Normal
ERROR - 2015-12-17 18:50:06 --> cur_page
ERROR - 2015-12-17 18:50:06 --> 2
ERROR - 2015-12-17 18:50:06 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 18:50:06 --> MG Game play update result
ERROR - 2015-12-17 18:50:06 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450321200
    [update_end_time] => 1450332000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450345806
    [reg_date] => 1450345806
)

ERROR - 2015-12-17 19:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 19:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T13:00:00
            [end_time] => 2015-12-17T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 13:00:00
            [end_time] => 2015-12-17 16:00:00
        )

)

ERROR - 2015-12-17 19:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 19:00:01 --> MG start_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:00:01 --> MG end_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 19:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 36d983fa-b456-4799-a937-ad943d04d60e
        )

)

ERROR - 2015-12-17 19:00:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 36d983fa-b456-4799-a937-ad943d04d60e
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:00:08 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 289dcccd-cf12-4ce7-8956-266d2d1c07f9
        )

)

ERROR - 2015-12-17 19:00:09 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 289dcccd-cf12-4ce7-8956-266d2d1c07f9
        )

)

ERROR - 2015-12-17 19:00:09 --> Response Code  : Normal
ERROR - 2015-12-17 19:00:09 --> cur_page
ERROR - 2015-12-17 19:00:09 --> 2
ERROR - 2015-12-17 19:00:09 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 19:00:09 --> MG Game play update result
ERROR - 2015-12-17 19:00:09 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450324800
    [update_end_time] => 1450335600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450346409
    [reg_date] => 1450346409
)

ERROR - 2015-12-17 19:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 19:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T13:00:00
            [end_time] => 2015-12-17T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 13:00:00
            [end_time] => 2015-12-17 16:00:00
        )

)

ERROR - 2015-12-17 19:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 19:10:01 --> MG start_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:10:01 --> MG end_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:10:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 19:10:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 793018d3-86aa-41fe-996b-04e75eae113d
        )

)

ERROR - 2015-12-17 19:10:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 793018d3-86aa-41fe-996b-04e75eae113d
        )

)

ERROR - 2015-12-17 19:10:03 --> Response Code  : Normal
ERROR - 2015-12-17 19:10:03 --> cur_page
ERROR - 2015-12-17 19:10:03 --> 2
ERROR - 2015-12-17 19:10:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 19:10:03 --> MG Game play update result
ERROR - 2015-12-17 19:10:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450324800
    [update_end_time] => 1450335600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450347003
    [reg_date] => 1450347003
)

ERROR - 2015-12-17 19:20:02 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 19:20:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T13:00:00
            [end_time] => 2015-12-17T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 13:00:00
            [end_time] => 2015-12-17 16:00:00
        )

)

ERROR - 2015-12-17 19:20:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 19:20:02 --> MG start_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:20:02 --> MG end_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:20:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 19:20:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => aa7a9ee8-e7a0-4e89-88b9-6450060e68a0
        )

)

ERROR - 2015-12-17 19:20:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => aa7a9ee8-e7a0-4e89-88b9-6450060e68a0
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:20:08 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:20:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 127feae2-c075-4aae-9ae7-0249c1d707f0
        )

)

ERROR - 2015-12-17 19:20:10 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 127feae2-c075-4aae-9ae7-0249c1d707f0
        )

)

ERROR - 2015-12-17 19:20:10 --> Response Code  : Normal
ERROR - 2015-12-17 19:20:10 --> cur_page
ERROR - 2015-12-17 19:20:10 --> 2
ERROR - 2015-12-17 19:20:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 19:20:10 --> MG Game play update result
ERROR - 2015-12-17 19:20:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450324800
    [update_end_time] => 1450335600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450347610
    [reg_date] => 1450347610
)

ERROR - 2015-12-17 19:30:02 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 19:30:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T13:00:00
            [end_time] => 2015-12-17T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 13:00:00
            [end_time] => 2015-12-17 16:00:00
        )

)

ERROR - 2015-12-17 19:30:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 19:30:02 --> MG start_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:30:02 --> MG end_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:30:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 19:30:10 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 1f4758bf-8cae-4ddc-baf2-85c16655ec9d
        )

)

ERROR - 2015-12-17 19:30:11 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 1f4758bf-8cae-4ddc-baf2-85c16655ec9d
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:30:11 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:30:16 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 27deb989-7f07-4be6-bf8d-7f5836fda7ea
        )

)

ERROR - 2015-12-17 19:30:23 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 27deb989-7f07-4be6-bf8d-7f5836fda7ea
        )

)

ERROR - 2015-12-17 19:30:23 --> Response Code  : Normal
ERROR - 2015-12-17 19:30:23 --> cur_page
ERROR - 2015-12-17 19:30:23 --> 2
ERROR - 2015-12-17 19:30:23 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 19:30:23 --> MG Game play update result
ERROR - 2015-12-17 19:30:23 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450324800
    [update_end_time] => 1450335600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450348223
    [reg_date] => 1450348223
)

ERROR - 2015-12-17 19:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 19:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T13:00:00
            [end_time] => 2015-12-17T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 13:00:00
            [end_time] => 2015-12-17 16:00:00
        )

)

ERROR - 2015-12-17 19:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 19:40:01 --> MG start_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:40:01 --> MG end_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 19:40:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d7a61025-cadf-4acc-a881-b7c8ab275fa0
        )

)

ERROR - 2015-12-17 19:40:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => d7a61025-cadf-4acc-a881-b7c8ab275fa0
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:40:03 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:40:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 87338bd3-1aac-4944-8985-c517063a672d
        )

)

ERROR - 2015-12-17 19:40:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 87338bd3-1aac-4944-8985-c517063a672d
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:40:04 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:40:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 441478b5-414e-4b49-9b98-367e93994cc8
        )

)

ERROR - 2015-12-17 19:40:06 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 441478b5-414e-4b49-9b98-367e93994cc8
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:40:06 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:40:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => de30fa69-aba3-448c-9ef7-220d4acd1e67
        )

)

ERROR - 2015-12-17 19:40:09 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => de30fa69-aba3-448c-9ef7-220d4acd1e67
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:40:09 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:40:12 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 78666065-9f6f-4533-9789-4718f27d2a28
        )

)

ERROR - 2015-12-17 19:40:13 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 78666065-9f6f-4533-9789-4718f27d2a28
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:40:13 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:40:15 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 188978b7-baeb-495f-a5f6-5bee46a843d6
        )

)

ERROR - 2015-12-17 19:40:19 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 188978b7-baeb-495f-a5f6-5bee46a843d6
        )

)

ERROR - 2015-12-17 19:40:19 --> Response Code  : Normal
ERROR - 2015-12-17 19:40:19 --> cur_page
ERROR - 2015-12-17 19:40:19 --> 2
ERROR - 2015-12-17 19:40:19 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 19:40:19 --> MG Game play update result
ERROR - 2015-12-17 19:40:19 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450324800
    [update_end_time] => 1450335600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450348819
    [reg_date] => 1450348819
)

ERROR - 2015-12-17 19:43:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 19:48:49 --> Severity: Notice --> Undefined variable: param1 /www/game_offline/application/controllers/admin/Admin.php 14
ERROR - 2015-12-17 19:48:49 --> Severity: Notice --> Undefined variable: param2 /www/game_offline/application/controllers/admin/Admin.php 15
ERROR - 2015-12-17 19:48:49 --> Severity: Notice --> Undefined variable: param3 /www/game_offline/application/controllers/admin/Admin.php 16
ERROR - 2015-12-17 19:48:49 --> Severity: Notice --> Undefined variable: param4 /www/game_offline/application/controllers/admin/Admin.php 17
ERROR - 2015-12-17 19:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 19:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T13:00:00
            [end_time] => 2015-12-17T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 13:00:00
            [end_time] => 2015-12-17 16:00:00
        )

)

ERROR - 2015-12-17 19:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 19:50:01 --> MG start_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:50:01 --> MG end_date ===> 2015-12-17T13:00:00
ERROR - 2015-12-17 19:50:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 19:50:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => cf9afea5-a6fc-4688-8518-d1b69230b0f0
        )

)

ERROR - 2015-12-17 19:50:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => cf9afea5-a6fc-4688-8518-d1b69230b0f0
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:50:05 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:50:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b30bb852-12c4-49ce-a446-8b4da92dba55
        )

)

ERROR - 2015-12-17 19:50:06 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => b30bb852-12c4-49ce-a446-8b4da92dba55
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 19:50:06 --> Response Code  : NotInCache
ERROR - 2015-12-17 19:50:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 556aba08-ca76-4a9e-b9ed-eeb136546e91
        )

)

ERROR - 2015-12-17 19:50:09 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 556aba08-ca76-4a9e-b9ed-eeb136546e91
        )

)

ERROR - 2015-12-17 19:50:09 --> Response Code  : Normal
ERROR - 2015-12-17 19:50:09 --> cur_page
ERROR - 2015-12-17 19:50:09 --> 2
ERROR - 2015-12-17 19:50:09 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 19:50:09 --> MG Game play update result
ERROR - 2015-12-17 19:50:09 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450324800
    [update_end_time] => 1450335600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450349409
    [reg_date] => 1450349409
)

ERROR - 2015-12-17 19:54:41 --> Severity: Notice --> Undefined variable: paging /www/game_offline/application/views/admin/update_history/update_hisotry.php 149
ERROR - 2015-12-17 19:54:41 --> Severity: Error --> Call to a member function getBoardPage() on a non-object /www/game_offline/application/views/admin/update_history/update_hisotry.php 149
ERROR - 2015-12-17 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T14:00:00
            [end_time] => 2015-12-17T17:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 14:00:00
            [end_time] => 2015-12-17 17:00:00
        )

)

ERROR - 2015-12-17 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 20:00:01 --> MG start_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:00:01 --> MG end_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 9bed23c5-eb32-4f3d-a6e2-a186eee02e26
        )

)

ERROR - 2015-12-17 20:00:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 9bed23c5-eb32-4f3d-a6e2-a186eee02e26
        )

)

ERROR - 2015-12-17 20:00:05 --> Response Code  : Normal
ERROR - 2015-12-17 20:00:05 --> cur_page
ERROR - 2015-12-17 20:00:05 --> 2
ERROR - 2015-12-17 20:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 20:00:05 --> MG Game play update result
ERROR - 2015-12-17 20:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450328400
    [update_end_time] => 1450339200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450350005
    [reg_date] => 1450350005
)

ERROR - 2015-12-17 20:00:38 --> stdClass Object
(
    [user_no] => 681
    [language_no] => 2
    [country_no] => 53607
    [user_nick] => 
    [user_level_no] => 1
    [user_id] => MAXLIVE4
    [user_password] => 96e79218965eb72c92a549dd5a330112
    [user_name] => 맥스4
    [user_email] => 
    [user_phone] => 01055559999
    [user_type] => 2
    [affiliate_code] => B70865
    [affiliate_ref] => 672
    [is_affiliate] => Y
    [via_url] => 
    [join_url] => 
    [user_locale] => 
    [login_status] => N
    [user_gender] => 
    [user_status] => 4
    [deps1_child_count] => 4
    [deps2_child_count] => 0
    [agree_adult] => Y
    [language_name] => 
    [im_type] => 
    [im_id] => 
    [city] => 
    [user_des] => 
    [affiliate_des] => 
    [lft] => 
    [rgt] => 
    [mg_id] => BFMGMAXLIVE4
    [mg_password] => NHbp6BnYL5
    [mg_game_status] => Y
    [pt_id] => BFPTMAXLIVE4
    [pt_password] => NHbp6BnYL5
    [pt_game_status] => Y
    [first_deposit] => N
    [join_ip] => 175.195.11.15
    [join_date] => 1449746869
    [reg_date] => 1449746869
    [confirm_date] => 1449746869
    [agree_term] => Y
)

ERROR - 2015-12-17 20:00:38 --> MAXLIVE4
ERROR - 2015-12-17 20:00:39 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 277fc54a-a302-4fc3-b5ae-1d96b55a2acf
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:00:42 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
)

ERROR - 2015-12-17 20:00:42 --> MG_play_check_url
ERROR - 2015-12-17 20:00:42 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
ERROR - 2015-12-17 20:03:09 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 20:04:31 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:04:31 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T11:04:31
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 20:04:32 --> PT_request info
ERROR - 2015-12-17 20:04:32 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTWORLDLY9999/with3RDPData/1
ERROR - 2015-12-17 20:04:32 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17894670","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptworldly9999@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"62EB339D710466A45E67877B9AE83A5CEF554C4B","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTWORLDLY9999","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449751123","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 20:38:43","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-17 20:04:32 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-17 20:05:11 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:05:12 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T11:05:12
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 20:06:04 --> 1483196399
ERROR - 2015-12-17 20:06:06 --> 1451573999
ERROR - 2015-12-17 20:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 20:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T14:00:00
            [end_time] => 2015-12-17T17:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 14:00:00
            [end_time] => 2015-12-17 17:00:00
        )

)

ERROR - 2015-12-17 20:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 20:10:01 --> MG start_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:10:01 --> MG end_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:10:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 35877c3f-309a-4231-83ef-a9cafd7123ce
        )

)

ERROR - 2015-12-17 20:10:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 35877c3f-309a-4231-83ef-a9cafd7123ce
        )

)

ERROR - 2015-12-17 20:10:04 --> Response Code  : Normal
ERROR - 2015-12-17 20:10:04 --> cur_page
ERROR - 2015-12-17 20:10:04 --> 2
ERROR - 2015-12-17 20:10:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 20:10:04 --> MG Game play update result
ERROR - 2015-12-17 20:10:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450328400
    [update_end_time] => 1450339200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450350604
    [reg_date] => 1450350604
)

ERROR - 2015-12-17 20:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 20:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T14:00:00
            [end_time] => 2015-12-17T17:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 14:00:00
            [end_time] => 2015-12-17 17:00:00
        )

)

ERROR - 2015-12-17 20:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 20:20:01 --> MG start_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:20:01 --> MG end_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:20:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:20:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 826469a0-4e31-4fe9-abe4-fff5069aa96a
        )

)

ERROR - 2015-12-17 20:20:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 826469a0-4e31-4fe9-abe4-fff5069aa96a
        )

)

ERROR - 2015-12-17 20:20:04 --> Response Code  : Normal
ERROR - 2015-12-17 20:20:04 --> cur_page
ERROR - 2015-12-17 20:20:04 --> 2
ERROR - 2015-12-17 20:20:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 20:20:04 --> MG Game play update result
ERROR - 2015-12-17 20:20:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450328400
    [update_end_time] => 1450339200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450351204
    [reg_date] => 1450351204
)

ERROR - 2015-12-17 20:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 20:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T14:00:00
            [end_time] => 2015-12-17T17:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 14:00:00
            [end_time] => 2015-12-17 17:00:00
        )

)

ERROR - 2015-12-17 20:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 20:30:01 --> MG start_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:30:01 --> MG end_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:30:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:30:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5af68566-9c91-4a30-a0a3-fc04f6783ef8
        )

)

ERROR - 2015-12-17 20:30:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 5af68566-9c91-4a30-a0a3-fc04f6783ef8
        )

)

ERROR - 2015-12-17 20:30:05 --> Response Code  : Normal
ERROR - 2015-12-17 20:30:05 --> cur_page
ERROR - 2015-12-17 20:30:05 --> 2
ERROR - 2015-12-17 20:30:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 20:30:05 --> MG Game play update result
ERROR - 2015-12-17 20:30:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450328400
    [update_end_time] => 1450339200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450351805
    [reg_date] => 1450351805
)

ERROR - 2015-12-17 20:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 20:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T14:00:00
            [end_time] => 2015-12-17T17:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 14:00:00
            [end_time] => 2015-12-17 17:00:00
        )

)

ERROR - 2015-12-17 20:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 20:40:01 --> MG start_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:40:01 --> MG end_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:40:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a3f76a37-2a56-4df2-b406-91e2d7436c8e
        )

)

ERROR - 2015-12-17 20:40:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => a3f76a37-2a56-4df2-b406-91e2d7436c8e
        )

)

ERROR - 2015-12-17 20:40:05 --> Response Code  : Normal
ERROR - 2015-12-17 20:40:05 --> cur_page
ERROR - 2015-12-17 20:40:05 --> 2
ERROR - 2015-12-17 20:40:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 20:40:05 --> MG Game play update result
ERROR - 2015-12-17 20:40:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450328400
    [update_end_time] => 1450339200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450352405
    [reg_date] => 1450352405
)

ERROR - 2015-12-17 20:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 20:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T14:00:00
            [end_time] => 2015-12-17T17:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 14:00:00
            [end_time] => 2015-12-17 17:00:00
        )

)

ERROR - 2015-12-17 20:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 20:50:01 --> MG start_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:50:01 --> MG end_date ===> 2015-12-17T14:00:00
ERROR - 2015-12-17 20:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 20:50:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f6304e0d-f773-4caf-899a-d8c7c9344411
        )

)

ERROR - 2015-12-17 20:50:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => f6304e0d-f773-4caf-899a-d8c7c9344411
        )

)

ERROR - 2015-12-17 20:50:04 --> Response Code  : Normal
ERROR - 2015-12-17 20:50:04 --> cur_page
ERROR - 2015-12-17 20:50:04 --> 2
ERROR - 2015-12-17 20:50:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 20:50:04 --> MG Game play update result
ERROR - 2015-12-17 20:50:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450328400
    [update_end_time] => 1450339200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450353004
    [reg_date] => 1450353004
)

ERROR - 2015-12-17 20:51:35 --> 404 Page Not Found: Wp/index
ERROR - 2015-12-17 20:51:36 --> 404 Page Not Found: Wordpress/index
ERROR - 2015-12-17 20:51:37 --> 404 Page Not Found: Blog/index
ERROR - 2015-12-17 20:51:41 --> 404 Page Not Found: Blogs/index
ERROR - 2015-12-17 20:57:29 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 20:59:54 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 21:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 21:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T15:00:00
            [end_time] => 2015-12-17T18:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 15:00:00
            [end_time] => 2015-12-17 18:00:00
        )

)

ERROR - 2015-12-17 21:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 21:00:01 --> MG start_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:00:01 --> MG end_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 9b6f69d7-b0f1-464f-867b-0729ea4bc03f
        )

)

ERROR - 2015-12-17 21:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 9b6f69d7-b0f1-464f-867b-0729ea4bc03f
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 21:00:03 --> Response Code  : NotInCache
ERROR - 2015-12-17 21:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 70ae2737-ad6d-460a-8b92-a70c94868f91
        )

)

ERROR - 2015-12-17 21:00:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 21:00:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 70ae2737-ad6d-460a-8b92-a70c94868f91
        )

)

ERROR - 2015-12-17 21:00:07 --> Response Code  : Normal
ERROR - 2015-12-17 21:00:07 --> cur_page
ERROR - 2015-12-17 21:00:07 --> 2
ERROR - 2015-12-17 21:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 21:00:07 --> MG Game play update result
ERROR - 2015-12-17 21:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450332000
    [update_end_time] => 1450342800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450353607
    [reg_date] => 1450353607
)

ERROR - 2015-12-17 21:04:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 21:05:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:05:02 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T12:05:02
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 21:05:04 --> PT_request info
ERROR - 2015-12-17 21:05:04 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTWORLDLY9999/with3RDPData/1
ERROR - 2015-12-17 21:05:04 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17894670","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptworldly9999@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"62EB339D710466A45E67877B9AE83A5CEF554C4B","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTWORLDLY9999","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449751123","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 20:38:43","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-17 21:05:04 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-17 21:05:15 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:05:15 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T12:05:15
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 21:05:59 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:05:59 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T12:05:59
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 21:07:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-17 21:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 21:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T15:00:00
            [end_time] => 2015-12-17T18:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 15:00:00
            [end_time] => 2015-12-17 18:00:00
        )

)

ERROR - 2015-12-17 21:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 21:10:01 --> MG start_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:10:01 --> MG end_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:10:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => ac4e063a-88b5-4080-9fee-805d51649b43
        )

)

ERROR - 2015-12-17 21:10:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => ac4e063a-88b5-4080-9fee-805d51649b43
        )

)

ERROR - 2015-12-17 21:10:08 --> Response Code  : Normal
ERROR - 2015-12-17 21:10:08 --> cur_page
ERROR - 2015-12-17 21:10:08 --> 2
ERROR - 2015-12-17 21:10:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 21:10:08 --> MG Game play update result
ERROR - 2015-12-17 21:10:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450332000
    [update_end_time] => 1450342800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450354208
    [reg_date] => 1450354208
)

ERROR - 2015-12-17 21:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 21:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T15:00:00
            [end_time] => 2015-12-17T18:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 15:00:00
            [end_time] => 2015-12-17 18:00:00
        )

)

ERROR - 2015-12-17 21:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 21:20:01 --> MG start_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:20:01 --> MG end_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:20:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:20:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 519a78cb-5ca0-48bc-9677-a45f5f73889a
        )

)

ERROR - 2015-12-17 21:20:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 519a78cb-5ca0-48bc-9677-a45f5f73889a
        )

)

ERROR - 2015-12-17 21:20:04 --> Response Code  : Normal
ERROR - 2015-12-17 21:20:04 --> cur_page
ERROR - 2015-12-17 21:20:04 --> 2
ERROR - 2015-12-17 21:20:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 21:20:04 --> MG Game play update result
ERROR - 2015-12-17 21:20:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450332000
    [update_end_time] => 1450342800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450354804
    [reg_date] => 1450354804
)

ERROR - 2015-12-17 21:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 21:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T15:00:00
            [end_time] => 2015-12-17T18:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 15:00:00
            [end_time] => 2015-12-17 18:00:00
        )

)

ERROR - 2015-12-17 21:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 21:30:01 --> MG start_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:30:01 --> MG end_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:30:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:30:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6c68f3da-67b0-4409-87f5-58073ee3d23e
        )

)

ERROR - 2015-12-17 21:30:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 6c68f3da-67b0-4409-87f5-58073ee3d23e
        )

)

ERROR - 2015-12-17 21:30:04 --> Response Code  : Normal
ERROR - 2015-12-17 21:30:04 --> cur_page
ERROR - 2015-12-17 21:30:04 --> 2
ERROR - 2015-12-17 21:30:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 21:30:04 --> MG Game play update result
ERROR - 2015-12-17 21:30:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450332000
    [update_end_time] => 1450342800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450355404
    [reg_date] => 1450355404
)

ERROR - 2015-12-17 21:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 21:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T15:00:00
            [end_time] => 2015-12-17T18:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 15:00:00
            [end_time] => 2015-12-17 18:00:00
        )

)

ERROR - 2015-12-17 21:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 21:40:01 --> MG start_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:40:01 --> MG end_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:40:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:40:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b32248b6-83d6-4c50-a4b1-0bad13856240
        )

)

ERROR - 2015-12-17 21:40:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => b32248b6-83d6-4c50-a4b1-0bad13856240
        )

)

ERROR - 2015-12-17 21:40:03 --> Response Code  : Normal
ERROR - 2015-12-17 21:40:03 --> cur_page
ERROR - 2015-12-17 21:40:03 --> 2
ERROR - 2015-12-17 21:40:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 21:40:03 --> MG Game play update result
ERROR - 2015-12-17 21:40:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450332000
    [update_end_time] => 1450342800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450356003
    [reg_date] => 1450356003
)

ERROR - 2015-12-17 21:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 21:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T15:00:00
            [end_time] => 2015-12-17T18:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 15:00:00
            [end_time] => 2015-12-17 18:00:00
        )

)

ERROR - 2015-12-17 21:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 21:50:01 --> MG start_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:50:01 --> MG end_date ===> 2015-12-17T15:00:00
ERROR - 2015-12-17 21:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 21:50:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d238cfd9-f468-408d-8ed7-8ee9808f0419
        )

)

ERROR - 2015-12-17 21:50:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => d238cfd9-f468-408d-8ed7-8ee9808f0419
        )

)

ERROR - 2015-12-17 21:50:04 --> Response Code  : Normal
ERROR - 2015-12-17 21:50:04 --> cur_page
ERROR - 2015-12-17 21:50:04 --> 2
ERROR - 2015-12-17 21:50:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 21:50:04 --> MG Game play update result
ERROR - 2015-12-17 21:50:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450332000
    [update_end_time] => 1450342800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450356604
    [reg_date] => 1450356604
)

ERROR - 2015-12-17 22:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 22:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T16:00:00
            [end_time] => 2015-12-17T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 16:00:00
            [end_time] => 2015-12-17 19:00:00
        )

)

ERROR - 2015-12-17 22:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 22:00:01 --> MG start_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:00:01 --> MG end_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 22:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d0f891f9-125f-4641-b8ef-23c911c214af
        )

)

ERROR - 2015-12-17 22:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => d0f891f9-125f-4641-b8ef-23c911c214af
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 22:00:03 --> Response Code  : NotInCache
ERROR - 2015-12-17 22:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d7063979-5e2d-43b1-8aad-3280707b08dc
        )

)

ERROR - 2015-12-17 22:00:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => d7063979-5e2d-43b1-8aad-3280707b08dc
        )

)

ERROR - 2015-12-17 22:00:07 --> Response Code  : Normal
ERROR - 2015-12-17 22:00:07 --> cur_page
ERROR - 2015-12-17 22:00:07 --> 2
ERROR - 2015-12-17 22:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 22:00:07 --> MG Game play update result
ERROR - 2015-12-17 22:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450335600
    [update_end_time] => 1450346400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450357207
    [reg_date] => 1450357207
)

ERROR - 2015-12-17 22:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 22:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T16:00:00
            [end_time] => 2015-12-17T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 16:00:00
            [end_time] => 2015-12-17 19:00:00
        )

)

ERROR - 2015-12-17 22:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 22:10:01 --> MG start_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:10:01 --> MG end_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 22:10:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5687ee44-f9be-4df7-8117-cfc5f600e7f4
        )

)

ERROR - 2015-12-17 22:10:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 5687ee44-f9be-4df7-8117-cfc5f600e7f4
        )

)

ERROR - 2015-12-17 22:10:04 --> Response Code  : Normal
ERROR - 2015-12-17 22:10:04 --> cur_page
ERROR - 2015-12-17 22:10:04 --> 2
ERROR - 2015-12-17 22:10:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 22:10:04 --> MG Game play update result
ERROR - 2015-12-17 22:10:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450335600
    [update_end_time] => 1450346400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450357804
    [reg_date] => 1450357804
)

ERROR - 2015-12-17 22:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 22:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T16:00:00
            [end_time] => 2015-12-17T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 16:00:00
            [end_time] => 2015-12-17 19:00:00
        )

)

ERROR - 2015-12-17 22:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 22:20:01 --> MG start_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:20:01 --> MG end_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:20:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 22:20:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => fb9f916a-400f-4a29-9f63-92afd39b2592
        )

)

ERROR - 2015-12-17 22:20:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => fb9f916a-400f-4a29-9f63-92afd39b2592
        )

)

ERROR - 2015-12-17 22:20:08 --> Response Code  : Normal
ERROR - 2015-12-17 22:20:08 --> cur_page
ERROR - 2015-12-17 22:20:08 --> 2
ERROR - 2015-12-17 22:20:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 22:20:08 --> MG Game play update result
ERROR - 2015-12-17 22:20:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450335600
    [update_end_time] => 1450346400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450358408
    [reg_date] => 1450358408
)

ERROR - 2015-12-17 22:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 22:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T16:00:00
            [end_time] => 2015-12-17T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 16:00:00
            [end_time] => 2015-12-17 19:00:00
        )

)

ERROR - 2015-12-17 22:30:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 22:30:01 --> MG start_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:30:01 --> MG end_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:30:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 22:30:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 309e8512-5c73-41b8-904c-83788683a959
        )

)

ERROR - 2015-12-17 22:30:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 309e8512-5c73-41b8-904c-83788683a959
        )

)

ERROR - 2015-12-17 22:30:05 --> Response Code  : Normal
ERROR - 2015-12-17 22:30:05 --> cur_page
ERROR - 2015-12-17 22:30:05 --> 2
ERROR - 2015-12-17 22:30:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 22:30:05 --> MG Game play update result
ERROR - 2015-12-17 22:30:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450335600
    [update_end_time] => 1450346400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450359005
    [reg_date] => 1450359005
)

ERROR - 2015-12-17 22:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 22:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T16:00:00
            [end_time] => 2015-12-17T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 16:00:00
            [end_time] => 2015-12-17 19:00:00
        )

)

ERROR - 2015-12-17 22:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 22:40:01 --> MG start_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:40:01 --> MG end_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 22:40:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 0998738f-2248-49d8-8e91-f3be0137ec13
        )

)

ERROR - 2015-12-17 22:40:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 0998738f-2248-49d8-8e91-f3be0137ec13
        )

)

ERROR - 2015-12-17 22:40:03 --> Response Code  : Normal
ERROR - 2015-12-17 22:40:03 --> cur_page
ERROR - 2015-12-17 22:40:03 --> 2
ERROR - 2015-12-17 22:40:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 22:40:03 --> MG Game play update result
ERROR - 2015-12-17 22:40:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450335600
    [update_end_time] => 1450346400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450359603
    [reg_date] => 1450359603
)

ERROR - 2015-12-17 22:49:12 --> 404 Page Not Found: Wp/index
ERROR - 2015-12-17 22:49:12 --> 404 Page Not Found: Wordpress/index
ERROR - 2015-12-17 22:49:13 --> 404 Page Not Found: Blog/index
ERROR - 2015-12-17 22:49:14 --> 404 Page Not Found: Blogs/index
ERROR - 2015-12-17 22:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 22:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T16:00:00
            [end_time] => 2015-12-17T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 16:00:00
            [end_time] => 2015-12-17 19:00:00
        )

)

ERROR - 2015-12-17 22:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 22:50:01 --> MG start_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:50:01 --> MG end_date ===> 2015-12-17T16:00:00
ERROR - 2015-12-17 22:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 22:50:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a374f6fb-a802-4cfd-bd37-71d52ba7d4fb
        )

)

ERROR - 2015-12-17 22:50:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => a374f6fb-a802-4cfd-bd37-71d52ba7d4fb
        )

)

ERROR - 2015-12-17 22:50:05 --> Response Code  : Normal
ERROR - 2015-12-17 22:50:05 --> cur_page
ERROR - 2015-12-17 22:50:05 --> 2
ERROR - 2015-12-17 22:50:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 22:50:05 --> MG Game play update result
ERROR - 2015-12-17 22:50:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450335600
    [update_end_time] => 1450346400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450360205
    [reg_date] => 1450360205
)

ERROR - 2015-12-17 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T17:00:00
            [end_time] => 2015-12-17T20:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 17:00:00
            [end_time] => 2015-12-17 20:00:00
        )

)

ERROR - 2015-12-17 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 23:00:01 --> MG start_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:00:01 --> MG end_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 23:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 684fcb92-404a-47e3-bb33-5e353ddde27a
        )

)

ERROR - 2015-12-17 23:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 684fcb92-404a-47e3-bb33-5e353ddde27a
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:00:03 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 0c05d62a-49c8-47ee-841a-dce1e4221878
        )

)

ERROR - 2015-12-17 23:00:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 0c05d62a-49c8-47ee-841a-dce1e4221878
        )

)

ERROR - 2015-12-17 23:00:05 --> Response Code  : Normal
ERROR - 2015-12-17 23:00:05 --> cur_page
ERROR - 2015-12-17 23:00:05 --> 2
ERROR - 2015-12-17 23:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 23:00:05 --> MG Game play update result
ERROR - 2015-12-17 23:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450339200
    [update_end_time] => 1450350000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450360805
    [reg_date] => 1450360805
)

ERROR - 2015-12-17 23:10:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 23:10:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T17:00:00
            [end_time] => 2015-12-17T20:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 17:00:00
            [end_time] => 2015-12-17 20:00:00
        )

)

ERROR - 2015-12-17 23:10:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 23:10:01 --> MG start_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:10:01 --> MG end_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:10:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 23:10:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => ddbf0deb-92c2-4089-ac2d-ff3e5feaf443
        )

)

ERROR - 2015-12-17 23:10:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => ddbf0deb-92c2-4089-ac2d-ff3e5feaf443
        )

)

ERROR - 2015-12-17 23:10:04 --> Response Code  : Normal
ERROR - 2015-12-17 23:10:04 --> cur_page
ERROR - 2015-12-17 23:10:04 --> 2
ERROR - 2015-12-17 23:10:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 23:10:04 --> MG Game play update result
ERROR - 2015-12-17 23:10:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450339200
    [update_end_time] => 1450350000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450361404
    [reg_date] => 1450361404
)

ERROR - 2015-12-17 23:20:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 23:20:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T17:00:00
            [end_time] => 2015-12-17T20:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 17:00:00
            [end_time] => 2015-12-17 20:00:00
        )

)

ERROR - 2015-12-17 23:20:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 23:20:01 --> MG start_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:20:01 --> MG end_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:20:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 23:20:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 7d625b14-0fe5-4e17-a854-117dafc1ad69
        )

)

ERROR - 2015-12-17 23:20:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 7d625b14-0fe5-4e17-a854-117dafc1ad69
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:20:07 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:20:12 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5e41f218-519d-4f89-b3fa-a6eb355fdaa8
        )

)

ERROR - 2015-12-17 23:20:12 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 5e41f218-519d-4f89-b3fa-a6eb355fdaa8
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:20:12 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:20:14 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 7f2058fe-9ca6-4dfc-b497-49c38da92b03
        )

)

ERROR - 2015-12-17 23:20:14 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 7f2058fe-9ca6-4dfc-b497-49c38da92b03
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:20:14 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:20:18 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => df54a58c-6c4e-42b8-b6d0-72b4b1496ea5
        )

)

ERROR - 2015-12-17 23:20:18 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => df54a58c-6c4e-42b8-b6d0-72b4b1496ea5
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:20:18 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:20:23 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 8e20340a-97e2-4a7a-b5aa-c55b5b2512ab
        )

)

ERROR - 2015-12-17 23:20:23 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 8e20340a-97e2-4a7a-b5aa-c55b5b2512ab
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:20:23 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:20:28 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5a482f7f-4d45-4114-9277-ace135f534b3
        )

)

ERROR - 2015-12-17 23:20:32 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 5a482f7f-4d45-4114-9277-ace135f534b3
        )

)

ERROR - 2015-12-17 23:20:32 --> Response Code  : Normal
ERROR - 2015-12-17 23:20:32 --> cur_page
ERROR - 2015-12-17 23:20:32 --> 2
ERROR - 2015-12-17 23:20:32 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 23:20:32 --> MG Game play update result
ERROR - 2015-12-17 23:20:32 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450339200
    [update_end_time] => 1450350000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450362032
    [reg_date] => 1450362032
)

ERROR - 2015-12-17 23:30:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 23:30:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T17:00:00
            [end_time] => 2015-12-17T20:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 17:00:00
            [end_time] => 2015-12-17 20:00:00
        )

)

ERROR - 2015-12-17 23:30:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 23:30:02 --> MG start_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:30:02 --> MG end_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:30:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 23:30:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => ae4a46be-d7cd-4b5f-a7a0-1f2e0dd7dd8d
        )

)

ERROR - 2015-12-17 23:30:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => ae4a46be-d7cd-4b5f-a7a0-1f2e0dd7dd8d
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:08 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:13 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 1e2a28b0-6488-45db-bc72-88e78754ea22
        )

)

ERROR - 2015-12-17 23:30:13 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 1e2a28b0-6488-45db-bc72-88e78754ea22
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:13 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:15 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 0ac3a1b7-e448-458d-a00f-9c3a4281b939
        )

)

ERROR - 2015-12-17 23:30:15 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 0ac3a1b7-e448-458d-a00f-9c3a4281b939
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:15 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:18 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f889b02e-8310-431e-869b-b63de3600e19
        )

)

ERROR - 2015-12-17 23:30:18 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => f889b02e-8310-431e-869b-b63de3600e19
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:18 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:24 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a18abda5-f6ad-4a83-9466-21941bafd47a
        )

)

ERROR - 2015-12-17 23:30:24 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => a18abda5-f6ad-4a83-9466-21941bafd47a
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:24 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:29 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5096dfb1-d932-4f95-924a-2e55e2942dd9
        )

)

ERROR - 2015-12-17 23:30:29 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 5096dfb1-d932-4f95-924a-2e55e2942dd9
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:29 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:31 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => af6dad65-0b17-4406-adb5-f684da75ec9a
        )

)

ERROR - 2015-12-17 23:30:31 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => af6dad65-0b17-4406-adb5-f684da75ec9a
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:31 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:32 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e000868d-c482-4a9f-9c64-37715e504ce5
        )

)

ERROR - 2015-12-17 23:30:32 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => e000868d-c482-4a9f-9c64-37715e504ce5
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:32 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:37 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 824f5cce-2889-4ea2-8684-10eb1e909bb7
        )

)

ERROR - 2015-12-17 23:30:37 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 824f5cce-2889-4ea2-8684-10eb1e909bb7
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:37 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:43 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 399eae0e-7882-42cc-908d-c6907726a2ff
        )

)

ERROR - 2015-12-17 23:30:43 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 399eae0e-7882-42cc-908d-c6907726a2ff
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-17 23:30:43 --> Response Code  : NotInCache
ERROR - 2015-12-17 23:30:45 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 2f84471f-3c92-4950-857c-53ff9e2a547d
        )

)

ERROR - 2015-12-17 23:30:47 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 2f84471f-3c92-4950-857c-53ff9e2a547d
        )

)

ERROR - 2015-12-17 23:30:47 --> Response Code  : Normal
ERROR - 2015-12-17 23:30:47 --> cur_page
ERROR - 2015-12-17 23:30:47 --> 2
ERROR - 2015-12-17 23:30:47 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 23:30:47 --> MG Game play update result
ERROR - 2015-12-17 23:30:47 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450339200
    [update_end_time] => 1450350000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450362647
    [reg_date] => 1450362647
)

ERROR - 2015-12-17 23:40:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 23:40:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T17:00:00
            [end_time] => 2015-12-17T20:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 17:00:00
            [end_time] => 2015-12-17 20:00:00
        )

)

ERROR - 2015-12-17 23:40:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 23:40:01 --> MG start_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:40:01 --> MG end_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:40:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 23:40:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 1bb1c50b-cfa4-4794-802b-75c636581634
        )

)

ERROR - 2015-12-17 23:40:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 1bb1c50b-cfa4-4794-802b-75c636581634
        )

)

ERROR - 2015-12-17 23:40:05 --> Response Code  : Normal
ERROR - 2015-12-17 23:40:05 --> cur_page
ERROR - 2015-12-17 23:40:05 --> 2
ERROR - 2015-12-17 23:40:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 23:40:05 --> MG Game play update result
ERROR - 2015-12-17 23:40:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450339200
    [update_end_time] => 1450350000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450363205
    [reg_date] => 1450363205
)

ERROR - 2015-12-17 23:40:07 --> 404 Page Not Found: Adminphp/index
ERROR - 2015-12-17 23:40:07 --> 404 Page Not Found: Administrator/index.php
ERROR - 2015-12-17 23:40:08 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2015-12-17 23:50:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-17 23:50:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-17T17:00:00
            [end_time] => 2015-12-17T20:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-17 17:00:00
            [end_time] => 2015-12-17 20:00:00
        )

)

ERROR - 2015-12-17 23:50:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-17 23:50:01 --> MG start_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:50:01 --> MG end_date ===> 2015-12-17T17:00:00
ERROR - 2015-12-17 23:50:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 23:50:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c56bbaef-8e1e-44a9-9740-f8d0054fc2a2
        )

)

ERROR - 2015-12-17 23:50:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => c56bbaef-8e1e-44a9-9740-f8d0054fc2a2
        )

)

ERROR - 2015-12-17 23:50:04 --> Response Code  : Normal
ERROR - 2015-12-17 23:50:04 --> cur_page
ERROR - 2015-12-17 23:50:04 --> 2
ERROR - 2015-12-17 23:50:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-17 23:50:04 --> MG Game play update result
ERROR - 2015-12-17 23:50:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450339200
    [update_end_time] => 1450350000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450363804
    [reg_date] => 1450363804
)

ERROR - 2015-12-17 23:54:57 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 70cb8e81-d575-4274-b884-a30038452985
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-17 23:54:57 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-17T14:54:57
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-17 23:54:58 --> PT_request info
ERROR - 2015-12-17 23:54:58 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTWORLDLY9999/with3RDPData/1
ERROR - 2015-12-17 23:54:58 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17894670","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptworldly9999@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"62EB339D710466A45E67877B9AE83A5CEF554C4B","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTWORLDLY9999","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449751123","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 20:38:43","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-17 23:54:58 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
