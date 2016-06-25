<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-02-03 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-02T20:00:00
            [end_time] => 2016-02-02T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-02 20:00:00
            [end_time] => 2016-02-02 23:00:00
        )

)

ERROR - 2016-02-03 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-03 02:00:01 --> MG start_date ===> 2016-02-02T20:00:00
ERROR - 2016-02-03 02:00:01 --> MG end_date ===> 2016-02-02T20:00:00
ERROR - 2016-02-03 02:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => f3cd6132-79be-4cac-b241-2d0c2cae8e6f
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-03 02:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 8e152aed-b881-49d8-8e08-246e24129a9f
        )

)

ERROR - 2016-02-03 02:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 8e152aed-b881-49d8-8e08-246e24129a9f
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-02-03 02:00:03 --> Response Code  : NotInCache
ERROR - 2016-02-03 02:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 51549fce-0351-4930-bac3-d9a69280dbdc
        )

)

ERROR - 2016-02-03 02:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 51549fce-0351-4930-bac3-d9a69280dbdc
        )

)

ERROR - 2016-02-03 02:00:10 --> Response Code  : Normal
ERROR - 2016-02-03 02:00:10 --> cur_page
ERROR - 2016-02-03 02:00:10 --> 2
ERROR - 2016-02-03 02:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-03 02:00:10 --> MG Game play update result
ERROR - 2016-02-03 02:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454410800
    [update_end_time] => 1454418000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454432410
    [reg_date] => 1454432410
)

ERROR - 2016-02-03 05:00:02 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 05:00:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-02T23:00:00
            [end_time] => 2016-02-03T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-02 23:00:00
            [end_time] => 2016-02-03 02:00:00
        )

)

ERROR - 2016-02-03 05:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-03 05:00:02 --> MG start_date ===> 2016-02-02T23:00:00
ERROR - 2016-02-03 05:00:02 --> MG end_date ===> 2016-02-02T23:00:00
ERROR - 2016-02-03 05:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b74b1b4a-ecbe-47ea-ab06-73fb352c9e22
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-03 05:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 8c2a19ec-c4a7-45e6-994d-919979b128b9
        )

)

ERROR - 2016-02-03 05:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 8c2a19ec-c4a7-45e6-994d-919979b128b9
        )

)

ERROR - 2016-02-03 05:00:05 --> Response Code  : Normal
ERROR - 2016-02-03 05:00:05 --> cur_page
ERROR - 2016-02-03 05:00:05 --> 2
ERROR - 2016-02-03 05:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-03 05:00:05 --> MG Game play update result
ERROR - 2016-02-03 05:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454421600
    [update_end_time] => 1454428800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454443205
    [reg_date] => 1454443205
)

ERROR - 2016-02-03 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-03T02:00:00
            [end_time] => 2016-02-03T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-03 02:00:00
            [end_time] => 2016-02-03 05:00:00
        )

)

ERROR - 2016-02-03 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-03 08:00:01 --> MG start_date ===> 2016-02-03T02:00:00
ERROR - 2016-02-03 08:00:01 --> MG end_date ===> 2016-02-03T02:00:00
ERROR - 2016-02-03 08:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => da8cfde4-7887-472a-a3f8-2c573c25385c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-03 08:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 19815669-0d26-4043-819c-e0ed0ba45dad
        )

)

ERROR - 2016-02-03 08:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 19815669-0d26-4043-819c-e0ed0ba45dad
        )

)

ERROR - 2016-02-03 08:00:03 --> Response Code  : Normal
ERROR - 2016-02-03 08:00:03 --> cur_page
ERROR - 2016-02-03 08:00:03 --> 2
ERROR - 2016-02-03 08:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-03 08:00:03 --> MG Game play update result
ERROR - 2016-02-03 08:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454432400
    [update_end_time] => 1454439600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454454003
    [reg_date] => 1454454003
)

ERROR - 2016-02-03 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-03T05:00:00
            [end_time] => 2016-02-03T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-03 05:00:00
            [end_time] => 2016-02-03 08:00:00
        )

)

ERROR - 2016-02-03 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-03 11:00:01 --> MG start_date ===> 2016-02-03T05:00:00
ERROR - 2016-02-03 11:00:01 --> MG end_date ===> 2016-02-03T05:00:00
ERROR - 2016-02-03 11:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 7ca62cbe-e3c3-46b8-bf40-9bea770706c9
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-03 11:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => ba464df7-b405-4fd7-9514-c2a9be2b4377
        )

)

ERROR - 2016-02-03 11:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => ba464df7-b405-4fd7-9514-c2a9be2b4377
        )

)

ERROR - 2016-02-03 11:00:03 --> Response Code  : Normal
ERROR - 2016-02-03 11:00:03 --> cur_page
ERROR - 2016-02-03 11:00:03 --> 2
ERROR - 2016-02-03 11:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-03 11:00:03 --> MG Game play update result
ERROR - 2016-02-03 11:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454443200
    [update_end_time] => 1454450400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454464803
    [reg_date] => 1454464803
)

ERROR - 2016-02-03 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-03T08:00:00
            [end_time] => 2016-02-03T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-03 08:00:00
            [end_time] => 2016-02-03 11:00:00
        )

)

ERROR - 2016-02-03 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-03 14:00:01 --> MG start_date ===> 2016-02-03T08:00:00
ERROR - 2016-02-03 14:00:01 --> MG end_date ===> 2016-02-03T08:00:00
ERROR - 2016-02-03 14:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c5203d9f-5258-474c-8ca8-94e875e87a39
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-03 14:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => dab4b6ea-0d10-4557-89d0-7f99c4fb89ab
        )

)

