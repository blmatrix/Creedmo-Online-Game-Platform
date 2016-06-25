<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-12-31 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-30T20:00:00
            [end_time] => 2015-12-30T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-30 20:00:00
            [end_time] => 2015-12-30 23:00:00
        )

)

ERROR - 2015-12-31 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 02:00:01 --> MG start_date ===> 2015-12-30T20:00:00
ERROR - 2015-12-31 02:00:01 --> MG end_date ===> 2015-12-30T20:00:00
ERROR - 2015-12-31 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 09b50d72-5948-43d1-867d-198743f6d281
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 02:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d4831221-cc15-4d94-b66f-7abaec285883
        )

)

ERROR - 2015-12-31 02:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d4831221-cc15-4d94-b66f-7abaec285883
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 02:00:03 --> Response Code  : NotInCache
ERROR - 2015-12-31 02:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f2b74c7b-48fe-44eb-b88f-30bd404bfcb4
        )

)

ERROR - 2015-12-31 02:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f2b74c7b-48fe-44eb-b88f-30bd404bfcb4
        )

)

ERROR - 2015-12-31 02:00:06 --> Response Code  : Normal
ERROR - 2015-12-31 02:00:06 --> cur_page
ERROR - 2015-12-31 02:00:06 --> 2
ERROR - 2015-12-31 02:00:06 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 02:00:06 --> MG Game play update result
ERROR - 2015-12-31 02:00:06 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451473200
    [update_end_time] => 1451480400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451494806
    [reg_date] => 1451494806
)

ERROR - 2015-12-31 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-30T23:00:00
            [end_time] => 2015-12-31T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-30 23:00:00
            [end_time] => 2015-12-31 02:00:00
        )

)

ERROR - 2015-12-31 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 05:00:01 --> MG start_date ===> 2015-12-30T23:00:00
ERROR - 2015-12-31 05:00:01 --> MG end_date ===> 2015-12-30T23:00:00
ERROR - 2015-12-31 05:00:05 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 0c5decb0-0fdb-45d5-9db8-d8153918f9ee
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 05:00:11 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6fa92a52-1d4a-47dd-b250-38453933689e
        )

)

ERROR - 2015-12-31 05:00:14 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 6fa92a52-1d4a-47dd-b250-38453933689e
        )

)

ERROR - 2015-12-31 05:00:14 --> Response Code  : Normal
ERROR - 2015-12-31 05:00:14 --> cur_page
ERROR - 2015-12-31 05:00:14 --> 2
ERROR - 2015-12-31 05:00:14 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 05:00:14 --> MG Game play update result
ERROR - 2015-12-31 05:00:14 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451484000
    [update_end_time] => 1451491200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451505614
    [reg_date] => 1451505614
)

ERROR - 2015-12-31 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-31T02:00:00
            [end_time] => 2015-12-31T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-31 02:00:00
            [end_time] => 2015-12-31 05:00:00
        )

)

ERROR - 2015-12-31 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 08:00:01 --> MG start_date ===> 2015-12-31T02:00:00
ERROR - 2015-12-31 08:00:01 --> MG end_date ===> 2015-12-31T02:00:00
ERROR - 2015-12-31 08:00:07 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 60047be1-e3a7-4264-ac4e-ace5b6ac0236
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 08:00:11 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 49f85290-8740-4d37-beb3-ce5322ea71a3
        )

)

ERROR - 2015-12-31 08:00:15 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 49f85290-8740-4d37-beb3-ce5322ea71a3
        )

)

ERROR - 2015-12-31 08:00:15 --> Response Code  : Normal
ERROR - 2015-12-31 08:00:15 --> cur_page
ERROR - 2015-12-31 08:00:15 --> 2
ERROR - 2015-12-31 08:00:15 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 08:00:15 --> MG Game play update result
ERROR - 2015-12-31 08:00:15 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451494800
    [update_end_time] => 1451502000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451516415
    [reg_date] => 1451516415
)

ERROR - 2015-12-31 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-31T05:00:00
            [end_time] => 2015-12-31T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-31 05:00:00
            [end_time] => 2015-12-31 08:00:00
        )

)

ERROR - 2015-12-31 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 11:00:01 --> MG start_date ===> 2015-12-31T05:00:00
ERROR - 2015-12-31 11:00:01 --> MG end_date ===> 2015-12-31T05:00:00
ERROR - 2015-12-31 11:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 1159a90e-478d-4ff0-9cd2-fcd7d901b178
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 11:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 07495ef9-d192-4815-bb50-5a1f95dc05e8
        )

)

ERROR - 2015-12-31 11:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 07495ef9-d192-4815-bb50-5a1f95dc05e8
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 11:00:05 --> Response Code  : NotInCache
ERROR - 2015-12-31 11:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a0ff51ac-ff9b-4b42-849b-b687fd5a9851
        )

)

