<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-01-14 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-13T20:00:00
            [end_time] => 2016-01-13T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-13 20:00:00
            [end_time] => 2016-01-13 23:00:00
        )

)

ERROR - 2016-01-14 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 02:00:01 --> MG start_date ===> 2016-01-13T20:00:00
ERROR - 2016-01-14 02:00:01 --> MG end_date ===> 2016-01-13T20:00:00
ERROR - 2016-01-14 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 28824dfd-050c-4fb5-b25f-3bf518035525
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 02:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5f4e6cbc-9949-4baf-ac83-120a8df2e429
        )

)

ERROR - 2016-01-14 02:00:09 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5f4e6cbc-9949-4baf-ac83-120a8df2e429
        )

)

ERROR - 2016-01-14 02:00:09 --> Response Code  : Normal
ERROR - 2016-01-14 02:00:09 --> cur_page
ERROR - 2016-01-14 02:00:09 --> 2
ERROR - 2016-01-14 02:00:09 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 02:00:09 --> MG Game play update result
ERROR - 2016-01-14 02:00:09 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452682800
    [update_end_time] => 1452690000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452704409
    [reg_date] => 1452704409
)

ERROR - 2016-01-14 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-13T23:00:00
            [end_time] => 2016-01-14T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-13 23:00:00
            [end_time] => 2016-01-14 02:00:00
        )

)

ERROR - 2016-01-14 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 05:00:01 --> MG start_date ===> 2016-01-13T23:00:00
ERROR - 2016-01-14 05:00:01 --> MG end_date ===> 2016-01-13T23:00:00
ERROR - 2016-01-14 05:00:04 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 8805e3e9-a341-4a74-aae9-8117874b35bd
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 05:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f9f329d3-909b-4307-8258-566489f46bbd
        )

)

ERROR - 2016-01-14 05:00:06 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f9f329d3-909b-4307-8258-566489f46bbd
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-14 05:00:06 --> Response Code  : NotInCache
ERROR - 2016-01-14 05:00:11 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5ba997b8-b837-4a89-883d-85321051fb16
        )

)

ERROR - 2016-01-14 05:00:11 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5ba997b8-b837-4a89-883d-85321051fb16
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-14 05:00:11 --> Response Code  : NotInCache
ERROR - 2016-01-14 05:00:14 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5ce79eb7-13f6-4398-9cb7-4b8f9506f425
        )

)

ERROR - 2016-01-14 05:00:15 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5ce79eb7-13f6-4398-9cb7-4b8f9506f425
        )

)

ERROR - 2016-01-14 05:00:15 --> Response Code  : Normal
ERROR - 2016-01-14 05:00:15 --> cur_page
ERROR - 2016-01-14 05:00:15 --> 2
ERROR - 2016-01-14 05:00:15 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 05:00:15 --> MG Game play update result
ERROR - 2016-01-14 05:00:15 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452693600
    [update_end_time] => 1452700800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452715215
    [reg_date] => 1452715215
)

ERROR - 2016-01-14 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-14T02:00:00
            [end_time] => 2016-01-14T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-14 02:00:00
            [end_time] => 2016-01-14 05:00:00
        )

)

ERROR - 2016-01-14 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 08:00:01 --> MG start_date ===> 2016-01-14T02:00:00
ERROR - 2016-01-14 08:00:01 --> MG end_date ===> 2016-01-14T02:00:00
ERROR - 2016-01-14 08:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => abe369ec-8e6a-44ff-8f1a-c894bb2c4ef7
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 08:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 328bbff8-3f41-473c-b880-c9b8143878ed
        )

)

ERROR - 2016-01-14 08:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 328bbff8-3f41-473c-b880-c9b8143878ed
        )

)

ERROR - 2016-01-14 08:00:04 --> Response Code  : Normal
ERROR - 2016-01-14 08:00:04 --> cur_page
ERROR - 2016-01-14 08:00:04 --> 2
ERROR - 2016-01-14 08:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 08:00:04 --> MG Game play update result
ERROR - 2016-01-14 08:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452704400
    [update_end_time] => 1452711600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452726004
    [reg_date] => 1452726004
)

ERROR - 2016-01-14 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-14T05:00:00
            [end_time] => 2016-01-14T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-14 05:00:00
            [end_time] => 2016-01-14 08:00:00
        )

)

ERROR - 2016-01-14 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 11:00:01 --> MG start_date ===> 2016-01-14T05:00:00
ERROR - 2016-01-14 11:00:01 --> MG end_date ===> 2016-01-14T05:00:00
ERROR - 2016-01-14 11:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e1596115-02c1-4af7-af6e-a12f6b3db7d7
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 11:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 2b0c4c88-ea6a-4dfc-89eb-134428128551
        )

)

ERROR - 2016-01-14 11:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 2b0c4c88-ea6a-4dfc-89eb-134428128551
        )

)

ERROR - 2016-01-14 11:00:03 --> Response Code  : Normal
ERROR - 2016-01-14 11:00:03 --> cur_page
ERROR - 2016-01-14 11:00:03 --> 2
ERROR - 2016-01-14 11:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 11:00:03 --> MG Game play update result
ERROR - 2016-01-14 11:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452715200
    [update_end_time] => 1452722400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452736803
    [reg_date] => 1452736803
)

ERROR - 2016-01-14 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-14T08:00:00
            [end_time] => 2016-01-14T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-14 08:00:00
            [end_time] => 2016-01-14 11:00:00
        )

)

