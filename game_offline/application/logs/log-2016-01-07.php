<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-01-07 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-06T20:00:00
            [end_time] => 2016-01-06T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-06 20:00:00
            [end_time] => 2016-01-06 23:00:00
        )

)

ERROR - 2016-01-07 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 02:00:01 --> MG start_date ===> 2016-01-06T20:00:00
ERROR - 2016-01-07 02:00:01 --> MG end_date ===> 2016-01-06T20:00:00
ERROR - 2016-01-07 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 589ffa92-56c8-4f4d-aca6-0928481d3ea9
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 02:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c1c1cbc5-933d-4c06-a714-5765ebf5f637
        )

)

ERROR - 2016-01-07 02:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => c1c1cbc5-933d-4c06-a714-5765ebf5f637
        )

)

ERROR - 2016-01-07 02:00:07 --> Response Code  : Normal
ERROR - 2016-01-07 02:00:07 --> cur_page
ERROR - 2016-01-07 02:00:07 --> 2
ERROR - 2016-01-07 02:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 02:00:07 --> MG Game play update result
ERROR - 2016-01-07 02:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452078000
    [update_end_time] => 1452085200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452099607
    [reg_date] => 1452099607
)

ERROR - 2016-01-07 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-06T23:00:00
            [end_time] => 2016-01-07T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-06 23:00:00
            [end_time] => 2016-01-07 02:00:00
        )

)

ERROR - 2016-01-07 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 05:00:01 --> MG start_date ===> 2016-01-06T23:00:00
ERROR - 2016-01-07 05:00:01 --> MG end_date ===> 2016-01-06T23:00:00
ERROR - 2016-01-07 05:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 871ab0f3-8850-4491-8e00-d6993d3ac1e3
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 05:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => dc652384-eb7c-4d1e-867d-cf78b2837d9d
        )

)

ERROR - 2016-01-07 05:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => dc652384-eb7c-4d1e-867d-cf78b2837d9d
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 05:00:08 --> Response Code  : NotInCache
ERROR - 2016-01-07 05:00:14 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 42f39fa1-27be-49c9-9e83-fd302f755467
        )

)

ERROR - 2016-01-07 05:00:15 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 42f39fa1-27be-49c9-9e83-fd302f755467
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 05:00:15 --> Response Code  : NotInCache
ERROR - 2016-01-07 05:00:17 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 05cbd92d-5ed1-49b9-b787-046610229c5c
        )

)

ERROR - 2016-01-07 05:00:19 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 05cbd92d-5ed1-49b9-b787-046610229c5c
        )

)

ERROR - 2016-01-07 05:00:19 --> Response Code  : Normal
ERROR - 2016-01-07 05:00:19 --> cur_page
ERROR - 2016-01-07 05:00:19 --> 2
ERROR - 2016-01-07 05:00:19 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 05:00:19 --> MG Game play update result
ERROR - 2016-01-07 05:00:19 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452088800
    [update_end_time] => 1452096000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452110419
    [reg_date] => 1452110419
)

ERROR - 2016-01-07 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-07T02:00:00
            [end_time] => 2016-01-07T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-07 02:00:00
            [end_time] => 2016-01-07 05:00:00
        )

)

ERROR - 2016-01-07 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 08:00:01 --> MG start_date ===> 2016-01-07T02:00:00
ERROR - 2016-01-07 08:00:01 --> MG end_date ===> 2016-01-07T02:00:00
ERROR - 2016-01-07 08:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 3e0b2ce4-4f56-4c55-89fe-028843b57c28
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 08:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 458b47fb-d581-4efb-b754-db7bf073eac6
        )

)

ERROR - 2016-01-07 08:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 458b47fb-d581-4efb-b754-db7bf073eac6
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 08:00:03 --> Response Code  : NotInCache
ERROR - 2016-01-07 08:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c55e7902-fdb7-4759-9041-786c65b8809c
        )

)

ERROR - 2016-01-07 08:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => c55e7902-fdb7-4759-9041-786c65b8809c
        )

)

ERROR - 2016-01-07 08:00:07 --> Response Code  : Normal
ERROR - 2016-01-07 08:00:07 --> cur_page
ERROR - 2016-01-07 08:00:07 --> 2
ERROR - 2016-01-07 08:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 08:00:07 --> MG Game play update result
ERROR - 2016-01-07 08:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452099600
    [update_end_time] => 1452106800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452121207
    [reg_date] => 1452121207
)

