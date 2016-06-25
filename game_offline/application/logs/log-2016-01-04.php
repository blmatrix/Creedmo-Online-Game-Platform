<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-01-04 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-03T20:00:00
            [end_time] => 2016-01-03T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-03 20:00:00
            [end_time] => 2016-01-03 23:00:00
        )

)

ERROR - 2016-01-04 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 02:00:01 --> MG start_date ===> 2016-01-03T20:00:00
ERROR - 2016-01-04 02:00:01 --> MG end_date ===> 2016-01-03T20:00:00
ERROR - 2016-01-04 02:00:13 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c4b5f750-ff34-41cb-831e-ca2b4a4a4b8d
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 02:00:17 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => dcb67872-5d1b-4aeb-938a-b7d22832d1a2
        )

)

ERROR - 2016-01-04 02:00:23 --> MG Request GetReportResult ===> stdClass Object
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
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2016-01-03T20:00:00</Date><Label_Player>MXMGHD8393</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>5000.0000</BetAmount><PayoutAmount>10000.0000</PayoutAmount><GrossWin>-5000.0000</GrossWin><NumBets>1</NumBets><PayoutCount>1</PayoutCount><MaxBet>5000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>10000.0000</AveragePayoutAmount><AverageBetAmount>5000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2016-01-03T21:00:00</Date><Label_Player>MXMGHD8393</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>35000.0000</BetAmount><PayoutAmount>39000.0000</PayoutAmount><GrossWin>-4000.0000</GrossWin><NumBets>3</NumBets><PayoutCount>1</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>39000.0000</MaxPayoutAmount><AveragePayoutAmount>39000.0000</AveragePayoutAmount><AverageBetAmount>11666.6667</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2016-01-03T21:00:00</Date><Label_Player>MXMGHD8393</Label_Player><Currency>KRW</Currency><GameName>Untamed - Giant Panda</GameName><GameCategory>5 Reel Slot Games</GameCategory><Platforms>Flash</Platforms><ProductId>1</ProductId><BetAmount>165000.0000</BetAmount><PayoutAmount>42500.0000</PayoutAmount><GrossWin>122500.0000</GrossWin><NumBets>22</NumBets><PayoutCount>4</PayoutCount><MaxBet>7500.0000</MaxBet><MaxPayoutAmount>12500.0000</MaxPayoutAmount><AveragePayoutAmount>10625.0000</AveragePayoutAmount><AverageBetAmount>7500.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => dcb67872-5d1b-4aeb-938a-b7d22832d1a2
        )

)

ERROR - 2016-01-04 02:00:23 --> Response Code  : Normal
ERROR - 2016-01-04 02:00:23 --> cur_page
ERROR - 2016-01-04 02:00:23 --> 2
ERROR - 2016-01-04 02:00:23 --> MG Game fetch .....11111
ERROR - 2016-01-04 02:00:23 --> Array
(
    [0] => Array
        (
            [player_name] => MXMGHD8393
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1451818800
            [play_date_str] => 2016-01-03T20:00:00
            [game_play_count] => -1
            [bet_amount] => 5000
            [payout_amount] => 10000
            [win_amount] => 5000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 50
            [reg_date] => 1451840423
        )

    [1] => Array
        (
            [player_name] => MXMGHD8393
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1451822400
            [play_date_str] => 2016-01-03T21:00:00
            [game_play_count] => -1
            [bet_amount] => 35000
            [payout_amount] => 39000
            [win_amount] => 4000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 350
            [reg_date] => 1451840423
        )

    [2] => Array
        (
            [player_name] => MXMGHD8393
            [vender_code] => 2
            [game_type] => 5 Reel Slot Games
            [game_name] => Untamed - Giant Panda
            [play_date_int] => 1451822400
            [play_date_str] => 2016-01-03T21:00:00
            [game_play_count] => -1
            [bet_amount] => 165000
            [payout_amount] => 42500
            [win_amount] => -122500
            [distribute_type] => SLOTS
            [distribute_rate] => 0.01
            [acc_comp_point] => 1650
            [reg_date] => 1451840423
        )

)