ERROR - 2015-12-31 11:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => a0ff51ac-ff9b-4b42-849b-b687fd5a9851
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 11:00:08 --> Response Code  : NotInCache
ERROR - 2015-12-31 11:00:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f4267de6-d189-4723-9ac7-197ef90ee3d6
        )

)

ERROR - 2015-12-31 11:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f4267de6-d189-4723-9ac7-197ef90ee3d6
        )

)

ERROR - 2015-12-31 11:00:10 --> Response Code  : Normal
ERROR - 2015-12-31 11:00:10 --> cur_page
ERROR - 2015-12-31 11:00:10 --> 2
ERROR - 2015-12-31 11:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 11:00:10 --> MG Game play update result
ERROR - 2015-12-31 11:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451505600
    [update_end_time] => 1451512800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451527210
    [reg_date] => 1451527210
)

ERROR - 2015-12-31 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-31T08:00:00
            [end_time] => 2015-12-31T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-31 08:00:00
            [end_time] => 2015-12-31 11:00:00
        )

)

ERROR - 2015-12-31 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 14:00:01 --> MG start_date ===> 2015-12-31T08:00:00
ERROR - 2015-12-31 14:00:01 --> MG end_date ===> 2015-12-31T08:00:00
ERROR - 2015-12-31 14:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => f29ac9ce-128d-4410-94de-3f5e8b9808c1
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 14:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 1f825476-239d-4392-8dda-762c9f16b4cc
        )

)

ERROR - 2015-12-31 14:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 1f825476-239d-4392-8dda-762c9f16b4cc
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 14:00:06 --> Response Code  : NotInCache
ERROR - 2015-12-31 14:00:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 92b0478a-2415-4eee-b01f-edaea96cfbc3
        )

)

ERROR - 2015-12-31 14:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 92b0478a-2415-4eee-b01f-edaea96cfbc3
        )

)

ERROR - 2015-12-31 14:00:10 --> Response Code  : Normal
ERROR - 2015-12-31 14:00:10 --> cur_page
ERROR - 2015-12-31 14:00:10 --> 2
ERROR - 2015-12-31 14:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 14:00:10 --> MG Game play update result
ERROR - 2015-12-31 14:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451516400
    [update_end_time] => 1451523600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451538010
    [reg_date] => 1451538010
)

ERROR - 2015-12-31 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-31T11:00:00
            [end_time] => 2015-12-31T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-31 11:00:00
            [end_time] => 2015-12-31 14:00:00
        )

)

ERROR - 2015-12-31 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 17:00:01 --> MG start_date ===> 2015-12-31T11:00:00
ERROR - 2015-12-31 17:00:01 --> MG end_date ===> 2015-12-31T11:00:00
ERROR - 2015-12-31 17:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e718152a-89f9-4f37-8d81-0d4b07c499ff
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 17:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d6b51f22-13d7-459d-853b-2bc19688eff6
        )

)

ERROR - 2015-12-31 17:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d6b51f22-13d7-459d-853b-2bc19688eff6
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 17:00:05 --> Response Code  : NotInCache
ERROR - 2015-12-31 17:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 3bd4ebb4-69d1-4983-9a62-257fbb0068f1
        )

)

ERROR - 2015-12-31 17:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 3bd4ebb4-69d1-4983-9a62-257fbb0068f1
        )

)

ERROR - 2015-12-31 17:00:10 --> Response Code  : Normal
ERROR - 2015-12-31 17:00:10 --> cur_page
ERROR - 2015-12-31 17:00:10 --> 2
ERROR - 2015-12-31 17:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 17:00:10 --> MG Game play update result
ERROR - 2015-12-31 17:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451527200
    [update_end_time] => 1451534400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451548810
    [reg_date] => 1451548810
)

ERROR - 2015-12-31 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-31T14:00:00
            [end_time] => 2015-12-31T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-31 14:00:00
            [end_time] => 2015-12-31 17:00:00
        )

)

ERROR - 2015-12-31 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 20:00:01 --> MG start_date ===> 2015-12-31T14:00:00
ERROR - 2015-12-31 20:00:01 --> MG end_date ===> 2015-12-31T14:00:00
ERROR - 2015-12-31 20:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e718152a-89f9-4f37-8d81-0d4b07c499ff
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 20:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e6f53133-1886-4e27-8e18-7335b6ff38c9
        )

)

ERROR - 2015-12-31 20:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => e6f53133-1886-4e27-8e18-7335b6ff38c9
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 20:00:05 --> Response Code  : NotInCache
ERROR - 2015-12-31 20:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 56e8ff95-1601-4849-b72d-856fbe7f9113
        )

)

