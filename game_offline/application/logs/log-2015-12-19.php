<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-12-19 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-18T20:00:00
            [end_time] => 2015-12-18T23:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-18 20:00:00
            [end_time] => 2015-12-18 23:00:00
        )

)

ERROR - 2015-12-19 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 02:00:01 --> MG start_date ===> 2015-12-18T20:00:00
ERROR - 2015-12-19 02:00:01 --> MG end_date ===> 2015-12-18T20:00:00
ERROR - 2015-12-19 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 9de4946d-6d6b-4355-9578-55245a6e729f
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 02:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => ae47af9a-d360-4891-b8ff-d5ab76c098fc
        )

)

ERROR - 2015-12-19 02:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => ae47af9a-d360-4891-b8ff-d5ab76c098fc
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-19 02:00:03 --> Response Code  : NotInCache
ERROR - 2015-12-19 02:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 606c4977-0ad3-4072-80da-6a9536f8c433
        )

)

ERROR - 2015-12-19 02:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 606c4977-0ad3-4072-80da-6a9536f8c433
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-19 02:00:05 --> Response Code  : NotInCache
ERROR - 2015-12-19 02:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e99eb613-c827-4bb3-8e65-33a1bfb20ea7
        )

)

ERROR - 2015-12-19 02:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => e99eb613-c827-4bb3-8e65-33a1bfb20ea7
        )

)

ERROR - 2015-12-19 02:00:08 --> Response Code  : Normal
ERROR - 2015-12-19 02:00:08 --> cur_page
ERROR - 2015-12-19 02:00:08 --> 2
ERROR - 2015-12-19 02:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 02:00:08 --> MG Game play update result
ERROR - 2015-12-19 02:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450436400
    [update_end_time] => 1450447200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450458008
    [reg_date] => 1450458008
)

ERROR - 2015-12-19 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-18T23:00:00
            [end_time] => 2015-12-19T02:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-18 23:00:00
            [end_time] => 2015-12-19 02:00:00
        )

)

ERROR - 2015-12-19 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 05:00:01 --> MG start_date ===> 2015-12-18T23:00:00
ERROR - 2015-12-19 05:00:01 --> MG end_date ===> 2015-12-18T23:00:00
ERROR - 2015-12-19 05:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 6b514286-f9d8-4036-9b53-55bc0b7aec01
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 05:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 50b7d47e-4eca-4bf5-8fcd-fd0f1e44d707
        )

)

ERROR - 2015-12-19 05:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 50b7d47e-4eca-4bf5-8fcd-fd0f1e44d707
        )

)

ERROR - 2015-12-19 05:00:03 --> Response Code  : Normal
ERROR - 2015-12-19 05:00:03 --> cur_page
ERROR - 2015-12-19 05:00:03 --> 2
ERROR - 2015-12-19 05:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 05:00:03 --> MG Game play update result
ERROR - 2015-12-19 05:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450447200
    [update_end_time] => 1450458000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450468803
    [reg_date] => 1450468803
)

ERROR - 2015-12-19 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-19T02:00:00
            [end_time] => 2015-12-19T05:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-19 02:00:00
            [end_time] => 2015-12-19 05:00:00
        )

)

ERROR - 2015-12-19 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 08:00:01 --> MG start_date ===> 2015-12-19T02:00:00
ERROR - 2015-12-19 08:00:01 --> MG end_date ===> 2015-12-19T02:00:00
ERROR - 2015-12-19 08:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => f493ca12-fa10-4350-b8e5-06cd5d12a362
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 08:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 7f5baa46-cacc-41ae-b7a3-9adb3838faad
        )

)

ERROR - 2015-12-19 08:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 7f5baa46-cacc-41ae-b7a3-9adb3838faad
        )

)

ERROR - 2015-12-19 08:00:04 --> Response Code  : Normal
ERROR - 2015-12-19 08:00:04 --> cur_page
ERROR - 2015-12-19 08:00:04 --> 2
ERROR - 2015-12-19 08:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 08:00:04 --> MG Game play update result
ERROR - 2015-12-19 08:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450458000
    [update_end_time] => 1450468800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450479604
    [reg_date] => 1450479604
)

ERROR - 2015-12-19 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-19T05:00:00
            [end_time] => 2015-12-19T08:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-19 05:00:00
            [end_time] => 2015-12-19 08:00:00
        )

)

ERROR - 2015-12-19 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 11:00:01 --> MG start_date ===> 2015-12-19T05:00:00
ERROR - 2015-12-19 11:00:01 --> MG end_date ===> 2015-12-19T05:00:00
ERROR - 2015-12-19 11:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 7c661d4e-31a0-4d87-b824-d85df9da51f4
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 11:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 327ed11a-4e14-4aff-ba9d-30cf6fdc6dec
        )

)