ERROR - 2016-01-04 02:00:23 --> key ====> MXMGHD8393
ERROR - 2016-01-04 02:00:23 --> 변환 -------   HD8393
ERROR - 2016-01-04 02:00:23 --> Array
(
    [MXMGHD8393] => Array
        (
            [total_acc_comp_point] => 2050
            [user_no] => 687
            [user_id] => HD8393
        )

)

ERROR - 2016-01-04 02:00:23 --> arr_length ------> 1
ERROR - 2016-01-04 02:00:23 --> tmp_amount ------------------>2050
ERROR - 2016-01-04 02:00:23 --> tmp_comp ------------------>2050
ERROR - 2016-01-04 02:00:23 --> comp point update batch query
ERROR - 2016-01-04 02:00:23 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 687 THEN comp_point + 2050 ELSE comp_point END WHERE user_no in (687)
ERROR - 2016-01-04 02:00:23 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 02:00:23 --> MG Game play update result
ERROR - 2016-01-04 02:00:23 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451818800
    [update_end_time] => 1451826000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 3
    [complete_time] => 1451840423
    [reg_date] => 1451840423
)

ERROR - 2016-01-04 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-03T23:00:00
            [end_time] => 2016-01-04T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-03 23:00:00
            [end_time] => 2016-01-04 02:00:00
        )

)

ERROR - 2016-01-04 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 05:00:01 --> MG start_date ===> 2016-01-03T23:00:00
ERROR - 2016-01-04 05:00:01 --> MG end_date ===> 2016-01-03T23:00:00
ERROR - 2016-01-04 05:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 1af7c04b-d403-46af-a342-08af964b1eb5
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 05:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a5e723d8-c27f-44c8-9412-90a46308f97c
        )

)

ERROR - 2016-01-04 05:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => a5e723d8-c27f-44c8-9412-90a46308f97c
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-04 05:00:06 --> Response Code  : NotInCache
ERROR - 2016-01-04 05:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4b337f6b-4da3-4f50-b8e8-e81b0acba4a5
        )

)

ERROR - 2016-01-04 05:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 4b337f6b-4da3-4f50-b8e8-e81b0acba4a5
        )

)

ERROR - 2016-01-04 05:00:10 --> Response Code  : Normal
ERROR - 2016-01-04 05:00:10 --> cur_page
ERROR - 2016-01-04 05:00:10 --> 2
ERROR - 2016-01-04 05:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 05:00:10 --> MG Game play update result
ERROR - 2016-01-04 05:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451829600
    [update_end_time] => 1451836800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451851210
    [reg_date] => 1451851210
)

ERROR - 2016-01-04 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-04T02:00:00
            [end_time] => 2016-01-04T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-04 02:00:00
            [end_time] => 2016-01-04 05:00:00
        )

)

ERROR - 2016-01-04 08:00:03 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 08:00:03 --> MG start_date ===> 2016-01-04T02:00:00
ERROR - 2016-01-04 08:00:03 --> MG end_date ===> 2016-01-04T02:00:00
ERROR - 2016-01-04 08:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => fb0bc663-494e-4399-a68a-a692440b1ac5
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 08:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 51c88c6d-acf8-4f80-a213-544028897072
        )

)

ERROR - 2016-01-04 08:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 51c88c6d-acf8-4f80-a213-544028897072
        )

)

ERROR - 2016-01-04 08:00:05 --> Response Code  : Normal
ERROR - 2016-01-04 08:00:05 --> cur_page
ERROR - 2016-01-04 08:00:05 --> 2
ERROR - 2016-01-04 08:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 08:00:05 --> MG Game play update result
ERROR - 2016-01-04 08:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451840400
    [update_end_time] => 1451847600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451862005
    [reg_date] => 1451862005
)

