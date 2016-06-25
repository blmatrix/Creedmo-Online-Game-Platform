<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-12-29 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-28T20:00:00
            [end_time] => 2015-12-28T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-28 20:00:00
            [end_time] => 2015-12-28 23:00:00
        )

)

ERROR - 2015-12-29 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 02:00:01 --> MG start_date ===> 2015-12-28T20:00:00
ERROR - 2015-12-29 02:00:01 --> MG end_date ===> 2015-12-28T20:00:00
ERROR - 2015-12-29 02:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 549e301a-50c4-4249-964a-7ccba0a5a23a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 02:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 502078c9-4349-4574-9f26-9898c175f2df
        )

)

ERROR - 2015-12-29 02:00:05 --> MG Request GetReportResult ===> stdClass Object
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
                    [TotalRow] => 5
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-28T20:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1530000.0000</BetAmount><PayoutAmount>1753750.0000</PayoutAmount><GrossWin>-223750.0000</GrossWin><NumBets>37</NumBets><PayoutCount>24</PayoutCount><MaxBet>100000.0000</MaxBet><MaxPayoutAmount>200000.0000</MaxPayoutAmount><AveragePayoutAmount>73072.9167</AveragePayoutAmount><AverageBetAmount>41351.3514</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-28T20:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1175000.0000</BetAmount><PayoutAmount>1048750.0000</PayoutAmount><GrossWin>126250.0000</GrossWin><NumBets>21</NumBets><PayoutCount>10</PayoutCount><MaxBet>100000.0000</MaxBet><MaxPayoutAmount>200000.0000</MaxPayoutAmount><AveragePayoutAmount>104875.0000</AveragePayoutAmount><AverageBetAmount>55952.3810</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-28T21:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>830000.0000</BetAmount><PayoutAmount>952750.0000</PayoutAmount><GrossWin>-122750.0000</GrossWin><NumBets>25</NumBets><PayoutCount>14</PayoutCount><MaxBet>100000.0000</MaxBet><MaxPayoutAmount>200000.0000</MaxPayoutAmount><AveragePayoutAmount>68053.5714</AveragePayoutAmount><AverageBetAmount>33200.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table4" msdata:rowOrder="3"><Date>2015-12-28T21:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>662000.0000</BetAmount><PayoutAmount>621400.0000</PayoutAmount><GrossWin>40600.0000</GrossWin><NumBets>12</NumBets><PayoutCount>7</PayoutCount><MaxBet>100000.0000</MaxBet><MaxPayoutAmount>200000.0000</MaxPayoutAmount><AveragePayoutAmount>81900.0000</AveragePayoutAmount><AverageBetAmount>43666.6667</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table5" msdata:rowOrder="4"><Date>2015-12-28T22:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>51000.0000</BetAmount><PayoutAmount>11000.0000</PayoutAmount><GrossWin>40000.0000</GrossWin><NumBets>2</NumBets><PayoutCount>1</PayoutCount><MaxBet>40000.0000</MaxBet><MaxPayoutAmount>11000.0000</MaxPayoutAmount><AveragePayoutAmount>11000.0000</AveragePayoutAmount><AverageBetAmount>25500.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 502078c9-4349-4574-9f26-9898c175f2df
        )

)

ERROR - 2015-12-29 02:00:05 --> Response Code  : Normal
ERROR - 2015-12-29 02:00:05 --> cur_page
ERROR - 2015-12-29 02:00:05 --> 2
ERROR - 2015-12-29 02:00:05 --> MG Game fetch .....11111
ERROR - 2015-12-29 02:00:05 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1451300400
            [play_date_str] => 2015-12-28T20:00:00
            [game_play_count] => -1
            [bet_amount] => 1530000
            [payout_amount] => 1753750
            [win_amount] => 223750
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 15300
            [reg_date] => 1451322005
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1451300400
            [play_date_str] => 2015-12-28T20:00:00
            [game_play_count] => -1
            [bet_amount] => 1175000
            [payout_amount] => 1048750
            [win_amount] => -126250
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 11750
            [reg_date] => 1451322005
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1451304000
            [play_date_str] => 2015-12-28T21:00:00
            [game_play_count] => -1
            [bet_amount] => 830000
            [payout_amount] => 952750
            [win_amount] => 122750
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 8300
            [reg_date] => 1451322005
        )

    [3] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1451304000
            [play_date_str] => 2015-12-28T21:00:00
            [game_play_count] => -1
            [bet_amount] => 662000
            [payout_amount] => 621400
            [win_amount] => -40600
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 6620
            [reg_date] => 1451322005
        )

    [4] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1451307600
            [play_date_str] => 2015-12-28T22:00:00
            [game_play_count] => -1
            [bet_amount] => 51000
            [payout_amount] => 11000
            [win_amount] => -40000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 510
            [reg_date] => 1451322005
        )

)