ERROR - 2015-12-19 11:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 327ed11a-4e14-4aff-ba9d-30cf6fdc6dec
        )

)

ERROR - 2015-12-19 11:00:07 --> Response Code  : Normal
ERROR - 2015-12-19 11:00:07 --> cur_page
ERROR - 2015-12-19 11:00:07 --> 2
ERROR - 2015-12-19 11:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 11:00:07 --> MG Game play update result
ERROR - 2015-12-19 11:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450468800
    [update_end_time] => 1450479600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450490407
    [reg_date] => 1450490407
)

ERROR - 2015-12-19 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-19T08:00:00
            [end_time] => 2015-12-19T11:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-19 08:00:00
            [end_time] => 2015-12-19 11:00:00
        )

)

ERROR - 2015-12-19 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 14:00:01 --> MG start_date ===> 2015-12-19T08:00:00
ERROR - 2015-12-19 14:00:01 --> MG end_date ===> 2015-12-19T08:00:00
ERROR - 2015-12-19 14:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => af8757cd-face-4a55-b7a2-5b6f3a3c31f2
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 14:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 310897f6-7cfb-46a7-863c-0bf9697ae888
        )

)

ERROR - 2015-12-19 14:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 310897f6-7cfb-46a7-863c-0bf9697ae888
        )

)

ERROR - 2015-12-19 14:00:05 --> Response Code  : Normal
ERROR - 2015-12-19 14:00:05 --> cur_page
ERROR - 2015-12-19 14:00:05 --> 2
ERROR - 2015-12-19 14:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 14:00:05 --> MG Game play update result
ERROR - 2015-12-19 14:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450479600
    [update_end_time] => 1450490400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450501205
    [reg_date] => 1450501205
)

ERROR - 2015-12-19 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-19T11:00:00
            [end_time] => 2015-12-19T14:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-19 11:00:00
            [end_time] => 2015-12-19 14:00:00
        )

)

ERROR - 2015-12-19 17:00:03 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 17:00:03 --> MG start_date ===> 2015-12-19T11:00:00
ERROR - 2015-12-19 17:00:03 --> MG end_date ===> 2015-12-19T11:00:00
ERROR - 2015-12-19 17:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 1d66602f-c327-4fc9-be78-b07072dd21df
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 17:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d49fe08d-f4b7-442d-bca1-0ce8cd41b6ca
        )

)

ERROR - 2015-12-19 17:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d49fe08d-f4b7-442d-bca1-0ce8cd41b6ca
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-19 17:00:05 --> Response Code  : NotInCache
ERROR - 2015-12-19 17:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b4a277f3-b7ad-47d3-8538-b61a9632f394
        )

)

ERROR - 2015-12-19 17:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => b4a277f3-b7ad-47d3-8538-b61a9632f394
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-19 17:00:08 --> Response Code  : NotInCache
ERROR - 2015-12-19 17:00:10 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 44a30954-3a9d-42b5-a5c3-9595a3b9a1d8
        )

)

ERROR - 2015-12-19 17:00:11 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 44a30954-3a9d-42b5-a5c3-9595a3b9a1d8
        )

)

ERROR - 2015-12-19 17:00:11 --> Response Code  : Normal
ERROR - 2015-12-19 17:00:11 --> cur_page
ERROR - 2015-12-19 17:00:11 --> 2
ERROR - 2015-12-19 17:00:11 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 17:00:11 --> MG Game play update result
ERROR - 2015-12-19 17:00:11 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450490400
    [update_end_time] => 1450501200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450512011
    [reg_date] => 1450512011
)

ERROR - 2015-12-19 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-19T14:00:00
            [end_time] => 2015-12-19T17:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-19 14:00:00
            [end_time] => 2015-12-19 17:00:00
        )

)

ERROR - 2015-12-19 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 20:00:01 --> MG start_date ===> 2015-12-19T14:00:00
ERROR - 2015-12-19 20:00:01 --> MG end_date ===> 2015-12-19T14:00:00
ERROR - 2015-12-19 20:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => d15feb4b-d131-4a7a-a95b-68934e0f779d
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 20:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4ca728bb-ccfb-45a9-a8f1-f31775f781fc
        )

)

ERROR - 2015-12-19 20:00:07 --> MG Request GetReportResult ===> stdClass Object
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
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-19T17:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>45000.0000</BetAmount><PayoutAmount>39750.0000</PayoutAmount><GrossWin>5250.0000</GrossWin><NumBets>9</NumBets><PayoutCount>4</PayoutCount><MaxBet>5000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>9937.5000</AveragePayoutAmount><AverageBetAmount>5000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 4ca728bb-ccfb-45a9-a8f1-f31775f781fc
        )

)