ERROR - 2016-01-14 14:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 14:00:02 --> MG start_date ===> 2016-01-14T08:00:00
ERROR - 2016-01-14 14:00:02 --> MG end_date ===> 2016-01-14T08:00:00
ERROR - 2016-01-14 14:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 314ec5c5-483e-46af-8946-086bba9e926a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 14:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 814f99cf-0b1d-43c2-b194-deb02dc2414d
        )

)

ERROR - 2016-01-14 14:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 814f99cf-0b1d-43c2-b194-deb02dc2414d
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-14 14:00:05 --> Response Code  : NotInCache
ERROR - 2016-01-14 14:00:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b96faf6e-7fb0-405b-8a60-fb204c964e32
        )

)

ERROR - 2016-01-14 14:00:12 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => b96faf6e-7fb0-405b-8a60-fb204c964e32
        )

)

ERROR - 2016-01-14 14:00:12 --> Response Code  : Normal
ERROR - 2016-01-14 14:00:12 --> cur_page
ERROR - 2016-01-14 14:00:12 --> 2
ERROR - 2016-01-14 14:00:12 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 14:00:12 --> MG Game play update result
ERROR - 2016-01-14 14:00:12 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452726000
    [update_end_time] => 1452733200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452747612
    [reg_date] => 1452747612
)

ERROR - 2016-01-14 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-14T11:00:00
            [end_time] => 2016-01-14T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-14 11:00:00
            [end_time] => 2016-01-14 14:00:00
        )

)

ERROR - 2016-01-14 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 17:00:01 --> MG start_date ===> 2016-01-14T11:00:00
ERROR - 2016-01-14 17:00:01 --> MG end_date ===> 2016-01-14T11:00:00
ERROR - 2016-01-14 17:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 645dd866-c211-4bad-a479-fa97942587ff
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 17:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6a56c350-ab7c-459b-853c-f218b93c55fc
        )

)

ERROR - 2016-01-14 17:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 6a56c350-ab7c-459b-853c-f218b93c55fc
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-14 17:00:05 --> Response Code  : NotInCache
ERROR - 2016-01-14 17:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6a48678a-21a3-47ee-bd6d-2a2890c75104
        )

)

ERROR - 2016-01-14 17:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 6a48678a-21a3-47ee-bd6d-2a2890c75104
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-14 17:00:07 --> Response Code  : NotInCache
ERROR - 2016-01-14 17:00:10 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d0293210-53f8-451a-a2ee-6b83f1bb919c
        )

)

ERROR - 2016-01-14 17:00:11 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d0293210-53f8-451a-a2ee-6b83f1bb919c
        )

)

ERROR - 2016-01-14 17:00:11 --> Response Code  : Normal
ERROR - 2016-01-14 17:00:11 --> cur_page
ERROR - 2016-01-14 17:00:11 --> 2
ERROR - 2016-01-14 17:00:11 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 17:00:11 --> MG Game play update result
ERROR - 2016-01-14 17:00:11 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452736800
    [update_end_time] => 1452744000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452758411
    [reg_date] => 1452758411
)

ERROR - 2016-01-14 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-14T14:00:00
            [end_time] => 2016-01-14T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-14 14:00:00
            [end_time] => 2016-01-14 17:00:00
        )

)

ERROR - 2016-01-14 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 20:00:01 --> MG start_date ===> 2016-01-14T14:00:00
ERROR - 2016-01-14 20:00:01 --> MG end_date ===> 2016-01-14T14:00:00
ERROR - 2016-01-14 20:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 64d328d9-11df-4926-958c-1e62da71a7b0
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 20:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 9f40678b-5811-4f4f-a514-88a02dd2347c
        )

)

ERROR - 2016-01-14 20:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 9f40678b-5811-4f4f-a514-88a02dd2347c
        )

)

ERROR - 2016-01-14 20:00:03 --> Response Code  : Normal
ERROR - 2016-01-14 20:00:03 --> cur_page
ERROR - 2016-01-14 20:00:03 --> 2
ERROR - 2016-01-14 20:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 20:00:03 --> MG Game play update result
ERROR - 2016-01-14 20:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452747600
    [update_end_time] => 1452754800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452769203
    [reg_date] => 1452769203
)

ERROR - 2016-01-14 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-14 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-14T17:00:00
            [end_time] => 2016-01-14T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-14 17:00:00
            [end_time] => 2016-01-14 20:00:00
        )

)

ERROR - 2016-01-14 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-14 23:00:01 --> MG start_date ===> 2016-01-14T17:00:00
ERROR - 2016-01-14 23:00:01 --> MG end_date ===> 2016-01-14T17:00:00
ERROR - 2016-01-14 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => cb140716-bae3-4a17-998c-c48ff4cb0c31
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-14 23:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a250b12f-7e26-4664-9dc7-9b1b14bd9fe9
        )

)

ERROR - 2016-01-14 23:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => a250b12f-7e26-4664-9dc7-9b1b14bd9fe9
        )

)

ERROR - 2016-01-14 23:00:04 --> Response Code  : Normal
ERROR - 2016-01-14 23:00:04 --> cur_page
ERROR - 2016-01-14 23:00:04 --> 2
ERROR - 2016-01-14 23:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-14 23:00:04 --> MG Game play update result
ERROR - 2016-01-14 23:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1452758400
    [update_end_time] => 1452765600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1452780004
    [reg_date] => 1452780004
)