ERROR - 2016-01-07 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-07T05:00:00
            [end_time] => 2016-01-07T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-07 05:00:00
            [end_time] => 2016-01-07 08:00:00
        )

)

ERROR - 2016-01-07 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 11:00:01 --> MG start_date ===> 2016-01-07T05:00:00
ERROR - 2016-01-07 11:00:01 --> MG end_date ===> 2016-01-07T05:00:00
ERROR - 2016-01-07 11:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 10ad6cd5-f4c8-4c02-bd7a-b16a54471f5a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 11:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 52190787-2467-4b23-a6d3-b3acdbcdaa42
        )

)

ERROR - 2016-01-07 11:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 52190787-2467-4b23-a6d3-b3acdbcdaa42
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 11:00:04 --> Response Code  : NotInCache
ERROR - 2016-01-07 11:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b6ee338a-a6b7-4833-914b-3647e6ee9bbf
        )

)

ERROR - 2016-01-07 11:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => b6ee338a-a6b7-4833-914b-3647e6ee9bbf
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 11:00:07 --> Response Code  : NotInCache
ERROR - 2016-01-07 11:00:12 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c9b4db8b-90c0-4475-be4f-b69fc6a65944
        )

)

ERROR - 2016-01-07 11:00:12 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => c9b4db8b-90c0-4475-be4f-b69fc6a65944
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 11:00:12 --> Response Code  : NotInCache
ERROR - 2016-01-07 11:00:14 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => dcd60560-cd70-4724-987d-6f9cdd241dbc
        )

)

ERROR - 2016-01-07 11:00:14 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => dcd60560-cd70-4724-987d-6f9cdd241dbc
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 11:00:14 --> Response Code  : NotInCache
ERROR - 2016-01-07 11:00:16 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5606efaf-dd96-473f-becb-6b77a3afcf16
        )

)

ERROR - 2016-01-07 11:00:16 --> MG Request GetReportResult ===> stdClass Object
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
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2016-01-07T06:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>100000.0000</BetAmount><PayoutAmount>196000.0000</PayoutAmount><GrossWin>-96000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>4</PayoutCount><MaxBet>40000.0000</MaxBet><MaxPayoutAmount>78000.0000</MaxPayoutAmount><AveragePayoutAmount>49000.0000</AveragePayoutAmount><AverageBetAmount>25000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2016-01-07T06:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>1291000.0000</BetAmount><PayoutAmount>1004050.0000</PayoutAmount><GrossWin>286950.0000</GrossWin><NumBets>30</NumBets><PayoutCount>13</PayoutCount><MaxBet>100000.0000</MaxBet><MaxPayoutAmount>195000.0000</MaxPayoutAmount><AveragePayoutAmount>77234.6154</AveragePayoutAmount><AverageBetAmount>43033.3333</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table3" msdata:rowOrder="2"><Date>2016-01-07T06:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>MP Blackjack (Diamond)</GameName><GameCategory>Diamond LG Blackjack</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>75000.0000</BetAmount><PayoutAmount>100000.0000</PayoutAmount><GrossWin>-25000.0000</GrossWin><NumBets>2</NumBets><PayoutCount>1</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>100000.0000</MaxPayoutAmount><AveragePayoutAmount>100000.0000</AveragePayoutAmount><AverageBetAmount>37500.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table4" msdata:rowOrder="3"><Date>2016-01-07T07:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>690000.0000</BetAmount><PayoutAmount>873500.0000</PayoutAmount><GrossWin>-183500.0000</GrossWin><NumBets>28</NumBets><PayoutCount>17</PayoutCount><MaxBet>60000.0000</MaxBet><MaxPayoutAmount>120000.0000</MaxPayoutAmount><AveragePayoutAmount>51382.3529</AveragePayoutAmount><AverageBetAmount>24642.8571</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table5" msdata:rowOrder="4"><Date>2016-01-07T07:00:00</Date><Label_Player>BFMGMAXLIVE4</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>390000.0000</BetAmount><PayoutAmount>533500.0000</PayoutAmount><GrossWin>-143500.0000</GrossWin><NumBets>25</NumBets><PayoutCount>18</PayoutCount><MaxBet>40000.0000</MaxBet><MaxPayoutAmount>80000.0000</MaxPayoutAmount><AveragePayoutAmount>29638.8889</AveragePayoutAmount><AverageBetAmount>15600.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 5606efaf-dd96-473f-becb-6b77a3afcf16
        )

)