ERROR - 2015-12-19 20:00:07 --> Response Code  : Normal
ERROR - 2015-12-19 20:00:07 --> cur_page
ERROR - 2015-12-19 20:00:07 --> 2
ERROR - 2015-12-19 20:00:07 --> MG Game fetch .....11111
ERROR - 2015-12-19 20:00:07 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450512000
            [play_date_str] => 2015-12-19T17:00:00
            [game_play_count] => -1
            [bet_amount] => 45000
            [payout_amount] => 39750
            [win_amount] => -5250
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 450
            [reg_date] => 1450522807
        )

)

ERROR - 2015-12-19 20:00:07 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-19 20:00:07 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-19 20:00:07 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 450
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-19 20:00:07 --> arr_length ------> 1
ERROR - 2015-12-19 20:00:07 --> tmp_amount ------------------>450
ERROR - 2015-12-19 20:00:07 --> tmp_comp ------------------>450
ERROR - 2015-12-19 20:00:07 --> comp point update batch query
ERROR - 2015-12-19 20:00:07 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 450 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-19 20:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 20:00:07 --> MG Game play update result
ERROR - 2015-12-19 20:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450501200
    [update_end_time] => 1450512000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1450522807
    [reg_date] => 1450522807
)

ERROR - 2015-12-19 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-19 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-19T17:00:00
            [end_time] => 2015-12-19T20:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-19 17:00:00
            [end_time] => 2015-12-19 20:00:00
        )

)

ERROR - 2015-12-19 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-19 23:00:01 --> MG start_date ===> 2015-12-19T17:00:00
ERROR - 2015-12-19 23:00:01 --> MG end_date ===> 2015-12-19T17:00:00
ERROR - 2015-12-19 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => d15feb4b-d131-4a7a-a95b-68934e0f779d
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-19 23:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 59f0c34e-75c6-4cf9-a9e5-795d2f16984c
        )

)

ERROR - 2015-12-19 23:00:09 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 59f0c34e-75c6-4cf9-a9e5-795d2f16984c
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-19 23:00:09 --> Response Code  : NotInCache
ERROR - 2015-12-19 23:00:12 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 537e007e-c655-4eaf-85d7-8b8da5f6f883
        )

)

ERROR - 2015-12-19 23:00:13 --> MG Request GetReportResult ===> stdClass Object
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
                    [TotalRow] => 7
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-19T17:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>45000.0000</BetAmount><PayoutAmount>39750.0000</PayoutAmount><GrossWin>5250.0000</GrossWin><NumBets>9</NumBets><PayoutCount>4</PayoutCount><MaxBet>5000.0000</MaxBet><MaxPayoutAmount>10000.0000</MaxPayoutAmount><AveragePayoutAmount>9937.5000</AveragePayoutAmount><AverageBetAmount>5000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-19T18:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1051000.0000</BetAmount><PayoutAmount>1019200.0000</PayoutAmount><GrossWin>31800.0000</GrossWin><NumBets>104</NumBets><PayoutCount>57</PayoutCount><MaxBet>30000.0000</MaxBet><MaxPayoutAmount>60000.0000</MaxPayoutAmount><AveragePayoutAmount>17880.7018</AveragePayoutAmount><AverageBetAmount>10105.7692</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2015-12-19T19:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>522000.0000</BetAmount><PayoutAmount>607000.0000</PayoutAmount><GrossWin>-85000.0000</GrossWin><NumBets>48</NumBets><PayoutCount>28</PayoutCount><MaxBet>30000.0000</MaxBet><MaxPayoutAmount>58500.0000</MaxPayoutAmount><AveragePayoutAmount>21678.5714</AveragePayoutAmount><AverageBetAmount>10875.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table4" msdata:rowOrder="3"><Date>2015-12-19T19:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Casino Hold'em (Diamond)</GameName><GameCategory>Diamond LG Casino Hold'em</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>160000.0000</BetAmount><PayoutAmount>120000.0000</PayoutAmount><GrossWin>40000.0000</GrossWin><NumBets>7</NumBets><PayoutCount>2</PayoutCount><MaxBet>40000.0000</MaxBet><MaxPayoutAmount>80000.0000</MaxPayoutAmount><AveragePayoutAmount>30000.0000</AveragePayoutAmount><AverageBetAmount>19000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table5" msdata:rowOrder="4"><Date>2015-12-19T19:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>MP Blackjack (Diamond)</GameName><GameCategory>Diamond LG Blackjack</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>10000.0000</BetAmount><PayoutAmount>20000.0000</PayoutAmount><GrossWin>-10000.0000</GrossWin><NumBets>1</NumBets><PayoutCount>1</PayoutCount><MaxBet>10000.0000</MaxBet><MaxPayoutAmount>20000.0000</MaxPayoutAmount><AveragePayoutAmount>20000.0000</AveragePayoutAmount><AverageBetAmount>10000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table6" msdata:rowOrder="5"><Date>2015-12-19T20:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>500000.0000</BetAmount><PayoutAmount>601500.0000</PayoutAmount><GrossWin>-101500.0000</GrossWin><NumBets>39</NumBets><PayoutCount>23</PayoutCount><MaxBet>30000.0000</MaxBet><MaxPayoutAmount>60000.0000</MaxPayoutAmount><AveragePayoutAmount>26152.1739</AveragePayoutAmount><AverageBetAmount>12820.5128</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table7" msdata:rowOrder="6"><Date>2015-12-19T20:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Casino Hold'em (Diamond)</GameName><GameCategory>Diamond LG Casino Hold'em</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>70000.0000</BetAmount><PayoutAmount>40000.0000</PayoutAmount><GrossWin>30000.0000</GrossWin><NumBets>5</NumBets><PayoutCount>2</PayoutCount><MaxBet>20000.0000</MaxBet><MaxPayoutAmount>20000.0000</MaxPayoutAmount><AveragePayoutAmount>20000.0000</AveragePayoutAmount><AverageBetAmount>14000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 537e007e-c655-4eaf-85d7-8b8da5f6f883
        )

)