ERROR - 2016-01-04 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-04T05:00:00
            [end_time] => 2016-01-04T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-04 05:00:00
            [end_time] => 2016-01-04 08:00:00
        )

)

ERROR - 2016-01-04 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 11:00:01 --> MG start_date ===> 2016-01-04T05:00:00
ERROR - 2016-01-04 11:00:01 --> MG end_date ===> 2016-01-04T05:00:00
ERROR - 2016-01-04 11:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 74ae6672-29c6-4446-96c0-d6d0cf1d2971
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 11:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 43ced80b-01e9-42e5-8a09-615c67078b7f
        )

)

ERROR - 2016-01-04 11:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 43ced80b-01e9-42e5-8a09-615c67078b7f
        )

)

ERROR - 2016-01-04 11:00:06 --> Response Code  : Normal
ERROR - 2016-01-04 11:00:06 --> cur_page
ERROR - 2016-01-04 11:00:06 --> 2
ERROR - 2016-01-04 11:00:06 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 11:00:06 --> MG Game play update result
ERROR - 2016-01-04 11:00:06 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451851200
    [update_end_time] => 1451858400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451872806
    [reg_date] => 1451872806
)

ERROR - 2016-01-04 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-04T08:00:00
            [end_time] => 2016-01-04T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-04 08:00:00
            [end_time] => 2016-01-04 11:00:00
        )

)

ERROR - 2016-01-04 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 14:00:01 --> MG start_date ===> 2016-01-04T08:00:00
ERROR - 2016-01-04 14:00:01 --> MG end_date ===> 2016-01-04T08:00:00
ERROR - 2016-01-04 14:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 9459a9d2-74da-4139-85fa-9ac4b141097c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 14:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f8f30a25-1fcd-424b-814d-21b180102983
        )

)

ERROR - 2016-01-04 14:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f8f30a25-1fcd-424b-814d-21b180102983
        )

)

ERROR - 2016-01-04 14:00:04 --> Response Code  : Normal
ERROR - 2016-01-04 14:00:04 --> cur_page
ERROR - 2016-01-04 14:00:04 --> 2
ERROR - 2016-01-04 14:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 14:00:04 --> MG Game play update result
ERROR - 2016-01-04 14:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451862000
    [update_end_time] => 1451869200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451883604
    [reg_date] => 1451883604
)

ERROR - 2016-01-04 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-04T11:00:00
            [end_time] => 2016-01-04T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-04 11:00:00
            [end_time] => 2016-01-04 14:00:00
        )

)

ERROR - 2016-01-04 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 17:00:01 --> MG start_date ===> 2016-01-04T11:00:00
ERROR - 2016-01-04 17:00:01 --> MG end_date ===> 2016-01-04T11:00:00
ERROR - 2016-01-04 17:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 82eca00a-b0e0-411f-aaa9-b2c280d90395
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 17:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c9b7189b-bac7-4885-a186-88c99015b9dd
        )

)

ERROR - 2016-01-04 17:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => c9b7189b-bac7-4885-a186-88c99015b9dd
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-04 17:00:04 --> Response Code  : NotInCache
ERROR - 2016-01-04 17:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4b64801f-7ebe-421e-87d0-d9c7cb7c9e54
        )

)

ERROR - 2016-01-04 17:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 4b64801f-7ebe-421e-87d0-d9c7cb7c9e54
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-04 17:00:06 --> Response Code  : NotInCache
ERROR - 2016-01-04 17:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 657be9aa-b5f8-40ac-af9a-5b4dfe9b53c0
        )

)

ERROR - 2016-01-04 17:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 657be9aa-b5f8-40ac-af9a-5b4dfe9b53c0
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-04 17:00:08 --> Response Code  : NotInCache
ERROR - 2016-01-04 17:00:10 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 80026b9f-c1fb-4c52-910b-7100fbe9cf1a
        )

)

ERROR - 2016-01-04 17:00:12 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 80026b9f-c1fb-4c52-910b-7100fbe9cf1a
        )

)