ERROR - 2015-12-29 02:00:05 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-29 02:00:05 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-29 02:00:05 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 42480
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-29 02:00:05 --> arr_length ------> 1
ERROR - 2015-12-29 02:00:05 --> tmp_amount ------------------>42480
ERROR - 2015-12-29 02:00:05 --> tmp_comp ------------------>42480
ERROR - 2015-12-29 02:00:05 --> comp point update batch query
ERROR - 2015-12-29 02:00:05 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 42480 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-29 02:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 02:00:05 --> MG Game play update result
ERROR - 2015-12-29 02:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451300400
    [update_end_time] => 1451307600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 5
    [complete_time] => 1451322005
    [reg_date] => 1451322005
)

ERROR - 2015-12-29 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-28T23:00:00
            [end_time] => 2015-12-29T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-28 23:00:00
            [end_time] => 2015-12-29 02:00:00
        )

)

ERROR - 2015-12-29 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 05:00:01 --> MG start_date ===> 2015-12-28T23:00:00
ERROR - 2015-12-29 05:00:01 --> MG end_date ===> 2015-12-28T23:00:00
ERROR - 2015-12-29 05:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 9447654b-a4f1-40b3-95b9-c215a4a213be
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 05:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 3b4c65c9-5e69-4cb6-80c8-c600e1f5e126
        )

)

ERROR - 2015-12-29 05:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 3b4c65c9-5e69-4cb6-80c8-c600e1f5e126
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-29 05:00:04 --> Response Code  : NotInCache
ERROR - 2015-12-29 05:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d5e34ce4-0b59-450e-adb4-1b2cff466dbc
        )

)

ERROR - 2015-12-29 05:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d5e34ce4-0b59-450e-adb4-1b2cff466dbc
        )

)

ERROR - 2015-12-29 05:00:08 --> Response Code  : Normal
ERROR - 2015-12-29 05:00:08 --> cur_page
ERROR - 2015-12-29 05:00:08 --> 2
ERROR - 2015-12-29 05:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 05:00:08 --> MG Game play update result
ERROR - 2015-12-29 05:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451311200
    [update_end_time] => 1451318400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451332808
    [reg_date] => 1451332808
)

ERROR - 2015-12-29 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-29T02:00:00
            [end_time] => 2015-12-29T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-29 02:00:00
            [end_time] => 2015-12-29 05:00:00
        )

)

ERROR - 2015-12-29 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 08:00:01 --> MG start_date ===> 2015-12-29T02:00:00
ERROR - 2015-12-29 08:00:01 --> MG end_date ===> 2015-12-29T02:00:00
ERROR - 2015-12-29 08:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => d1385044-2d7d-410a-8f67-ce5fbbf96162
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 08:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 3968b5af-47c6-4289-a4d0-a7dae2e76476
        )

)

ERROR - 2015-12-29 08:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 3968b5af-47c6-4289-a4d0-a7dae2e76476
        )

)

ERROR - 2015-12-29 08:00:05 --> Response Code  : Normal
ERROR - 2015-12-29 08:00:05 --> cur_page
ERROR - 2015-12-29 08:00:05 --> 2
ERROR - 2015-12-29 08:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 08:00:05 --> MG Game play update result
ERROR - 2015-12-29 08:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451322000
    [update_end_time] => 1451329200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451343605
    [reg_date] => 1451343605
)

ERROR - 2015-12-29 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-29T05:00:00
            [end_time] => 2015-12-29T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-29 05:00:00
            [end_time] => 2015-12-29 08:00:00
        )

)

ERROR - 2015-12-29 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 11:00:01 --> MG start_date ===> 2015-12-29T05:00:00
ERROR - 2015-12-29 11:00:01 --> MG end_date ===> 2015-12-29T05:00:00
ERROR - 2015-12-29 11:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e348416c-7b22-4584-8e57-2428a525ffb6
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 11:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a71d32fa-b129-4dd0-b013-5e09d750aec8
        )

)

ERROR - 2015-12-29 11:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => a71d32fa-b129-4dd0-b013-5e09d750aec8
        )

)

ERROR - 2015-12-29 11:00:05 --> Response Code  : Normal
ERROR - 2015-12-29 11:00:05 --> cur_page
ERROR - 2015-12-29 11:00:05 --> 2
ERROR - 2015-12-29 11:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 11:00:05 --> MG Game play update result
ERROR - 2015-12-29 11:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451332800
    [update_end_time] => 1451340000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451354405
    [reg_date] => 1451354405
)

ERROR - 2015-12-29 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-29T08:00:00
            [end_time] => 2015-12-29T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-29 08:00:00
            [end_time] => 2015-12-29 11:00:00
        )

)

ERROR - 2015-12-29 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 14:00:01 --> MG start_date ===> 2015-12-29T08:00:00
ERROR - 2015-12-29 14:00:01 --> MG end_date ===> 2015-12-29T08:00:00
ERROR - 2015-12-29 14:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 3be958ec-4af2-48c8-8415-a10d8ed5be66
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 14:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5b98d351-0cb9-4a14-9a07-566bf2dc50ac
        )

)