ERROR - 2015-12-31 20:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 56e8ff95-1601-4849-b72d-856fbe7f9113
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 20:00:08 --> Response Code  : NotInCache
ERROR - 2015-12-31 20:00:10 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f8199fa4-0589-46ed-bdc9-def1060060ee
        )

)

ERROR - 2015-12-31 20:00:10 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f8199fa4-0589-46ed-bdc9-def1060060ee
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 20:00:10 --> Response Code  : NotInCache
ERROR - 2015-12-31 20:00:12 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => fef20bc0-a257-4cf4-b4f2-9251550c03cc
        )

)

ERROR - 2015-12-31 20:00:13 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => fef20bc0-a257-4cf4-b4f2-9251550c03cc
        )

)

ERROR - 2015-12-31 20:00:13 --> Response Code  : Normal
ERROR - 2015-12-31 20:00:13 --> cur_page
ERROR - 2015-12-31 20:00:13 --> 2
ERROR - 2015-12-31 20:00:13 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 20:00:13 --> MG Game play update result
ERROR - 2015-12-31 20:00:13 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451538000
    [update_end_time] => 1451545200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1451559613
    [reg_date] => 1451559613
)

ERROR - 2015-12-31 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-31 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-31T17:00:00
            [end_time] => 2015-12-31T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-31 17:00:00
            [end_time] => 2015-12-31 20:00:00
        )

)

ERROR - 2015-12-31 23:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-31 23:00:02 --> MG start_date ===> 2015-12-31T17:00:00
ERROR - 2015-12-31 23:00:02 --> MG end_date ===> 2015-12-31T17:00:00
ERROR - 2015-12-31 23:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 743c5548-2da9-48e2-beeb-29541e1a329c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-31 23:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 403c8809-8686-4773-842c-acdd0b5eed76
        )

)

ERROR - 2015-12-31 23:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 403c8809-8686-4773-842c-acdd0b5eed76
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-31 23:00:06 --> Response Code  : NotInCache
ERROR - 2015-12-31 23:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5a9c59f5-0af1-49ff-8134-45ee59f758c0
        )

)

ERROR - 2015-12-31 23:00:11 --> MG Request GetReportResult ===> stdClass Object
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
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-31T17:00:00</Date><Label_Player>MXMGHD8393</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>455000.0000</BetAmount><PayoutAmount>293750.0000</PayoutAmount><GrossWin>161250.0000</GrossWin><NumBets>11</NumBets><PayoutCount>3</PayoutCount><MaxBet>100000.0000</MaxBet><MaxPayoutAmount>195000.0000</MaxPayoutAmount><AveragePayoutAmount>97916.6667</AveragePayoutAmount><AverageBetAmount>41363.6364</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 5a9c59f5-0af1-49ff-8134-45ee59f758c0
        )

)

ERROR - 2015-12-31 23:00:11 --> Response Code  : Normal
ERROR - 2015-12-31 23:00:11 --> cur_page
ERROR - 2015-12-31 23:00:11 --> 2
ERROR - 2015-12-31 23:00:11 --> MG Game fetch .....11111
ERROR - 2015-12-31 23:00:11 --> Array
(
    [0] => Array
        (
            [player_name] => MXMGHD8393
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond)
            [play_date_int] => 1451548800
            [play_date_str] => 2015-12-31T17:00:00
            [game_play_count] => -1
            [bet_amount] => 455000
            [payout_amount] => 293750
            [win_amount] => -161250
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 4550
            [reg_date] => 1451570411
        )

)

ERROR - 2015-12-31 23:00:11 --> key ====> MXMGHD8393
ERROR - 2015-12-31 23:00:11 --> 변환 -------   HD8393
ERROR - 2015-12-31 23:00:11 --> Array
(
    [MXMGHD8393] => Array
        (
            [total_acc_comp_point] => 4550
            [user_no] => 687
            [user_id] => HD8393
        )

)

ERROR - 2015-12-31 23:00:11 --> arr_length ------> 1
ERROR - 2015-12-31 23:00:11 --> tmp_amount ------------------>4550
ERROR - 2015-12-31 23:00:11 --> tmp_comp ------------------>4550
ERROR - 2015-12-31 23:00:11 --> comp point update batch query
ERROR - 2015-12-31 23:00:11 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 687 THEN comp_point + 4550 ELSE comp_point END WHERE user_no in (687)
ERROR - 2015-12-31 23:00:11 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-31 23:00:11 --> MG Game play update result
ERROR - 2015-12-31 23:00:11 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1451548800
    [update_end_time] => 1451556000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 1
    [complete_time] => 1451570411
    [reg_date] => 1451570411
)