ERROR - 2016-01-04 17:00:12 --> Response Code  : Normal
ERROR - 2016-01-04 17:00:12 --> cur_page
ERROR - 2016-01-04 17:00:12 --> 2
ERROR - 2016-01-04 17:00:12 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 17:00:12 --> MG Game play update result
ERROR - 2016-01-04 17:00:12 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451872800
    [update_end_time] => 1451880000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451894412
    [reg_date] => 1451894412
)

ERROR - 2016-01-04 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-04T14:00:00
            [end_time] => 2016-01-04T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-04 14:00:00
            [end_time] => 2016-01-04 17:00:00
        )

)

ERROR - 2016-01-04 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 20:00:01 --> MG start_date ===> 2016-01-04T14:00:00
ERROR - 2016-01-04 20:00:01 --> MG end_date ===> 2016-01-04T14:00:00
ERROR - 2016-01-04 20:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 7e4c21c1-35eb-4b95-8257-fc514338fc61
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 20:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4de1deef-9e92-403c-8e05-dfe5aac5484a
        )

)

ERROR - 2016-01-04 20:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 4de1deef-9e92-403c-8e05-dfe5aac5484a
        )

)

ERROR - 2016-01-04 20:00:05 --> Response Code  : Normal
ERROR - 2016-01-04 20:00:05 --> cur_page
ERROR - 2016-01-04 20:00:05 --> 2
ERROR - 2016-01-04 20:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 20:00:05 --> MG Game play update result
ERROR - 2016-01-04 20:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451883600
    [update_end_time] => 1451890800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451905205
    [reg_date] => 1451905205
)

ERROR - 2016-01-04 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-04 23:00:01 --> [CRON2] 에이젼트 정산 작업의 배치를 시작합니다. ===========================================================>
ERROR - 2016-01-04 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-04T17:00:00
            [end_time] => 2016-01-04T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-04 17:00:00
            [end_time] => 2016-01-04 20:00:00
        )

)

ERROR - 2016-01-04 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-04 23:00:01 --> MG start_date ===> 2016-01-04T17:00:00
ERROR - 2016-01-04 23:00:01 --> MG end_date ===> 2016-01-04T17:00:00
ERROR - 2016-01-04 23:00:01 --> Severity: Notice --> Undefined variable: option /www/game_offline/application/controllers/batch/Batch_process.php 191
ERROR - 2016-01-04 23:00:01 --> 정산시간 ======>  
ERROR - 2016-01-04 23:00:01 --> Severity: Notice --> Undefined variable: agent_settle /www/game_offline/application/libraries/Affiliate_service.php 453
ERROR - 2016-01-04 23:00:01 --> Severity: Warning --> Invalid argument supplied for foreach() /www/game_offline/application/libraries/Affiliate_service.php 453
ERROR - 2016-01-04 23:00:01 --> Severity: Notice --> Undefined variable: deps1_apply_level /www/game_offline/application/libraries/Affiliate_service.php 476
ERROR - 2016-01-04 23:00:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /www/game_offline/application/controllers/batch/Batch_process.php:167) /www/game_offline/system/core/Common.php 566
ERROR - 2016-01-04 23:00:01 --> Severity: Error --> Cannot access empty property /www/game_offline/application/libraries/Affiliate_service.php 476
ERROR - 2016-01-04 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 7e4c21c1-35eb-4b95-8257-fc514338fc61
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-04 23:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => fd6a23cd-c438-4c36-8609-f053f3258396
        )

)

ERROR - 2016-01-04 23:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => fd6a23cd-c438-4c36-8609-f053f3258396
        )

)

ERROR - 2016-01-04 23:00:05 --> Response Code  : Normal
ERROR - 2016-01-04 23:00:05 --> cur_page
ERROR - 2016-01-04 23:00:05 --> 2
ERROR - 2016-01-04 23:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-04 23:00:05 --> MG Game play update result
ERROR - 2016-01-04 23:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451894400
    [update_end_time] => 1451901600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451916005
    [reg_date] => 1451916005
)