ERROR - 2016-01-07 11:00:16 --> Response Code  : Normal
ERROR - 2016-01-07 11:00:16 --> cur_page
ERROR - 2016-01-07 11:00:16 --> 2
ERROR - 2016-01-07 11:00:16 --> MG Game fetch .....11111
ERROR - 2016-01-07 11:00:16 --> Array
(
    [0] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1452114000
            [play_date_str] => 2016-01-07T06:00:00
            [game_play_count] => -1
            [bet_amount] => 100000
            [payout_amount] => 196000
            [win_amount] => 96000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 1000
            [reg_date] => 1452132016
        )

    [1] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1452114000
            [play_date_str] => 2016-01-07T06:00:00
            [game_play_count] => -1
            [bet_amount] => 1291000
            [payout_amount] => 1004050
            [win_amount] => -286950
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 12910
            [reg_date] => 1452132016
        )

    [2] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Blackjack
            [game_name] => MP Blackjack (Diamond)
            [play_date_int] => 1452114000
            [play_date_str] => 2016-01-07T06:00:00
            [game_play_count] => -1
            [bet_amount] => 75000
            [payout_amount] => 100000
            [win_amount] => 25000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 750
            [reg_date] => 1452132016
        )

    [3] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1452117600
            [play_date_str] => 2016-01-07T07:00:00
            [game_play_count] => -1
            [bet_amount] => 690000
            [payout_amount] => 873500
            [win_amount] => 183500
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 6900
            [reg_date] => 1452132016
        )

    [4] => Array
        (
            [player_name] => BFMGMAXLIVE4
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1452117600
            [play_date_str] => 2016-01-07T07:00:00
            [game_play_count] => -1
            [bet_amount] => 390000
            [payout_amount] => 533500
            [win_amount] => 143500
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 3900
            [reg_date] => 1452132016
        )

)

ERROR - 2016-01-07 11:00:16 --> key ====> BFMGMAXLIVE4
ERROR - 2016-01-07 11:00:16 --> 변환 -------   MAXLIVE4
ERROR - 2016-01-07 11:00:16 --> Array
(
    [BFMGMAXLIVE4] => Array
        (
            [total_acc_comp_point] => 25460
            [user_no] => 681
            [user_id] => MAXLIVE4
        )

)

ERROR - 2016-01-07 11:00:16 --> arr_length ------> 1
ERROR - 2016-01-07 11:00:16 --> tmp_amount ------------------>25460
ERROR - 2016-01-07 11:00:16 --> tmp_comp ------------------>25460
ERROR - 2016-01-07 11:00:16 --> comp point update batch query
ERROR - 2016-01-07 11:00:16 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 681 THEN comp_point + 25460 ELSE comp_point END WHERE user_no in (681)
ERROR - 2016-01-07 11:00:16 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 11:00:16 --> MG Game play update result
ERROR - 2016-01-07 11:00:16 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452110400
    [update_end_time] => 1452117600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 5
    [complete_time] => 1452132016
    [reg_date] => 1452132016
)

ERROR - 2016-01-07 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-07T08:00:00
            [end_time] => 2016-01-07T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-07 08:00:00
            [end_time] => 2016-01-07 11:00:00
        )

)

ERROR - 2016-01-07 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 14:00:01 --> MG start_date ===> 2016-01-07T08:00:00
ERROR - 2016-01-07 14:00:01 --> MG end_date ===> 2016-01-07T08:00:00
ERROR - 2016-01-07 14:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 850fd93f-6ed7-475d-841b-5345c687f912
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 14:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 458361aa-a0cd-4072-a235-1e0ebd510dc5
        )

)

ERROR - 2016-01-07 14:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 458361aa-a0cd-4072-a235-1e0ebd510dc5
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 14:00:05 --> Response Code  : NotInCache
ERROR - 2016-01-07 14:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 97e558d3-0a0e-4a54-84fa-0b590797eb65
        )

)

ERROR - 2016-01-07 14:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 97e558d3-0a0e-4a54-84fa-0b590797eb65
        )

)

ERROR - 2016-01-07 14:00:08 --> Response Code  : Normal
ERROR - 2016-01-07 14:00:08 --> cur_page
ERROR - 2016-01-07 14:00:08 --> 2
ERROR - 2016-01-07 14:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 14:00:08 --> MG Game play update result
ERROR - 2016-01-07 14:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452121200
    [update_end_time] => 1452128400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452142808
    [reg_date] => 1452142808
)