ERROR - 2015-12-19 23:00:13 --> Response Code  : Normal
ERROR - 2015-12-19 23:00:13 --> cur_page
ERROR - 2015-12-19 23:00:13 --> 2
ERROR - 2015-12-19 23:00:13 --> MG Game fetch .....11111
ERROR - 2015-12-19 23:00:13 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450512000
            [play_date_str] => 2015-12-19T17:00:00
            [game_play_count] => -1
            [bet_amount] => 45000
            [payout_amount] => 39750
            [win_amount] => -5250
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 450
            [reg_date] => 1450533613
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450515600
            [play_date_str] => 2015-12-19T18:00:00
            [game_play_count] => -1
            [bet_amount] => 1051000
            [payout_amount] => 1019200
            [win_amount] => -31800
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 10510
            [reg_date] => 1450533613
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450519200
            [play_date_str] => 2015-12-19T19:00:00
            [game_play_count] => -1
            [bet_amount] => 522000
            [payout_amount] => 607000
            [win_amount] => 85000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 5220
            [reg_date] => 1450533613
        )

    [3] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Casino Hold'em
            [game_name] => Casino Hold'em (Diamond)
            [play_date_int] => 1450519200
            [play_date_str] => 2015-12-19T19:00:00
            [game_play_count] => -1
            [bet_amount] => 160000
            [payout_amount] => 120000
            [win_amount] => -40000
            [distribute_type] => NON_SLOTS
            [distribute_rate] => 0.011
            [acc_comp_point] => 1760
            [reg_date] => 1450533613
        )

    [4] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Blackjack
            [game_name] => MP Blackjack (Diamond)
            [play_date_int] => 1450519200
            [play_date_str] => 2015-12-19T19:00:00
            [game_play_count] => -1
            [bet_amount] => 10000
            [payout_amount] => 20000
            [win_amount] => 10000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 100
            [reg_date] => 1450533613
        )

    [5] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1450522800
            [play_date_str] => 2015-12-19T20:00:00
            [game_play_count] => -1
            [bet_amount] => 500000
            [payout_amount] => 601500
            [win_amount] => 101500
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 5000
            [reg_date] => 1450533613
        )

    [6] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Casino Hold'em
            [game_name] => Casino Hold'em (Diamond)
            [play_date_int] => 1450522800
            [play_date_str] => 2015-12-19T20:00:00
            [game_play_count] => -1
            [bet_amount] => 70000
            [payout_amount] => 40000
            [win_amount] => -30000
            [distribute_type] => NON_SLOTS
            [distribute_rate] => 0.011
            [acc_comp_point] => 770
            [reg_date] => 1450533613
        )

)

ERROR - 2015-12-19 23:00:13 --> key ====> BFMGMAXLIVE4
ERROR - 2015-12-19 23:00:13 --> 변환 -------   MAXLIVE4
ERROR - 2015-12-19 23:00:13 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 23810
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2015-12-19 23:00:13 --> arr_length ------> 1
ERROR - 2015-12-19 23:00:13 --> tmp_amount ------------------>23810
ERROR - 2015-12-19 23:00:13 --> tmp_comp ------------------>23810
ERROR - 2015-12-19 23:00:13 --> comp point update batch query
ERROR - 2015-12-19 23:00:13 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 23810 ELSE comp_point END WHERE user_no in (681)
ERROR - 2015-12-19 23:00:13 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-19 23:00:13 --> MG Game play update result
ERROR - 2015-12-19 23:00:13 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450512000
    [update_end_time] => 1450522800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 7
    [complete_time] => 1450533613
    [reg_date] => 1450533613
)