ERROR - 2016-02-03 14:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => dab4b6ea-0d10-4557-89d0-7f99c4fb89ab
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-02-03 14:00:03 --> Response Code  : NotInCache
ERROR - 2016-02-03 14:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 21702b15-07b6-466e-8858-f2d1fd86a1f2
        )

)

ERROR - 2016-02-03 14:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 21702b15-07b6-466e-8858-f2d1fd86a1f2
        )

)

ERROR - 2016-02-03 14:00:07 --> Response Code  : Normal
ERROR - 2016-02-03 14:00:07 --> cur_page
ERROR - 2016-02-03 14:00:07 --> 2
ERROR - 2016-02-03 14:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-03 14:00:07 --> MG Game play update result
ERROR - 2016-02-03 14:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454454000
    [update_end_time] => 1454461200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454475607
    [reg_date] => 1454475607
)

ERROR - 2016-02-03 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-03T11:00:00
            [end_time] => 2016-02-03T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-03 11:00:00
            [end_time] => 2016-02-03 14:00:00
        )

)

ERROR - 2016-02-03 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-03 17:00:01 --> MG start_date ===> 2016-02-03T11:00:00
ERROR - 2016-02-03 17:00:01 --> MG end_date ===> 2016-02-03T11:00:00
ERROR - 2016-02-03 17:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => f7a50461-24e2-4bf5-bb37-6808c88d1f80
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-03 17:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 701f907f-7dee-42a4-9ed0-3fd3dbe41869
        )

)

ERROR - 2016-02-03 17:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 701f907f-7dee-42a4-9ed0-3fd3dbe41869
        )

)

ERROR - 2016-02-03 17:00:03 --> Response Code  : Normal
ERROR - 2016-02-03 17:00:03 --> cur_page
ERROR - 2016-02-03 17:00:03 --> 2
ERROR - 2016-02-03 17:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-03 17:00:03 --> MG Game play update result
ERROR - 2016-02-03 17:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454464800
    [update_end_time] => 1454472000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454486403
    [reg_date] => 1454486403
)

ERROR - 2016-02-03 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-03T14:00:00
            [end_time] => 2016-02-03T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-03 14:00:00
            [end_time] => 2016-02-03 17:00:00
        )

)

ERROR - 2016-02-03 20:01:01 --> Severity: Warning --> SoapClient::SoapClient(https://entservices.totalegame.net?wsdl): failed to open stream: Connection timed out /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-02-03 20:01:01 --> Severity: Warning --> SoapClient::SoapClient(): I/O warning : failed to load external entity "https://entservices.totalegame.net?wsdl" /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-02-03 20:01:01 --> Severity: error --> Exception: SOAP-ERROR: Parsing WSDL: Couldn't load from 'https://entservices.totalegame.net?wsdl' : failed to load external entity "https://entservices.totalegame.net?wsdl"
 /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-02-03 20:01:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /www/game_offline/application/controllers/batch/Batch_process.php:27) /www/game_offline/system/core/Common.php 566
ERROR - 2016-02-03 20:01:01 --> Severity: Error --> SOAP-ERROR: Parsing WSDL: Couldn't load from 'https://entservices.totalegame.net?wsdl' : failed to load external entity "https://entservices.totalegame.net?wsdl"
 /www/game_offline/application/libraries/Microgame.php 32
ERROR - 2016-02-03 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-03 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-03T17:00:00
            [end_time] => 2016-02-03T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-03 17:00:00
            [end_time] => 2016-02-03 20:00:00
        )

)

ERROR - 2016-02-03 23:00:03 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-03 23:00:03 --> MG start_date ===> 2016-02-03T17:00:00
ERROR - 2016-02-03 23:00:03 --> MG end_date ===> 2016-02-03T17:00:00
ERROR - 2016-02-03 23:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => d4395bd0-8b2c-46aa-8d8d-ceefadb3dc60
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-03 23:00:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5f894e13-38fa-44b5-820e-4292b812dda7
        )

)

ERROR - 2016-02-03 23:00:09 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5f894e13-38fa-44b5-820e-4292b812dda7
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-02-03 23:00:09 --> Response Code  : NotInCache
ERROR - 2016-02-03 23:00:14 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e0cac5de-e985-47a8-a453-ac5ff7525312
        )

)

ERROR - 2016-02-03 23:00:14 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => e0cac5de-e985-47a8-a453-ac5ff7525312
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-02-03 23:00:14 --> Response Code  : NotInCache
ERROR - 2016-02-03 23:00:17 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 7f4e4f89-d653-46ef-a2e3-023617931ca0
        )

)

ERROR - 2016-02-03 23:00:17 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 7f4e4f89-d653-46ef-a2e3-023617931ca0
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-02-03 23:00:17 --> Response Code  : NotInCache
ERROR - 2016-02-03 23:00:19 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 3f3d77cb-bdd6-40c9-8180-1e4b42217045
        )

)

ERROR - 2016-02-03 23:00:21 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 3f3d77cb-bdd6-40c9-8180-1e4b42217045
        )

)

ERROR - 2016-02-03 23:00:21 --> Response Code  : Normal
ERROR - 2016-02-03 23:00:21 --> cur_page
ERROR - 2016-02-03 23:00:21 --> 2
ERROR - 2016-02-03 23:00:21 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-03 23:00:21 --> MG Game play update result
ERROR - 2016-02-03 23:00:21 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454486400
    [update_end_time] => 1454493600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454508021
    [reg_date] => 1454508021
)