ERROR - 2015-12-29 14:00:22 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5b98d351-0cb9-4a14-9a07-566bf2dc50ac
        )

)

ERROR - 2015-12-29 14:00:22 --> Response Code  : Normal
ERROR - 2015-12-29 14:00:22 --> cur_page
ERROR - 2015-12-29 14:00:22 --> 2
ERROR - 2015-12-29 14:00:22 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 14:00:22 --> MG Game play update result
ERROR - 2015-12-29 14:00:22 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451343600
    [update_end_time] => 1451350800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451365222
    [reg_date] => 1451365222
)

ERROR - 2015-12-29 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-29T11:00:00
            [end_time] => 2015-12-29T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-29 11:00:00
            [end_time] => 2015-12-29 14:00:00
        )

)

ERROR - 2015-12-29 17:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 17:00:02 --> MG start_date ===> 2015-12-29T11:00:00
ERROR - 2015-12-29 17:00:02 --> MG end_date ===> 2015-12-29T11:00:00
ERROR - 2015-12-29 17:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 12574b3d-20bd-49a0-9218-8971fe54c402
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 17:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c4fda3a9-cb1a-404a-88e5-7f35cd5ac1ec
        )

)

ERROR - 2015-12-29 17:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => c4fda3a9-cb1a-404a-88e5-7f35cd5ac1ec
        )

)

ERROR - 2015-12-29 17:00:04 --> Response Code  : Normal
ERROR - 2015-12-29 17:00:04 --> cur_page
ERROR - 2015-12-29 17:00:04 --> 2
ERROR - 2015-12-29 17:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 17:00:04 --> MG Game play update result
ERROR - 2015-12-29 17:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451354400
    [update_end_time] => 1451361600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451376004
    [reg_date] => 1451376004
)

ERROR - 2015-12-29 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-29T14:00:00
            [end_time] => 2015-12-29T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-29 14:00:00
            [end_time] => 2015-12-29 17:00:00
        )

)

ERROR - 2015-12-29 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 20:00:01 --> MG start_date ===> 2015-12-29T14:00:00
ERROR - 2015-12-29 20:00:01 --> MG end_date ===> 2015-12-29T14:00:00
ERROR - 2015-12-29 20:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 96be61ab-328e-45c2-95c7-155d764047ff
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 20:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => bacc8540-e4dc-467c-b59f-1ff24cd36d5e
        )

)

ERROR - 2015-12-29 20:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => bacc8540-e4dc-467c-b59f-1ff24cd36d5e
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-29 20:00:05 --> Response Code  : NotInCache
ERROR - 2015-12-29 20:00:10 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 8eb46a54-9cdf-4128-9d13-4b4ca531bc58
        )

)

ERROR - 2015-12-29 20:00:14 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 8eb46a54-9cdf-4128-9d13-4b4ca531bc58
        )

)

ERROR - 2015-12-29 20:00:14 --> Response Code  : Normal
ERROR - 2015-12-29 20:00:14 --> cur_page
ERROR - 2015-12-29 20:00:14 --> 2
ERROR - 2015-12-29 20:00:14 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 20:00:14 --> MG Game play update result
ERROR - 2015-12-29 20:00:14 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451365200
    [update_end_time] => 1451372400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451386814
    [reg_date] => 1451386814
)

ERROR - 2015-12-29 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-29 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-29T17:00:00
            [end_time] => 2015-12-29T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-29 17:00:00
            [end_time] => 2015-12-29 20:00:00
        )

)

ERROR - 2015-12-29 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-29 23:00:01 --> MG start_date ===> 2015-12-29T17:00:00
ERROR - 2015-12-29 23:00:01 --> MG end_date ===> 2015-12-29T17:00:00
ERROR - 2015-12-29 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 96be61ab-328e-45c2-95c7-155d764047ff
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-29 23:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 49d77ea4-29be-4394-9b2f-9aed5277570b
        )

)

ERROR - 2015-12-29 23:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 49d77ea4-29be-4394-9b2f-9aed5277570b
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-29 23:00:04 --> Response Code  : NotInCache
ERROR - 2015-12-29 23:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 3eee204e-b14a-4aff-a0d7-e936ac03ceda
        )

)

ERROR - 2015-12-29 23:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 3eee204e-b14a-4aff-a0d7-e936ac03ceda
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-29 23:00:07 --> Response Code  : NotInCache
ERROR - 2015-12-29 23:00:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5f128a2b-4975-40c7-9ff9-15ced31a00de
        )

)

ERROR - 2015-12-29 23:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5f128a2b-4975-40c7-9ff9-15ced31a00de
        )

)

ERROR - 2015-12-29 23:00:10 --> Response Code  : Normal
ERROR - 2015-12-29 23:00:10 --> cur_page
ERROR - 2015-12-29 23:00:10 --> 2
ERROR - 2015-12-29 23:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-29 23:00:10 --> MG Game play update result
ERROR - 2015-12-29 23:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451376000
    [update_end_time] => 1451383200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451397610
    [reg_date] => 1451397610
)