ERROR - 2016-01-07 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 17:00:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-07T11:00:00
            [end_time] => 2016-01-07T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-07 11:00:00
            [end_time] => 2016-01-07 14:00:00
        )

)

ERROR - 2016-01-07 17:00:03 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 17:00:03 --> MG start_date ===> 2016-01-07T11:00:00
ERROR - 2016-01-07 17:00:03 --> MG end_date ===> 2016-01-07T11:00:00
ERROR - 2016-01-07 17:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 0f2440b1-af64-4d0c-a031-7299ab871c61
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 17:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4588fdc2-ca7f-4042-afd1-af7d9815be37
        )

)

ERROR - 2016-01-07 17:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 4588fdc2-ca7f-4042-afd1-af7d9815be37
        )

)

ERROR - 2016-01-07 17:00:06 --> Response Code  : Normal
ERROR - 2016-01-07 17:00:06 --> cur_page
ERROR - 2016-01-07 17:00:06 --> 2
ERROR - 2016-01-07 17:00:06 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 17:00:06 --> MG Game play update result
ERROR - 2016-01-07 17:00:06 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452132000
    [update_end_time] => 1452139200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452153606
    [reg_date] => 1452153606
)

ERROR - 2016-01-07 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-07T14:00:00
            [end_time] => 2016-01-07T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-07 14:00:00
            [end_time] => 2016-01-07 17:00:00
        )

)

ERROR - 2016-01-07 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 20:00:01 --> MG start_date ===> 2016-01-07T14:00:00
ERROR - 2016-01-07 20:00:01 --> MG end_date ===> 2016-01-07T14:00:00
ERROR - 2016-01-07 20:00:05 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 66228d48-b6f6-4a04-a91a-e19feda20a39
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 20:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 8d751e97-a799-41ac-aad3-e49e68af3ce3
        )

)

ERROR - 2016-01-07 20:00:09 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 8d751e97-a799-41ac-aad3-e49e68af3ce3
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 20:00:09 --> Response Code  : NotInCache
ERROR - 2016-01-07 20:00:11 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c621dded-f113-49e9-992c-f7e647128d49
        )

)

ERROR - 2016-01-07 20:00:12 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => c621dded-f113-49e9-992c-f7e647128d49
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-07 20:00:12 --> Response Code  : NotInCache
ERROR - 2016-01-07 20:00:14 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d7f486cf-db20-49ef-98e8-210315c115cb
        )

)

ERROR - 2016-01-07 20:00:16 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d7f486cf-db20-49ef-98e8-210315c115cb
        )

)

ERROR - 2016-01-07 20:00:16 --> Response Code  : Normal
ERROR - 2016-01-07 20:00:16 --> cur_page
ERROR - 2016-01-07 20:00:16 --> 2
ERROR - 2016-01-07 20:00:16 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 20:00:16 --> MG Game play update result
ERROR - 2016-01-07 20:00:16 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452142800
    [update_end_time] => 1452150000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452164416
    [reg_date] => 1452164416
)

ERROR - 2016-01-07 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-07 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-07T17:00:00
            [end_time] => 2016-01-07T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-07 17:00:00
            [end_time] => 2016-01-07 20:00:00
        )

)

ERROR - 2016-01-07 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-07 23:00:01 --> MG start_date ===> 2016-01-07T17:00:00
ERROR - 2016-01-07 23:00:01 --> MG end_date ===> 2016-01-07T17:00:00
ERROR - 2016-01-07 23:00:04 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 05be842a-9c7d-45b8-ad64-b6f020211545
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-07 23:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 97181a26-8f40-40dc-aacd-1c98d99f2a1b
        )

)

ERROR - 2016-01-07 23:00:11 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 97181a26-8f40-40dc-aacd-1c98d99f2a1b
        )

)

ERROR - 2016-01-07 23:00:11 --> Response Code  : Normal
ERROR - 2016-01-07 23:00:11 --> cur_page
ERROR - 2016-01-07 23:00:11 --> 2
ERROR - 2016-01-07 23:00:11 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-07 23:00:11 --> MG Game play update result
ERROR - 2016-01-07 23:00:11 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452153600
    [update_end_time] => 1452160800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452175211
    [reg_date] => 1452175211
)

